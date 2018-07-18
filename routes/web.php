<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Category;
use App\Product;
use App\Delivery;
use App\Order;
use Illuminate\Http\Request;

Route::get('/', function () {
    $categories = Category::all();

    return view('main', [
        'categories' => $categories
    ]);
});
Route::get('/products/{category}', function ($category) {
    $categories = Category::all();
    $products = Product::where('category_id', $category)->get();

    return view('products', [
        'products' => $products,
        'categories' => $categories,
        'active' => $category
    ]);
});
Route::get('/curr_prod/{prod_code}', function($prod_code) {
    $product = Product::where('vendor_code', $prod_code)->first();
    $deliveries = Delivery::all();

    return view('curr_prod', [
        'product' => $product,
        'deliveries' => $deliveries
    ]);
});
Route::post('validate_order/', function (Request $request) {
    $delivery = Delivery::where('id', $request->delivery)->first();

    return view('validate_order', [
        'curr_order' => $request,
        'del' => $delivery
    ]);
});
Route::post('/order', function(Request $request) {
    $order = new Order;
    $order->product_code = $request->product_code;
    $order->delivery_id = $request->delivery_id;
    $order->product_count = $request->product_count;
    $order->user_phone = $request->phone;
    $order->price = $request->price;
    $order->save();

    return redirect('curr_prod/'.$order->product_code)->with('status', 'Ваш заказ успешно отправлен.');
});
Route::get('/admin', function() {
    $orders = Order::orderBy('created_at', 'asc')->get();
    foreach($orders as $order) {
        $name = Delivery::where('id', $order->delivery_id)->value('name');
        $order->del_name = $name;
    }

    return view('admin', [
        'orders' => $orders
    ]);
});
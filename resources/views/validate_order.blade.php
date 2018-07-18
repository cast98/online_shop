@extends ('layouts.welcome')
@section ('content')
      <div class="card-deck mb-3 text-center">
        <div class="card" style="width: 24rem; margin-bottom: 2rem;">
        <h5 class="card-title" style="margin-top: 2rem;">Подтверждение заказа</h5>
            <p class="card-text"><img class="card-img-top" style="width: 20%;" src="{{ asset('images/products/'.$curr_order->prod_view) }}" alt="Card image cap"></p>
            <div class="card-body">
            <form action="{{ url('/order') }}" method="POST">
                {{ csrf_field() }}
                <p class="card-text">Наименование: {{ $curr_order->prod_name }}</p>
                <p class="card-text">Цена: {{ $curr_order->product_price }} грн.</p>
                <p class="card-text">Кол-во товара: {{ $curr_order->count }} шт.</p>
                <p class="card-text">Способ доставки: {{ $del->name }}</p>
                <p class="card-text">Цена доставки: {{ $del->price }} грн.</p>
                <p class="card-text"><b>Общая стоимость: {{ $price = $curr_order->product_price * $curr_order->count +  $del->price }} грн.</b></p>
                <input type="hidden" name="product_code" value="{{ $curr_order->product_code }}">
                <input type="hidden" name="price" value="{{ $price }}">
                <input type="hidden" name="delivery_id" value="{{ $del->id }}">
                <input type="hidden" name="product_count" value="{{ $curr_order->count }}">
                <p class="card-text">Для подтверждения заказа, пожалуйста, введите в поле ниже ваш номер телефона</p>
                <div class="form-group">
                <input type="text" name="phone" class="form-control" style="width: 20%; margin-bottom: 2rem; margin-left: auto; margin-right: auto;">
                <button type="submit" class="btn btn-primary">Подтвердить</button>
                </div>
            </form>
            </div>
        </div>
      </div>
@endsection
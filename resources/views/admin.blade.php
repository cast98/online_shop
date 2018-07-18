@extends ('layouts.welcome')
@section ('content')
<h2>Заказы</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Код товара</th>
                  <th>Кол-во товара</th>
                  <th>Доставка</th>
                  <th>Стоимость</th>
                  <th>Телефон</th>
                </tr>
              </thead>
              <tbody>
              @if($orders->count() > 0)
              @foreach($orders as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->product_code }}</td>
                  <td>{{ $order->product_count }}</td>
                  <td>{{ $order->del_name }}</td>
                  <td>{{ $order->price }}</td>
                  <td>{{ $order->user_phone }}</td>
                </tr>
              @endforeach
              @endif
              </tbody>
            </table>
          </div>
@endsection
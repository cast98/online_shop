@extends ('layouts.welcome')
@section ('content')
    @if (session('status'))
      <div class="alert alert-success" style="text-align: center">
       {{ session('status') }}
     </div>
     @endif
    <div class="container-fluid">
     <div class="row">
       <div class="col-5" style="border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); margin-right: 15px; margin-left:50px;">
       <img style="width: 90%;" src="{{ asset('images/products/'.$product->view) }}" alt="Card image cap">
       </div>
       <div class="col-6" style="border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);">
         <div class="row" style="text-align: center;">
         <p class="col-12 h1">{{ $product->name }}</p>
         </div>
         <div class="row">
         <p class="col-12">Код: {{ $product->vendor_code }}</p>
         </div>
         <div class="row" style="border-bottom: 1px solid #e5e5e5;">
         <p class="col-12 h1"> {{ $product->price }} грн.</p>
         </div>
         <div class="row" style="text-align: center;">
         @foreach($deliveries as $delivery)
         @if($delivery->id == $deliveries->count()) <div class="col" style="margin-top: 50px;"> 
         @else <div class="col" style="margin-top: 50px; border-right: 1px solid #e5e5e5;">
         @endif
         <p class="h3"> {{ $delivery->name }} </p>
         <p class="h5"> {{ $delivery->price }} грн. </p>
         </div>
         @endforeach
         </div>
         <div class="row" style="text-align: center; margin-top: 50px;">
         @if($product->count == 0)
         <p class="col-12"><a href="#" data-target="#exampleModal" data-toggle="modal" class="btn btn-primary" disabled>Купить</a></p>
         @else <p class="col-12"><a href="#" data-target="#exampleModal" data-toggle="modal" class="btn btn-primary">Купить</a></p>
         @endif
         </div>
         </div>
     </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Оформить заказ - {{ $product->name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/validate_order') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="message-text" class="col-form-label">Кол-во товара:</label>
            <input type="number" name="count" class="form-control" min="0" max="{{ $product->count }}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Способ доставки:</label>
            <select class="form-control" name="delivery">
            @foreach($deliveries as $delivery)
            <option value="{{ $delivery->id }}"> {{ $delivery->name }}</option>
            @endforeach
            </select>
          </div>
          <input type="hidden" name="product_code" value="{{ $product->vendor_code }}">
          <input type="hidden" name="product_price" value="{{ $product->price }}">
          <input type="hidden" name="prod_view" value="{{ $product->view }}">
          <input type="hidden" name="prod_name" value="{{ $product->name }}">

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Отправить</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection
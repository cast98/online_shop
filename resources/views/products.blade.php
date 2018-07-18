@extends ('layouts.welcome')
@section ('content')
    <div class="row">
    <div class="list-group">
        @if (count($categories) > 0)
        @foreach ($categories as $category)
        @if ($category->id == $active) 
        <a href="{{ url('products/'.$category->id)}}" class="list-group-item list-group-item-action active">{{ $category->name }}</a>
        @else <a href="{{ url('products/'.$category->id)}}" class="list-group-item list-group-item-action">{{ $category->name }}</a>
        @endif
        @endforeach
        @endif                              
    </div>
      <div class="card-deck text-center col-md-9 ml-sm-auto col-lg-10 px-4">
        @if (count($products) > 0)
        @foreach ($products as $product)
        <div class="card" style="margin-bottom: 2rem;">
            <img class="card-img-top" src="{{ asset('images/products/'.$product->view) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><b>Цена: </b>{{ $product->price }}</p>
                @if($product->count > 0)
                <p class="card-text" style="color: green;">В наличии</p>
                @else
                <p class="card-text" style="color: red;">Нет в наличии</p>
                @endif
                <a href="{{ url('curr_prod/'.$product->vendor_code) }}" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
        @endforeach
        @endif
      </div>
      </div>
@endsection
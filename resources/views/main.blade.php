@extends ('layouts.welcome')
@section ('content')
<div class="card-deck mb-3 text-center">
        @if (count($categories) > 0)
        @foreach ($categories as $category)
        <div class="card" style="width: 18rem; margin-bottom: 2rem;">
            <img class="card-img-top" src="{{ asset('images/'.$category->view) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">{{ $category->description }}</p>
                <a href="{{ url('products/'.$category->id)}}" class="btn btn-primary">Показать товары</a>
            </div>
        </div>
        @endforeach
        @endif
</div>
@endsection
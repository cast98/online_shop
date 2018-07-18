<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a class="navbar-brand" href="{{ url('/') }}">Интернет-магазин</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Акции</a>
        <a class="p-2 text-dark" href="#">Клиентам</a>
        <a class="p-2 text-dark" href="#">Поддержка</a>
        <a class="p-2 text-dark" href="#">Сервисы</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Подписаться на акции</a>
    </div>
    
    <div class="container-fluid">
      @yield('content')

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Магазин</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">О компании</a></li>
              <li><a class="text-muted" href="#">Контакты</a></li>
              <li><a class="text-muted" href="#">Пресс-центр</a></li>
              <li><a class="text-muted" href="#">Работа в компании</a></li>
              <li><a class="text-muted" href="#">Партнерам</a></li>
              <li><a class="text-muted" href="#">Политика</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Услуги и сервисы</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Страховка</a></li>
              <li><a class="text-muted" href="#">Дополнительная гарантия</a></li>
              <li><a class="text-muted" href="#">Кредит и оплата</a></li>
              <li><a class="text-muted" href="#">Бонусная программа</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Помощь покупателю</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Найти заказ</a></li>
              <li><a class="text-muted" href="#">Возврат и обмен товара</a></li>
              <li><a class="text-muted" href="#">FAQ</a></li>
              <li><a class="text-muted" href="#">Условия доставки</a></li>
            </ul>
          </div>
      </div>
      </footer>
    </div>
    <!-- Bootstrap шаблон... -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    </body>
</html>
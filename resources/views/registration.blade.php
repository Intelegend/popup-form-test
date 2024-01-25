<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
  <div id="closeablecard" class="card card-hover-shadow mt-4">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
  </svg>
    <div class="card-body mt-n5">
      <h5 class="card-title"> <b>Заполните заявку на консультацию</b></h5>
      <h6><p class="card-text">
        Наш специалист свяжется с вами
    </br></h6>
      <div class="container">
  <div class="row g-2">
    <div class="col-4">
      <div class="border-0 bg-light">
      <input type="text" class="form-control bg-light text-dark w-20" placeholder="Имя" aria-label="Имя" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col-4">
      <div class="border-0 bg-light">
      <input type="text" class="form-control bg-light text-dark" placeholder="Телефон" aria-label="Телефон" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col-6">
      <div class="border-0 bg-light">
      <input type="text" class="form-control bg-light text-dark" placeholder="Напишите какой у Вас вопрос?" aria-label="Напишите какой у Вас вопрос?" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
  </div>
  </div>
      </p>
      <div class="col-4">
      <button type="button" class="btn btn-dark">Получить консультацию</button>
      <h7><p><a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Я соглашаюсь </a></p>на обработку персональных данных</h7>
    </div>

    </div>
      </p>
    </div>
  </div>
</div>
</body>
</html>
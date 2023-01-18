<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="yandex-verification" content="fa7ce23d341bc584" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet"> 
  <link rel="shortcut icon" href="{{ asset('img') }}/logo.png" type="image/x-icon">

  <title>Ассоциация развития потребительской кредитной кооперации</title>
	<meta name="description" content="Ассоциация развития потребительской кредитной кооперации">
	<meta name="keywords" content="Ассоциация развития потребительской кредитной кооперации, аркпк, arkpk">
  <meta name="author" content="Ассоциация развития потребительской кредитной кооперации">

  <meta property="og:site_name" content="Ассоциация развития потребительской кредитной кооперации">
    <meta property="og:url" content="http://bfpnd.ru/">
    <meta property="og:locale" content="ru">
    <meta property="og:title" content="Ассоциация развития потребительской кредитной кооперации">
    <meta property="og:description" content="Помощь людям различного возраста с заболеваниями, грозящими потерей жизни.">

    {{-- <meta property="og:image" content="https://www.reg-nko.ru/contents/team.jpg"> --}}
    {{-- <meta property="og:image:width" content="1200"> --}}
    {{-- <meta property="og:image:height" content="630"> --}}

  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <title>Ассоциация развития потребительской кредитной кооперации</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header-logo">
            <a href="/"><img src="{{ asset('img') }}/header/main-logo.png" alt="Логотип" style="width: 100%;"></a>
          </div>
          <!-- /.header-logo -->
        </div>
        <!-- /.col-3 -->
        <div class="col-lg-9 col-xl-9 text-left text-lg-right">
          <p class="d-lg-none menu-button"><span></span></p>
          <div class="header-menu">
            <ul>
              <li><a class="link-close" href="/">Главная</a></li>
              <li><a class="link-close" href="/children">Дети</a></li>
              <li><a class="btn btn-site" href="/supports">Помочь</a></li>
              <li><a class="link-close" href="/about">О нас</a></li>
              <li><a class="link-close" href="/documents">Документы</a></li>
              <li><a class="link-close" href="/contacts">Контакты</a></li>
            </ul>
          </div>
          <!-- /.header-menu -->
        </div>
        <!-- /.col-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.comtainer -->
  </header>
  <!-- /.header -->

@yield('content')

@include('components.footer')
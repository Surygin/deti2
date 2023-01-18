@extends('main')

{{-- @php
  $psw = Hash::make('1234');
  dd($psw);
@endphp --}}

@section('content')

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="hero-title">
            <h1>Помоги спасти жизнь!</h1>
          </div>
          <!-- /.hero-title -->
          <div class="hero-subtitle">
          </div>
          <!-- /.hero-subtitle -->
          <p><a href="/volonter" class="btn btn-site">Помочь</a></p>
        </div>
        <!-- /.col-6 -->
        <div class="col-lg-6 col-12">
          <img src="{{ asset('img') }}/hero/logo-main.png" alt="Главный логотип с девизом">
        </div>
        <!-- /.col-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.hero -->

  <section class="news pt-3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="news-header section-title text-center">
            <h2>Нуждаются в помощи</h2>
          </div>
          <!-- /.news-title -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        @foreach($childs as $post)
        <div class="col-lg-4">
          <div class="news-box">
            <div class="news-img">
              <img src="posts/{{ $post->img }}" alt="Картинка новости: {{ $post->firstname . ' ' . $post->lastname }}">
            </div>
            <!-- /.news-img -->
            <div class="news-title">
              {{ $post->firstname . ' ' . $post->lastname }}
            </div>
            <!-- /.news-title -->
            <div class="news-text">
              {{-- {!! $post->description !!} --}}
            </div>
            <!-- /.news-text -->
            <div class="news-text">
              Требуется:
              {!! $post->quantity_end !!}p
            </div>
            <!-- /.news-text -->
            <p class="text-center"><a  class="news-link" href="/news/{{ $post->id }}">Подробнее</a></p>
          </div>
          <!-- /.news-box -->
        </div>
        <!-- /.col-lg-4 -->
        @endforeach
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 text-center">
          <a href="children" class="btn btn-site">Показать всех</a>
          <!-- /.btn-more -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.news -->

  <section class="mission" id="mission">
    <div class="container">
      <div class="row news-header section-title text-center">
        <div class="col-12">
          <h2>Об организации</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 offset-lg-2 col-lg-8">
          <div class="mission-title section-title text-center">
          </div>
          <!-- /.mission-header -->
          <div class="mission-text">
                <p>
                    Ассоциация развития кредитной потребительской кооперации – это некоммерческая организация, целью которой является защита и повышение финансовой и юридической грамотности своих членов.
                </p>
          </div>
          <!-- /.mission-text -->
        </div>
        <!-- /col-lg-6 col-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 text-center">
          <a href="/about" class="btn btn-site" >Подробнее</a>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.mission -->

  <section class="form">
    <div class="container">
      <div class="row">
        <div class="col-12 offset-lg-3 col-lg-6">
            <h2 class="mb-3 text-center">Форма обратной связи</h2>
          <form action="/mail" class="form-site" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="fio" class="form-control mb-2" placeholder="Имя" required>
            <input type="hidden" name="form" value="Заявка с главной страницы">
            <input type="text" name="phone" class="form-control mb-2" placeholder="Телефон" required>
            <input type="text" name="question" class="form-control mb-2" placeholder="Вопрос" required>

            <p class="text-center"><button class="btn btn-site">Отправить</button></p>
          </form>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.form -->

  <section class="support d-none">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="news-header section-title text-center">
            <h2>Поддержка</h2>
          </div>
          <!-- /.news-title -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="offset-lg-3 col-lg-6 col-12">
          Мы разрабатываем решение для приема пожертвований на нашем сайте, а пока вы можете совершить пожертвование по нашим реквизитам, указаным в <a href="/contacts" class="news-link">контактах</a>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.support -->


  <section class="partners d-none">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="news-header section-title text-center">
            <h2>Наши партнеры</h2>
          </div>
          <!-- /.news-header section-title text-center -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="partners__item">
            <img src="img/partners/partner1.jpeg" alt="Партнер">
          </div>
          <!-- /.partners__item -->
        </div>
        <!-- /.col-12 col-lg-3 -->

        <div class="col-12 col-lg-3">
          <div class="partners__item">
            <img src="img/partners/partner2.jpeg" alt="Партнер">
          </div>
          <!-- /.partners__item -->
        </div>
        <!-- /.col-12 col-lg-3 -->

        <div class="col-12 col-lg-3">
          <div class="partners__item">
            <img src="img/partners/partner3.jpeg" alt="Партнер">
          </div>
          <!-- /.partners__item -->
        </div>
        <!-- /.col-12 col-lg-3 -->

        <div class="col-12 col-lg-3">
          <div class="partners__item">
            <img src="img/partners/partner4.jpeg" alt="Партнер">
          </div>
          <!-- /.partners__item -->
        </div>
        <!-- /.col-12 col-lg-3 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.partners -->
  <section class="contacts mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A945ec801ad0bd632dd43efe6a7b3188c2af43e3897767b64103d9484be146a8e&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.contacts -->

@endsection
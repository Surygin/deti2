@extends('main')

@section('content')
  <section class="mission pt-5" id="about">
    <div class="container">
      <div class="row">
        <div class="offset-lg-3 col-lg-6 col-12">
          <div class="mission-img">
            <div class="mission-title section-title text-center">
              <h2><span class="font-green">{{ $news->title }}</span></h2>
            </div>
            <!-- /.mission-header -->
            <img class="mb-5" src="{{ asset('posts') .'/'. $news->img }}" alt="Картинка: {{ $news->title }}">
          </div>
          <!-- /.mission-img -->
        </div>
        <!-- /.col-lg-6 col-12 -->
        <div class="offset-lg-2 col-lg-8 col-12">
          <div class="mission-text">
            {!! $news->text !!}
          </div>
          <!-- /.mission-text -->
          <p><a href="{{ url()->previous() }}" class="news-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Назад</a></p>
        </div>
        <!-- /col-lg-6 col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.mission -->

@endsection
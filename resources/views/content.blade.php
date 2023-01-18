@extends('main')

@section('content')
  <section class="news pt-3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="news-header section-title text-center">
            <h2>Последние <span class="font-green">новости</span> и события</h2>
          </div>
          <!-- /.news-title -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        @foreach($posts as $post)
        <div class="col-lg-4">
          <div class="news-box">
            <div class="news-img">
              <img src="posts/{{ $post->img }}" alt="Картинка новости">
            </div>
            <!-- /.news-img -->
            <div class="news-title">
              {{ $post->title }}
            </div>
            <!-- /.news-title -->
            <div class="news-text">
              {{ $post->description }}
            </div>
            <!-- /.news-text -->
            <a  class="news-link" href="news/{{ $post->id }}">Читать далее</a>
          </div>
          <!-- /.news-box -->
        </div>
        <!-- /.col-lg-4 -->
        @endforeach
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <style>
            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: #22ba46;
                border-color: #22ba46;
            }
            .page-link{
                color: #22ba46;
            }
        </style>
          {{ $posts->links() }}
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.news -->

@endsection
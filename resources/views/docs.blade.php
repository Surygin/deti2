@extends('main')

@section('content')
  <section class="mission mt-5" id="about">
    <div class="container">
      <div class="row">
        <div class="offset-lg-3 col-lg-6 col-12">
          <div class="mission-img">
            <div class="mission-title section-title text-center">
              <h2><span class="font-green">Документы</span></h2>
            </div>
            <!-- /.mission-header -->
            {{-- <img src="img/mission/about.png" alt="Наша миссия"> --}}
          </div>
          <!-- /.mission-img -->
        </div>
        <!-- /.col-lg-6 col-12 -->
        <div class="offset-lg-2 col-lg-8 col-12">
          <div class="mission-text">
            @foreach($docs as $doc)

              <p class="d-flex mb-0 justify-content-between align-items-center">{{ $doc->title }} <a class="btn btn-site" download href="{{ asset('posts/').'/'.$doc->path }}">скачать</a></p>
              <hr>

            @endforeach
          </div>
          <!-- /.mission-text -->
        </div>
        <!-- /col-lg-6 col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.mission -->
@endsection
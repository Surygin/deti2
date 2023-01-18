@extends('main')

@section('content')
  <section class="mission" id="about">
    <div class="container">
      <div class="row">
        <div class="offset-lg-3 col-lg-6 col-12">
          <div class="mission-img">
            <div class="mission-title section-title text-center">
              <h2><span class="font-green">Поддержка</span></h2>
            </div>
            <!-- /.mission-header -->
            {{-- <img src="img/mission/about.png" alt="Наша миссия"> --}}
          </div>
          <!-- /.mission-img -->
        </div>
        <!-- /.col-lg-6 col-12 -->
        <div class="offset-lg-2 col-lg-8 col-12">
          <div class="mission-text">
              {!! $support->text !!}
          </div>
          <!-- /.mission-text -->
        </div>
        <!-- /col-lg-6 col-12 -->
      </div>
      <!-- /.row -->
            <div class="row">
        <div class="offset-lg-3 col-lg-6 col-12">
          <script src="https://3dsec.sberbank.ru/payment/docsite/assets/js/ipay.js"></script>
           <script>
             var ipay = new IPAY({api_token: 'YRF3C5RFICWISEWFR6GJ'});
           </script>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.mission -->
@endsection
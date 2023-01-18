@extends('main')

@section('content')
  <section class="contacts mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-5">
          <h2>Контакты и <span class="font-green">реквизиты</span></h2>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      <div class="row mb-5">
        <div class="col-lg-4 col-12">
          <div class="contacts__title">
            Телефон: <span class="contacts__title-light"><a href="tel:{{ $footer->phone1 }}">{{ $footer->phone1 }}</a></span>
          </div>
          <!-- /.contacts__title -->
          <div class="contacts__title">
            Email: <span class="contacts__title-light"><a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a></span>
          </div>
          <!-- /.contacts__title -->
          <div class="contacts__title">
            Адрес: <span class="contacts__title-light">{{ $footer->address }}</span>
          </div>
          <!-- /.contacts__title -->
          <p><b>ИНН:</b> {{ $requisites[0]->inn }}</p>
          <p><b>ОГРН:</b> {{ $requisites[0]->ogrn }}</p>
          <hr>
          <h3>Банковские реквизиты</h3>
          <p><b>Название:</b> {{ $requisites[0]->bank }}</p>
          <p><b>Расчетный счет:</b> {{ $requisites[0]->rs }}</p>
          <p><b>Кореспондентский счет:</b> {{ $requisites[0]->ks }}</p>
          <p><b>БИК:</b> {{ $requisites[0]->bik }}</p>
          <p><b>КПП:</b> {{ $requisites[0]->kpp }}</p>
          <hr>
        </div>
        <!-- /.col-lg-4 col-6 -->

        <div class="col-lg-8 col-12">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A945ec801ad0bd632dd43efe6a7b3188c2af43e3897767b64103d9484be146a8e&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.contacts -->
@endsection
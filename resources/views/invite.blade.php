@extends('main')

@section('content')
  <section class="form mt-5">
    <div class="container">
      <div class="row">
          <h2></h2>
        <div class="col-12 offset-lg-3 col-lg-6">
            <h2 class="mb-3 text-center">Вступить в ассоциацию</h2>
            <ol>
                <li>Для того, чтобы вступить в члены Ассоциации Развития кредитной потребительской кооперации необходимо <a class="news-link" href="https://arkpk.ru/posts/docs/GI4MYPh5Ba2SkHzf6V6CyfvIorFwJajP7B8VrqGY.docx">скачать</a> и заполнить бланк заявления (файл скана не должен превышать 2мб). И прикрепить его при заполнении формы заявки ниже.</li>
                <li>Второй шаг для вступления в члены Ассоциации Развития кредитной потребительской кооперации – это оплата обязательных взносов - <a class="news-link" href="/vznos">Оплатить взносы</a></li>
            </ol>
          <form action="/mail" class="form-site" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="fio" class="form-control mb-2" placeholder="ФИО" required>
            <input type="hidden" name="form" value="Заявка с главной страницы">
            <input type="text" name="phone" class="form-control mb-2" placeholder="Телефон" required>
            <input type="file" name="file" class="form-control mb-2" required>
            <p class="text-center"><button class="btn btn-site">Отправить</button></p>
            <p>*Отправляя данную форму я даю свое согласие на обработку моих персональных данных.</p>
            <p>*файл скана не должен превышать 2мб</p>
            <p>Бланк заявления <a class="news-link" download href="{{ asset('posts/').'/'.$blank->path }}">скачать</a> </p>
          </form>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.form -->
@endsection
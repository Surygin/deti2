@extends('main')

@section('content')
  <section class="form mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 offset-lg-3 col-lg-6">
            <h2 class="mb-3 text-center">Стать волонтером</h2>
            <ol>
                <li>Для того, чтобы стать волонтером Ассоциации Развития кредитной потребительской кооперации необходимо <a class="news-link" download href="{{ asset('posts/').'/'.$blank->path }}">скачать</a> и заполнить бланк заявления (файл скана не должен превышать 2мб). И прикрепить его при заполнении формы заявки ниже.</li>
            </ol>
          <form action="#" class="form-site">
            <input type="text" class="form-control mb-2" placeholder="ФИО">
            <input type="text" class="form-control mb-2" placeholder="Телефон">
            <input type="file" class="form-control mb-2">
            <p class="text-center"><button class="btn btn-site">Отправить</button></p>
            <p>*Отправляя данную форму я даю свое согласие на обработку моих персональных данных.</p>
            <p>Анкета волонтера <a class="news-link" download href="{{ asset('posts/').'/'.$blank->path }}">скачать</a> </p>
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
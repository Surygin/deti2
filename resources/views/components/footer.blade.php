{{-- {{ dd($footer); }} --}}
<footer class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="footer-logo d-flex align-items-center justify-content-center">
          <a href="/"><img src="{{ asset('img') }}/header/main-logo.png" alt="Логотип" style="width: 100%;"></a>
        </div>
        <!-- /.footer-logo -->
        <div class="footer-text mb-3">
            Не оставайся равнодушным, дари надежды и мечты!
        </div>
        <!-- /.footer-text -->
        <div class="footer-link mb-3">
          <a href="tel:{{ $footer->phone1 }}">{{ $footer->phone1 }}</a><br>
          <a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a>
        </div>
        <!-- /.footer-link -->
        <div class="footer-copy">
          © Copyright 2022. Все права защищены. 
        </div>
        <!-- /.footer-copy -->
      </div>
      <!-- /.col-lg-5 col-12 -->
      <div class="offset-lg-1 col-lg-3 col-12">
        <p class="footer-menu mb-3 pt-5">Навигация сайта</p>
        <ul class="footer-menu__link">
          <li class="mb-2"><a class="go-to" href="/news">Новости</a></li>
          <li class="mb-2"><a class="go-to" href="/invite">Вступить</a></li>
          <li class="mb-2"><a class="go-to" href="/about">О нас</a></li>
          <li class="mb-2"><a class="go-to" href="/documents">Документы</a></li>
          <li class="mb-2"><a class="go-to" href="/contacts">Контакты</a></li>
        </ul>
      </div>
      <!-- /.col-lg-3 col-12 -->
      <div class="col-lg-4 col-12">
        <p class="pt-5">Для лиц 18+</p>
      </div>
      <!-- /.col-lg-4 col-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</footer>
<!-- /.footer -->
<script
src="https://code.jquery.com/jquery-1.12.4.min.js"
integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
crossorigin="anonymous">
</script>
<script src="{{ asset('js') }}/jquery.maskedinput.min.js"></script>
<script src="{{ asset('js') }}/main.js"></script>
<script>

</script>
</body>
</html>
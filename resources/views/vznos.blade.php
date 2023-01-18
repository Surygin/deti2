@extends('main')

@section('content')
  <section class="form mt-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 offset-lg-3 col-lg-6 text-center">
            <div class="form-site">
                <h2 class="mb-3 text-center">Вступительный членский взнос - 500p</h2>
                <script src="https://3dsec.sberbank.ru/payment/docsite/assets/js/ipay.js"></script>
               <script>
                 var ipay = new IPAY({api_token: 'sn5vc8m9r03h2tia99iv1526kv'});
               </script>
               <a onclick="ipayCheckout({
                    amount:1.00,
                    currency:'RUB',
                    order_number:'',
                    description: 'Вступительный взнос'},
                    function(order) { showSuccessfulPurchase(order) },
                    function(order) { showFailurefulPurchase(order) })"
                     
                    class="btn btn-site">Оплатить
                </a>
            </div>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      
      <div class="row mb-5">
        <div class="col-12 offset-lg-3 col-lg-6 text-center">
            <div class="form-site">
                <h2 class="mb-3 text-center">Ежегодный членский взнос - 500p</h2>
               <a onclick="ipayCheckout({
                    amount:500.00,
                    currency:'RUB',
                    order_number:'',
                    description: 'Ежегодный взнос'},
                    function(order) { showSuccessfulPurchase(order) },
                    function(order) { showFailurefulPurchase(order) })"
                     
                    class="btn btn-site">Оплатить
                </a>
                <p class="mt-3">
                    *Производя взнос, я подтверждаю свое согласие с <a href="#" class="news-link">Политикой конфеденциальности</a> и <a href="#" class="news-link">Пользовательским соглашением</a>
                </p>
            </div>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      
      <div class="row mb-5">
        <div class="col-12 offset-lg-3 col-lg-6 text-center">
            <div class="form-site">
                <h2 class="mb-3 text-center">Ежегодный членский взнос - 500p</h2>
               <a href="https://3dsec.sberbank.ru/shortlink/ILMSV7lP"
                     
                    class="btn btn-site">Оплатить
                </a>
            </div>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
          <div class="offset-lg-3 col-lg-6 col-12">
              <h2>Способы оплаты</h2>
          </div>
      </div>
      <div class="row">
          <div class="offset-lg-3 col-lg-6 col-12">
              <p>Банковской картой</p>
                Для выбора оплаты  членства с помощью банковской карты на соответствующей странице
                необходимо нажать кнопку "Оплатить". Оплата происходит через ПАО
                СБЕРБАНК с использованием банковских карт следующих платёжных систем:
                <style>
                .pay_sistem li{
                    display: none;
                    margin: 20px 0;
                }
                </style>
                <ul class="pay_sistem">
                    <li>МИР ;</li>
                    <li>VISA;</li>
                    <li>Mastercard Worldwide;</li>
                    <li>JCB.</li>
                </ul>
                <img src="{{ asset('img') }}/pay.png">
          </div>
      </div>
      <div class="row">
          <div class="offset-lg-3 col-lg-6 col-12 mt-3">
              <h3>Процесс передачи данных</h3>
                <p>
                    Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платёжный шлюз
                    ПАО СБЕРБАНК. Соединение с платёжным шлюзом и передача информации осуществляется в
                    защищённом режиме с использованием протокола шифрования SSL. В случае если Ваш банк
                    поддерживает технологию безопасного проведения интернет-платежей Verified By Visa,
                    MasterCard SecureCode, MIR Accept, J-Secure для проведения платежа также может
                    потребоваться ввод специального пароля.
                </p>
                <p>
                    Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой
                    персональной информации обеспечивается ПАО СБЕРБАНК. Введённая информация не будет
                    предоставлена третьим лицам за исключением случаев, предусмотренных законодательством
                    РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с
                    требованиями платёжных систем МИР, Visa Int., MasterCard Europe Sprl, JCB.
                </p>
          </div>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.form -->
@endsection
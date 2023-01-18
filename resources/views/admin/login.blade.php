<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <title>Вход</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="offset-lg-3 col-lg-6 col-12 pt-5">
        <main class="form-signin w-100 m-auto text-center">
          <form action="login" method="POST">
            @csrf
            <img class="mb-4" src="{{ asset('img') . '/logo.png' }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
        
            <div class="form-floating">
              <input type="email" name="login" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" name="psw" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-site" type="submit">Войти</button>
          </form>
        </main>
      </div>
    </div>
  </div>
</body>
</html>
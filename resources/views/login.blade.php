<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/sanitize.css'])
  @vite(['resources/css/app.css'])
  <title>Login</title>
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <h1>Login</h1>
      <form class="form" action="{{ route('login') }}" method="POST" novalidate>
        @if ($errors->any())
        <div class="alert">
          <ul>
            @foreach ($errors->all() as $error)
            <li class="error-message">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        @csrf
        <input type="email" name="email" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" id="login-button">Login</button>
      </form>
      <div class="register-link">
        <p><a href="{{ route('register') }}">新規登録の方はこちら</a></p>
      </div>
    </div>
  </div>
</body>

</html>

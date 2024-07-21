<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/sanitize.css'])
  @vite(['resources/css/app.css'])
  <title>Sign Up</title>
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <h1>Sign Up</h1>
      <form class="form" action="{{ route('register') }}" method="POST">
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
        <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="password confirmation">
        <button type="submit" id="register-button">Sign Up</button>
      </form>
      <div class="login-link">
        <p><a href="{{ route('login') }}">すでに登録済みの方はこちら</a></p>
      </div>
    </div>
  </div>
</body>

</html>

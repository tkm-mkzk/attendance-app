<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>attendance</title>
</head>

<body>
  <h1>attendance Page</h1>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">ログアウト</button>
  </form>
</body>

</html>

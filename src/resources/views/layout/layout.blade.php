<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Attendance</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
@yield('css')
</head>

<body>
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            Atte
        </a>
    </div>
    <div class="Category">
        <div class="Category__div">
            <a class="Category__a"href="/">
                ホーム
            </a>
        </div>
        <div class="Category__div">
            <a class="Category__a"href="/">
                日付一覧
            </a>
        </div>
        <div class="Category__div">
            <a class="Category__a"href="/">
                ログアウト
            </a>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__utilities">
                <h1 class="header__logo">
                    FashionablyLate
                </h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="title__button">
                        <button class="title__button-submit" type="submit">register</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <h2>Login</h2>
            </div>
            <form class="form" action="/admin" method="post">
                @csrf
                <label class="form__title" for="email">メールアドレス</label>
                <input class="form__text" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>

                <label class="form__title" for="password">パスワード</label>
                <input class="form__text" type="password" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}" />
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>

                <div class="login__button">
                    <button class="login__button-submit" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </main>
</body>
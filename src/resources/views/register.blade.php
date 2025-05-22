<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
                <form action="/login" method="post">
                    @csrf
                    <div class="title__button">
                        <button class="title__button-submit" type="submit">login</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>
            <form class="form" action="/register" method="post">
                @csrf
                <label class="form__title" for="name">お名前</label>
                <input class="form__text" type="text" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}" />
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>

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

                <div class="register__button">
                    <button class="register__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>
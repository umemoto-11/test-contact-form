<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
                <form class="form" action="/logout" method="post">
                    @csrf
                    <div class="title__button">
                        <button class="title__button-submit" type="submit">logout</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main>
        <div class="admin__content">
            <div class="admin__heading">
                <h2>Admin</h2>
            </div>
            <form class="search-form">
                @csrf
                <div class="search-form__item">
                    <input class="search-form__item-input" type="text" name="name, email" placeholder="名前やメールアドレスを入力してください">
                </div>
                <div class="search-form__item">
                    <select class="search-form__item-select" name="gender">
                        <option value="">性別</option>
                        <option value="全て">全て</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <div class="search-form__item">
                    <select class="search-form__item-select" name="content">
                        <option value="">お問い合わせの種類</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['content'] }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="search-form__item">
                    <input class="search-form__date-input" type="date" name="date">
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
                <div class="reset__button">
                    <button class="reset__button-submit" type="submit">リセット</button>
                </div>
            </form>
            <div class="export__button">
                <button class="export__button-submit" type="submit">エクスポート</button>
            </div>
            {{ $users->links() }}
            <div class="admin-table">
                <table class="admin-table__inner">
                    <tr class="admin-table__row">
                        <th class="admin-table__header">お名前</th>
                        <th class="admin-table__header">性別</th>
                        <th class="admin-table__header">メールアドレス</th>
                        <th class="admin-table__header">お問い合わせの種類</th>
                        <th class="admin-table__header"></th>
                    </tr>
                    @foreach ($contacts as $contact)
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <p class="admin-table__item-input" name="keyword">{{ $contact['last_name'] }} {{ $contact['first_name'] }}</p>
                        </td>
                        <td class="admin-table__item">
                            <p class="admin-table__item-input">{{ $contact['gender'] }}</p>
                        </td>
                        <td class="admin-table__item">
                            <p class="admin-table__item-input" name="keyword">{{ $contact['email'] }}</p>
                        </td>
                        <td class="admin-table__item">
                            <p class="admin-table__item-input">{{ $contact['content'] }}</p>
                        </td>
                        <td>
                            <div class="detail__button">
                                <button class="detail__button-submit" type="submit">詳細</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
</body>
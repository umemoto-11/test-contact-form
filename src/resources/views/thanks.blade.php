<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
    <div class="thanks__content">
        <form class="form" action="/" method="post">
            @csrf
            <div class="relative">Thank you</div>
            <div class="thanks__heading">
                <h2>お問い合わせありがとうございました</h2>
            </div>
            <div class="thanks__button">
                <button class="thanks__button-submit" type="submit">HOME</button>
            </div>
        </form>
    </div>
</body>
</html>
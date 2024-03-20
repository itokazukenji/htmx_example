<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- htmx CDN -->
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>

    <style>
    body {
        text-align: center;
    }

    button {
        margin: 30px 0;
        cursor: pointer;
    }
    </style>
</head>
<body>

    <!--
    現在時刻を取得するボタン
    hx-get: リクエストを送信するURL
    hx-trigger: イベントを指定
    hx-target: レスポンスを表示する場所
    -->
    <button
        hx-get="time.php"
        hx-trigger="click"
        hx-target="#time"
    >
    現在時刻を取得
    </button>

    <!-- 現在時刻の表示場所 -->
    <div id="time"><div>

</body>
</html>
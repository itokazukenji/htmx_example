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

    div {
        margin: 30px 0 0;
    }

    button {
        margin: 10px 0;
        cursor: pointer;
    }
    </style>
</head>
<body>

    <div><textarea id="text" cols="30" rows="3"></textarea></div>

    <!--
    現在時刻を取得するボタン
    hx-post: リクエストを送信するURL
    hx-trigger: イベントを指定
    hx-target: レスポンスを表示する場所
    hx-vals: 下に書いたgetText()関数を実行して、その結果をtextとい値で送信する
    -->
    <button
        hx-post="response.php"
        hx-trigger="click"
        hx-target="#time"
        hx-vals="js:{text:getText()}"
    >
    テキストを送信
    </button>

    <!-- 現在時刻の表示場所 -->
    <div id="time"><div>

    <script>
        // textareaの値を取得する関数
        const getText = () => {
            // textareaの値を取得
            const text = document.getElementById('text').value;
            // textareaの値を空にする
            document.getElementById('text').value = '';
            // textareaの値を返す
            return text;
        }
    </script>
</body>
</html>
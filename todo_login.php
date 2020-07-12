<!DOCTYPE html>
<html lang="ja">
<style>
    .gamenn0 {
         background-color: green; 
    }

    .gamenn {
        font-size: 24px;
        text-align: center;
    }

    .gamenn1 {
        text-align: center;
    }

    .gamenn2 {
        text-align: center;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
</head>

<body>
    <form action="todo_login_act.php" method="POST">
        <fieldset class="gamenn0">
            <legend class="gamenn">会員登録フォーム</legend>
            <div class="gamenn1">
                ユーザー: <input type="text" name="user_id">
            </div>
            <div class="gamenn2">
                パスワード: <input type="text" name="password">
            </div>
            <div>
                <button>会員登録する</button>ログインはこちら
                
            </div>
            <a href="todo_register.php">新規登録</a>
        </fieldset>
    </form>

</body>

</html>
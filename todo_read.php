<?php
session_start();
include("functions.php");
check_session_id();

// ユーザ名取得
$user_id = $_SESSION['id'];

// DB接続
$pdo = connect_to_db();

// いいね数カウント

// いいねボタン
// <a href='like_create.php?user_id={$user_id}&todo_id={$record["id"]}'>
// like{$record["cnt"]}
// </a>


// データ取得SQL作成
// $sql = 'SELECT todo_id, COUNT(id) AS cnt FROM like_table GROUP BY todo_id';
$sql = 'SELECT * FROM todo_table
LEFT OUTER JOIN (SELECT todo_id, COUNT(id) AS cnt
FROM like_table GROUP BY todo_id) AS likes
ON todo_table.id = likes.todo_id';
// "SELECT * FROM tablea LEFT OUTER JOIN tableb ON tablea.id = tableb.id";
// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    // fetchAll()関数でSQLで取得したレコードを配列で取得できる
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output = "";
    // <tr><td>deadline</td><td>todo</td><tr>の形になるようにforeachで順番に$outputへデータを追加
    // `.=`は後ろに文字列を追加する，の意味
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["deadline"]}</td>";
        $output .= "<td>{$record["todo"]}</td>";
        $output .= "<td><a href='like_create.php?user_id={$user_id}&todo_id={$record["id"]}'>like{$record["cnt"]}</a></td>";
        $output .= "<td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>";
        $output .= "<td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>";
    }

    // $valueの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
    // 今回は以降foreachしないので影響なし
    unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スイカの予約</title>
    <style>
        /* .heart {
            width: 100px;
            height: 100px;
            background-color: url(img../web_heart_animation.png);
            background-position: 0 0;
            cursor: pointer;
        }

        .heart:hover {
            background-position: -2800px 0;
            -webkit-transition: background 1s steps(28);
            transition: background 1s steps(28);
        } */

        .kau0 {
            text-align: center;
        }

        .kau1 {
            font-size: 36px;
            text-align: center;
        }

    </style>
</head>

<body>
    <fieldset class="kau0">
        <legend class="kau1">スイカの購入画面</legend>
        <a href="todo_input.php">入力画面</a>
        <a href="todo_logout.php">logout</a>
        <table>
            <th>
                <tr>
                    <th>購入日</th>
                    <th>購入数</th>
                    <!-- <th>名前</th>
                    <th>住所</th>
                    <th>☎</th>
                    <th>メールアドレス</th>
                    <th>スイカの状態</th>
                    <th>スイカの大きさ</th> -->
                </tr>
            </th>
            <!-- <div class="heart"></div> -->
            <tbody>
                <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>
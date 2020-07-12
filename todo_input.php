<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スイカの予約</title>
    <style>
        .rig {
            background-image: repeating-linear-gradient(270deg, forestgreen, yellowgreen 40px, forestgreen 80px);
        }

        .midasi {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: green;
        }

        .pic {
            background-color: black;
        }

        .slide-wrap {
            background-color: #ccc;
            display: flex;
            margin: 0 auto;
            max-width: 1024px;
            width: 100%;
        }

        .slide-box {
            height: auto;
            margin: .5%;
            width: 24%;
        }

        .slide-box a {
            background-color: #fff;
            color: #222;
            display: block;
            text-decoration: none;
        }

        .slide-box img {
            display: block;
            height: auto;
            width: 100%;
        }

        .slide-box p {
            font-weight: bold;
            padding: 10px;
            margin: .5rem auto;
        }

        @media screen and (max-width: 768px) {

            /* スマホサイズでスライダー表示 */
            .slide-wrap {
                overflow-x: scroll;
            }

            .slide-box {
                flex: 0 0 70%;
                margin: auto 1% auto auto;
            }

            /* .kennsaku1 {
                text-align: center;
            }

            .kennsaku2 {
                text-align: center;
            } */

            .ggmap {
                position: relative;
                padding-bottom: 56.25%;
                padding-top: 30px;
                height: 0;
                overflow: hidden;
            }

            .ggmap iframe,
            .ggmap object,
            .ggmap embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

        }

        .huri {
            text-align: center;
        }

        .info {
            background-color: green;
        }

        .in {
            text-align: center;
        }

        .ka1 {
            text-align: center;
        }

        .ka2 {
            text-align: center;
            /* background-color: green; */
        }
    </style>

</head>

<body>

    <header>
        <div class="midasi">
            <h1>ふり屋</h1>
            <!-- <a href="">スイカの予約</a>
            <a href="">会員登録</a>
            <a href="">ログイン</a> -->
        </div>
    </header>

    <div class="pic">
        <div class="slide-wrap">
            <div class="slide-box">
                <a href="URL">
                    <img src="img/suika_ec.jpg">
                </a>
            </div>
            <div class="slide-box">
                <a href="URL">
                    <img src="img/suika_ec.jpg">
                </a>
            </div>
            <div class="slide-box">
                <a href="URL">
                    <img src="img/suika_ec.jpg">
                </a>
            </div>
            <div class="slide-box">
                <a href="URL">
                    <img src="img/suika_ec.jpg">
                </a>
            </div>
            <div class="slide-box">
                <a href="URL">
                    <img src="img/suika_ec.jpg">
                </a>
            </div>
            <div class="slide-box">
                <a href="URL">
                    <img src="img/suika_ec.jpg">
                </a>
            </div>
        </div>
    </div>


    <form action="todo_create.php" method="POST">
        <fieldset class="ka1">
            <legend class="ka2">スイカの購入画面</legend>
            <a href="todo_read.php">一覧画面</a>
            <div>
                購入数: <input type="text" name="todo">
            </div>
            <div>
                購入日: <input type="date" name="deadline">
            </div>
            <!-- <div>
                名前: <input type="text" name="namae">
            </div>
            <div>
                住所: <input type="text" name="zyuusyo">
            </div>
            <div>
                ☎: <input type="text" name="dennwa">
            </div>
            <div>
                メールアドレス: <input type="text" name="me-ru">
            </div> -->

            <!-- <div>
                <p>スイカの状態</p>
                <label>
                    <input type="radio" name="a" value="1">秀
                </label>
                <label>
                    <input type="radio" name="b" value="2">優
                </label>
                <label>
                    <input type="radio" name="c" value="3">良
                </label>
            </div>
            <div>
                <p>スイカの大きさ</p>
                <label>
                    <input type="radio" name="d" value="4">5L
                </label>
                <label>
                    <input type="radio" name="e" value="5">4L
                </label>
                <label>
                    <input type="radio" name="f" value="6">3L
                </label>
                <label>
                    <input type="radio" name="g" value="7">2L
                </label>
                <label>
                    <input type="radio" name="h" value="8">L
                </label>
                <label>
                    <input type="radio" name="i" value="9">M
                </label>
                <label>
                    <input type="radio" name="j" value="10">S
                </label>
            </div> -->
            <div>
                <button>送信</button>
            </div>
        </fieldset>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

    <!-- 
    <script>
        $('#btn').on('click', function() {
            alert('5千円になります！');
        });

        $('#pass').on('click', function() {
            alert('スイカプレゼント！！！');
        });
    </script> -->

    <!-- <div>
        <audio src="audio.mp3" preload="metadata" controls>
        </audio>
    </div>

    <div>
        <video src="video.mp4" autoplay loop muted controls></video>
    </div> -->

    <div class="info">
        <h2 class="in">インフォメーション</h2>
        <table>
            <tbody>
                <tr>
                    <td>
                        <p>名称</p>
                    </td>
                    <td>
                        <p>ふり屋</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>電話番号</p>
                    </td>
                    <td>
                        <p>080-2729-1969</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>メールアドレス</p>
                    </td>
                    <td>
                        <p>hiroto01250125@icloud.com</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>インスタグラム</p>
                    </td>
                    <td>
                        <p>@shige_hi_25</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>住所</p>
                    </td>
                    <td>
                        <p>大分県日田市山田町</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>代表者名</p>
                    </td>
                    <td>
                        <p>重石陽登</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="ggmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26662.902100249492!2d130.90966853955078!3d33.348535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35416999c7e27e8d%3A0x9f15d484ba67deb8!2z6bq65a62IOOBleOBj-OCiQ!5e0!3m2!1sja!2sjp!4v1591248808864!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    <!-- 
    <img class="huri" src="img/IMG_0262.JPG" alt="">
    <form action="/">
        <p>
            <label>
                この写真のパスワード<br>
                <input type="password" name="password">
            </label>
        </p>
        <p>
            <input id="pass" type="submit">
        </p>
    </form> -->

</body>

</html>

</body>

</html>
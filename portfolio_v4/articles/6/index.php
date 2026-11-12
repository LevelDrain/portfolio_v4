<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポ〇モンバトル | 図式屋</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../../shared/css/vendor/lity.min.css">
    <link rel="stylesheet" href="./../../shared/css/vendor/animsition.min.css">
    <link rel="stylesheet" href="./../../shared/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="./../../shared/css/common.css">
    <link rel="stylesheet" href="./../css/articles.css">
</head>

<body>
<div class="animsition">
    <!-- 背景消したときの要素取得エラーは無視 -->
    <!-- <div class="l-bgThreejs"></div> -->

    <!-- header -->
    <?php require_once('./../../shared/header.php'); ?>

    <main class="l-main">
        <section class="p-article--img">
            <div class="l-container">
                <img src="../img/img_pokemon.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">ポ〇モンバトル</h2>
                <p class="c-heading">
                    専門学校時代の1回生で初めてJavaScriptを触ったときの課題作品。<br>
                    平成の古き良き時代を感じたかったため制作しました。
                </p>

                <p class="c-heading">開発環境</p>
                <ul class="p-article--list">
                    <li>HTML / CSS</li>
                    <li>JavaScript</li>
                </ul>

                <div class="p-article--btnbox">
                    <a href="https://leveldrain.sumomo.ne.jp/PokemonButtleJS/" class="c-button" target="_blank"
                       rel="noopener noreferrer">実際のWebサイトへ</a>
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">企画・仕様書</h3>
                <p class="c-heading">
                    レベルデザインについては、ただ攻撃するだけでは倒せないようにしてあります。
                </p>
                <div class="p-article--btnbox">
                    <a href="https://leveldrain.sumomo.ne.jp/PokemonButtleJS/Specification.xlsx"
                       class="c-button tapunset">ダウンロード</a>
                    <p class="c-heading">
                        ※ Excelファイルにつき、スマホでのダウンロードを無効にしております。
                    </p>
                </div>

                <div class="p-article--btnbox c-border-top">
                    <a href="javascript:history.back();" class="c-button">戻る</a>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php require_once('./../../shared/footer.php'); ?>
</div>

<script src="./../../shared/js/main.js"></script>
</body>

</html>
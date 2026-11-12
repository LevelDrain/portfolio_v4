<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>塾ホームページ | 図式屋</title>
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
                <img src="../img/img_juku.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">塾ホームページ</h2>
                <p class="c-heading">
                    フロントエンドエンジニアとして最初に任せていただきました。フルスクラッチで7日程度でした。<br>
                    もちろんレスポンシブ対応。
                </p>

                <p class="c-heading">制作環境</p>
                <ul class="p-article--list">
                    <li>HTML/CSS</li>
                    <li>jQuery</li>
                </ul>

                <h3 class="p-article--title">タブメニューへのアコーディオン入れ子</h3>
                <p class="c-heading">
                    jQueryを使ったパーツの入れ子はコードが複雑になりがちでしたが、指定通りの動作をするよう妥協なく仕上げました！
                </p>
                <div class="p-article--fig">
                    <img src="../img/img_matsugaku.png" alt="">
                </div>

                <div class="p-article--btnbox">
                    <a href="https://matsugakujyuku.com/" class="c-button" target="_blank" rel="noopener noreferrer">実際のWebサイトへ</a>
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
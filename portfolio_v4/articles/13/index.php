<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ランディングページ | 図式屋</title>
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
                <img src="../img/img_matsumoto.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">ランディングページ</h2>
                <p class="c-heading">
                    コーディングを全て担当しました。スマホ用ランディングページを制作。制作期間5日間。
                </p>
                <p class="c-heading">制作環境</p>
                <ul class="p-article--list">
                    <li>HTML / CSS</li>
                </ul>

                <h3 class="p-article--title">動画埋め込み</h3>
                <p class="c-heading">
                    YouTubeやmp3などの動画を埋め込み、画面幅によって横幅が変わるよう対応しました。<br>
                    全体の横幅はタブレットおよびPCで見たときに大きくなり過ぎないよう650pxで止まるようになっており、<br>
                    動画を横幅100%で余白いっぱいまで設定した際に横650px以上に拡大しないよう工夫しています。
                </p>
                <div class="p-article--fig">
                    <img src="../img/matsumoto_pu1.png" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">複雑なデザインに対応するCSS</h3>
                <p class="c-heading">
                    ネガティブマージンを用いることで、画像を使わずにセクションの背景を設定しました。<br>
                    （画像を背景に設定した場合、文字の長さによってセクション毎に引き伸ばしの割合が変わり、統一感のないデザインになるため）
                </p>
                <div class="p-article--fig">
                    <img src="../img/matsumoto_pu2.png" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">急なメンテへの対応</h3>
                <p class="c-heading">
                    メンテナンスの負担を減らすために、カレンダーなどの打ち換えが発生するデザインは全てCSSで対応しています。
                </p>
                <div class="p-article--fig">
                    <img src="../img/matsumoto_pu3.png" alt="">
                </div>

                <div class="p-article--btnbox">
                    <a href="sample" class="c-button">全画面<br>スクリーンショットへ</a>
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
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>このポートフォリオ | Portfolio</title>
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
                    <img src="../img/img_portfolio4.png" alt="">
                </div>
            </section>

            <section class="p-article--text">
                <div class="l-container section-fadein">
                    <h2 class="c-title">Portfolio</h2>
                    <p class="c-heading">
                        就職活動のためのポートフォリオです。動画やリソースを全て自前で用意したため、3ヵ月近い大作となっています。<br>
                        バックエンドはCSVからのデータリスト読み込みで実装。
                    </p>

                    <p class="c-heading">制作環境</p>
                    <ul class="p-article--list">
                        <li>HTML/CSS</li>
                        <li>JavaScript（Node環境下）</li>
                        <li>Three.js</li>
                        <li>jQuery</li>
                        <li>CLIP STUDIO PAINT</li>
                        <li>Illustrator</li>
                    </ul>

                    <h3 class="p-article--title">Three.jsによる天候の演出</h3>
                    <p class="c-heading">
                        龍神は特別に描き下ろしたもの。背景を透かし、悪天候をThree.jsで演出した。<br>
                        雲パーツを3D空間上にランダムで配置することで、リアルな空のような奥行きを出すことができる。
                    </p>
                    <div class="p-article--fig wl">
                        <img src="../img/img_portfoliov4_1.png" alt="">
                    </div>
                    <div class="p-article--btnbox">
                        <a href="https://redstapler.co/three-js-realistic-rain-tutorial/" class="c-button"
                            target="_blank" rel="noopener noreferrer">参考サイトへ</a>
                    </div>

                    <h3 class="p-article--title">外部リンクへの対応</h3>
                    <p class="c-heading">
                        外部サイトへ一度飛ぶと本サイトへ戻りにくくなってしまったため、外部に記事があるものは新規タブで閲覧できるようにしている。<br>
                        ※ 画像の内容は開発段階のものです。
                    </p>

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
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>水準研究所 | 図式屋</title>
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
                <img src="../img/img_portfolio2.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">水準研究所</h2>
                <p class="c-heading">
                    Vue.jsを使ってみたいと考え、一度ポートフォリオを作ってみました。<br>
                    SFのような世界観と脳みそが好きだったので添えてみました。
                </p>

                <p class="c-heading">制作環境</p>
                <ul class="p-article--list">
                    <li>Vue.js</li>
                    <li>Pixi.js</li>
                    <li>Netlify</li>
                    <li>CLIP STUDIO PAINT</li>
                </ul>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">SF風アニメーションの実装</h3>
                <p class="c-heading">
                    SF映画でよくある頭良さそうなGUIをイメージしました。画像はSVGでCSSのanimationで消したり表示したりを繰り返しています。
                </p>
                <div class="p-article--fig wl">
                    <img src="../img/img_portfoliov2_2.png" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">コンセプト</h3>
                <p class="c-heading">
                    SF映画の培養槽をテーマに制作したいと考えていました。
                </p>
                <div class="p-article--fig centering wl">
                    <a href="https://seiga.nicovideo.jp/seiga/im3945773" target="_blank"
                       rel="noopener noreferrer"><img src="../img/p2_sfimage.jpg" alt="" class="pointerevent" width="100%"></a>
                    <p class="c-heading">
                        Illustrated by Sinlaire（画像クリックで制作者のサイトへ）
                    </p>
                </div>
                <p class="c-heading">
                    Pixi.jsで泡に見立てた画像にアニメーションをつけています。
                </p>
                <div class="p-article--fig wl">
                    <img src="../img/img_portfoliov2_1.png" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">モーダルのルーティング</h3>
                <p class="c-heading">
                    各ページがコンポーネントなので、実は親URLはhome一つしかない構造になっています。
                    Vue Routerでchildrenによって各記事のコンポーネントとURLを紐づけています。
                </p>
                <p class="c-heading">
                    routerからstoreのモーダル開閉を制御する変数にアクセスすることで、
                    モーダルを開くと共にURLを変更し、あたかもページが数ページあるように見せています。
                </p>

                <div class="p-article--fig">
                    <img src="../img/portfoliov2_routing.jpg" alt="">
                </div>

                <div class="p-article--btnbox">
                    <a href="https://pf-ueshimalab.netlify.app/" class="c-button" target="_blank"
                       rel="noopener noreferrer">実際のWebサイトへ</a>
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
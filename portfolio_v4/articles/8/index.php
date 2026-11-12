<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生時代ポートフォリオ | 図式屋</title>
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
                <img src="../img/img_portfolio1.png" alt="">
            </div>
        </section>

        <section class="p-article--text">
            <div class="l-container section-fadein">
                <h2 class="c-title">学生時代ポートフォリオ</h2>
                <p class="c-heading">
                    「理性と野生」という化け猫の野生感と理知的な内容を併せ持った世界観をテーマにしました。<br>
                    壁紙からコーディングまで全て頑張ってみました。
                </p>
                <p class="c-heading">開発環境</p>
                <ul class="p-article--list">
                    <li>HTML / CSS</li>
                    <li>CLIP STUDIO PAINT</li>
                    <li>csshake</li>
                </ul>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">描き下ろし画像一覧</h3>
                <p class="c-heading">
                    ポートフォリオ制作にあたり、特別に「化け猫」をテーマにしたイラストを描き下ろしました。
                </p>
                <div class="p-article--fig wl">
                    <img src="../img/p1_bg_toppage.jpg" alt="">
                </div>
                <div class="p-article--fig wl">
                    <img src="../img/p1_bg_works.jpg" alt="">
                </div>
                <div class="p-article--fig wl">
                    <img src="../img/p1_bg_about.jpg" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">スマホ用画像一覧</h3>
                <p class="c-heading">
                    レスポンシブ対応用。
                </p>
                <div class="p-article--fig centering">
                    <img src="../img/p1_bg_toppage_s.jpg" alt="">
                </div>
                <div class="p-article--fig centering">
                    <img src="../img/p1_bg_works_s.jpg" alt="">
                </div>
                <div class="p-article--fig centering">
                    <img src="../img/p1_bg_about_s.jpg" alt="">
                </div>
            </div>

            <div class="l-container section-fadein">
                <h3 class="p-article--title">ページトップへボタン</h3>
                <p class="c-heading">
                    「理性と野生」ポートフォリオ上ではブルブル震えるcsshakeによるアニメーションつき。<br>
                    <a href="https://elrumordelaluz.github.io/csshake/" target="_blank"
                       rel="noopener noreferrer">☞ csshake クリックで外部リンクへ移動</a>
                </p>

                <div class="p-article--fig centering">
                    <img src="../img/p1_img_to_top.png" alt="">
                </div>

                <div class="p-article--btnbox">
                    <a href="https://leveldrain.sumomo.ne.jp/Portfolio/" class="c-button" target="_blank"
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
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qiita記事 | Portfolio</title>
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
                    <img src="../img/img_qiita.png" alt="">
                </div>
            </section>

            <section class="p-article--text">
                <div class="l-container section-fadein">
                    <h2 class="c-title">Qiita 記事投稿</h2>
                    <p class="c-heading">
                        Qiitaにも技術記事を投稿するようにしています。
                    </p>

                    <h3 class="p-article--title">記事リンク</h3>
                    <div class="l-container section-fadein">
                        <div class="p-article--fig">
                            <a href="https://qiita.com/LevelSchema/items/f0a4712ded09b35cb5a4" target="_blank"
                                rel="noopener noreferrer"><img src="../img/img_qiita_01.jpg" alt="" class="pointerevent"
                                    width="100%"></a>
                            <p class="c-heading">
                                ChatGPTと一緒にレシートからDB設計したよ
                            </p>
                        </div>
                        <div class="p-article--fig">
                            <a href="https://qiita.com/LevelSchema/items/42a7122e313374a52876" target="_blank"
                                rel="noopener noreferrer"><img src="../img/img_qiita_02.jpg" alt="" class="pointerevent"
                                    width="100%"></a>
                            <p class="c-heading">
                                ChatGPTと一緒にレシートからDB設計したよ 2
                            </p>
                        </div>
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
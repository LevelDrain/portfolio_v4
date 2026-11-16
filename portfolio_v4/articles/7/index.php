<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一行日記 | Portfolio</title>
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
                    <img src="../img/img_diary.png" alt="">
                </div>
            </section>

            <section class="p-article--text">
                <div class="l-container section-fadein">
                    <h2 class="c-title">一行日記</h2>
                    <p class="c-heading">
                        専門学校時代に企業実習に参加して制作したものです。<br>
                        CRUDの基礎から始めました。前半5日で指定課題、後半5日で企画から実装までの自由課題という充実した内容で取り組みました。
                        バックエンド開発に自信がつく良い経験でした。
                    </p>
                    <p class="c-heading">
                        CRUDを全て使用した作品というのが課題でした。夏休みの絵日記が面倒くさい人に向けた「絵日記デジタル化ツール」を開発しました。
                    </p>
                    <p class="c-heading">開発環境</p>
                    <ul class="p-article--list">
                        <li>PHP</li>
                        <li>MySQL</li>
                    </ul>
                    <div class="p-article--btnbox">
                        <a href="https://leveldrain.sumomo.ne.jp/intern2019/" class="c-button" target="_blank"
                            rel="noopener noreferrer">実際のWebサイトへ</a>
                        <p class="c-heading">
                            ※ レスポンシブ非対応
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
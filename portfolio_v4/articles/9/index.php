<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>魔法生成サイト「ジオストーム」 | Portfolio</title>
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
                    <img src="../img/img_threejs.png" alt="">
                </div>
            </section>

            <section class="p-article--text">
                <div class="l-container section-fadein">
                    <h2 class="c-title">魔法生成サイト「ジオストーム」</h2>
                    <p class="c-heading">
                        ゲームの魔法のような派手なエフェクトが好き、 転生して勇者を倒したい、邪気眼がうずいて力が暴走する……<br>
                        そんな魔王様たちに厨二気分なひとときを送るための厨二心ジェネレーターです。
                    </p>
                    <div class="p-article--btnbox">
                        <a href="https://leveldrain.sumomo.ne.jp/WebEffectGenerator/" class="c-button" target="_blank"
                            rel="noopener noreferrer">オープニングページへ</a>
                    </div>

                    <p class="c-heading">
                        Three.jsを初めて触った講義の最終課題。
                    </p>

                    <p class="c-heading">制作環境</p>
                    <ul class="p-article--list">
                        <li>HTML/CSS</li>
                        <li>Three.js</li>
                        <li>blender</li>
                    </ul>

                    <h3 class="p-article--title">属性の変更が可能</h3>
                    <p class="c-heading">
                        風、炎の2種類の属性を選択可能です。また、形状は竜巻か球体に変更ができます。<br>
                        多用な属性や形状を実装する予定でしたが、提出日があったので試作品に留まってしまいました。
                    </p>
                    <div class="p-article--fig">
                        <img src="../img/img_geostorm.png" alt="">
                    </div>

                    <div class="p-article--btnbox">
                        <a href="https://leveldrain.sumomo.ne.jp/WebEffectGenerator/geostorm.html" class="c-button"
                            target="_blank" rel="noopener noreferrer">実際のWebサイトへ</a>
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
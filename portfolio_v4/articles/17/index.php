<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ソシャゲプランナー時代 | Portfolio</title>
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
                    <img src="../img/img_excel.png" alt="">
                </div>
            </section>

            <section class="p-article--text">
                <div class="l-container section-fadein">
                    <h2 class="c-title">ソーシャルゲーム制作プロジェクト</h2>
                    <p class="c-heading">
                    <ul class="p-article--list">
                        <li>プランナーとして、DB内の数値調整によるゲームバランス調整を担当。強いキャラクターの需要を高め、ガチャ収益の向上に貢献しました。 </li>
                        <li>手動で行っていたExcelデータの目視確認を関数化し、作業の効率化とミスの削減を実現しました。</li>
                        <li>アプリ内に広告用Webページを設計・導入し、導線分析によるCV改善に貢献しました。</li>
                        <li>ゲームシナリオ作成ツール「宴」において、リソース管理設計を担当。<br><br>煩雑になりがちなスクリプト構造の整理とリソース管理設計を実施し、チーム内共有基盤を整備。</li>
                    </ul>
                    </p>


                    <p class="c-heading">開発環境</p>
                    <ul class="p-article--list">
                        <li>MySQL</li>
                        <li>Excel</li>
                        <li>Unity（デバッグ、プラグイン「宴」）</li>
                        <li>TortoiseSVN</li>
                        <li>Redmine</li>
                    </ul>
                </div>

                <div class="l-container section-fadein">
                    <h3 class="p-article--title">レベルデザインとは</h3>
                    <p class="c-heading">
                        ゲームの面白さに関わる攻撃力やHPなどの難易度調整を行うことです。<br>
                        実際に遊んでみて、手ごたえを感じるようにプレイヤー体験を調整します。
                    </p>
                </div>

                <div class="l-container section-fadein">
                    <h3 class="p-article--title">レベルデザインツールのサンプル</h3>
                    <p class="c-heading">
                        本Excelファイルは業務ではなく、当時遊んでいた『ファイアーエムブレム if』のキャラクターをいかに強く育てあげるかについてシミュレーションするための個人使用のツールです。
                        業務としてはデータベースに入れるためのパラメータ（HPや攻撃力などといったUXに関わる数値データ）をExcelで自動計算させ、SQLに反映させ、実機でデバッグしながら調整する「レベルデザイン」を行っていました。<br>
                        レベルデザイン業務を効率よく行うため、VLOOKUP関数などの関数を用いてよりデータベースに近い操作ができるよう工夫していました。
                    </p>
                    <div class="p-article--fig">
                        <img src="../img/img_excel.png" alt="">
                    </div>
                    <div class="p-article--btnbox">
                        <a href="https://leveldrain.sumomo.ne.jp/Portfolio/FEIF_calc.xlsx"
                            class="c-button tapunset">ダウンロード</a>
                        <p class="c-heading">
                            ※ Excelファイルにつき、スマホでのダウンロードを無効にしています。
                        </p>
                    </div>
                </div>

                <div class="l-container section-fadein">
                    <h3 class="p-article--title">制作企画の担当</h3>
                    <p class="c-heading">
                        Webページの制作、バナー発注、コピーライティング、ゲームのキャラクターデザインなど、デザイナーへ発注するための企画書を担当していました。<br>
                        また、googleアナリティクスによる解析からのガチャ導線、プレイヤーのニーズ把握およびゲーム内イベント企画改善なども行っていました。
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
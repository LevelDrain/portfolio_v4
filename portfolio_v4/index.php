<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="佐村木友紀のポートフォリオ。AI活用と修理が得意なエンジニア。">
    <meta name="keywords" content="ポートフォリオ, 佐村木">
    <meta name="google-site-verification" content="tZqs0OHBtbjxrSPSumM4AMEh1bJaXhAhjaKFlA2_iIs" />
    <title>佐村木友紀 | Engineering Portfolio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./shared/css/vendor/lity.min.css">
    <link rel="stylesheet" href="./shared/css/vendor/animsition.min.css">
    <link rel="stylesheet" href="./shared/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="./shared/css/common.css">
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "佐村木友紀 | Engineering Portfolio",
        "url": "https://leveldrain.sumomo.ne.jp/portfolio_v4/",
        "description": "佐村木友紀のポートフォリオ。AI活用と修理が得意なエンジニア。"
    }
    </script>
</head>

<body>
    <div class="animsition">
        <div class="l-bgThreejs"></div>

        <!-- header -->
        <?php require_once('./shared/header.php'); ?>

        <main class="l-main">
            <section class="p-mainVisual">
                <img class="p-mainVisual--pc" src="./shared/img/img_top_pc.png" alt="">
                <img class="p-mainVisual--sp " src="./shared/img/img_top_sp.png" alt="">
            </section>

            <?php
            //セキュリティ
            function hsc($code)
            {
                return htmlspecialchars($code, ENT_QUOTES, "UTF-8");
            }

            //CSV読み込み
            $filepath = './shared/csv/system.csv';
            $record = [];
            if (($handle = fopen($filepath, 'r')) !== false) {
                while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                    array_unshift($record, $data);
                }
            }
            fclose($handle);
            ?>

            <section class="p-pickup">
                <div class="p-pickup--container section-fadein">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- ここからswiper -->
                            <?php
                            foreach ($record as $id => $contents):
                            ?>
                            <?php if ($contents[6] == 'TRUE'): // pickup 
                                ?>
                            <div class="swiper-slide slide-item">
                                <?php if (substr($contents[4], 0, 6) === 'https:') { // 外部リンクの場合
                                            echo '<a href="' . hsc($contents[4]) . '" target="_blank" rel="noopener noreferrer">';
                                        } else {
                                            echo '<a class="animsition-link" href="./articles/' . hsc($contents[4]) . '">';
                                        } ?>
                                <img src="articles/img/<?= hsc($contents[1]) ?>" alt="" class="pointerevent">
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php endforeach; ?>
                            <!-- swiper終了 -->
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>

            <section class="p-portfolio" id="works">
                <div class="l-container">
                    <div class="c-accordion">
                        <div class="c-accordion--parent">
                            <h2 class="c-title">代表作</h2>
                        </div>

                        <div class="c-accordion--child">
                            <div class="l-flex--pc">
                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">見学予約システム</h5>
                                        <p class="text">Google Forms / Sheets / Calendar / GAS</p>
                                        <p class="text">見学予約の受付から予定管理までをGoogle
                                            Workspace上で連携。日時以外の個人情報を独自サーバーやDBに保存しない構成を設計し、運用に必要な処理をGASで実装しました。</p>
                                        <p class="text">担当：設計・実装 / 実務・事業所内</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">更新データの整合性チェック</h5>
                                        <p class="text">Excel / MySQL / Game Operations</p>
                                        <p class="text">
                                            ゲーム内データと仕様書を目視で照合していた業務に、Excel関数によるチェックを導入。更新データを貼り付けて不整合を確認できる仕組みを作り、公開ミスの抑制につなげました。
                                        </p>
                                        <p class="text">担当：業務改善 / 辰巳電子工業</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">既存Web予約システムの改修</h5>
                                        <p class="text">Laravel / Vue.js / MySQL</p>
                                        <p class="text">
                                            既存のLaravel・Vue.js製予約システムを調査し、Controller・Model・Viewの関係を確認しながら画面改修と機能追加を担当しました。
                                        </p>
                                        <p class="text">担当：コード解析・改修 / 株式会社フォーゼムなど</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">順番待ちアプリ「junban2」</h5>
                                        <p class="text">Laravel 11 / PHP / Vue 3 / Inertia.js / MySQL / Docker</p>
                                        <p class="text">
                                            既存の病院の順番待ちアプリを使ってみたところ作れそうだと思ったため、設計をリバースエンジニアリングして作ってみた個人開発。順番登録と、管理者による登録内容の更新・削除を実装しました。
                                        </p>
                                        <p class="text">担当：個人開発 / 公開環境へのデプロイ未完了</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">ECサイト入力自動化ツールの解析</h5>
                                        <p class="text">Python / Selenium</p>
                                        <p class="text">
                                            Claude
                                            Codeを使用し、設計が共有されていないAI生成のRPAのコードを読み解析しました。Seleniumによるブラウザ操作と処理フローを確認し、非エンジニアも扱えるよう、操作・確認手順をマニュアルに整理しました。
                                        </p>
                                        <p class="text">担当：コード解析・手順書作成 / 事業所内</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">細胞内ネットワークの種間比較</h5>
                                        <p class="text">Python 2 / NumPy / SciPy / Ubuntu</p>
                                        <p class="text">
                                            遺伝的相互作用データを解析し、相関係数を距離指標としたクラスタリングによって細胞内ネットワークを種間比較。NAIST修士課程で取り組んだ研究です。
                                        </p>
                                        <p class="text">担当：研究・データ解析 / 修士研究</p>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="c-accordion--parent">
                            <h2 class="c-title">技術領域</h2>
                        </div>

                        <div class="c-accordion--child">
                            <div class="l-flex--pc">
                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">Web System</h5>
                                        <p class="text">PHP / Laravel / Vue.js / JavaScript / jQuery / HTML / CSS / Java
                                            / オブジェクト指向
                                        </p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">Data &amp; Analysis</h5>
                                        <p class="text">Python / NumPy / SciPy / MySQL / データ設計 / データクレンジング / クラスタリング</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">Automation &amp; Tools</h5>
                                        <p class="text">Google Apps Script / Selenium / Excel / Docker / Git / GitHub /
                                            GitLab /
                                            SVNのようなレガシーシステム使用経験あり
                                        </p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">Design &amp; Planning</h5>
                                        <p class="text">Figma等のデザイン理解 / Web導線設計 / レベルデザイン / 情報設計 / ドキュメント作成</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">LLM</h5>
                                        <p class="text">ChatGPT（個人用） / Claude（業務用） / Gemini（主にGAS開発）</p>
                                    </div>
                                </article>

                                <article class="c-card">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title">セキュリティ（習得中）</h5>
                                        <p class="text">
                                            OWASP Juice Shop / Burp Suite / 脆弱性の仕組み・攻撃手法の学習 /
                                            安全設計・ヒューマンファクターへの関心 / 安全工学
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="c-accordion--parent">
                            <h2 class="c-title">経験の軌跡</h2>
                        </div>

                        <div class="c-accordion--child">
                            <div class="career-section">
                                <div class="career-heading">
                                    <h2>経歴・研究経験</h2>
                                    <p>バイオサイエンス研究、ゲーム開発、Webシステム、個人開発、業務改善へと経験を広げてきました。</p>
                                </div>

                                <div class="career-timeline">

                                    <!-- 学歴 -->
                                    <div class="career-item">
                                        <div class="career-date">2009.04 - 2013.03</div>
                                        <div class="career-content">
                                            <span class="career-category">EDUCATION</span>
                                            <h3>長浜バイオ大学｜バイオサイエンス学部</h3>
                                            <p>バイオサイエンス学科を卒業。脳科学者になりたかったが脳科学はやってなかった。実験よりデータ整理の方が好きなことに気づいた。</p>
                                        </div>
                                    </div>

                                    <div class="career-item">
                                        <div class="career-date">2013.04 - 2015.03</div>
                                        <div class="career-content">
                                            <span class="career-category">RESEARCH</span>
                                            <h3>奈良先端科学技術大学院大学｜バイオサイエンス研究科</h3>
                                            <p>情報科学をやりたくなったので、バイオインフォマティクスの研究室に入った。遺伝的相互作用データをPythonで解析し、相関係数を距離指標としたクラスタリングにより細胞内ネットワークを種間比較。修士課程修了。
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 職務経験 -->
                                    <div class="career-item">
                                        <div class="career-date">2015.04 - 2017.03</div>
                                        <div class="career-content">
                                            <span class="career-category">GAME DEVELOPMENT</span>
                                            <h3>辰巳電子工業株式会社｜モバイルコンテンツ事業部</h3>
                                            <p>ゲーム内データの管理・調整、レベルデザイン、イベント企画、Web導線設計を担当。Excel関数を用いたデータ確認ツールを作成し、更新データと仕様書の整合性チェックを効率化。Unity用シナリオ作成ツール「宴」のリソース管理の仕組み化にも携わる。
                                            </p>
                                            <p class="career-tech">Unity / MySQL / Excel / TortoiseSVN</p>
                                        </div>
                                    </div>

                                    <div class="career-item">
                                        <div class="career-date">2017.04 - 2020.03</div>
                                        <div class="career-content">
                                            <span class="career-category">EDUCATION / ENGINEERING</span>
                                            <h3>京都コンピュータ学院｜メディア情報学科</h3>
                                            <p>
                                                Javaを中心に、オブジェクト指向・UMLによる設計、JSP/MongoDB/TCP/IPを用いた演習、
                                                PHP・JavaScriptによるWebアプリ開発を学習。レガシーシステムやゲーム開発など、
                                                体系的に腰を据えてスキルを習得した。
                                            </p>
                                            <p class="career-tech">Java / PHP / JavaScript / MySQL / jQuery /
                                                Three.js</p>
                                        </div>
                                    </div>

                                    <!-- 個人受託 -->
                                    <div class="career-item">
                                        <div class="career-date">2020.01</div>
                                        <div class="career-content">
                                            <span class="career-category">FREELANCE</span>
                                            <h3>個人受託 | Jimdoサイトの修正・完成</h3>
                                            <p>
                                                頼まれたので、Jimdo製の音楽教室サイトを修正・完成。紙資料等から必要情報を整理し、
                                                サイト構成・文章作成・設定・画像編集まで一貫して対応。
                                            </p>
                                            <p class="career-tech">Jimdo / Photoshop / Illustrator</p>
                                        </div>
                                    </div>

                                    <!-- Web開発 -->
                                    <div class="career-item">
                                        <div class="career-date">2020.05 - 2020.11</div>
                                        <div class="career-content">
                                            <span class="career-category">WEB DEVELOPMENT</span>
                                            <h3>株式会社フォーゼム</h3>
                                            <p>
                                                Laravel / Vue.jsによる既存Web予約システムの解析・改修・機能追加。
                                                HTML / CSS / jQueryによる塾サイト制作、LP制作も担当。整骨院セミナー広告用LP（縦約42,100px）を納期5日で納品。
                                            </p>
                                            <p class="career-tech">Laravel / Vue.js / Blade / JavaScript / jQuery /
                                                Docker / GitLab</p>
                                        </div>
                                    </div>

                                    <!-- 個人開発 -->
                                    <div class="career-item">
                                        <div class="career-date">2023.12 - 2026</div>
                                        <div class="career-content">
                                            <span class="career-category">PERSONAL DEVELOPMENT</span>
                                            <h3>個人開発 | 病院の順番待ちアプリ「junban2」</h3>
                                            <p>
                                                Laravel / Vue3を用いて、予約登録から管理者による更新・削除まで実装。
                                                データベース設計、画面実装、アプリケーション開発に取り組む。
                                            </p>
                                            <p class="career-tech">Laravel 11 / PHP / Vue 3 / Inertia.js / Vite /
                                                MySQL / Docker</p>
                                            <a href="https://github.com/LevelDrain/junban2" target="_blank"
                                                rel="noopener noreferrer">GitHub：junban2</a>
                                        </div>
                                    </div>

                                    <!-- チーム開発 -->
                                    <div class="career-item">
                                        <div class="career-date">2023.12 - 2026</div>
                                        <div class="career-content">
                                            <span class="career-category">TEAM DEVELOPMENT</span>
                                            <h3>実習先制作会社｜チーム開発実習</h3>
                                            <p>
                                                工業製品ECサイトの既存コードを解析し、処理フローと影響範囲を確認して機能追加。
                                                レシート出力項目の追加に伴うDBカラム追加・マイグレーション作成と適用を担当。Slack等で進捗・調査内容を共有。
                                            </p>
                                            <p class="career-tech">Laravel / Vue.js / MySQL / Docker / GitLab /
                                                Discord</p>
                                        </div>
                                    </div>

                                    <!-- 現在の業務 -->
                                    <div class="career-item">
                                        <div class="career-date">2026.08 - 現在</div>
                                        <div class="career-content">
                                            <span class="career-category">BUSINESS IMPROVEMENT / ENGINEERING</span>
                                            <h3>滋賀県の就労継続支援事業所｜開発・業務改善</h3>
                                            <p>
                                                <strong>■ 見学予約システム</strong><br>
                                                Google Apps Scriptで開発。Google
                                                Forms／スプレッドシート／Calendarを連携し、日時以外の個人情報を独自サーバー・DBに保存しない構成を設計・実装。
                                            </p>
                                            <p>
                                                <strong>■ RPA解析・文書化</strong><br>
                                                Claude Codeを使って、ECサイト入力自動化RPAの既存コードを解析し、
                                                処理フローとSeleniumの利用を確認。非エンジニア向けマニュアルを作成。
                                            </p>
                                            <p class="career-tech">Google Workspace / GAS / Python / Selenium /
                                                Gemini / Claude Code</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-portfolio">
                <div class="l-container">
                    <div class="c-accordion">
                        <div class="c-accordion--parent">
                            <h2 class="c-title">公開可能な実績（NDA範囲外）</h2>
                        </div>

                        <div class="c-accordion--child">
                            <div class="l-flex--pc">
                                <!-- ここからカード展開 -->
                                <?php
                                foreach ($record as $id => $contents):
                                ?>
                                <?php if ($contents[5] == 'work'): // カテゴリ 
                                    ?>
                                <a class="c-card animsition-link" href="./articles/<?= hsc($contents[4]) ?>">
                                    <img class="c-card--img" src="articles/img/<?= hsc($contents[1]) ?>" alt="">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title"><?= nl2br(hsc($contents[2])) ?></h5>
                                        <p class="text">
                                            <?= nl2br(hsc($contents[3])) ?>
                                        </p>
                                    </div>
                                </a>
                                <?php endif; ?>

                                <?php endforeach; ?>
                                <!-- カード終了 -->
                            </div>
                        </div>

                        <div class="c-accordion--parent">
                            <h2 class="c-title">学習用に作ったもの</h2>
                        </div>

                        <div class="c-accordion--child">
                            <div class="l-flex--pc">
                                <!-- ここからカード展開 -->
                                <?php
                                foreach ($record as $id => $contents):
                                ?>
                                <?php if ($contents[5] == 'web'): // カテゴリ 
                                    ?>
                                <a class="c-card animsition-link" href="./articles/<?= hsc($contents[4]) ?>">
                                    <img class="c-card--img" src="articles/img/<?= hsc($contents[1]) ?>" alt="">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title"><?= nl2br(hsc($contents[2])) ?></h5>
                                        <p class="text">
                                            <?= nl2br(hsc($contents[3])) ?>
                                        </p>
                                    </div>
                                </a>
                                <?php endif; ?>

                                <?php endforeach; ?>
                                <!-- カード終了 -->
                            </div>
                        </div>

                        <div class="c-accordion--parent">
                            <h2 class="c-title">ソシャゲ企画のお仕事</h2>
                        </div>

                        <div class="c-accordion--child">
                            <div class="l-flex--pc">
                                <!-- ここからカード展開 -->
                                <?php foreach ($record as $id => $contents): ?>

                                <?php if ($contents[5] == 'career'): // カテゴリ  
                                    ?>

                                <?php if (substr($contents[4], 0, 6) === 'https:') { // 外部リンクの場合
                                            echo '<a class="c-card" href="' . hsc($contents[4]) . '" target="_blank" rel="noopener noreferrer">';
                                        } else {
                                            echo '<a class="c-card animsition-link" href="./articles/' . hsc($contents[4]) . '">';
                                        } ?>
                                <img class="c-card--img" src="articles/img/<?= hsc($contents[1]) ?>" alt="">
                                <div class="c-card--body">
                                    <h5 class="c-card--title"><?= nl2br(hsc($contents[2])) ?></h5>
                                    <p class="text">
                                        <?= nl2br(hsc($contents[3])) ?>
                                    </p>
                                </div>
                                </a>

                                <?php endif; ?>

                                <?php endforeach; ?>
                                <!-- カード終了 -->
                            </div>
                        </div>

                        <div class="c-accordion--parent">
                            <h2 class="c-title">アート系の趣味について</h2>
                        </div>

                        <div class="c-accordion--child">
                            <div class="l-flex--pc">
                                <!-- ここからカード展開 -->
                                <?php
                                foreach ($record as $id => $contents):
                                ?>
                                <?php if ($contents[5] == 'art'): // カテゴリ 
                                    ?>
                                <a class="c-card animsition-link" href="./articles/<?= hsc($contents[4]) ?>">
                                    <img class="c-card--img" src="articles/img/<?= hsc($contents[1]) ?>" alt="">
                                    <div class="c-card--body">
                                        <h5 class="c-card--title"><?= nl2br(hsc($contents[2])) ?></h5>
                                        <p class="text">
                                            <?= nl2br(hsc($contents[3])) ?>
                                        </p>
                                    </div>
                                </a>
                                <?php endif; ?>

                                <?php endforeach; ?>
                                <!-- カード終了 -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="p-profile" id="Profile">
                <div class="l-container section-fadein">
                    <div class="l-flex">
                        <div class="p-profile--item">
                            <img class="p-profile--img" src="./shared/img/icon3rd.jpg" alt="Yuki Samuraki">
                            <p class="c-title">佐村木 友紀</p>
                            <p class="p-profile--name">Yuki Samuraki</p>
                        </div>
                        <div class="text">
                            <p class="c-heading heading--pc">
                                脳科学者になりたかったが、社会との折り合いをつけ続けた結果、生物学からデータ解析、ゲーム運営、Web開発へ。
                            </p>
                            <p class="c-heading heading--pc">
                                領域をまたいで学んできた経験を活かし、システムの構造とユーザーのニーズを見ながら、今度こそAIエンジニアを目指します！
                            </p>
                            <br>
                            <p class="c-heading heading--pc">
                                現在は安全工学やセキュリティ領域にも関心を持ち、基礎から学習を続けています。
                            </p>
                            <br>
                            <p class="c-heading heading--pc">
                                <a class="text-link" href="https://github.com/LevelDrain" target="_blank"
                                    rel="noopener noreferrer">GitHub <span>↗</span></a>
                            </p>
                            <p class="c-heading heading--pc">
                                <a class="text-link"
                                    href="https://crowdworks.jp/public/employees/4064722?ref=share_url_wkprofile"
                                    target="_blank" rel="noopener noreferrer">クラウドワークス <span>↗</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- footer -->
        <?php require_once('./shared/footer.php'); ?>
    </div>

    <script src="./shared/js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javaの学習成果 | Portfolio</title>
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
                    <img src="../img/img_java.png" alt="">
                </div>
            </section>

            <section class="p-article--text">
                <div class="l-container section-fadein">
                    <h2 class="c-title">Javaの学習成果</h2>

                    <p class="c-heading">
                        Javaの基礎文法やオブジェクト指向プログラミングを学びながら、
                        デスクトップアプリケーションやWebアプリケーションの制作に取り組みました。
                        学習内容を実際のプログラムとして形にすることを通じて、
                        Javaによるアプリケーション開発の基礎を身につけました。
                    </p>

                    <p class="c-heading">
                        GUIアプリケーションではJavaFXを使用した画面構築やデータ管理、
                        WebアプリケーションではServlet・JSPやWebSocketを利用した
                        クライアントとサーバー間の通信などを学習しました。
                    </p>

                    <p class="c-heading">学習した技術・開発分野</p>
                    <ul class="p-article--list">
                        <li>Java / オブジェクト指向プログラミング</li>
                        <li>クラス・継承・インターフェース</li>
                        <li>コレクション / 例外処理</li>
                        <li>ファイル入出力 / XML</li>
                        <li>JavaFX / FXML</li>
                        <li>HTTP通信 / REST API / JSON</li>
                        <li>Servlet / JSP</li>
                        <li>WebSocketによるリアルタイム通信</li>
                    </ul>

                    <p class="c-heading">制作したアプリケーション</p>

                    <h3 class="p-article--title">
                        住所検索アプリケーション（JavaFX）
                    </h3>
                    <p class="c-heading">
                        JavaFXとFXMLを使用して住所検索アプリケーションを制作しました。
                        HeartRails Geo APIと連携し、キーワードや郵便番号をもとに住所情報を取得します。
                        Gsonを利用してJSON形式のレスポンスを解析し、
                        検索結果や住所の詳細を画面に表示する仕組みを実装しました。
                    </p>
                    <ul class="p-article--list">
                        <li>JavaFX / FXML</li>
                        <li>HTTPURLConnection</li>
                        <li>Gson / JSON</li>
                        <li>HeartRails Geo API</li>
                    </ul>
                    <p class="c-heading">
                        GitHub：
                        <a href="https://github.com/LevelDrain/JavaFX-Address-Search" target="_blank"
                            rel="noopener noreferrer">
                            JavaFX-Address-Search ↗
                        </a>
                    </p>

                    <h3 class="p-article--title">
                        ToDo管理アプリケーション（JavaFX）
                    </h3>
                    <p class="c-heading">
                        JavaFXのTableViewを利用したToDo管理アプリケーションを制作しました。
                        タスクの件名・期限・優先度を管理し、一覧表示やセルの編集に対応しています。
                        また、XML形式でのデータ保存・読み込みを実装し、
                        アプリケーション終了後もタスク情報を保持できる構成を学習しました。
                    </p>
                    <ul class="p-article--list">
                        <li>JavaFX / TableView</li>
                        <li>オブジェクト指向設計</li>
                        <li>LocalDateTimeによる日時管理</li>
                        <li>XMLによるデータ保存・読み込み</li>
                    </ul>
                    <p class="c-heading">
                        GitHub：
                        <a href="https://github.com/LevelDrain/Java-Learning-Exercises/tree/main/JavaAppToDo"
                            target="_blank" rel="noopener noreferrer">
                            Java-Learning-Exercises / JavaAppToDo ↗
                        </a>
                    </p>

                    <h3 class="p-article--title">
                        WebSocketチャットアプリケーション
                    </h3>
                    <p class="c-heading">
                        Servlet・JSPによる画面遷移とWebSocketによるリアルタイム通信を組み合わせ、
                        複数のチャットルームを扱うWebアプリケーションを制作しました。
                        WebSocketのセッション情報を利用してルームごとに接続を管理し、
                        同じルームに参加しているクライアントへメッセージを配信する仕組みを実装しました。
                    </p>
                    <ul class="p-article--list">
                        <li>Servlet / JSP</li>
                        <li>WebSocket</li>
                        <li>JSON-B</li>
                        <li>Payara Server</li>
                        <li>セッション管理 / メッセージ配信</li>
                    </ul>
                    <p class="c-heading">
                        GitHub：
                        <a href="https://github.com/LevelDrain/Java-WebSocket-Chat" target="_blank"
                            rel="noopener noreferrer">
                            Java-WebSocket-Chat ↗
                        </a>
                    </p>

                    <h3 class="p-article--title"></h3>
                    <p class="c-heading">
                        これらの制作を通じて、JavaによるGUIアプリケーションの開発から、
                        API連携やWebSocketを利用したネットワークアプリケーションの構築まで、
                        幅広い技術領域に取り組みました。
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
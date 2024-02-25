<!-- このファイルの著作権表示 -->
<!-- (C) 2024 プログラミングラボ すべての権利を保持します。 -->
<!DOCTYPE html>
<html lang="ja" target="_blank">
<head>
    <meta charset="UTF-8"/>
    <title>プログラミングラボ - PHP Lab</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
    <style>
    </style>
</head>
    <body>
        <header>
        <?php
                include 'class/MainMenu.php'; // クラスが定義されているPHPファイルをインクルードする
                $mainMenu = new MainMenu();
                echo $mainMenu->generateMainMenuList();
        ?>
        </header>
        <main>
        <h1>プログラミングラボ - PHP Lab</h1>
    <ul>
        <li><a href="reference">リファレンス（reference）</a></li>
        <li><a href="help">ヘルプ（HELP）</a></li>
        <!-- 他のページを追加する場合はここにリンクを追加してください -->
    </ul>
    <hr style="both:clear;width:100%;">

    <section style="padding:20px;">
    <h2>PHPについて</h2>
    <p>PHP（PHP: Hypertext Preprocessor）は、主にWeb開発に使用されるサーバーサイドのプログラミング言語です。</p>
    <p>1994年にリリースされ、広く使われています。PHPはHTMLに埋め込んで使用することができ、動的なウェブページを生成することができます。</p>
    <p>主な特徴や用途は次のとおりです：</p>
    <ol>
        <li><strong>動的なウェブサイトの構築：</strong>PHPはHTMLに埋め込んで使用され、変数や制御構造を含むことができます。これにより、動的なコンテンツを生成することができます。</li>
        <li><strong>データベースとの連携：</strong>PHPはMySQLやPostgreSQLなどのデータベースとの連携が容易であり、データベースから情報を取得し、ウェブページに表示することができます。</li>
        <li><strong>フォームの処理：</strong>PHPは、ウェブフォームからのデータを受け取り、処理するのによく使われます。例えば、ユーザーからの入力を検証し、データベースに保存するなどの処理を行うことができます。</li>
        <li><strong>セッション管理：</strong>PHPはセッションを管理するための関数や仕組みを提供しており、ユーザーの状態を追跡し、個々のユーザーに関連付けられたデータを保存することができます。</li>
        <li><strong>ファイル処理：</strong>PHPはファイルの読み書きや操作を行うための関数を提供しており、ファイルのアップロードやダウンロード、編集などの操作が可能です。</li>
    </ol>
    <p>PHPはオープンソースであり、無料で利用することができます。また、多くのウェブサーバーがPHPのサポートを提供しており、容易にウェブアプリケーションを構築することができます。</p>

            </section>
        </main>
        <footer>
            <section style="clear:both;text-align:left;">
            <?php
                include 'class/WebNavigation.php'; // クラスが定義されているPHPファイルをインクルードする
                $webNavigation = new WebNavigation();
                echo $webNavigation->generateNavigationList();
            ?>
            </section>
            <section style="clear:both;text-align:center;">
                
                &copy; 2011 - <script>
                    var newDate = new Date();
                    //年・月・日・曜日を取得する
                    var year = newDate.getFullYear();
                    document.write(year);
                    </script> プログラミングラボ
            </section>
        </footer>
    </body>
</html>

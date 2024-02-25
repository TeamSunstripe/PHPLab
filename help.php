<!-- このファイルの著作権表示 -->
<!-- (C) 2024 プログラミングラボ すべての権利を保持します。 -->
<!DOCTYPE html>
<html lang="ja" target="_blank">
<head>
    <meta charset="UTF-8"/>
    <title>プログラミングラボ - PHP Lab - HELP</title>
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
        <h1>PHP Lab - HELP</h1>
    <ul>
        <li><a href="https://www.php.net/manual/ja/getting-started.php">はじめに</a></li>
        <li><a href="https://www.php.net/manual/ja/langref.php">言語リファレンス</a></li>
        <li><a href="https://www.php.net/manual/ja/funcref.php">関数リファレンス</a></li>
        <li><a href="https://www.php.net/manual/ja/faq.php">FAQ</a></li>
        <li><a href="https://www.php.net/manual/ja/install.php">インストール手順</a></li>
        <li><a href="https://www.php.net/manual/ja/security.php">セキュリティ</a></li>
        <!-- 他のPHPヘルプページを追加する場合はここにリンクを追加してください -->
    </ul>
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

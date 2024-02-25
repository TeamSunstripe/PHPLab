<!-- このファイルの著作権表示 -->
<!-- (C) 2024 プログラミングラボ すべての権利を保持します。 -->
<!DOCTYPE html>
<html lang="ja" target="_blank">
    <head>
        <meta charset="UTF-8"/>
        <title>プログラミングラボ - PHP Lab - Reference</title>
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
        <h1>PHP Lab - Reference</h1>

    <ul>
        <li><a href="https://www.php.net/manual/ja/language.basic-syntax.php">基本構文</a></li>
        <li><a href="https://www.php.net/manual/ja/language.variables.php">変数</a></li>
        <li><a href="https://www.php.net/manual/ja/language.constants.php">定数</a></li>
        <li><a href="https://www.php.net/manual/ja/language.types.php">データ型</a></li>
        <li><a href="https://www.php.net/manual/ja/language.operators.php">演算子</a></li>
        <li><a href="https://www.php.net/manual/ja/language.control-structures.php">制御構造</a></li>
        <!-- 他のPHPリファレンスページを追加する場合はここにリンクを追加してください -->
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

<!-- このファイルの著作権表示 -->
<!-- (C) 2024 プログラミングラボ すべての権利を保持します。 -->
<?php

class MainMenu {
    private $mainMenuList;

    public function __construct() {
        $this->mainMenuList = $this->getMainMenuList();
    }

    public function generateMainMenuList() {
        $html = '<nav class="mainMenuList">';
        $html .= '<menu>';
        foreach ($this->mainMenuList as $menuItem) {
            $html .= '<li class="mainMenuList"><a class="mainMenu' . ($menuItem['selected'] ? ' selected' : '') . '" href="' . $menuItem['url'] . '">' . $menuItem['title'] . '</a></li>';
        }
        $html .= '</menu>';
        $html .= '</nav>';
        return $html;
    }

    public function getMainMenuList() {
    // メニューアイテムの配列
    $menuItems = [
        ['title' => 'HOME', 'url' => 'http://sunstripe.main.jp/', 'selected' => false],
        ['title' => 'プログラミングラボ', 'url' => 'http://sunstripe.main.jp/programming/lab/', 'selected' => false],
        // ['title' => 'Design Lab', 'url' => '../DesignLab/', 'selected' => false],
        // ['title' => 'HTMLLab', 'url' => '../HTMLLab/', 'selected' => false],
        // ['title' => 'CSSLab', 'url' => '../CSSLab/', 'selected' => false],
        ['title' => 'PHPLab', 'url' => '../PHPLab/', 'selected' => true],
        // ['title' => 'JavaScriptLab', 'url' => '../JavaScriptLab/', 'selected' => false],
        // ['title' => 'GitMaster', 'url' => '../GitMaster/', 'selected' => false]
    ];
    return $menuItems;
    }
}

?>
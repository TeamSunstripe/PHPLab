<!-- このファイルの著作権表示 -->
<!-- (C) 2024 プログラミングラボ すべての権利を保持します。 -->
<?php

class WebNavigation {
    private $navigationList;

    public function __construct() {
        $this->navigationList = $this->getNaviList();
    }

    public function generateURL($item) {
        return '<a href="'.$item['url'].'">'.$item['title'].'</a>';
    }

    public function generateNavigationList() {
        $naviString = '';
        foreach ($this->navigationList as $navi) {
            $naviString .= $this->generateURL($navi) . ' > ';
        }
        // 末尾の余分な ' > ' を削除
        $naviString = rtrim($naviString, ' > ');

        return $naviString;
    }

    public function getNaviList() {
        // 使用例:
        $naviList = [
            [
                'title' => "HOME",
                'url' => "https://sunstripe.main.jp",
            ],
            [
                'title' => "プログラミングラボ",
                'url' => "https://sunstripe.main.jp/programming/lab/",
            ],
            [
                'title' => "プログラミングラボ - PHP Lab",
                'url' => "./",
            ],
            [
                'title' => "reference",
                'url' => "reference",
            ],
            [
                'title' => "HELP",
                'url' => "help",
            ]
        ];
        return $naviList;
    }
}
?>
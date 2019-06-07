<?php
require_once(__DIR__ . '/myconfig.php');


$nowMonth = date('n', time());
$nextMonth = $nowMonth + 1;
if ($nextMonth == 13) {
    $nextMonth = 1;
}

$birthList = get_birth_by_month($nextMonth);

$cnt = count($birthList);

// Body
if ($cnt > 0) {
    $str = implode("\n", $birthList);
    $content = sprintf("%s月%s：\n%s\n\n%s", $nextMonth, '壽星有', $str, '煩請麗雅記得協助購買貼心小禮物~感謝.');
    define ('CONTENT', $content);


    define ('GROUP_ID', $groupIdYouthMemberCenter);
    require_once( __DIR__ . '/saysomething.php');
}

function get_birth_by_month($month) {
    $birth = Array(
        "1" => [
                '1/4 雨鷺',
                '1/6 韋恩',
                '1/11 蒙恩',
                '1/17 伊勒',
                '1/27 栩柔'
        ],
        "2" => [
                '2/5 蒙惠',
                '2/7 塔甘',
                '2/14 純禎',
                '2/18 麗雅'
        ],
        "3" => ['3/18 安茹'],
        "4" => [
                '4/8 哈拿',
                '4/29 瑞祥'
        ],
        "5" => ['5/10 紹軍'],
        "6" => [
                '6/2 佳恩',
                '6/15 納儒',
                '6/16 佳玟'
        ],
        "7" => [
                '7/5 小武老師',
                '7/22 美怡',
                '7/23 聖群',
                '7/24 書懷',
                '7/26 念新',
                '7/28 婉君'
        ],
        "8" => ['8/22 庭瑄',
                '8/28 佳芊',
                '8/29 佳媛'
        ],
        "9" => ['9/3 詩婷',
                '9/7 婉容',
                '9/14 沛恩'
        ],
        "10" => ['10/19 劭瑋'],
        "11" => [
                '11/2 雅芊',
                '11/11 瑞華',
                '11/27 恩妮',
                '11/30 曉芬'
        ],
    );
    return $birth[$month];
}

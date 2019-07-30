<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $channelAccessToken);
define("CHANNEL_SECRET", $channelSecret);


// get command line argv
unset($argv1);
if ( 1 < $argc) {
    $program = array_shift($argv);
    $argv1 = array_shift($argv);
}

$argv1 = 'photo';

// Body
switch ($argv1) {
    case 'photo':
        $content = sprintf("%s \n%s \n%s", '月底到了，幾件事情報告：', '1. 麻煩 Pisuy 每月最後一天整理 Line 相簿備份到電腦', '2. 油資還沒有申請的請盡快申請.', '感謝~');
        break;
    default:
        // do nothing

}

// Alert
if (isset($content)) {
    define ('CONTENT', $content);
    define ('GROUP_ID', $groupIdSlaqElder);
    require_once( __DIR__ . '/saysomething.php');
}

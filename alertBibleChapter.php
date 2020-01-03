<?php
exit;
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $channelAccessTokenOfBible);
define("CHANNEL_SECRET", $channelSecretOfBible);

// get command line argv
unset($argv1);
if ( 1 < $argc) {
    $program = array_shift($argv);
    $argv1 = array_shift($argv);
}

// force to alert intro
$argv1 = 'intro';

// Body
switch ($argv1) {
    case 'chapter':
        require_once(__DIR__ . '/bibleSchedule.php');
        break;
    case 'intro':
        $saying_mode = 'custom';
        require_once(__DIR__ . '/bibleScheduleIntro.php');
        break;
    default:
        // do nothing
        die();

}

// get this date
date_default_timezone_set('Asia/Taipei');
$getdate = getdate();
$thisDate = sprintf('%s/%s', $getdate['mon'], $getdate['mday']);

// Get Today's Bible Chart
$todayBibleChart = $bibleList[$thisDate];

// Body
$content = $todayBibleChart;
define ('CONTENT', $todayBibleChart);

if (isset($content)) {
    define ('GROUP_ID', $groupIdReadBible);
    require_once( __DIR__ . '/saysomething.php');
}

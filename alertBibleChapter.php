<?php
require_once(__DIR__ . '/myconfig.php');
require_once(__DIR__ . '/bibleSchedule.php');

// get this date
date_default_timezone_set('Asia/Taipei');
$getdate = getdate();
$thisDate = sprintf('%s/%s', $getdate['mon'], $getdate['mday']);

// Get Today's Bible Chart
$todayBibleChart = $bibleList[$thisDate];

// Body
$content = sprintf('%s %s', '今日', $todayBibleChart);
define ('CONTENT', $content);

//define ('GROUP_ID', $groupIdReadBible);
require_once( __DIR__ . '/saysomething.php');

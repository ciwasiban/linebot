<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $channelAccessToken);
define("CHANNEL_SECRET", $channelSecret);

date_default_timezone_set('Asia/Taipei');

$leaderOfWeek = Array(
    1 => '@婉容',
    2 => '@麗雅 / @雨鷺',
    3 => '@曉芬',
    4 => '@蒙惠',
    5 => '@蒙恩',
);


$week = weekOfMonth();
$leader = $leaderOfWeek[$week];

// Body
$content = sprintf("第 %s 週主領為 %s ，請盡早給出敬拜詩歌及安排樂手，以便同工們預備，感謝您的服侍。 (若有異動請在群組上提醒)", $week, $leader);
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdSlaqWorship);
require_once( __DIR__ . '/saysomething.php');

# Week of the month = Week of the year - Week of the year of first day of month + 1
function weekOfMonth() {
    // Get this day
    $thisDate = strtotime(date('Y-m-d', time()));

    //Get the first day of the month.
    $firstOfMonth = strtotime(date("Y-m-01", time()));

    //Apply above formula.
    return intval(date("W", $thisDate)) - intval(date("W", $firstOfMonth)) + 1;
}

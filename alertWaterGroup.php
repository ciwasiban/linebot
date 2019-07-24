<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $channelAccessToken);
define("CHANNEL_SECRET", $channelSecret);

// Body
$content = sprintf("%s\n\n%s", '這週日下午 13:00 在二伯家集合，一起出發拉水管，不能到的請提早請假，以便安排人手，感謝~', "補充說明：\n1.會議紀錄提到每戶至少要出一人，未到的要繳交600元，用作當天我們另外請工人之薪資\n2.如當天下雨則暫停一次");
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdWater);
require_once( __DIR__ . '/saysomething.php');

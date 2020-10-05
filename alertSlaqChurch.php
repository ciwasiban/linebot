<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $channelAccessToken);
define("CHANNEL_SECRET", $channelSecret);

// Body
$content = sprintf('%s', '平安, 麻煩同工們協助回報「本週聚會人數」及「明天獻詩」,感謝~');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdSlaq);
require_once( __DIR__ . '/saysomething.php');

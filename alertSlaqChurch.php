<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $channelAccessToken);
define("CHANNEL_SECRET", $channelSecret);

// Body
$content = sprintf('%s', '請協助回報本週聚會人數及明天獻詩,感謝~');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdSlaq);
require_once( __DIR__ . '/saysomething.php');

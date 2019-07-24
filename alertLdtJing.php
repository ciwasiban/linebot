<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $ldtChannelAccessToken);
define("CHANNEL_SECRET", $ldtChannelSecret);

// Body
$content = sprintf('%s', '明天(四)上午 10:40 門訓，美菁姐 ok 嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtJing);
require_once( __DIR__ . '/saysomething.php');

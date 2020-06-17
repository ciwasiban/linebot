<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $ldtChannelAccessToken);
define("CHANNEL_SECRET", $ldtChannelSecret);

// Body
$content = sprintf('%s', '明天(五)晚上 21:30 小組，大家都可以參加嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtJing);
require_once( __DIR__ . '/saysomething.php');

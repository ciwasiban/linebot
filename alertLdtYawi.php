<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $ldtChannelAccessToken);
define("CHANNEL_SECRET", $ldtChannelSecret);

// Body
$content = sprintf('%s', '明天(五)晚上 20:30 小組大家都ok嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtYawi);
require_once( __DIR__ . '/saysomething.php');

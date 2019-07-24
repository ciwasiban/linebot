<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $ldtChannelAccessToken);
define("CHANNEL_SECRET", $ldtChannelSecret);

// Body
$content = sprintf('%s', '今天(日)晚上 20:00 小組大家都ok嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtBotu);
require_once( __DIR__ . '/saysomething.php');

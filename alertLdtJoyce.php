<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $ldtChannelAccessToken);
define("CHANNEL_SECRET", $ldtChannelSecret);

// Body
$content = sprintf('%s', '明天(六)早上 10:00  門訓大家都ok嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtJoyce);
require_once( __DIR__ . '/saysomething.php');

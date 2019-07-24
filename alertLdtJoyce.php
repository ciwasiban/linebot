<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $channelAccessToken);
define("CHANNEL_SECRET", $channelSecret);

// Body
$content = sprintf('%s', '明天(三)晚上十點門訓大家都ok嗎？麗雲要九點開始嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtJoyce);
require_once( __DIR__ . '/saysomething.php');

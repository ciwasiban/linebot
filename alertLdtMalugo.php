<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $ldtChannelAccessToken);
define("CHANNEL_SECRET", $ldtChannelSecret);

// Body
$content = sprintf('%s', '子凡平安，明天(六)下午 14:00 小組 ok 嗎？另外，跟你確認下一次門訓的時間。');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtMalugo);
require_once( __DIR__ . '/saysomething.php');

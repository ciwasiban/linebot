<?php
require_once(__DIR__ . '/myconfig.php');

define("CHANNEL_ACCESS_TOKEN", $ldtChannelAccessToken);
define("CHANNEL_SECRET", $ldtChannelSecret);

// Body
$content = sprintf('%s', 'Hi @美菁姐, 明天(二)下午 16:00 小組你可以參加嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtJing);
require_once( __DIR__ . '/saysomething.php');

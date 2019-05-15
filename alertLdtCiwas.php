<?php
require_once(__DIR__ . '/myconfig.php');

// Body
$content = sprintf('%s', '明天(四)晚上 20:00 小組大家都ok嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtCiwas);
require_once( __DIR__ . '/saysomething.php');

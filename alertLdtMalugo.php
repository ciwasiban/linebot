<?php
require_once(__DIR__ . '/myconfig.php');

// Body
$content = sprintf('%s', '明天 10:30 小組大家都ok嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtMalugo);
require_once( __DIR__ . '/saysomething.php');

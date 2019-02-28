<?php
require_once(__DIR__ . '/myconfig.php');

// Body
$content = sprintf('%s', '明天九點門訓大家都ok嗎？');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdLdtJoyce);
require_once( __DIR__ . '/saysomething.php');

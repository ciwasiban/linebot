<?php
require_once(__DIR__ . '/myconfig.php');

// Body
date_default_timezone_set('Asia/Taipei');
$time = date("Y-m-d H:i:s");
$content = sprintf("%s\n%s", 'Just Testing', $time);
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdHey);
require_once( __DIR__ . '/saysomething.php');

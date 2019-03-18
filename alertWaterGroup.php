<?php
require_once(__DIR__ . '/myconfig.php');

// Body
$content = sprintf("%s\n\n%s", '這週日下午要一起拉水管，不能到的請提早請假，以便安排人手，感謝~', '(補充說明：會議紀錄提到每戶至少要出一人，未到的要繳交500元，用作當天我們另外請工人之薪資)');
define ('CONTENT', $content);

define ('GROUP_ID', $groupIdWater);
require_once( __DIR__ . '/saysomething.php');

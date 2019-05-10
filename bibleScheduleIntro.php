<?php
$url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vRWXBZqudXiNu8iiekrXVaWpdSeAlZBexKS6KnuazUkee_OxFitPqu5Q0F4Xda13dJrnRQXeXggCVBx/pub?output=tsv';
$url .= "&_t=" . time();
$content = get_data_from_url($url);

// if content is html then do nothing
if (isHTML($content)) {
    die();
}
$bibleList = [];
$cnt = count($content);
if (0 < $cnt) {
    $lineList = explode(PHP_EOL, $content);
    foreach ($lineList AS $k => $line) {
        // ingnore line 0
        if (0 == $k ) {
            continue;
        } else {
            // get date
            $val = explode("\t", $line);
            $date = trim(array_shift($val));

            // get message
            $val2 = explode("\t", array_shift($val));
            $message = trim(array_shift($val2));

            // make array $bibleList
            if (!empty($date) && !empty($message)) {
                $message = str_replace("[br]", "\n", $message);    // workaround: fix tsv file has no line break character
                $bibleList[$date] = $message;
            }
        }
    }
}

if (0 == count($bibleList)) {
    die();  // do nothing
}

function get_data_from_url($url) {
	// create curl resource
	$ch = curl_init();

	// set url
	curl_setopt($ch, CURLOPT_URL, $url);

	//return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	// TRUE to force the use of a new connection instead of a cached one.
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);

	// $output contains the output string
	$xlsData= curl_exec($ch);

	// close curl resource to free up system resources
	curl_close($ch);

	return $xlsData;
}

function isHTML($text){
   $processed = htmlentities($text);
   if($processed == $text) return false;
   return true; 
}

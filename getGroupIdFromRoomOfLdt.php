<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');
require_once('./myconfig.php');

define ('GROUP_ID', $groupIdHey);

$client = new LINEBotTiny($ldtChannelAccessToken, $ldtChannelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    $text = $event['message']['text'];
					$word = "";
					$pattern = '小幫手給我';
					if (preg_match("/$pattern/i", $text, $matches, PREG_OFFSET_CAPTURE)) {
						//echo "條件符合";
						$item = trim(substr($text, $matches[0][1] + strlen($pattern)));
						if ( 0 < strlen($item)) {
							switch ($item) {
								case 'id':
									$word = 'groupId:' . $event['source']['groupId'];
									break;
								case '行事曆':
									$word = "水田教會2019行事曆：https://drive.google.com/file/d/1FviZL7IEtOQXtgcNtVQk_0TqkuTGfIa_/view?usp=sharing";
									break;
									break;
								default:
									// do nothing
							}
						} else {
							// do nothing
						}
					} else {
						//echo "條件不符合";
					}

                    /** this is a sample of reply message to the room that send a request. **/
					if (!empty($word)) {
						$client->replyMessage([
							'replyToken' => $event['replyToken'],
							'messages' => [
								[
									'type' => 'text',
									'text' => $word
									//'text' => json_encode($event)
								]
							]
						]);
                    }
                    break;
                default:
                    error_log('Unsupported message type: ' . $message['type']);
                    break;
            }
            break;
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
    }
};

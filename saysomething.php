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

require_once( __DIR__ . '/LINEBotTiny.php');
require_once( __DIR__ . '/myconfig.php');

if (defined('GROUP_ID')) {
  // do nothing
} else {
    define ('GROUP_ID', $groupIdHey);   // push to testing room
}

if (defined('CONTENT')) {
    $content = CONTENT;
} else {
    die();
}


// body
switch ($saying_mode) {
    case 'custom':
        $text = $content;
        break;
    default:
        $string_head = '平安';
        $string_foot = '';
        $text = sprintf("%s,\n%s", $string_head, $content);
}

$client = new LINEBotTiny(CHANNEL_ACCESS_TOKEN, CHANNEL_SECRET);
$client->pushMessage([
    'to' => GROUP_ID,
    'messages' => [
        [
            'type' => 'text',
            'text' => $text
        ]
    ]
]);

/*
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => $message['text']
                            ]
                        ]
                    ]);
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
*/

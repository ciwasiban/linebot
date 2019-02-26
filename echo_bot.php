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

define ('IS_PRODUCT', FALSE);

require_once('./LINEBotTiny.php');

if (TRUE === IS_PRODUCT) {
    $channelAccessToken = 'rlxJdR+9qb0tXxJqPHMMcJxs3W07TZz2LCbW/tinlQls6JbkKzmZ7TqbqCFv33L10pq294pKbfUYR7pKp7ENvd1lcj8pRFic0frU3bF4ih+cZTC9lKCsRsKdpOyk4rJdUA2Zu2G3Ax3M3FKLwaUZiAdB04t89/1O/w1cDnyilFU=';
    $channelSecret = '8d08cfd28bb41de82ae7383c34d00818';
} else {
    $channelAccessToken = 'EbJxN3isfVMXGwVGpLQipT2737GyWxUAANqztzoO0hK5av7WfwHLdvvJhNbnueVwL/hOc6KdzhRoH89gi8aPKDtIavLEQKUrfL1LiSGgROeWg2X0Yba2ZGSVzypiOufTOesPZ66DbfbRGGf6YpAEgQdB04t89/1O/w1cDnyilFU=';
    $channelSecret = '5842cbc7d191d5c9a21e46ab8419bdb3';
}

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
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
                                'text' => 'groupId:' . $event['source']['groupId']
                                //'text' => json_encode($event)
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

<?php

    public function pushMessage($message)
    {
        $header = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->channelAccessToken,
        );

        $postfields = json_encode($message);

        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,'https://api.line.me/v2/bot/message/push');
        curl_setopt($curl_handle, CURLOPT_POST, TRUE);
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);
        var_dump($query);
    }

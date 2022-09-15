<?php

const TOKEN = '5541115766:AAHaS8R716hFv1lwkb35LPq8wjaqTvqyPvI';
const BASE_URL = 'https://api.telegram.org/bot' . TOKEN . '/';

function sendRequest($method, $params = [])
{
    if (!empty($params)) {
        $url = BASE_URL . $method . '?' . http_build_query($params);
    } else {
        $url = BASE_URL . $method;
    }
    return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
}

$updates = sendRequest('getUpdates');


foreach ($updates["result"] as $val) {
    $chat_id = $val["message"]["chat"]["id"];
    sendRequest("sendMessage", ['chat_id' => $chat_id, 'text' => "test message"]);
}
var_dump($updates);
//sendStart($updates);

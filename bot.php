<?php
/**
 * Copyright 2021 GoneTone
 *
 * Line Bot
 * 範例 Example Bot 執行主文件
 *
 * 此範例 GitHub 專案：https://github.com/GoneToneStudio/line-example-bot-tiny-php
 * 此範例教學文章：https://blog.reh.tw/archives/988
 *
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api/
 */

date_default_timezone_set("Asia/Taipei"); //設定時區為台北時區

require_once('LINEBotTiny.php');

$channelAccessToken = 'EjuJI5V8dkhxlf2UwyyTpFH2CCyfWfbZvQHlkEb++HCpuRebNZLMWiIb5261Ph2qG0NMBhXubY6ZnJ1wScafSYOjJlsf1GYz72m3sKZ3AZwYyG07pVCSxeUfvFYCyV4Ut+ztxrwUsHlm8wezhaYP0wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '730bb8e5cc32933a019d58abbcdd61de';


$message = null;
$event = null;

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message': //訊息觸發
            $message = $event['message'];
            switch ($message['type']) {
                case 'text': //訊息為文字
                    require_once('includes/text.php'); //Type: Text
                    require_once('includes/image.php'); //Type: Image
                    require_once('includes/video.php'); //Type: Video
                    require_once('includes/audio.php'); //Type: Audio
                    require_once('includes/location.php'); //Type: Location
                    require_once('includes/sticker.php'); //Type: Sticker
                    require_once('includes/imagemap.php'); //Type: Imagemap
                    require_once('includes/template.php'); //Type: Template
                    require_once('includes/flex.php'); //Type: Flex
                    break;
                default:
                    error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;
        case 'postback': //postback 觸發
            require_once('postback.php'); //postback
            break;
        case 'follow': //加為好友觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => '您好，這是一個範例 Bot OuO

範例程式開源至 GitHub (包含教學)：
https://github.com/GoneTone/line-example-bot-php'
                    )
                )
            ));
            break;
        case 'join': //加入群組觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => '大家好，這是一個範例 Bot OuO

範例程式開源至 GitHub (包含教學)：
https://github.com/GoneTone/line-example-bot-php'
                    )
                )
            ));
            break;
        default:
            //error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
}

<?php



require "vendor/autoload.php";

$access_token = 'ofsgNCuuR6OONh/o59md7/a7q+8vsFTIU+nr01ecw1UWvjohJGfaaXStct9+hM6dcieapf9kqLwFjl7Usodf0iAS7v1cAb6IYBxOgxGVYPrwtcICEErPRDUxypQdrQ+UORGcBkCPt4pCcYxNWUO4+gdB04t89/1O/w1cDnyilFU=';

$channelSecret = '932fd7fa9d4d7b5dc9bff68176ea3803';

$pushID = 'Ube12b6d42e053b792179d99232e63439';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);










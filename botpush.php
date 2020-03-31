<?php



require "vendor/autoload.php";

$access_token = 'nVqY4dwb4mIINiRm4+HjfhblubJUt+X5mkvPJyfEJX9mfdfApB6WcpBuNX/48vJzAdEShisTwNYv7GCoQpQFmVArlTlSVTi0OxyWXZRDaozMGwUeSEj5nrY0VHuc8jXpWCkbqVhuyqgY4lvDiOE/jwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '936869490f21c8aeadc44a506fa95a5b';

$pushID = 'Ube12b6d42e053b792179d99232e63439';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('2222 world');

$response = $bot->pushMessage($pushID, $textMessageBuilder);






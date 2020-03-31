<?php



require "vendor/autoload.php";

$access_token = 'nVqY4dwb4mIINiRm4+HjfhblubJUt+X5mkvPJyfEJX9mfdfApB6WcpBuNX/48vJzAdEShisTwNYv7GCoQpQFmVArlTlSVTi0OxyWXZRDaozMGwUeSEj5nrY0VHuc8jXpWCkbqVhuyqgY4lvDiOE/jwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '936869490f21c8aeadc44a506fa95a5b';

$pushID = 'Ube12b6d42e053b792179d99232e63439';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');

$columns = array();
			$img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
			for($i=0;$i<5;$i++) {
				$actions = array(
					new \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Add to Card","action=carousel&button=".$i),
					new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("View","http://www.google.com")
				);
				$column = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("Title", "description", $img_url , $actions);
				$columns[] = $column;
			}
			$carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
			$outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("Carousel Demo", $carousel);




$response = $bot->replyMessage($event->getReplyToken(), $outputText);




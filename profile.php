<?php


$access_token = 'ofsgNCuuR6OONh/o59md7/a7q+8vsFTIU+nr01ecw1UWvjohJGfaaXStct9+hM6dcieapf9kqLwFjl7Usodf0iAS7v1cAb6IYBxOgxGVYPrwtcICEErPRDUxypQdrQ+UORGcBkCPt4pCcYxNWUO4+gdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;


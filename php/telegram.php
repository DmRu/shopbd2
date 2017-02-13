<?php

$name = 1;
$phone = 2;
$text = 3;
$web_sait = 'бери-дари.рус';

$name = substr(htmlspecialchars(trim($_GET['name'])), 0, 1000);
$phone =  substr(htmlspecialchars(trim($_GET['phone'])), 0, 1000);
$text =  substr(htmlspecialchars(trim($_GET['text'])), 0, 1000);

//$name = $_POST['name'];
//$phone =  $_POST['phone'];


$token = '256415590:AAGCR6mh68PQ8ykrVQIzQ0QkMlq5SQq9dqA';

$chatId = '164540709';


$text = 'У вас появился новй запрос на звонок с сайта '.$web_sait.' '.$name.' '.$phone.' Текст сообщения: '.$text;

$parametrs = array(
	'chat_id' => $chatId,
	'text' => $text
	);

$url = 'https://api.telegram.org/bot' . $token . '/sendMessage?' . http_build_query($parametrs);

file_get_contents($url);

//echo http_build_query($parametrs);

Echo 'данные успешно отправлены';

//$s = 'https://api.telegram.org/bot256415590:AAGCR6mh68PQ8ykrVQIzQ0QkMlq5SQq9dqA/sendMessage?chat_id=164540709&text=у вас новый запрос';
//file_ger_contents($s);

?>


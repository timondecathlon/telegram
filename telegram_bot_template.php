<?php

define('TOKEN', 'paste_token_here');


$tmp = file_get_contents("php://input");
$bot = json_decode($tmp, true);
$chat = $bot["message"]["chat"]["id"];
$user_first_name = $bot["message"]["from"]["first_name"];
$user_last_name = $bot["message"]["from"]["last_name"];
$user = $user_last_name.' '.$user_first_name;
$text = $bot["message"]["text"];



$telegram = new Telegram(TOKEN);

//here is your logic pls =)
if($text) {
	$msg = 'You have just enter : '.$text;
    $telegram->sendMessage( $chat, $msg );
}elseif(){
	//do smt else
}else{


}


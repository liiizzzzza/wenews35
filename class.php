<?
/*$token = "5851168804:AAEUUhcEuuzmx_d-iGCI8KxwhxHKDLvWBP8";
$chat_id = -1001366124280;

$textMessage = ",j;t lfq vyt cbk yt xbckfyenmcz";
$textMessage = urlencode($textMessage);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . $textMessage;

$result = file_get_contents($urlQuery);*/

abstract class db{
	private	$DBH;
public function	__construct($host,$user,$pass){
try{
$this->DBH= new PDO($host,$user,$pass);
}
catch (PDOExcertion $e){
echo "WARNING!!!!";
$e->setMessage();}
}
}


class tg extends db{

private const TOKEN='5851168804:AAEUUhcEuuzmx_d-iGCI8KxwhxHKDLvWBP8';
private const ID_CHANEL='-1001366124280';

public function send_news($text){
	$getQuery = array(
     "chat_id" 	=> self::ID_CHANEL,
     "text"  	=> $text,
     "parse_mode" => "html",
);

$ch = curl_init("https://api.telegram.org/bot".self::TOKEN."/sendMessage?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);
curl_close($ch);

///echo $resultQuery;
}

}




?>

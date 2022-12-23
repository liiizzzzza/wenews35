<?
require_once('class.php');
$fd=new tg ('mysql:host=localhost;dbname=tgbot','root','root');
if ($_GET['text']){$fd->send_news($_GET['text']);}
echo $_GET['text'];;

?>
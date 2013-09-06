<?php
session_start();
error_reporting(0);

// Our security check
define("SECURITY", 1);

require('include/config/global.inc.php');

$user_database_id = $_SESSION['USERDATA']['id'];

$db_connect_url = $config['db']['host'].':'.$config['db']['port'];
$db_handle = mysql_connect($db_connect_url,$config['db']['user'],$config['db']['pass']);
if(!$db_handle) { die("Connection error."); }
if(!mysql_select_db($config['db']['name'])) { die("Connection error.."); }

$sql = mysql_query("CREATE TABLE IF NOT EXISTS chat (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), date VARCHAR(300), ip VARCHAR(30), username TEXT, message TEXT, status VARCHAR(300))");

$date = strtotime('now');
$ip = $_SERVER['REMOTE_ADDR'];

$Query = mysql_query("SELECT username FROM accounts WHERE id='$user_database_id'");
if(mysql_num_rows($Query)==1) {
   $Query = mysql_query("SELECT username FROM accounts WHERE id='$user_database_id'");
   while($Row = mysql_fetch_assoc($Query)) {
      $username = $Row['username'];
   }
   $ajax = addslashes(strip_tags($_POST['ajax']));
   if($ajax==='speaker') {
      $speaker_comment = addslashes(strip_tags($_POST['speaker']));
      $sql = mysql_query("INSERT INTO chat (id,date,ip,username,message,status) VALUES ('','$date','$ip','$username','$speaker_comment','viewable')");
      mysql_close($db_handle);
      die('');
      exit;
   }
}

$ajax = addslashes(strip_tags($_GET['ajax']));
if($ajax==='room') {
   $Query = mysql_query("SELECT date, username, message FROM chat WHERE status='viewable' ORDER BY id DESC LIMIT 30");
   while($Row = mysql_fetch_assoc($Query)) {
      $db_chat_date = $Row['date'];
      $db_chat_username = $Row['username'];
      $db_chat_message = $Row['message'];
      if($username==$db_chat_username) { $char_color = '0489B1'; } else { $char_color = '0B3861'; }
      $db_chat_message = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a href=\"\\0\" target='_blank'>\\0</a>", $db_chat_message);
      $newcomment = '<p title="'.date("n/j/Y g:i:s a",$db_chat_date).'"><b style="color: #'.$char_color.';">'.$db_chat_username.': </b>'.$db_chat_message.'</p>';
      $compilecomments = $newcomment.$compilecomments;
   }
   mysql_close($db_handle);
   echo $compilecomments;
   die('');
   exit;
}

mysql_close($db_handle);
?>
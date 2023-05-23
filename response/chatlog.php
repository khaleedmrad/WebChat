<?php
include_once '../lib/database.php';
$db = new Database;

$dt = new DateTime('now', new DateTimezone('America/Los_Angeles'));
$date = $dt->format('F j, Y');
$tm = new DateTime('now', new DateTimezone('America/Los_Angeles'));
$time = $tm->format('g:i a');

$msg = str_replace("'", "", $_POST['message']);
$receiver = $_POST['receive']; // illi wsoulou
$sender = $_POST['send']; //  illi b3ath

$sql = "INSERT INTO 
    tbl_message(
     incoming_msg_id, 
     outgoing_msg_id, 
     text_message, 
     curr_date, 
     curr_time
     )VALUES(
    '$receiver', 
    '$sender', 
    '$msg', 
    '$date ',
    '$time'
    )";
$res = $db->insert($sql);
if ($res) {
} else {
   echo "Message sending failed!";
}
?>
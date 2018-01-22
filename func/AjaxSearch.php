<?php
session_start();
date_default_timezone_set('Asia/Bangkok');

require("../PHPMailer_5.2.4/class.phpmailer.php");
require("AjaxSave.php");
require("../inc/connect.php");

$response = array();
$mode = $_POST['mode'];
$arr = $_POST;

switch ($mode)
{
    case 'sendMail' :
        $response = sendMail($arr);
    break;
    case 'update_send' :
        $response = update_send($arr);
    break;
    case 'sendMails' :
        $response = sendMails($arr);
    break;
}

echo json_encode($response);

?>
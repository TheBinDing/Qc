<?php
    /**
    * Simple example script using PHPMailer with exceptions enabled
    * @package phpmailer
    * @version $Id$
    */

    @session_start();
    require("../inc/connect.php");
    date_default_timezone_set('Asia/Bangkok');

    require '../PHPMailer_5.2.4/class.phpmailer.php';
    require("../inc/connect.php");

    $ncr_id = $_GET['ncr_id'];
    $sql_update = "UPDATE
                        [QC].[dbo].[NCR]
                    SET
                        ncr_status = '1'
                    WHERE
                        ncr_id = '". $ncr_id ."' ";

    // echo $sql_update;
    mssql_query($sql_update);

    $mails = "SELECT
                CAST(u_mail as Text) as u_mail,
                CAST(site_name as Text) as site_name
            FROM
                [QC].[dbo].[Users] u inner join
                [QC].[dbo].[NCR] n on u.u_id = n.u_id inner join
                [QC].[dbo].[Site] s on n.site_id = s.site_id
            WHERE
                n.ncr_id = '". $ncr_id ."' ";
    $query_mails = mssql_query($mails);
    $row_mails = mssql_fetch_assoc($query_mails);

    $mail_bs = iconv('TIS-620', 'UTF-8', $row_mails['u_mail']);
    $Siten = iconv('TIS-620', 'UTF-8', $row_mails['site_name']);

    $subject = 'ยืนยันการตรวจสอบ NCR โครงการ '.$Siten;
    $detail = 'ยืนยันการตรวจสอบ NCR โครงการ '.$Siten.'<br>';
    $detail .= 'http://intranet.thaipolycons.co.th/';
    $mail_from = $_SESSION['SuperMail'];
    $mail_name = $_SESSION['user_name'];
    $msg = sendMail($detail,$subject,$mail_from,$mail_name,1,$mail_bs);

    function sendMail($detail,$subject,$from,$name,$send,$mails){
        $mail = new PHPMailer();
        $mail->Body = $detail;
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();// Set mailer to use SMTP
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->Host = "mail.csloxinfo.com"; // SMTP server
        // $mail->Host = "smtp.gmail.com"; // Gmail
        // $mail->Host = "smtp.live.com"; // hotmail.com
        // $mail->Port = 25; // พอร์ท 25, 465 or 587
        // $mypath = 'img/excel.png';
        // $mypath_name = iconv('UTF-8', 'TIS-620', 'รูปตัวอย่าง');
        $mail->Username = $from; // SMTP username
        $mail->Password = "tpolypassword"; // SMTP password
        //from
        $mail->SetFrom($from, $name);   
        $mail->IsHTML(true);
        //send mail
         if($send == 1){
            // $mail->addAttachment($mypath, $mypath_name);
            $mail->AddAddress($mails);
         }else{
            $mail->AddAddress($send);
         }
        
        //$mail->AddReplyTo("email@yourdomain.com", "yourname");
        $mail->Subject = $subject;      
        
        if(!$mail->send()){
            $msg = iconv('UTF-8', 'TIS-620', 'ไม่สามารถส่ง mail ได้ค่ะ');
            $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            $msg = iconv('UTF-8', 'TIS-620', 'ส่ง mail แจ้งเรียบร้อยแล้วค่ะ');
        }
        return $msg;
    }
    exit("<script>window.location='../ncrComferm.php';</script>");
?>
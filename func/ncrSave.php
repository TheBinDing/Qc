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

    $Reference = $_POST['Reference'];
    $Raised = $_POST['Raised'];
    $Department = $_POST['Department'];
    $Day = $_POST['Day'];
    $Unit = $_POST['Unit'];
    $Departments = $_POST['Departments'];
    $problem = $_POST['problem'];
    $problems = $_POST['problems'];
    $Why1 = $_POST['Why1'];
    $Why2 = $_POST['Why2'];
    $Why3 = $_POST['Why3'];
    $Why4 = $_POST['Why4'];
    $Why5 = $_POST['Why5'];
    $Cause = $_POST['Cause'];
    $WayShort = $_POST['WayShort'];
    $WayLong = $_POST['WayLong'];
    $Site = $_POST['Site'];
    $img = iconv('UTF-8','TIS-620', $_FILES['filUpload']["name"]);
    $part = $_FILES["filUpload"]["tmp_name"];

    $Day = new datetime($Day);
    $Day = $Day->format('d-m-Y');

    $Daies = new datetime();
    $Daies = $Daies->format('d-m-Y');

    $d = explode(DIRECTORY_SEPARATOR, getcwd());
    $path = $d[0].DIRECTORY_SEPARATOR.$d[1].DIRECTORY_SEPARATOR.$d[2].DIRECTORY_SEPARATOR.$d[3];
    $destination_path = $path.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;

    $target_path = $destination_path . basename($img);
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    $extension = array('jpg','jpeg','png');

    if($img == in_array($ext, $extension)){
        if(move_uploaded_file($part, $target_path)) {
            $sql_insert = "INSERT INTO [QC].[dbo].[NCR]
                            (
                            ncr_reference,
                            ncr_raised,
                            ncr_department,
                            ncr_day,
                            ncr_unit,
                            ncr_departments,
                            pb_id,
                            ncr_problems,
                            ncr_why1,
                            ncr_why2,
                            ncr_why3,
                            ncr_why4,
                            ncr_why5,
                            ncr_cause,
                            ncr_wayShort,
                            ncr_wayLong,
                            site_id,
                            u_id,
                            ncr_status,
                            create_day,
                            update_day,
                            ncr_img_partI)
                            values
                            (
                            '". $Reference ."',
                            '". $Raised ."',
                            '". $Department ."',
                            '". $Day ."',
                            '". $Unit ."',
                            '". $Departments ."',
                            '". $problem ."',
                            '". $problems ."',
                            '". $Why1 ."',
                            '". $Why2 ."',
                            '". $Why3 ."',
                            '". $Why4 ."',
                            '". $Why5 ."',
                            '". $Cause ."',
                            '". $WayShort ."',
                            '". $WayLong ."',
                            '". $Site ."',
                            '". $_SESSION['ID'] ."',
                            '0',
                            '". $Daies ."',
                            '". $Daies ."',
                            '". $img ."')";

            // echo $sql_insert;
            mssql_query($sql_insert);
        }
    }

    $site = "SELECT
                CAST(site_name as Text) as site_name
            FROM
                [QC].[dbo].[Site]
            WHERE
                site_id = '". $Site ."' ";
    $query_site = mssql_query($site);
    $row_site = mssql_fetch_assoc($query_site);

    $Siten = iconv('TIS-620', 'UTF-8', $row_site['site_name']);

    $subject = 'เพิ่มข้อมูล NCR โครงการ '.$Siten;
    $detail = 'เพิ่มข้อมูล NCR เข้าตรวจสอบโครงการ '.$Siten.'<br>';
    $detail .= 'http://intranet.thaipolycons.co.th/';
    $mail_from = $_SESSION['SuperMail'];
    $mail_name = $_SESSION['user_name'];
    $msg = sendMail($detail,$subject,$mail_from,$mail_name,1);

    function sendMail($detail,$subject,$from,$name,$send){
        $mail = new PHPMailer();
        $mail->Body = $detail;
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();// Set mailer to use SMTP
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->Host = "58.137.61.220"; // SMTP server
        $mail->Port = 25; // พอร์ท 25, 465 or 587
        $mail->Username = $from; // SMTP username
        $mail->Password = "tpolypassword"; // SMTP password
        //from
        $mail->SetFrom($from, $name);   
        $mail->IsHTML(true);
        //send mail
        if($send == 1){
            $mail->AddAddress("thanakrit.bh@thaipolycons.co.thh");
            $mail->AddAddress("Thananat.ia@thaipolycons.co.th");
            $mail->AddAddress("rungrueng@thaipolycons.co.th");
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
    exit("<script>window.location='../ncr.php';</script>");
?>
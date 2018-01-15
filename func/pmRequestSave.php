<?php
    /**
    * Simple example script using PHPMailer with exceptions enabled
    * @package phpmailer
    * @version $Id$
    */

    @session_start();
    date_default_timezone_set('Asia/Bangkok');

    require '../PHPMailer_5.2.4/class.phpmailer.php';
    require("../inc/connect.php");

    if($_GET['status'] == 'Send') {
        $Day = new datetime();
        $Day = $Day->format('d-m-Y');

        $update_pm = " UPDATE [QC].[dbo].[Request] set pm_status = '1', update_day = '". $Day ."' WHERE pm_id = '". $_GET['Pm_id'] ."' ";
        mssql_query($update_pm);

        $sqlSelect = "  SELECT
                            s.site_id as site_id,
                            CAST(s.site_name as text) as site_name
                        FROM
                            [QC].[dbo].[Request] r inner join
                            [QC].[dbo].[Site] s on r.site_id = s.site_id
                        WHERE
                            pm_id = '". $_GET['Pm_id'] ."' ";
        $query_site = mssql_query($sqlSelect);
        $row_site = mssql_fetch_assoc($query_site);

        $Sites = $row_site['site_id'];
        $Siten = iconv('TIS-620', 'UTF-8', $row_site['site_name']);

        $subject = 'เข้าตรวจสอบโครงการ '.iconv('TIS-620','UTF-8', $Siten);
        $detail = 'เข้าตรวจสอบโครงการ '.iconv('TIS-620','UTF-8', $Siten).'<br>';
        $detail .= 'http://intranet.thaipolycons.co.th/';
        $mail_from = $_SESSION['SuperMail'];
        $mail_name = $_SESSION['user_name'];
        $msg = sendMail($detail,$subject,$mail_from,$mail_name,1,$Sites);
    } else {
        $Group = $_POST['Group'];
        $Site = $_POST['Site'];
        $Times = $_POST['Times'];
        $Detail = iconv('UTF-8','TIS-620', $_POST['Detail']);
        $Time = $_POST['Time'];
        $Note = iconv('UTF-8','TIS-620', $_POST['Note']);

        $Time = new datetime($Time);
        $Time = $Time->format('Y-m-d');

        $Day = new datetime();
        $Day = $Day->format('Y-m-d');

        $Add = "INSERT INTO [QC].[dbo].[Request]
                    (pm_detail, pm_time, pm_note, g_id, site_id, pm_status, u_id, t_id, update_day, create_day)
                VALUES
                    ('". $Detail ."', '". $Time ."', '". $Note ."', '". $Group ."', '". $Site ."', '0', '". $_SESSION['ID'] ."', '". $Times ."', '". $Day ."', '". $Day ."') ";

        mssql_query($Add);
        // echo $Add;

        $subject = 'เพิ่มข้อมูลเพื่อเข้าตรวจโครงการ '.iconv('TIS-620','UTF-8', $Siten);
        $detail = 'เข้าตรวจสอบโครงการ '.iconv('TIS-620','UTF-8', $Siten).'<br>';
        $detail .= 'http://intranet.thaipolycons.co.th/';
        $mail_from = $_SESSION['SuperMail'];
        $mail_name = $_SESSION['user_name'];
        $msg = sendMail($detail,$subject,$mail_from,$mail_name,1,$Sites);
        echo $msg;
    }

    function sendMail($detail,$subject,$from,$name,$send,$sites){
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
            if($Sites == 8) {
                $mail->AddAddress("tanapat.ch@thaipolycons.co.th");
            }
            if( ($Sites == 1) || ($Sites == 6) || ($Sites == 7) || ($Sites == 8) ) {
                $mail->AddAddress("tanapat.ch@thaipolycons.co.th");
            }
            if($Sites == 9) {
                $mail->AddAddress("arkhom.kh@thaipolycons.co.th");
            }
            if( ($Sites == 2) || ($Sites == 4) || ($Sites == 9) ) {
                $mail->AddAddress("panlop.sr@thaipolycons.co.th");
            }
            if($Sites == 5) {
                $mail->AddAddress("arjin.po@thaipolycons.co.th");
                $mail->AddAddress("pantisa.pr@thaipolycons.co.th");
            }
            // $mail->addAttachment($mypath, $mypath_name);
            $mail->AddCC("phattharachai.sr@thaipolycons.co.th");
            $mail->AddCC("thanakrit.bh@thaipolycons.co.thh");
            $mail->AddCC("Thananat.ia@thaipolycons.co.th");
            $mail->AddCC("rungrueng@thaipolycons.co.th");
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
    exit("<script>window.location='../pmRequest.php';</script>");
?>
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

    $targetDay = $_POST['targetDay'];
    $finishedDay = $_POST['finishedDay'];
    $solving = $_POST['solving'];
    $budget = $_POST['budget'];
    $targetDays = $_POST['targetDays'];
    $finishedDays = $_POST['finishedDays'];
    $protect = $_POST['protect'];
    $budgets = $_POST['budgets'];
    $Code = $_POST['Code'];
    $detail1 = $_POST['detail1'];
    $img1 = iconv('UTF-8','TIS-620', $_FILES['filUpload1']["name"]);
    $part1 = $_FILES["filUpload1"]["tmp_name"];
    $detail2 = $_POST['detail2'];
    $img2 = iconv('UTF-8','TIS-620', $_FILES['filUpload2']["name"]);
    $part2 = $_FILES["filUpload2"]["tmp_name"];

    if($solving == 0) {
        $targetDay = '';
        $finishedDay = '';
    }
    if($solving == 1) {
        $targetDay = new datetime($targetDay);
        $targetDay = $targetDay->format('Y-m-d H:i:s');
        $finishedDay = new datetime($finishedDay);
        $finishedDay = $finishedDay->format('Y-m-d H:i:s');
    }
    if($protect == 0) {
        $targetDays = '';
        $finishedDays = '';
    }
    if($protect == 1) {
        $targetDays = new datetime($targetDays);
        $targetDays = $targetDays->format('Y-m-d H:i:s');
        $finishedDays = new datetime($finishedDays);
        $finishedDays = $finishedDays->format('Y-m-d H:i:s');
    }

    $Daies = new datetime();
    $Daies = $Daies->format('d-m-Y');

    $update = "UPDATE
                    [QC].[dbo].[NCR]
                SET
                    ncr_targetDay = '". $targetDay ."',
                    ncr_finishedDay = '". $finishedDay ."',
                    ncr_solving = '". $solving ."',
                    ncr_budget = '". $budget ."',
                    ncr_targetDays = '". $targetDays ."',
                    ncr_finishedDays = '". $finishedDays ."',
                    ncr_protect = '". $protect ."',
                    ncr_budgets = '". $budgets ."',
                    ncr_status = '2',
                    update_day = '". $Daies ."'
                WHERE
                    ncr_id = '". $Code ."'
                    AND u_id = '". $_SESSION['ID'] ."' ";

    mssql_query($update);

    $d = explode(DIRECTORY_SEPARATOR, getcwd());
    $path = $d[0].DIRECTORY_SEPARATOR.$d[1].DIRECTORY_SEPARATOR.$d[2].DIRECTORY_SEPARATOR.$d[3];
    $destination_path = $path.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;

    $target_path1 = $destination_path . basename($img1);
    $target_path2 = $destination_path . basename($img2);

    $ext1 = strtolower(pathinfo($img1, PATHINFO_EXTENSION));
    $ext2 = strtolower(pathinfo($img2, PATHINFO_EXTENSION));
    $extension = array('jpg','jpeg','png');

    if($img1 == in_array($ext1, $extension)){
        if(move_uploaded_file($part1, $target_path1)) {
            $update_img1 = "UPDATE
                            [QC].[dbo].[NCR]
                        SET
                            ncr_img_partII_I = '". $img1 ."',
                            detail_partII_I = '". $detail1."'
                        WHERE
                            ncr_id = '". $Code ."'
                            AND u_id = '". $_SESSION['ID'] ."' ";

            // echo $update_img1;
            mssql_query($update_img1);
        }
    }
    if($img2 == in_array($ext2, $extension)){
        if(move_uploaded_file($part2, $target_path2)) {
            $update_img2 = "UPDATE
                            [QC].[dbo].[NCR]
                        SET
                            ncr_img_partII_II = '". $img2 ."',
                            detail_partII_II = '". $detail2."'
                        WHERE
                            ncr_id = '". $Code ."'
                            AND u_id = '". $_SESSION['ID'] ."' ";

            // echo $update_img2;
            mssql_query($update_img2);
        }
    }

    $sqlSelect = "  SELECT
                        s.site_id as site_id,
                        CAST(s.site_name as text) as site_name
                    FROM
                        [QC].[dbo].[NCR] r inner join
                        [QC].[dbo].[Site] s on r.site_id = s.site_id
                    WHERE
                        ncr_id = '". $Code ."' ";
    $query_site = mssql_query($sqlSelect);
    $row_site = mssql_fetch_assoc($query_site);

    $Sites = $row_site['site_id'];
    $Siten = iconv('TIS-620', 'UTF-8', $row_site['site_name']);

    $subject = 'แก้ไขแผนงานและผลการแก้ไขปัญหา โครงการ '.$Siten;
    $detail = 'แก้ไขแผนงานและผลการแก้ไขปัญหา NCR เข้าตรวจสอบโครงการ '.$Siten.'<br>';
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
        $mail->Username = $arr['from']; // SMTP username
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
    exit("<script>window.location='../assessment.php';</script>");
?>
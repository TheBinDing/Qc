<?php
    @session_start();
    require("../inc/connect.php");

    $Day = $_POST['Day'];
    $Site = $_POST['Site'];
    $pSite = $_POST['pSite'];
    $pWork = $_POST['pWork'];
    $pDetail = $_POST['pDetail'];
    $pCharter = $_POST['pCharter'];
    $pCheck = $_POST['pCheck'];
    $pDetails = $_POST['pDetails'];
    $Category = $_POST['Category'];
    $Nature = $_POST['Nature'];
    $Cause = $_POST['Cause'];
    $Edit = $_POST['Edit'];
    $testResult = $_POST['testResult'];
    $FileImg = array();

    if($_FILES['filUpload1']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload1']["name"]).'///'.$_FILES["filUpload1"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail1']));
    }
    if($_FILES['filUpload2']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload2']["name"]).'///'.$_FILES["filUpload2"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail2']));
    }
    if($_FILES['filUpload3']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload3']["name"]).'///'.$_FILES["filUpload3"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail3']));
    }
    if($_FILES['filUpload4']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload4']["name"]).'///'.$_FILES["filUpload4"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail4']));
    }
    if($_FILES['filUpload5']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload5']["name"]).'///'.$_FILES["filUpload5"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail5']));
    }
    if($_FILES['filUpload6']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload6']["name"]).'///'.$_FILES["filUpload6"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail6']));
    }
    if($_FILES['filUpload7']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload7']["name"]).'///'.$_FILES["filUpload7"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail7']));
    }
    if($_FILES['filUpload8']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload8']["name"]).'///'.$_FILES["filUpload8"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail8']));
    }
    if($_FILES['filUpload9']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload9']["name"]).'///'.$_FILES["filUpload9"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail9']));
    }
    if($_FILES['filUpload10']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload10']["name"]).'///'.$_FILES["filUpload10"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail10']));
    }
    if($_FILES['filUpload11']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload11']["name"]).'///'.$_FILES["filUpload11"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail11']));
    }
    if($_FILES['filUpload12']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload12']["name"]).'///'.$_FILES["filUpload12"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail12']));
    }
    if($_FILES['filUpload13']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload13']["name"]).'///'.$_FILES["filUpload13"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail13']));
    }
    if($_FILES['filUpload14']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload14']["name"]).'///'.$_FILES["filUpload14"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail14']));
    }
    if($_FILES['filUpload15']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload15']["name"]).'///'.$_FILES["filUpload15"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail15']));
    }
    if($_FILES['filUpload16']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload16']["name"]).'///'.$_FILES["filUpload16"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail16']));
    }
    if($_FILES['filUpload17']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload17']["name"]).'///'.$_FILES["filUpload17"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail17']));
    }
    if($_FILES['filUpload18']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload18']["name"]).'///'.$_FILES["filUpload18"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail18']));
    }
    if($_FILES['filUpload19']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload19']["name"]).'///'.$_FILES["filUpload19"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail19']));
    }
    if($_FILES['filUpload20']["name"] != '') {
        array_push($FileImg, iconv('UTF-8','TIS-620', $_FILES['filUpload20']["name"]).'///'.$_FILES["filUpload20"]["tmp_name"].'///'.iconv('UTF-8','TIS-620', $_POST['detail20']));
    }

    $d = explode(DIRECTORY_SEPARATOR, getcwd());
    $path = $d[0].DIRECTORY_SEPARATOR.$d[1].DIRECTORY_SEPARATOR.$d[2].DIRECTORY_SEPARATOR.$d[3];
    $destination_path = $path.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;

    $Day = new datetime($Day);
    $Day = $Day->format('Y-m-d');

    $Daies = new datetime();
    $Daies = $Daies->format('Y-m-d');

    $sql_insert = "INSERT INTO [QC].[dbo].[SiteVisit]
                    (
                    sv_day,
                    site_id,
                    sv_site,
                    sv_work,
                    sv_detail,
                    sv_charter,
                    sv_check,
                    sv_details,
                    sv_category,
                    sv_nature,
                    sv_cause,
                    sv_edit,
                    sv_result,
                    u_id,
                    create_day)
                    values
                    (
                    '". $Day ."',
                    '". $Site ."',
                    '". $pSite ."',
                    '". $pWork ."',
                    '". $pDetail ."',
                    '". $pCharter ."',
                    '". $pCheck ."',
                    '". $pDetails ."',
                    '". $Category ."',
                    '". $Nature ."',
                    '". $Cause ."',
                    '". $Edit ."',
                    '". $testResult ."',
                    '". $_SESSION['ID'] ."',
                    '". $Daies ."')";

    // echo $sql_insert;
    mssql_query($sql_insert);

    $select = "SELECT count(sv_id) as num FROM [QC].[dbo].[SiteVisit]";
    $query_s = mssql_query($select);
    $row_s = mssql_fetch_assoc($query_s);
    $id = $row_s['num'];

    foreach ($FileImg as $key => $value) {
        $imgFile = explode('///', $value);
        $k = ($key + 1);
        $kk = 'img'.$k;
        $dd = 'detail'.$k;
        $target_path = $destination_path . basename($imgFile[0]);
        $ext = strtolower(pathinfo($imgFile[0], PATHINFO_EXTENSION));
        $extension = array('jpg','jpeg','png');
        if($imgFile[0] == in_array($ext, $extension)) {
            if(move_uploaded_file($imgFile[1],$target_path)) {
                $update_img = "UPDATE
                                    [QC].[dbo].[SiteVisit]
                                SET
                                    $kk = '". $imgFile[0] ."',
                                    $dd = '". $imgFile[2] ."'
                                WHERE
                                    sv_id = '". $id ."' ";

                mssql_query($update_img);
                // echo $update_img.'<br>';
            }
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

    $subject = 'เพิ่มข้อมูล Site Visit '.iconv('TIS-620','UTF-8', $Siten);
    $detail = 'เข้าตรวจสอบโครงการ '.iconv('TIS-620','UTF-8', $Siten).'<br>';
    $detail .= 'http://intranet.thaipolycons.co.th/';
    $mail_from = $_SESSION['SuperMail'];
    $mail_name = $_SESSION['user_name'];
    $msg = sendMail($detail,$subject,$mail_from,$mail_name,1,$Sites);
    echo $msg;

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
            // $mail->addAttachment($mypath, $mypath_name);
            $mail->AddAddress("phattharachai.sr@thaipolycons.co.th");
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
    exit("<script>window.location='../siteVS.php';</script>");
?>
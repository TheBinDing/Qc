<?php
    function load_request_save_list($arr) {
        $sql = 'test';
        return $sql;
    }

    function sendMail($arr) {
        $searchSite = "SELECT
                            site_id as site_id,
                            CAST(site_name as text) as site_name
                        FROM
                            [QC].[dbo].[Site]
                        WHERE
                            site_id = '". $arr['site'] ."' ";

        $query_site = mssql_query($searchSite);
        $row_site = mssql_fetch_assoc($query_site);

        $Sites = $row_site['site_id'];
        $Siten = js_thai_encode($row_site['site_name']);

        $subject = 'เพิ่มข้อมูลเพื่อเข้าตรวจโครงการ '.$Siten;
        $detail = 'เข้าตรวจสอบโครงการ : '.$Siten.'<br>';
		$detail .= 'รายละเอียดงาน : '.$arr['details'].'<br>';
		$detail .= 'วันที่ตรวจสอบ : '.$arr['check'].'<br>';
		$detail .= 'เวลาที่ตรวจสอบ : '.$arr['times'].'<br>';
        $detail .= 'http://intranet.thaipolycons.co.th/';

        $mail = new PHPMailer();
        $mail->Body = $detail;
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();// Set mailer to use SMTP
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        // $mail->Host = "192.168.1.78"; // SMTP server
        // $mail->Host = "mail.csloxinfo.com"; // SMTP server
        $mail->Host = "58.137.61.220"; // SMTP server
        // $mail->Host = "smtp.gmail.com"; // Gmail
        // $mail->Host = "smtp.live.com"; // hotmail.com
        $mail->Port = 25; // พอร์ท 25, 465 or 587
        // $mypath = 'img/excel.png';
        // $mypath_name = 'รูปตัวอย่าง';
        $mail->Username = $arr['from']; // SMTP username
        $mail->Password = "tpolypassword"; // SMTP password
        //from
        $mail->SetFrom($arr['from'], $arr['name']);   
        $mail->IsHTML(true);
        //send mail
         if($arr['send'] == 1){
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
            $mail->addAttachment($mypath, $mypath_name);
            $mail->AddCC("phattharachai.sr@thaipolycons.co.th");
            $mail->AddCC("thanakrit.bh@thaipolycons.co.thh");
            $mail->AddCC("Thananat.ia@thaipolycons.co.th");
            $mail->AddCC("rungrueng@thaipolycons.co.th");
            $mail->AddCC("apichat.si@thaipolycons.co.th");
         }else{
            $mail->AddAddress($arr['send']);
         }
        
        //$mail->AddReplyTo("email@yourdomain.com", "yourname");
        $mail->Subject = $subject;  
        
        if(!$mail->send()){
            $msg = $mail->ErrorInfo;
            // $msg = 0;
        }else{
            $msg = 1;
        }
        return $msg;
        // return $arr['detail'].'-'.$arr['subject'].'-'.$arr['from'].'-'.$arr['send'];
    }

    function js_thai_encode($data) {   // fix all thai elements
        if (is_array($data))
        {
            foreach($data as $a => $b)
            {
                if (is_array($data[$a]))
                {
                    $data[$a] = js_thai_encode($data[$a]);
                }
                else
                {
                    $data[$a] = iconv("tis-620","utf-8",$b);
                }
            }
        }
        else
        {
            $data =iconv("tis-620","utf-8",$data);
        }
        return $data;
    }
?>
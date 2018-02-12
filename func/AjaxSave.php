<?php
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
        $detail = 'เพิ่มการเข้าตรวจสอบโครงการ : '.$Siten.'<br>';
		$detail .= 'รายละเอียดงาน : '.$arr['details'].'<br>';
		$detail .= 'วันที่ตรวจสอบ : '.$arr['time'].'<br>';
		$detail .= 'เวลาที่ตรวจสอบ : '.$arr['times'].'<br>';
        $detail .= 'http://intranet.thaipolycons.co.th:2222/qc/login.php';

        $from = explode('@', $arr['from']);

        if($from[1] == 'tpcasset.co.th') {
            $sql_mail = "SELECT
                            mail_tpoly
                        FROM
                            [QC].[dbo].[Mail]
                        WHERE
                            mail_asset = '". $arr['from'] ."' ";

            $query_mail = mssql_query($sql_mail);
            $row_mail = mssql_fetch_assoc($query_mail);

            $arr['from'] = $row_mail['mail_tpoly'];
        }

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
            $mail->AddCC("thanakrit.bh@thaipolycons.co.thh");
            $mail->AddCC("Thananat.ia@thaipolycons.co.th");
            $mail->AddCC("rungrueng@thaipolycons.co.th");
            $mail->AddCC("apichat.si@thaipolycons.co.th");
        } else {
            $mail->AddAddress($arr['send']);
        }
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

    function update_send($arr) {
        $Day = new datetime();
        $Day = $Day->format('d-m-Y');

        $update_pm = " UPDATE [QC].[dbo].[Request] set pm_status = '1', update_day = '". $Day ."' WHERE pm_id = '". $arr['id'] ."' ";
        mssql_query($update_pm);
        // return $update_pm;
    }

    function sendMails($arr) {
        $sqlSelect = "  SELECT
                            s.site_id as site_id,
                            CAST(s.site_name as text) as site_name,
                            CAST(t.t_time as text) as t_time,
                            CAST(r.pm_detail as text) as pm_detail,
                            r.pm_time as pm_time
                        FROM
                            [QC].[dbo].[Request] r inner join
                            [QC].[dbo].[Site] s on r.site_id = s.site_id inner join
                            [QC].[dbo].[Time] t on r.t_id = t.t_id
                        WHERE
                            pm_id = '". $arr['id'] ."' ";

        $query = mssql_query($sqlSelect);
        $row = mssql_fetch_assoc($query);

        $Sites = $row['site_id'];
        $Siten = js_thai_encode($row['site_name']);

        $row['pm_time'] = new datetime($row['pm_time']);
        $row['pm_time'] = $row['pm_time']->format('d-m-Y');

        $subject = 'เพิ่มข้อมูลเพื่อเข้าตรวจโครงการ '.$Siten;
        $detail = 'เพิ่มการเข้าตรวจสอบโครงการ : '.$Siten.'<br>';
        $detail .= 'รายละเอียดงาน : '.$row['pm_detail'].'<br>';
        $detail .= 'วันที่ตรวจสอบ : '.$row['pm_time'].'<br>';
        $detail .= 'เวลาที่ตรวจสอบ : '.$row['t_time'].'<br>';
        $detail .= 'http://intranet.thaipolycons.co.th:2222/qc/login.php';

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
        } else {
            $mail->AddAddress($arr['send']);
        }
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

    function load_Receive_ae($arr) {
        $sql = "SELECT
                    r.pm_id as id,
                    CAST(r.pm_detail as Text) as detail,
                    CAST(t.t_time as text) as t_time,
                    t.t_time as t_time,
                    r.pm_time as pm_time,
                    CAST(r.pm_note as Text) as note,
                    CAST(g.g_name as Text) as group_Name,
                    CAST(s.site_name as Text) as site_Name,
                    r.pm_status as status
                FROM
                      [QC].[dbo].[Request] r inner join
                      [QC].[dbo].[Group] g on r.g_id = g.g_id inner join
                      [QC].[dbo].[Site] s on r.site_id = s.site_id inner join
                      [QC].[dbo].[Time] t on r.t_id = t.t_id
                WHERE
                    r.pm_id = '". $arr['code'] ."'
                    AND  r.pm_status = 1 ";

        $query = mssql_query($sql);
        $response = array();
        while ($row = mssql_fetch_array($query))
        {
            $response[] = $row;
        }

        return js_thai_encode($response);
    }

    function load_code() {
        $sql = "SELECT
                    u_id AS Code,
                    CAST(u_fullname as Text) AS LongName
                FROM
                    [QC].[dbo].[Users]
                WHERE
                    u_permission = '3' ";

        $query = mssql_query($sql);
        $response = array();
        while ($row = mssql_fetch_array($query))
        {
            $response[] = $row;
        }

        return js_thai_encode($response);
    }

    function update_receive($arr) {
        if($arr['num'] == 1) {
            $update_pm = " UPDATE [QC].[dbo].[Request] set pm_status = '2' WHERE pm_id = '". $arr['id'] ."' ";
            mssql_query($update_pm);
            return 1;
        } else {
            $times = new datetime();
            $times = $times->format('d-m-Y');

            $CT = "SELECT pm_time FROM [QC].[dbo].[Request] WHERE pm_id = '". $arr['id'] ."' ";
            $query_ct = mssql_query($CT);
            $row_ct = mssql_fetch_assoc($query_ct);

            $ct_time = new datetime($row_ct['pm_time']);
            $ct_time = $ct_time->format('d-m-Y');

            $l = explode('-', $ct_time);
            $ct_time_l = ($l[0]-3).'-'.$l[1].'-'.$l[2];

            if($times >= $ct_time_l) {
                return 0;
            } else {
                $update_pm = " UPDATE [QC].[dbo].[Request] set pm_status = '4' WHERE pm_id = '". $arr['id'] ."' ";
                mssql_query($update_pm);
                return 1;
            }
        }
    }

    function sendMail_conFirm($arr) {
        $sql = "SELECT
                    CAST(u_mail as Text) as mails,
                    CAST(u_fullname as Text) as fullname
                FROM
                    [QC].[dbo].[Users]
                WHERE
                    u_id = '". $arr['code'] ."' ";

        $query = mssql_query($sql);
        $row = mssql_fetch_assoc($query);

        if($arr['num'] == 1) {
            $subject = 'ยืนยันการเข้าตรวจโครงการ '.$arr['site'];
            $detail = 'ถึงคุณ : '.$row['fullname'].'<br><br>';
            $detail .= 'ยืนยันการเข้าตรวจสอบโครงการ : '.$arr['site'].'<br>';
            $detail .= 'รายละเอียดงาน : '.$arr['details'].'<br>';
            $detail .= 'วันที่ตรวจสอบ : '.$arr['check'].'<br>';
            $detail .= 'เวลาที่ตรวจสอบ : '.$arr['times'].'<br>';
            $detail .= 'http://intranet.thaipolycons.co.th:2222/qc/login.php';
        } else {
            $subject = 'ยกเลิกการเข้าตรวจโครงการ '.$arr['site'];
            $detail = 'ถึงคุณ : '.$row['fullname'].'<br><br>';
            $detail .= 'ยกเลิกการเข้าตรวจสอบโครงการ : '.$arr['site'].'<br>';
            $detail .= 'รายละเอียดงาน : '.$arr['details'].'<br>';
            $detail .= 'วันที่ตรวจสอบ : '.$arr['check'].'<br>';
            $detail .= 'เวลาที่ตรวจสอบ : '.$arr['times'];
        }

        $sendM = $row['mails'];

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
            $mail->AddAddress($sendM);
        } else {
            $mail->AddAddress($arr['send']);
        }
        $mail->Subject = $subject;  
        
        if(!$mail->send()){
            $msg = $mail->ErrorInfo;
            // $msg = 0;
        }else{
            $msg = 1;
        }
        return $msg;
    }

    function request_save($arr) {

        $Time = new datetime($arr['time']);
        $Time = $Time->format('Y-m-d');

        $Day = new datetime();
        $Day = $Day->format('Y-m-d');

        $sql = "INSERT INTO [QC].[dbo].[Request]
                    (pm_detail, pm_time, pm_note, g_id, site_id, pm_status, u_id, t_id, update_day, create_day)
                VALUES
                    ('". $arr['detail'] ."', '". $Time ."', '". $arr['note'] ."', '". $arr['group'] ."', '". $arr['site'] ."', '0', '". $_SESSION['ID'] ."', '". $arr['times'] ."', '". $Day ."', '". $Day ."') ";

        mssql_query($sql);
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
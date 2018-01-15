<?php
    @session_start();
    include("inc/connect.php");
    $user = $_POST['username'];
    $pass = base64_encode($_POST['password']);

    $sql = "SELECT
                u_id as Id,
				CAST(u_user as Text) as longName,
                u_permission as Permission,
                CAST(u_mail as Text) as mails
            FROM
                [QC].[dbo].[Users]
            WHERE
                u_user = '".$user."'
                AND u_pass = '".$pass."'
                AND u_status = '1' ";

    $query  = mssql_query($sql);
    $num = mssql_num_rows($query);
    $row = mssql_fetch_array($query);

    if($num == 0)
    {
        exit("<script>alert('LOGIN FAIL');history.back();</script>");
    } else {
        $_SESSION['user_name'] = $row['longName'];
		$_SESSION['SuperMail'] = $row['mails'];
        $_SESSION['Permission'] = $row['Permission'];
        $_SESSION['ID'] = $row['Id'];

        if($row['Permission'] == 1) {
            exit("<script>window.location='User.php';</script>");
        }
        if($row['Permission'] == 2) {
            exit("<script>window.location='qcRequest.php';</script>");
        }
        if($row['Permission'] == 3) {
            exit("<script>window.location='pmRequest.php';</script>");
        }
    }
?>
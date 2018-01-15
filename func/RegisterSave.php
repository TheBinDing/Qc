<?php
    include("../inc/connect.php");

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $confirm = $_POST['confirm'];
    $name = iconv('UTF-8', 'TIS-620', $_POST['name']);
    $email = $_POST['email'];
    $choise = $_POST['choise'];

    if($pass<>$confirm)
    {
        exit("<script>alert('Password not match');history.back()</script>");
    }

    $sqlc = "SELECT CAST(u_user as Text) AS m_user FROM [QC].[dbo].[Users] WHERE u_user = '". $user ."' ";

    $queryc = mssql_query($sqlc);
    $numc = mssql_num_rows($queryc);

    if($numc == 0) {
        $pass = base64_encode($pass);

        $sql = "INSERT INTO
                    [QC].[dbo].[Users]
                (u_user, u_pass, u_permission, u_fullname, u_mail, u_status)
                VALUES
                ('$user', '$pass', '$choise', '$name', '$email', '1') ";

        mssql_query($sql);
                
        exit("<script>window.location='../User.php';</script>");
    } else {
        exit("<script>history.back()</script>");
    }
?>
<?php
    include("../inc/connect.php");

    $pass = $_POST['password'];
    $confirm = $_POST['confirm'];
    $email = $_POST['mail'];
    $name = iconv('UTF-8','TIS-620', $_POST['name']);
    $Pic = iconv('UTF-8','TIS-620', $_FILES['filUpload']["name"]);

    if($email == '') {
        $sql_pass = "SELECT CAST(u_mail as text) as u_mail FROM [QC].[dbo].[Users] WHERE u_user = '". $name ."' ";
        $query_pass = mssql_query($sql_pass);
        $row_pass = mssql_fetch_assoc($query_pass);

        $email = $row_pass['u_mail'];
    }
    $pass = base64_encode($pass);

    $_FILES["filUpload"]["name"] = iconv('UTF-8','TIS-620', $_FILES["filUpload"]["name"]);
    $destination_path = getcwd().DIRECTORY_SEPARATOR.'EmployeePicture'.DIRECTORY_SEPARATOR;

    $destination_path = pathinfo(getcwd(), 3).DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;
    $target_path = $destination_path . basename($_FILES["filUpload"]["name"]);
    $ext = strtolower(pathinfo($_FILES["filUpload"]["name"], PATHINFO_EXTENSION));
    $extension = array('jpg','jpeg','png');

    if($Pic == ''){
        $sql = "UPDATE
                    [QC].[dbo].[Users]
                SET
                    u_pass = '". $pass ."',
                    u_mail = '". $email ."'
                WHERE
                    u_user = '". $name ."' ";

        mssql_query($sql);
        // echo $sql;
    } else {
        if($_FILES["filUpload"]["name"] == in_array($ext, $extension)){
            if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],$target_path)) {
                $sql = "UPDATE
                            [QC].[dbo].[Users]
                        SET
                            u_pass = '". $pass ."',
                            u_mail = '". $email ."',
                            u_pic = '". $Pic ."'
                        WHERE
                            u_user = '". $name ."' ";

                mssql_query($sql);
                // echo $sql;
            }
        }
    }
?>
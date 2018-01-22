<?php
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
    exit("<script>window.location='../pmRequest.php';</script>");
?>
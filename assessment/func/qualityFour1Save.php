<?php
    @session_start();
    require("../../inc/connect.php");

    $Ass11 = $_POST['Ass11'];
    $Ass12 = $_POST['Ass12'];
    $Ass13 = $_POST['Ass13'];
    $Detail1 = $_POST['Detail1'];
    $Ass21 = $_POST['Ass21'];
    $Ass22 = $_POST['Ass22'];
    $Ass23 = $_POST['Ass23'];
    $Detail2 = $_POST['Detail2'];
    $Ass31 = $_POST['Ass31'];
    $Ass32 = $_POST['Ass32'];
    $Ass33 = $_POST['Ass33'];
    $Detail3 = $_POST['Detail3'];
    $Cause1 = $_POST['Cause1'];
    $Cause2 = $_POST['Cause2'];
    $Cause3 = $_POST['Cause3'];
    $Cause4 = $_POST['Cause4'];
    $Cause5 = $_POST['Cause5'];
    $Sum1 = $_POST['Sum1'];
    $Sum2 = $_POST['Sum2'];
    $Sum3 = $_POST['Sum3'];

    $Day = $_POST['Day'];
    $Day2 = $_POST['Day2'];
    $Day3 = $_POST['Day3'];

    $Daies = new datetime();
    $Daies = $Daies->format('d-m-Y H:i:s');

    $check = "SELECT assOne1_id as ass_id FROM [QC].[dbo].[assOne1] WHERE pm_id = '". $_POST['pm_id'] ."' ";
    $query = mssql_query($check);
    $num = mssql_num_rows($query);
    $row = mssql_fetch_assoc($query);

    $ass_id = $row['ass_id'];

    $a = 0;$b = 0;$c = 0;

    if($Ass11 != '') {
        $a = $a + 1;
    }
    if($Ass12 != '') {
        $b = $b + 1;
    }
    if($Ass13 != '') {
        $c = $c + 1;
    }
    if($Ass21 != '') {
        $a = $a + 1;
    }
    if($Ass22 != '') {
        $b = $b + 1;
    }
    if($Ass23 != '') {
        $c = $c + 1;
    }
    if($Ass31 != '') {
        $a = $a + 1;
    }
    if($Ass32 != '') {
        $b = $b + 1;
    }
    if($Ass33 != '') {
        $c = $c + 1;
    }

    $sa = ($Ass11 + $Ass21 + $Ass31) / $a;
    if($b != 0) {
        $sb = ($Ass12 + $Ass22 + $Ass32) / $b;
    }
    if($c != 0) {
        $sc = ($Ass13 + $Ass23 + $Ass33) / $c;
    }

    if($num != 0) {
        $update = "UPDATE
                        [QC].[dbo].[assOne1]
                    SET
                        ass11 = '". $Ass11 ."',
                        ass12 = '". $Ass12 ."',
                        ass13 = '". $Ass13 ."',
                        detail1 = '". $Detail1 ."',
                        ass21 = '". $Ass21 ."',
                        ass22 = '". $Ass22 ."',
                        ass23 = '". $Ass23 ."',
                        detail2 = '". $Detail2 ."',
                        ass31 = '". $Ass31 ."',
                        ass32 = '". $Ass32 ."',
                        ass33 = '". $Ass33 ."',
                        detail3 = '". $Detail3 ."',
                        cause1 = '". $Cause1 ."',
                        cause2 = '". $Cause2 ."',
                        cause3 = '". $Cause3 ."',
                        cause4 = '". $Cause4 ."',
                        cause5 = '". $Cause5 ."',
                        sum1 = '". $sa ."',
                        sum2 = '". $sb ."',
                        sum3 = '". $sc ."',
                        day = '". $Day ."',
                        day2 = '". $Day2 ."',
                        day3 = '". $Day3 ."',
                        update_day = '". $Daies ."'
                    WHERE
                        pm_id = '". $_POST['pm_id'] ."'
                        AND assOne1_id = '". $ass_id ."' ";

        mssql_query($update);
        // echo $update;
    } else {
        $insert = "INSERT INTO [QC].[dbo].[assOne1]
                    (ass11,
                    ass12,
                    ass13,
                    detail1,
                    ass21,
                    ass22,
                    ass23,
                    detail2,
                    ass31,
                    ass32,
                    ass33,
                    detail3,
                    cause1,
                    cause2,
                    cause3,
                    cause4,
                    cause5,
                    sum1,
                    sum2,
                    sum3,
                    day,
                    day2,
                    day3,
                    update_day,
                    create_day,
                    pm_id)
                    values
                    ('". $Ass11 ."',
                    '". $Ass12 ."',
                    '". $Ass13 ."',
                    '". $Detail1 ."',
                    '". $Ass21 ."',
                    '". $Ass22 ."',
                    '". $Ass23 ."',
                    '". $Detail2 ."',
                    '". $Ass31 ."',
                    '". $Ass32 ."',
                    '". $Ass33 ."',
                    '". $Detail3 ."',
                    '". $Cause1 ."',
                    '". $Cause2 ."',
                    '". $Cause3 ."',
                    '". $Cause4 ."',
                    '". $Cause5 ."',
                    '". $sa ."',
                    '". $sb ."',
                    '". $sc ."',
                    '". $Day ."',
                    '". $Day2."',
                    '". $Day3."',
                    '". $Daies ."',
                    '". $Daies ."',
                    '". $_POST['pm_id'] ."' )";

        mssql_query($insert);
        // echo $insert;
    }
    exit("<script>window.location='../../evaluationForm.php';</script>");
?>
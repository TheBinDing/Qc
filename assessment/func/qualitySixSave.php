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
    $Ass41 = $_POST['Ass41'];
    $Ass42 = $_POST['Ass42'];
    $Ass43 = $_POST['Ass43'];
    $Detail4 = $_POST['Detail4'];
    $Ass51 = $_POST['Ass51'];
    $Ass52 = $_POST['Ass52'];
    $Ass53 = $_POST['Ass53'];
    $Detail5 = $_POST['Detail5'];
    $Ass61 = $_POST['Ass61'];
    $Ass62 = $_POST['Ass62'];
    $Ass63 = $_POST['Ass63'];
    $Detail6 = $_POST['Detail6'];
    $Ass71 = $_POST['Ass71'];
    $Ass72 = $_POST['Ass72'];
    $Ass73 = $_POST['Ass73'];
    $Detail7 = $_POST['Detail7'];
    $Ass81 = $_POST['Ass81'];
    $Ass82 = $_POST['Ass82'];
    $Ass83 = $_POST['Ass83'];
    $Detail8 = $_POST['Detail8'];
    $Ass91 = $_POST['Ass91'];
    $Ass92 = $_POST['Ass92'];
    $Ass93 = $_POST['Ass93'];
    $Detail9 = $_POST['Detail9'];
    $Ass101 = $_POST['Ass101'];
    $Ass102 = $_POST['Ass102'];
    $Ass103 = $_POST['Ass103'];
    $Detail10 = $_POST['Detail10'];
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

    $check = "SELECT assSix_id as ass_id FROM [QC].[dbo].[assSix] WHERE pm_id = '". $_POST['pm_id'] ."' ";
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
    if($Ass41 != '') {
        $a = $a + 1;
    }
    if($Ass42 != '') {
        $b = $b + 1;
    }
    if($Ass43 != '') {
        $c = $c + 1;
    }
    if($Ass51 != '') {
        $a = $a + 1;
    }
    if($Ass52 != '') {
        $b = $b + 1;
    }
    if($Ass53 != '') {
        $c = $c + 1;
    }
    if($Ass61 != '') {
        $a = $a + 1;
    }
    if($Ass62 != '') {
        $b = $b + 1;
    }
    if($Ass63 != '') {
        $c = $c + 1;
    }
    if($Ass71 != '') {
        $a = $a + 1;
    }
    if($Ass72 != '') {
        $b = $b + 1;
    }
    if($Ass73 != '') {
        $c = $c + 1;
    }
    if($Ass81 != '') {
        $a = $a + 1;
    }
    if($Ass82 != '') {
        $b = $b + 1;
    }
    if($Ass83 != '') {
        $c = $c + 1;
    }
    if($Ass91 != '') {
        $a = $a + 1;
    }
    if($Ass92 != '') {
        $b = $b + 1;
    }
    if($Ass93 != '') {
        $c = $c + 1;
    }
    if($Ass101 != '') {
        $a = $a + 1;
    }
    if($Ass102 != '') {
        $b = $b + 1;
    }
    if($Ass103 != '') {
        $c = $c + 1;
    }

    $sa = ($Ass11 + $Ass21 + $Ass31 + $Ass41 + $Ass51 + $Ass61 + $Ass71 + $Ass81 + $Ass91 + $Ass101) / $a;
    if($b != 0) {
        $sb = ($Ass12 + $Ass22 + $Ass35 + $Ass42 + $Ass52 + $Ass62 + $Ass72 + $Ass82 + $Ass92 + $Ass102) / $b;
    }
    if($c != 0) {
        $sc = ($Ass13 + $Ass23 + $Ass33 + $Ass43 + $Ass53 + $Ass63 + $Ass73 + $Ass83 + $Ass93 + $Ass103) / $c;
    }

    if($num != 0) {
        $update = "UPDATE
                        [QC].[dbo].[assSix]
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
                        ass41 = '". $Ass41 ."',
                        ass42 = '". $Ass42 ."',
                        ass43 = '". $Ass43 ."',
                        detail4 = '". $Detail4 ."',
                        ass51 = '". $Ass51 ."',
                        ass52 = '". $Ass52 ."',
                        ass53 = '". $Ass53 ."',
                        detail5 = '". $Detail5 ."',
                        ass61 = '". $Ass61 ."',
                        ass62 = '". $Ass62 ."',
                        ass63 = '". $Ass63 ."',
                        detail6 = '". $Detail6 ."',
                        ass71 = '". $Ass71 ."',
                        ass72 = '". $Ass72 ."',
                        ass73 = '". $Ass73 ."',
                        detail7 = '". $Detail7 ."',
                        ass81 = '". $Ass81 ."',
                        ass82 = '". $Ass82 ."',
                        ass83 = '". $Ass83 ."',
                        detail8 = '". $Detail8 ."',
                        ass91 = '". $Ass91 ."',
                        ass92 = '". $Ass92 ."',
                        ass93 = '". $Ass93 ."',
                        detail9 = '". $Detail9 ."',
                        ass101 = '". $Ass101 ."',
                        ass102 = '". $Ass102 ."',
                        ass103 = '". $Ass103 ."',
                        detail10 = '". $Detail10 ."',
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
                        AND assSix_id = '". $ass_id ."' ";

        mssql_query($update);
        // echo $update;
    } else {
        $insert = "INSERT INTO [QC].[dbo].[assSix]
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
                    ass41,
                    ass42,
                    ass43,
                    detail4,
                    ass51,
                    ass52,
                    ass53,
                    detail5,
                    ass61,
                    ass62,
                    ass63,
                    detail6,
                    ass71,
                    ass72,
                    ass73,
                    detail7,
                    ass81,
                    ass82,
                    ass83,
                    detail8,
                    ass91,
                    ass92,
                    ass93,
                    detail9,
                    ass101,
                    ass102,
                    ass103,
                    detail10,
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
                    '". $Ass41 ."',
                    '". $Ass42 ."',
                    '". $Ass43 ."',
                    '". $Detail4 ."',
                    '". $Ass51 ."',
                    '". $Ass52 ."',
                    '". $Ass53 ."',
                    '". $Detail5 ."',
                    '". $Ass61 ."',
                    '". $Ass62 ."',
                    '". $Ass63 ."',
                    '". $Detail6 ."',
                    '". $Ass71 ."',
                    '". $Ass72 ."',
                    '". $Ass73 ."',
                    '". $Detail7 ."',
                    '". $Ass81 ."',
                    '". $Ass82 ."',
                    '". $Ass83 ."',
                    '". $Detail8 ."',
                    '". $Ass91 ."',
                    '". $Ass92 ."',
                    '". $Ass93 ."',
                    '". $Detail9 ."',
                    '". $Ass101 ."',
                    '". $Ass102 ."',
                    '". $Ass103 ."',
                    '". $Detail10 ."',
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

        $requestUp = "  UPDATE
                            [QC].[dbo].[Request]
                        SET
                            pm_status = 3
                        WHERE
                            pm_id = '". $_POST['pm_id'] ."' ";

        mssql_query($requestUp);
        // echo $requestUp;
    }
    exit("<script>window.location='../../evaluationForm.php';</script>");
?>
<?php
    @session_start();
    require("../../inc/connect.php");

    $name = $_POST['name'];
    $house1 = $_POST['house1'];
    $house2 = $_POST['house2'];
    $house3 = $_POST['house3'];
    $house4 = $_POST['house4'];
    $house5 = $_POST['house5'];
    $house6 = $_POST['house6'];
    $house7 = $_POST['house7'];
    $house8 = $_POST['house8'];
    $house9 = $_POST['house9'];
    $house10 = $_POST['house10'];
    $house11 = $_POST['house11'];
    $house12 = $_POST['house12'];
    $house13 = $_POST['house13'];
    $house14 = $_POST['house14'];
    $house15 = $_POST['house15'];
    $house16 = $_POST['house16'];
    $house17 = $_POST['house17'];
    $house18 = $_POST['house18'];
    $detail1 = $_POST['detail1'];
    $detail2 = $_POST['detail2'];
    $detail3 = $_POST['detail3'];
    $detail4 = $_POST['detail4'];
    $detail5 = $_POST['detail5'];
    $detail6 = $_POST['detail6'];
    $detail7 = $_POST['detail7'];
    $detail8 = $_POST['detail8'];
    $detail9 = $_POST['detail9'];
    $detail10 = $_POST['detail10'];
    $detail11 = $_POST['detail11'];
    $detail12 = $_POST['detail12'];
    $detail13 = $_POST['detail13'];
    $detail14 = $_POST['detail14'];
    $detail15 = $_POST['detail15'];
    $detail16 = $_POST['detail16'];
    $detail17 = $_POST['detail17'];
    $detail18 = $_POST['detail18'];

    $Total = $house1 + $house2 + $house3 + $house4 + $house5 + $house6 + $house7 + $house8 + $house9 + $house10 + $house11 + $house12 + $house13 + $house14 + $house15 + $house16 + $house17 + $house18;

    $check = "SELECT houseFive_id as h_id FROM [QC].[dbo].[houseFive] WHERE pm_id = '". $_POST['pm_id'] ."' ";
    $query = mssql_query($check);
    $num = mssql_num_rows($query);
    $row = mssql_fetch_assoc($query);

    $h_id = $row['h_id'];

    if($num != 0) {
        $update = "UPDATE
                        [QC].[dbo].[houseFive]
                    SET
                        house_name = '". $_POST['name'] ."',
                        house1 = '". $_POST['house1'] ."',
                        house2 = '". $_POST['house2'] ."',
                        house3 = '". $_POST['house3'] ."',
                        house4 = '". $_POST['house4'] ."',
                        house5 = '". $_POST['house5'] ."',
                        house6 = '". $_POST['house6'] ."',
                        house7 = '". $_POST['house7'] ."',
                        house8 = '". $_POST['house8'] ."',
                        house9 = '". $_POST['house9'] ."',
                        house10 = '". $_POST['house10'] ."',
                        house11 = '". $_POST['house11'] ."',
                        house12 = '". $_POST['house12'] ."',
                        house13 = '". $_POST['house13'] ."',
                        house14 = '". $_POST['house14'] ."',
                        house15 = '". $_POST['house15'] ."',
                        house16 = '". $_POST['house16'] ."',
                        house17 = '". $_POST['house17'] ."',
                        house18 = '". $_POST['house18'] ."',
                        detail1 = '". $_POST['detail1'] ."',
                        detail2 = '". $_POST['detail2'] ."',
                        detail3 = '". $_POST['detail3'] ."',
                        detail4 = '". $_POST['detail4'] ."',
                        detail5 = '". $_POST['detail5'] ."',
                        detail6 = '". $_POST['detail6'] ."',
                        detail7 = '". $_POST['detail7'] ."',
                        detail8 = '". $_POST['detail8'] ."',
                        detail9 = '". $_POST['detail9'] ."',
                        detail10 = '". $_POST['detail10'] ."',
                        detail11 = '". $_POST['detail11'] ."',
                        detail12 = '". $_POST['detail12'] ."',
                        detail13 = '". $_POST['detail13'] ."',
                        detail14 = '". $_POST['detail14'] ."',
                        detail15 = '". $_POST['detail15'] ."',
                        detail16 = '". $_POST['detail16'] ."',
                        detail17 = '". $_POST['detail17'] ."',
                        detail18 = '". $_POST['detail18'] ."',
                        total = '". $Total ."'
                    WHERE
                        pm_id = '". $_POST['pm_id'] ."'
                        AND houseFive_id = '". $h_id ."' ";

        mssql_query($update);
        // echo $update;
    } else {
        $insert = "INSERT INTO [QC].[dbo].[houseFive]
                    (house1,
                    house2,
                    house3,
                    house4,
                    house5,
                    house6,
                    house7,
                    house8,
                    house9,
                    house10,
                    house11,
                    house12,
                    house13,
                    house14,
                    house15,
                    house16,
                    house17,
                    house18,
                    detail1,
                    detail2,
                    detail3,
                    detail4,
                    detail5,
                    detail6,
                    detail7,
                    detail8,
                    detail9,
                    detail10,
                    detail11,
                    detail12,
                    detail13,
                    detail14,
                    detail15,
                    detail16,
                    detail17,
                    detail18,
                    house_name,
                    total,
                    pm_id)
                    values
                    ('". $_POST['house1'] ."',
                    '". $_POST['house2'] ."',
                    '". $_POST['house3'] ."',
                    '". $_POST['house4'] ."',
                    '". $_POST['house5'] ."',
                    '". $_POST['house6'] ."',
                    '". $_POST['house7'] ."',
                    '". $_POST['house8'] ."',
                    '". $_POST['house9'] ."',
                    '". $_POST['house10'] ."',
                    '". $_POST['house11'] ."',
                    '". $_POST['house12'] ."',
                    '". $_POST['house13'] ."',
                    '". $_POST['house14'] ."',
                    '". $_POST['house15'] ."',
                    '". $_POST['house16'] ."',
                    '". $_POST['house17'] ."',
                    '". $_POST['house18'] ."',
                    '". $_POST['detail1'] ."',
                    '". $_POST['detail2'] ."',
                    '". $_POST['detail3'] ."',
                    '". $_POST['detail4'] ."',
                    '". $_POST['detail5'] ."',
                    '". $_POST['detail6'] ."',
                    '". $_POST['detail7'] ."',
                    '". $_POST['detail8'] ."',
                    '". $_POST['detail9'] ."',
                    '". $_POST['detail10'] ."',
                    '". $_POST['detail11'] ."',
                    '". $_POST['detail12'] ."',
                    '". $_POST['detail13'] ."',
                    '". $_POST['detail14'] ."',
                    '". $_POST['detail15'] ."',
                    '". $_POST['detail16'] ."',
                    '". $_POST['detail17'] ."',
                    '". $_POST['detail18'] ."',
                    '". $_POST['name'] ."',
                    '". $Total ."',
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
?>
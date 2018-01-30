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
    $Total = $_POST['Total'];

    $check = "SELECT houseFour_id as h_id FROM [QC].[dbo].[houseFour] WHERE pm_id = '". $_POST['pm_id'] ."' ";
    $query = mssql_query($check);
    $num = mssql_num_rows($query);
    $row = mssql_fetch_assoc($query);

    $h_id = $row['h_id'];

    if($num != 0) {
        $update = "UPDATE
                        [QC].[dbo].[houseFour]
                    SET
                        house_name = '". $name ."',
                        house1 = '". $house1 ."',
                        house2 = '". $house2 ."',
                        house3 = '". $house3 ."',
                        house4 = '". $house4 ."',
                        house5 = '". $house5 ."',
                        house6 = '". $house6 ."',
                        house7 = '". $house7 ."',
                        house8 = '". $house8 ."',
                        house9 = '". $house9 ."',
                        house10 = '". $house10 ."',
                        house11 = '". $house11 ."',
                        detail1 = '". $detail1 ."',
                        detail2 = '". $detail2 ."',
                        detail3 = '". $detail3 ."',
                        detail4 = '". $detail4 ."',
                        detail5 = '". $detail5 ."',
                        detail6 = '". $detail6 ."',
                        detail7 = '". $detail7 ."',
                        detail8 = '". $detail8 ."',
                        detail9 = '". $detail9 ."',
                        detail10 = '". $detail10 ."',
                        detail11 = '". $detail11 ."',
                        total = '". $Total ."'
                    WHERE
                        pm_id = '". $_POST['pm_id'] ."'
                        AND houseFour_id = '". $h_id ."' ";

        mssql_query($update);
        // echo $update;
    } else {
        $insert = "INSERT INTO [QC].[dbo].[houseFour]
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
                    house_name,
                    total,
                    pm_id)
                    values
                    ('". $house1 ."',
                    '". $house2 ."',
                    '". $house3 ."',
                    '". $house4 ."',
                    '". $house5 ."',
                    '". $house6 ."',
                    '". $house7 ."',
                    '". $house8 ."',
                    '". $house9 ."',
                    '". $house10 ."',
                    '". $house11 ."',
                    '". $detail1 ."',
                    '". $detail2 ."',
                    '". $detail3 ."',
                    '". $detail4 ."',
                    '". $detail5 ."',
                    '". $detail6 ."',
                    '". $detail7 ."',
                    '". $detail8 ."',
                    '". $detail9 ."',
                    '". $detail10 ."',
                    '". $detail11 ."',
                    '". $name ."',
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
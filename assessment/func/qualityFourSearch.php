<?php
    session_start();
    require('../inc/connect.php');

    $sql = "SELECT
                a.day as day,
                a.day2 as day2,
                a.day3 as day3,
                a.ass11 as Ass11,
                a.ass12 as Ass12,
                a.ass13 as Ass13,
                CAST(a.detail1 as Text) as Detail1,
                a.ass21 as Ass21,
                a.ass22 as Ass22,
                a.ass23 as Ass23,
                CAST(a.detail2 as Text) as Detail2,
                a.ass31 as Ass31,
                a.ass32 as Ass32,
                a.ass33 as Ass33,
                CAST(a.detail3 as Text) as Detail3,
                CAST(a.cause1 as Text) as Cause1,
                CAST(a.cause2 as Text) as Cause2,
                CAST(a.cause3 as Text) as Cause3,
                CAST(a.cause4 as Text) as Cause4,
                CAST(a.cause5 as Text) as Cause5,
                a.sum1 as Sum1,
                a.sum2 as Sum2,
                a.sum3 as Sum3,
                CAST(s.site_name as Text) as Name
            FROM
                [QC].[dbo].[assFour] a inner join
                [QC].[dbo].[Request] q on a.pm_id = q.pm_id inner join
                [QC].[dbo].[Site] s on q.site_id = s.site_id
            WHERE
                a.pm_id = '". $_GET['Pm_id'] ."' ";

    $query = mssql_query($sql);
    $row = mssql_fetch_assoc($query);

    if($row['day'] != '') {
        $Day = new datetime($row['day']);
        $Day = $Day->format('d-m-Y');
    }
    if($row['day2'] != '') {
        $Day2 = new datetime($row['day2']);
        $Day2 = $Day2->format('d-m-Y');
    }
    if($row['day3'] != '') {
        $Day3 = new datetime($row['day3']);
        $Day3 = $Day3->format('d-m-Y');
    }

    if($Day == '01-01-1900') {
        $Day = NULL;
    } else {
        $Day = $Day;
    }

    if($Day2 == '01-01-1900') {
        $Day2 = NULL;
    } else {
        $Day2 = $Day2;
    }

    if($Day3 == '01-01-1900') {
        $Day3 = NULL;
    } else {
        $Day3 = $Day3;
    }
?>
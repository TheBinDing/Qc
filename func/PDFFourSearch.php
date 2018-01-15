<?php
    $sql = "SELECT
                a.assFour_id,
                CAST(a.ass11 as Text) as ass11,
                CAST(a.ass12 as Text) as ass12,
                CAST(a.ass13 as Text) as ass13,
                CAST(a.detail1 as Text) as detail1,
                CAST(a.ass21 as Text) as ass21,
                CAST(a.ass22 as Text) as ass22,
                CAST(a.ass23 as Text) as ass23,
                CAST(a.detail2 as Text) as detail2,
                CAST(a.ass31 as Text) as ass31,
                CAST(a.ass32 as Text) as ass32,
                CAST(a.ass33 as Text) as ass33,
                CAST(a.detail3 as Text) as detail3,
                CAST(a.cause1 as Text) as cause1,
                CAST(a.cause2 as Text) as cause2,
                CAST(a.cause3 as Text) as cause3,
                CAST(a.cause4 as Text) as cause4,
                CAST(a.cause5 as Text) as cause5,
                CAST(a.sum1 as Text) as sum1,
                CAST(a.sum2 as Text) as sum2,
                CAST(a.sum3 as Text) as sum3,
                a.day,
                a.day2,
                a.day3,
                CAST(s.Site_Name as Text) as Site
            FROM
                [QC].[dbo].[assFour] a inner join
                [QC].[dbo].[Request] r on a.pm_id = r.pm_id inner join
                [QC].[dbo].[Site] s on r.site_id = s.site_id
            WHERE
                a.pm_id = '". $_GET['Pm'] ."' ";

    $query_point = mssql_query($sql);
    $row_point = mssql_fetch_assoc($query_point);
?>
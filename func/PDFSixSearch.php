<?php
    $sql = "SELECT
                a.assSix_id,
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
                CAST(a.ass41 as Text) as ass41,
                CAST(a.ass42 as Text) as ass42,
                CAST(a.ass43 as Text) as ass43,
                CAST(a.detail4 as Text) as detail4,
                CAST(a.ass51 as Text) as ass51,
                CAST(a.ass52 as Text) as ass52,
                CAST(a.ass53 as Text) as ass53,
                CAST(a.detail5 as Text) as detail5,
                CAST(a.ass61 as Text) as ass61,
                CAST(a.ass62 as Text) as ass62,
                CAST(a.ass63 as Text) as ass63,
                CAST(a.detail6 as Text) as detail6,
                CAST(a.ass71 as Text) as ass71,
                CAST(a.ass72 as Text) as ass72,
                CAST(a.ass73 as Text) as ass73,
                CAST(a.detail7 as Text) as detail7,
                CAST(a.ass81 as Text) as ass81,
                CAST(a.ass82 as Text) as ass82,
                CAST(a.ass83 as Text) as ass83,
                CAST(a.detail8 as Text) as detail8,
                CAST(a.ass91 as Text) as ass91,
                CAST(a.ass92 as Text) as ass92,
                CAST(a.ass93 as Text) as ass93,
                CAST(a.detail9 as Text) as detail9,
                CAST(a.ass101 as Text) as ass101,
                CAST(a.ass102 as Text) as ass102,
                CAST(a.ass103 as Text) as ass103,
                CAST(a.detail10 as Text) as detail10,
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
                [QC].[dbo].[assSix] a inner join
                [QC].[dbo].[Request] r on a.pm_id = r.pm_id inner join
                [QC].[dbo].[Site] s on r.site_id = s.site_id
            WHERE
                a.pm_id = '". $_GET['Pm'] ."' ";

    $query_point = mssql_query($sql);
    $row_point = mssql_fetch_assoc($query_point);
?>
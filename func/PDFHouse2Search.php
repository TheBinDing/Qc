<?php
    $sql = "SELECT
                a.houseTwo_id,
                CAST(a.house1 as Text) as house1,
                CAST(a.house2 as Text) as house2,
                CAST(a.house3 as Text) as house3,
                CAST(a.house4 as Text) as house4,
                CAST(a.house5 as Text) as house5,
                CAST(a.house6 as Text) as house6,
                CAST(a.house7 as Text) as house7,
                CAST(a.house8 as Text) as house8,
                CAST(a.house9 as Text) as house9,
                CAST(a.house10 as Text) as house10,
                CAST(a.house11 as Text) as house11,
                CAST(a.house12 as Text) as house12,
                CAST(a.house13 as Text) as house13,
                CAST(a.house14 as Text) as house14,
                CAST(a.detail1 as Text) as detail1,
                CAST(a.detail2 as Text) as detail2,
                CAST(a.detail3 as Text) as detail3,
                CAST(a.detail4 as Text) as detail4,
                CAST(a.detail5 as Text) as detail5,
                CAST(a.detail6 as Text) as detail6,
                CAST(a.detail7 as Text) as detail7,
                CAST(a.detail8 as Text) as detail8,
                CAST(a.detail9 as Text) as detail9,
                CAST(a.detail10 as Text) as detail10,
                CAST(a.detail11 as Text) as detail11,
                CAST(a.detail12 as Text) as detail12,
                CAST(a.detail13 as Text) as detail13,
                CAST(a.detail14 as Text) as detail14,
                CAST(a.house_name as Text) as name,
                CAST(a.total as Text) as total,
                CAST(s.Site_Name as Text) as Site
            FROM
                [QC].[dbo].[houseTwo] a inner join
                [QC].[dbo].[Request] r on a.pm_id = r.pm_id inner join
                [QC].[dbo].[Site] s on r.site_id = s.site_id
            WHERE
                a.pm_id = '". $_GET['Pm'] ."' ";

    $query_point = mssql_query($sql);
    $row_point = mssql_fetch_assoc($query_point);
?>
<?php
    $sql = "SELECT
                a.houseOne_id,
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
                CAST(a.house15 as Text) as house15,
                CAST(a.house16 as Text) as house16,
                CAST(a.house17 as Text) as house17,
                CAST(a.house18 as Text) as house18,
                CAST(a.house19 as Text) as house19,
                CAST(a.house20 as Text) as house20,
                CAST(a.house21 as Text) as house21,
                CAST(a.house22 as Text) as house22,
                CAST(a.house23 as Text) as house23,
                CAST(a.house24 as Text) as house24,
                CAST(a.house25 as Text) as house25,
                CAST(a.house26 as Text) as house26,
                CAST(a.house27 as Text) as house27,
                CAST(a.house28 as Text) as house28,
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
                CAST(a.detail15 as Text) as detail15,
                CAST(a.detail16 as Text) as detail16,
                CAST(a.detail17 as Text) as detail17,
                CAST(a.detail18 as Text) as detail18,
                CAST(a.detail19 as Text) as detail19,
                CAST(a.detail20 as Text) as detail20,
                CAST(a.detail21 as Text) as detail21,
                CAST(a.detail22 as Text) as detail22,
                CAST(a.detail23 as Text) as detail23,
                CAST(a.detail24 as Text) as detail24,
                CAST(a.detail25 as Text) as detail25,
                CAST(a.detail26 as Text) as detail26,
                CAST(a.detail27 as Text) as detail27,
                CAST(a.detail28 as Text) as detail28,
                CAST(a.house_name as Text) as name,
                CAST(a.total as Text) as total,
                CAST(s.Site_Name as Text) as Site
            FROM
                [QC].[dbo].[houseOne] a inner join
                [QC].[dbo].[Request] r on a.pm_id = r.pm_id inner join
                [QC].[dbo].[Site] s on r.site_id = s.site_id
            WHERE
                a.pm_id = '". $_GET['Pm'] ."' ";

    $query_point = mssql_query($sql);
    $row_point = mssql_fetch_assoc($query_point);
?>
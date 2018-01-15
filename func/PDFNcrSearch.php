<?php
    $sql = "SELECT
                n.ncr_id,
                CAST(n.ncr_reference as Text) as ncr_reference,
                CAST(n.ncr_raised as Text) as ncr_raised,
                CAST(n.ncr_department as Text) as ncr_department,
                n.ncr_day,
                CAST(n.ncr_unit as Text) as ncr_unit,
                CAST(n.ncr_departments as Text) as ncr_departments,
                CAST(n.ncr_problems as Text) as ncr_problems,
                CAST(n.ncr_why1 as Text) as ncr_why1,
                CAST(n.ncr_why2 as Text) as ncr_why2,
                CAST(n.ncr_why3 as Text) as ncr_why3,
                CAST(n.ncr_why4 as Text) as ncr_why4,
                CAST(n.ncr_why5 as Text) as ncr_why5,
                CAST(n.ncr_cause as Text) as ncr_cause,
                CAST(n.ncr_wayShort as Text) as ncr_wayShort,
                CAST(n.ncr_wayLong as Text) as ncr_wayLong,
                n.ncr_targetDay,
                n.ncr_finishedDay,
                n.ncr_solving,
                n.ncr_budget,
                n.ncr_targetDays,
                n.ncr_finishedDays,
                n.ncr_protect,
                n.ncr_budgets,
                n.ncr_status,
                s.site_id,
                p.pb_id,
                CAST(s.site_name as Text) as site_name,
                n.u_id,
                n.create_day,
                n.update_day,
                n.ncr_img_partI as ncr_img_partI,
                n.ncr_img_partII_I as ncr_img_partII_I,
                n.ncr_img_partII_II as ncr_img_partII_II,
                n.detail_partII_I as detail_partII_I,
                n.detail_partII_II as detail_partII_II
            FROM
                [QC].[dbo].[NCR] n inner join
                [QC].[dbo].[Site] s on n.site_id = s.site_id inner join
                [QC].[dbo].[Problem] p on n.pb_id = p.pb_id
            WHERE
                n.ncr_id = '". $_GET['NCR'] ."' ";

    $query_ncr = mssql_query($sql);
    $row_ncr = mssql_fetch_assoc($query_ncr);
?>
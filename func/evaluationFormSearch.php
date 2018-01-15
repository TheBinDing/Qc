<?php
    $sql = "SELECT
                r.pm_id as ID,
                CAST(r.pm_detail as Text) as Detail,
                r.pm_time Times,
                CAST(r.pm_note as Text) as Note,
                g.g_id as Group_ID,
                CAST(g.g_name as Text) as Group_Name,
                CAST(s.site_name as Text) as Site_Name,
                r.pm_status as Status
            FROM
                [QC].[dbo].[Request] r inner join
                [QC].[dbo].[Group] g on r.g_id = g.g_id inner join
                [QC].[dbo].[Site] s on r.site_id = s.site_id
            WHERE
                r.pm_status = 2 or r.pm_status = 3 ";

    $query = mssql_query($sql);
    $num = mssql_num_rows($query);
?>
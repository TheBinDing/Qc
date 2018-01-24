<?php
    $sql = "SELECT
                r.pm_id as ID,
                CAST(r.pm_detail as Text) as Detail,
                r.pm_time as  DateTimes,
                CAST(r.pm_note as Text) as Note,
                g.g_id as Group_ID,
                CAST(g.g_name as Text) as Group_Name,
                s.site_id as Site_ID,
                CAST(s.site_name as Text) as Site_Name,
                r.pm_status as Status,
                CAST(t.t_time as Text) as Times
            FROM
                  [QC].[dbo].[Request] r inner join
                  [QC].[dbo].[Group] g on r.g_id = g.g_id inner join
                  [QC].[dbo].[Site] s on r.site_id = s.site_id inner join
                  [QC].[dbo].[Time] t on r.t_id = t.t_id
            ORDER BY
				r.pm_status asc,
                r.pm_id ";

    $query = mssql_query($sql);
    $num = mssql_num_rows($query);
?>
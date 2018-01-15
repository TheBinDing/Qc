<?php
    $sql = "SELECT
                sv.sv_id AS ID,
                CAST(s.site_name as Text) as Site_Name,
                CAST(u.u_user as Text) as User_Name
            FROM
                [QC].[dbo].[SiteVisit] sv inner join
                [QC].[dbo].[Site] s on sv.site_id = s.site_id inner join
                [QC].[dbo].[Users] u on sv.u_id = u.u_id ";

    $query = mssql_query($sql);
    $num = mssql_num_rows($query);
?>
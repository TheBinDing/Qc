<?php
    $sql = "SELECT
                ncr.ncr_id AS ID,
                CAST(s.site_name as Text) as Site_Name,
                CAST(u.u_user as Text) as User_Name,
                ncr.ncr_status as Status
            FROM
                [QC].[dbo].[ncr] ncr inner join
                [QC].[dbo].[Site] s on ncr.site_id = s.site_id inner join
                [QC].[dbo].[Users] u on ncr.u_id = u.u_id ";

    $query = mssql_query($sql);
    $num = mssql_num_rows($query);
?>
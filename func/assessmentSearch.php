<?php
    @session_start();

    $ncrID = $_GET['ncr_id'];

    if(!empty($ncr_id)) {
        $sql = "SELECT
                    n.ncr_id as Code,
                    CAST(n.ncr_reference as Text) as Reference,
                    CAST(n.ncr_raised as Text) as Raised,
                    CAST(n.ncr_department as Text) as Department,
                    n.ncr_day as Day,
                    CAST(n.ncr_unit as Text) as Unit,
                    CAST(n.ncr_departments as Text) as Departments,
                    CAST(n.ncr_problems as Text) as Problems,
                    CAST(n.ncr_why1 as Text) as Why1,
                    CAST(n.ncr_why2 as Text) as Why2,
                    CAST(n.ncr_why3 as Text) as Why3,
                    CAST(n.ncr_why4 as Text) as Why4,
                    CAST(n.ncr_why5 as Text) as Why5,
                    CAST(n.ncr_cause as Text) as Cause,
                    CAST(n.ncr_wayShort as Text) as WayShort,
                    CAST(n.ncr_wayLong as Text) as WayLong,
                    CAST(p.pb_name as Text) as pbName,
                    CAST(s.site_name as Text) as sName,
                    CAST(n.ncr_img_partI as Text) as img
                FROM
                    [QC].[dbo].[ncr] n inner join
                    [QC].[dbo].[Site] s on n.site_id = s.site_id inner join 
                    [QC].[dbo].[Problem] p on n.pb_id = p.pb_id
                WHERE
                    ncr_id = '". $ncrID ."' ";

        $query = mssql_query($sql);
        $row = mssql_fetch_assoc($query);
    } else {
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
    }
?>
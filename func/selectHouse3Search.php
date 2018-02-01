<?php
    $sql_g = "SELECT
                    CAST(a.sum1 as Text) as sum1,
                    CAST(a.sum2 as Text) as sum2,
                    CAST(a.sum3 as Text) as sum3
                FROM
                    [QC].[dbo].[houseThree] a inner join
                    [QC].[dbo].[Request] r on a.pm_id = r.pm_id inner join
                    [QC].[dbo].[Site] s on r.site_id = s.site_id
                WHERE
                    a.pm_id = '". $row['ID'] ."' ";

    $query_g = mssql_query($sql_g);
    $num_g = mssql_num_rows($query_g);
    $row_g = mssql_fetch_assoc($query_g);

    if($num_g == 0) {
        $sqlCheck = 0;
    } else {
        $sqlCheck = 1;
    }
?>
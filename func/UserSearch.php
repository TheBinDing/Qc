<?php
    $sql_Search = " SELECT
                        u_id AS id,
                        CAST(u_user as text) AS users,
                        u_permission AS permission,
                        CAST(u_fullname as text) as fullname,
                        CAST(u_mail as text) AS email,
                        CAST(u_pic as text) AS pic
                    FROM
                        [QC].[dbo].[Users] ";

    $query_search = mssql_query($sql_Search);
    $num_search = mssql_num_rows($query_search);
?>
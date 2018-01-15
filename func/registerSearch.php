<?php
    @session_start();

    $id = $_GET['ID'];

    if(isset($id)) {
        $regis_Search = " SELECT
                            u_id as codeId,
                            CAST(u_user as text) AS users,
                            u_permission AS permission,
                            CAST(u_fullname as text) as fullname,
                            CAST(u_mail as text) AS email,
                            CAST(u_pic as text) AS pic
                        FROM
                            [QC].[dbo].[Users]
                        WHERE
                            u_id = '". $id ."' ";

        $query_search = mssql_query($regis_Search);
        $row_search = mssql_fetch_assoc($query_search);

        $idU = $row_search['codeId'];
        $userU = $row_search['users'];
        $nameU = $row_search['fullname'];
        $mailU = $row_search['email'];
        $permissionU = $row_search['permission'];
    }
?>
<?php
    @session_start();
    require("../inc/connect.php");

    $st = $_GET['status'];

    $times = new datetime();
    $times = $times->format('d-m-Y');

    $CT = "SELECT pm_time FROM [QC].[dbo].[Request] WHERE pm_id = '". $_GET['Pm_id'] ."' ";
    $query_ct = mssql_query($CT);
    $row_ct = mssql_fetch_assoc($query_ct);

    $ct_time = new datetime($row_ct['pm_time']);
    $ct_time = $ct_time->format('d-m-Y');

    $l = explode('-', $ct_time);
    $ct_time_l = ($l[0]-3).'-'.$l[1].'-'.$l[2];
    
    if($st == 1) {
        $update_pm = " UPDATE [QC].[dbo].[Request] set pm_status = '2' WHERE pm_id = '". $_GET['Pm_id'] ."' ";
        mssql_query($update_pm);
    } else {
        if($times >= $ct_time_l) {
        	exit("<script>alert('Yon can not cancel');history.back();</script>");
        } else {
	        $update_pm = " UPDATE [QC].[dbo].[Request] set pm_status = '4' WHERE pm_id = '". $_GET['Pm_id'] ."' ";
	        mssql_query($update_pm);
        }
    }

    exit("<script>window.location='../qcRequest.php';</script>");
?>
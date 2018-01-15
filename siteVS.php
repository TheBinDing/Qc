<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    require('func/siteVsSearch.php');
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'SiteVS';
    // $_SESSION['Link'] = 'News.php';
    // if($_SESSION['user_name'] == "")
    // {
    //     echo "Please Login!";
    //     exit("<script>alert('Please Login');window.location='login.php';</script>");
    // }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/blue/pace-theme-loading-bar.css" />
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <title>บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)</title>
</head>
<body>
    <div class="row">
        <?php
            require("Head2.php");
        ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <h1>
                    <span> Site Visit </span>
                    <a class="glyphicon glyphicon-plus-sign" href="siteVSDetail.php"></a>
                </h1>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="10">
                        <thead>
                            <tr>
                                <th style="text-align: center;">รหัส</th>
                                <th style="text-align: center;">โครงการ</th>
                                <th style="text-align: center;">ชื่อ-นามสกุล</th>
                                <th style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($p=1;$p<=$num;$p++) {
                                    $row = mssql_fetch_array($query);

                                    $Time = new datetime($row['Times']);
                                    $Time = $Time->format('d-m-Y H:i:s');

                                    if($row['Status'] == '1') {
                                        $status = 'รอการยืนยัน';
                                    }
                            ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $row['ID']; ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Site_Name']); ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['User_Name']); ?></td>
                                <td style="text-align: center;">
                                    <a class="btn-white btn btn-xs" id="visit_id" data-code="<?php echo $row['ID']; ?>" role="button">รายงาน</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-1"></div>
    </div>
</body>

<script src="js/jquery.js"></script>
<script src="js/plugins/datapicker/bootstrap-datepicker-thai.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/chosen/chosen.jquery.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/switchery/switchery.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/pace.js"></script>
<script type="text/javascript">
    (function ( $ ) {
    } (jQuery));
</script>
<script type="text/javascript">
    jQuery(function( $ ) {
        qc.request.Criteria = {};
        // requestLoad();

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    });

    var qc = {
        request: new Object()
    };

    $('.btn-white').click(function(){
        var visit = $(this).data("code");

        window.open("pdf/PDF_SiteVisit.php?Sv_id="+ visit);
    });
</script>

<html>
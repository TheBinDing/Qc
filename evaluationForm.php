<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    require('func/evaluationFormSearch.php');
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'questevaluation';
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
                    <span> QC Receive </span>
                </h1>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="10">
                        <thead>
                            <tr>
                                <th style="text-align: center;">รหัส</th>
                                <th style="text-align: center;">โครงการ</th>
                                <th style="text-align: center;">หมวด</th>
                                <th style="text-align: center;">รายละเอียด(ตำแหน่งชั้น)</th>
                                <th style="text-align: center;">สถานะ</th>
                                <th style="text-align: center;">ใบประเมิน</th>
                                <th style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($p=1;$p<=$num;$p++) {
                                    $row = mssql_fetch_array($query);

                                    $Time = new datetime($row['Times']);
                                    $Time = $Time->format('d-m-Y H:i:s');
                                    $gID = $row['Group_ID'];

                                    if($row['Status'] == '2') {
                                        $status = 'รอการประเมิน';
                                        $dis = 'disabled';
                                    }
                                    if($row['Status'] == '3') {
                                        $status = 'ทำงานประเมินแล้ว';
                                        $dis = '';
                                    }

                                    if($row['Group_ID'] == 1) {
                                        $pathName = 'assessment/qualityOne1.php?Pm_id='.$row['ID'];
                                        require("func/selectOne1Search.php");
                                    }
                                    if($row['Group_ID'] == 2) {
                                        $pathName = 'assessment/qualityOne2.php?Pm_id='.$row['ID'];
                                        require("func/selectOne2Search.php");
                                    }
                                    if($row['Group_ID'] == 3) {
                                        $pathName = 'assessment/qualityOne3.php?Pm_id='.$row['ID'];
                                        require("func/selectOne3Search.php");
                                    }
                                    if($row['Group_ID'] == 4) {
                                        $pathName = 'assessment/qualityOne4.php?Pm_id='.$row['ID'];
                                        require("func/selectOne4Search.php");
                                    }
                                    if($row['Group_ID'] == 5) {
                                        $pathName = 'assessment/qualityOne5.php?Pm_id='.$row['ID'];
                                        require("func/selectOne5Search.php");
                                    }
                                    if($row['Group_ID'] == 6) {
                                        $pathName = 'assessment/qualityOne6.php?Pm_id='.$row['ID'];
                                        require("func/selectOne6Search.php");
                                    }
                                    if($row['Group_ID'] == 7) {
                                        $pathName = 'assessment/qualityTwo.php?Pm_id='.$row['ID'];
                                        require("func/selectTwoSearch.php");
                                    }
                                    if($row['Group_ID'] == 8) {
                                        $pathName = 'assessment/qualityThree.php?Pm_id='.$row['ID'];
                                        require("func/selectThreeSearch.php");
                                    }
                                    if($row['Group_ID'] == 9) {
                                        $pathName = 'assessment/qualityFour.php?Pm_id='.$row['ID'];
                                        require("func/selectFourSearch.php");
                                    }
                                    if($row['Group_ID'] == 10) {
                                        $pathName = 'assessment/qualityFive.php?Pm_id='.$row['ID'];
                                        require("func/selectFiveSearch.php");
                                    }
                                    if($row['Group_ID'] == 11) {
                                        $pathName = 'assessment/qualitySix.php?Pm_id='.$row['ID'];
                                        require("func/selectSixSearch.php");
                                    }
                                    if($row['Group_ID'] == 12) {
                                        $pathName = 'assessment/house1.php?Pm_id='.$row['ID'];
                                        require("func/selectHouse1Search.php");
                                    }
                                    if($row['Group_ID'] == 13) {
                                        $pathName = 'assessment/house2.php?Pm_id='.$row['ID'];
                                        require("func/selectHouse2Search.php");
                                    }
                                    if($row['Group_ID'] == 14) {
                                        $pathName = 'assessment/house3.php?Pm_id='.$row['ID'];
                                        require("func/selectHouse3Search.php");
                                    }
                                    if($row['Group_ID'] == 15) {
                                        $pathName = 'assessment/house4.php?Pm_id='.$row['ID'];
                                        require("func/selectHouse4Search.php");
                                    }
                                    if($row['Group_ID'] == 16) {
                                        $pathName = 'assessment/house5.php?Pm_id='.$row['ID'];
                                        require("func/selectHouse5Search.php");
                                    }

                                    // echo $sqlCheck.'<br>';

                                    if($sqlCheck == 1) {
                                        $dis2 = 'disabled';
                                    } else {
                                        $dis2 = '';
                                    }
                            ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $row['ID']; ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Site_Name']); ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Group_Name']); ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Detail']); ?></td>
                                <td style="text-align: center;"><?php echo $status; ?></td>
                                <td style="text-align: center;">
                                    <a class="btn-white btn btn-xs" id="test" data-code="<?php echo $row['ID']; ?>" data-group="<?php echo $gID; ?>" role="button" <?=$dis?>>ใบประเมิน</a>
                                </td>
                                <td style="text-align: center;">
                                    <!-- <a href="func/qcRequestSave.php?Pm_id=<?php echo $row['ID']; ?>" class="btn-white btn btn-xs" role="button">ทำการประเมิน</a> -->
                                    <a href="<?php echo $pathName; ?>" class="btn-white btn btn-xs" role="button" <?=$dis2?>>ทำการประเมิน</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="7">
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
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
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
        var Group = $(this).data("group");
        var Site = $(this).data("code");

        if(Group == 1) {
            window.open("pdf/PDF_qualityOne1.php?Pm="+ Site);
        }
        if(Group == 2) {
            window.open("pdf/PDF_qualityOne2.php?Pm="+ Site);
        }
        if(Group == 3) {
            window.open("pdf/PDF_qualityOne3.php?Pm="+ Site);
        }
        if(Group == 4) {
            window.open("pdf/PDF_qualityOne4.php?Pm="+ Site);
        }
        if(Group == 5) {
            window.open("pdf/PDF_qualityOne5.php?Pm="+ Site);
        }
        if(Group == 6) {
            window.open("pdf/PDF_qualityOne6.php?Pm="+ Site);
        }
        if(Group == 7) {
            window.open("pdf/PDF_qualityTwo.php?Pm="+ Site);
        }
        if(Group == 8) {
            window.open("pdf/PDF_qualityThree.php?Pm="+ Site);
        }
        if(Group == 9) {
            window.open("pdf/PDF_qualityFour.php?Pm="+ Site);
        }
        if(Group == 10) {
            window.open("pdf/PDF_qualityFive.php?Pm="+ Site);
        }
        if(Group == 11) {
            window.open("pdf/PDF_qualitySix.php?Pm="+ Site);
        }
        if(Group == 12) {
            window.open("pdf/PDF_HouseOne.php?Pm="+ Site);
        }
        if(Group == 13) {
            window.open("pdf/PDF_HouseTwo.php?Pm="+ Site);
        }
        if(Group == 14) {
            window.open("pdf/PDF_HouseThree.php?Pm="+ Site);
        }
        if(Group == 15) {
            window.open("pdf/PDF_HouseFour.php?Pm="+ Site);
        }
        if(Group == 16) {
            window.open("pdf/PDF_HouseFive.php?Pm="+ Site);
        }
    });
</script>

<html>
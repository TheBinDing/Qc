<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    require('func/pmRequestSearch.php');
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'questPM';
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
<style>
    .showImg {
        width:50%;
        height:100px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #fff;
        background-image: url('img/loader.gif');
        background-repeat: no-repeat;
        background-position:center 50%;
    }

    .shows {
        position:fixed;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        z-index:99;
        display: none;
    }
</style>
<body>
    <div class="row">
        <?php
            require("Head2.php");
        ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <h1>
                    <span> PM REQUEST </span>
                    <a data-toggle="modal" data-target="#myModal1" class="open-sendnames glyphicon glyphicon-plus-sign" ></a>
                </h1>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="10">
                        <thead>
                            <tr>
                                <th style="text-align: center;">รหัส</th>
                                <th style="text-align: center;">โครงการ</th>
                                <th style="text-align: center;">หมวด</th>
                                <th style="text-align: center;">รายละเอียด(ตำแหน่งชั้น)</th>
                                <th style="text-align: center;">วันที่ตรวจสอบ</th>
                                <th style="text-align: center;">เวลาตรวจสอบ</th>
                                <th style="text-align: center;">สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($p=1;$p<=$num;$p++) {
                                    $row = mssql_fetch_array($query);

                                    $Time = new datetime($row['DateTimes']);
                                    $Time = $Time->format('d-m-Y');
                                    $none = '';
                                    $rep = 0;

                                    if($row['Status'] == '0') {
                                        $status = 'ส่งข้อมูล';
                                    }
                                    if($row['Status'] == '1') {
                                        $status = 'รอการยืนยัน';
                                    }
                                    if($row['Status'] == '2') {
                                        $status = 'รอการประเมิน';
                                    }
                                    if($row['Status'] == '3') {
                                        $status = 'ประเมินเรียบร้อย';
                                        $rep = 1;
                                    }
                                    if($row['Status'] == '4') {
                                        $status = 'ยกเลิกการประเมิน';
                                    }
                            ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $p; ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Site_Name']); ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Group_Name']); ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Detail']); ?></td>
                                <td style="text-align: center;"><?php echo $Time; ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Times']); ?></td>
                                <td style="text-align: center;">
                                    <!-- <div <?php if($row['Status'] != 0) { $none = '    pointer-events: none;cursor: not-allowed;box-shadow: none;opacity: 0.65;'; } ?> >
                                        <?php if($rep != 0) { ?>
                                        <a href="#" class="btn-white btn btn-xs" role="button"><?=$status?></a>
                                        <?php } else { ?>
                                        <a class="btn-white btn btn-xs SendData" style="<?=$none?>" role="button" onClick="upSend(<?php echo $row['ID']; ?>);"><?=$status?></a>
                                        <?php } ?>
                                    </div> -->
                                    <?php if($rep != 0) { ?>
                                        <a target="_blank" class="btn-white btn btn-xs" role="button" onClick="doReport(<?=$row['Site_ID']?>, <?=$row['Group_ID']?>);"><?=$status?></a>
                                    <?php
                                    } else {
                                        if($row['Status'] != 0) {
                                            $none = 'pointer-events: none;cursor: not-allowed;box-shadow: none;opacity: 0.65;';
                                    ?>
                                        <a class="btn-white btn btn-xs SendData" style="<?=$none?>" role="button"><?=$status?></a>
                                    <?php
                                        } else {
                                    ?>
                                        <a class="btn-white btn btn-xs SendData" role="button" onClick="upSend(<?php echo $row['ID']; ?>);"><?=$status?></a>
                                    <?php
                                        }  }
                                    ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="8">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal inmodal" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <h2>ข้อมูลการตรวจสอบคุณภาพ</h2>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <?php
                                        $group = "SELECT g_id, CAST(g_name as Text) as gName FROM [QC].[dbo].[Group]";

                                        $query_group = mssql_query($group);
                                        $num_group =mssql_num_rows($query_group);
                                    ?>
                                    <label class="control-label">หมวดงาน</label>
                                    <select class="form-control" name="Group" id="Group" style="height: 30px;">
                                        <?php
                                            for($i=1;$i<=$num_group;$i++) {
                                                $row_group = mssql_fetch_array($query_group);
                                        ?>
                                        <option value="<?php echo $row_group['g_id']; ?>"><?php echo iconv('TIS-620','UTF-8',$row_group['gName']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <?php
                                        $site = "SELECT site_id, CAST(site_name as Text) as sName FROM [QC].[dbo].[Site]";

                                        $query_site = mssql_query($site);
                                        $num_site = mssql_num_rows($query_site);
                                    ?>
                                    <label class="control-label">โครงการ</label>
                                    <select class="form-control" name="Site" id="Site" style="height: 30px;">
                                        <?php
                                            for($ii=1;$ii<=$num_site;$ii++) {
                                            $row_site = mssql_fetch_array($query_site);
                                        ?>
                                        <option value="<?php echo $row_site['site_id']; ?>"><?php echo iconv('TIS-620','UTF-8',$row_site['sName']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">รายละเอียด(ตำแหน่งชั้น)</label>
                                    <input type="text" value="" id="Detail" name="Detail" class="form-control" style="height: 30px;">
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12" id="data_1">
                                        <label class="control-label">วันที่ตรวจสอบ</label>
                                        <div class="input-group date" data-date="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="Time" id="Time" class="form-control" value="<?php echo date('d-m-Y'); ?>" style="width: 100px;height: 30px;" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php
                                        $time = "SELECT t_id, CAST(t_time as Text) as Time FROM [QC].[dbo].[Time]";

                                        $query_time = mssql_query($time);
                                        $num_time = mssql_num_rows($query_time);
                                    ?>
                                    <label class="control-label">เวลาตรวจสอบ</label>
                                    <select class="form-control" name="Times" id="Times" style="height: 30px;">
                                        <?php
                                            for($t=1;$t<=$num_time;$t++) {
                                            $row_time = mssql_fetch_array($query_time);
                                        ?>
                                        <option value="<?php echo $row_time['t_id']; ?>"><?php echo iconv('TIS-620','UTF-8',$row_time['Time']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">หมายเหตุ</label>
                                    <input type="text" value="" id="Note" name="Note" class="form-control" style="height: 30px;">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" onClick="requestSave();">เพิ่ม</button>
                            </div>
                        </div>
                    </div>
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
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/pace.js"></script>
<script type="text/javascript">
    (function ( $ ) {
        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
    } (jQuery));
</script>
<script type="text/javascript">
    jQuery(function( $ ) {
        tpoly.qc.Criteria = {};

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    });

    var tpoly = {
        qc: new Object()
    };

    function popup(value) {
        if(value == 'loading'){
            $('#block').css('display','block');
            $('#loading').fadeIn();
            $('html').css('overflow','hidden');
            $('body').css('overflow','hidden');
        }
        else if(value == 'close'){
            $('#block').css('display','none');
            $('#loading').css('display','none');
            $('html').css('overflow','auto');
            $('body').css('overflow','auto');
        }
    }

    function requestSave() {
        tpoly.qc.Criteria['mode'] = 'request_save';
        tpoly.qc.Criteria['group'] = $('#Group').val();
        tpoly.qc.Criteria['site'] = $('#Site').val();
        tpoly.qc.Criteria['detail'] = $('#Detail').val();
        tpoly.qc.Criteria['time'] = $('#Time').val();
        tpoly.qc.Criteria['times'] = $('#Times').val();
        tpoly.qc.Criteria['note'] = $('#Note').val();

        var ds = new Date();
        var d = ds.getDate();
        var m = (ds.getMonth() + 1);
        var y = ds.getFullYear();

        if(m == 1) {
            m = '01';
        }
        if(m == 2) {
            m = '02';
        }
        if(m == 3) {
            m = '03';
        }
        if(m == 4) {
            m = '04';
        }
        if(m == 5) {
            m = '05';
        }
        if(m == 6) {
            m = '06';
        }
        if(m == 7) {
            m = '07';
        }
        if(m == 8) {
            m = '08';
        }
        if(m == 9) {
            m = '09';
        }

        if(d == 1) {
            d = '01';
        }
        if(d == 2) {
            d = '02';
        }

        if(d == 3) {
            d = '03';
        }
        if(d == 4) {
            d = '04';
        }

        if(d == 5) {
            d = '05';
        }
        if(d == 6) {
            d = '06';
        }

        if(d == 7) {
            d = '07';
        }
        if(d == 8) {
            d = '08';
        }
        if(d == 9) {
            d = '09';
        }

        daies = d +'-'+ m +'-'+ y;

        time = $('#Time').val();

        if(time == daies) {
            swal("ไม่สามารถเลือกวันที่ปัจจุบันได้!");
        }
        if(time < daies) {
            swal("ไม่สามารถเลือกวันที่ก่อนหน้าได้!");
        }
        if(time > daies) {
            var ajax_config = {
                url: "func/AjaxSearch.php",
                dataType: "json",
                type: "POST",
                data: tpoly.qc.Criteria,
                beforeSend: function() {
                    popup('loading');
                }
            };

            var get_ajax = $.ajax(ajax_config);
            get_ajax.done(function(response) {
                // console.log(response);
                send();
            });
        }
    }

    function send() {
        tpoly.qc.Criteria['mode'] = 'sendMail';
        tpoly.qc.Criteria['from'] = '<?php echo $_SESSION['SuperMail']; ?>';
        tpoly.qc.Criteria['name'] = '<?php echo $_SESSION['user_name']; ?>';
        tpoly.qc.Criteria['send'] = '1';
        // tpoly.qc.Criteria['site'] = $('#Site').val();
        // tpoly.qc.Criteria['details'] = $('#Detail').val();
        // tpoly.qc.Criteria['check'] = $('#Time').val();
        // tpoly.qc.Criteria['times'] = $('#Times').val();
        var ajax_config = {
            url: "func/AjaxSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.qc.Criteria,
        };

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            popup('close');
            if(response == 1) {
                swal("Email delivery!");
            } else {
                swal("Error!");
            }
        });
    }

    function upSend(id) {
        tpoly.qc.Criteria['mode'] = 'update_send';
        tpoly.qc.Criteria['id'] = id;
        var ajax_config = {
            url: "func/AjaxSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.qc.Criteria,
        };

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            sends();
        });
    }

    function sends() {
        tpoly.qc.Criteria['mode'] = 'sendMails';
        tpoly.qc.Criteria['from'] = '<?php echo $_SESSION['SuperMail']; ?>';
        tpoly.qc.Criteria['name'] = '<?php echo $_SESSION['user_name']; ?>';
        tpoly.qc.Criteria['send'] = '1';
        var ajax_config = {
            url: "func/AjaxSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.qc.Criteria,
        };

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            popup('close');
            if(response == 1) {
                swal("Email delivery!");
            } else {
                swal("Error!");
            }
        });
    }

    function doReport(Site, Group) {
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
    }
</script>

<html>
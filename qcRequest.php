<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    require('func/qcRequestSearch.php');
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'questQC';
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
                                <th style="text-align: center;">เวลาตรวจสอบ</th>
                                <th style="text-align: center;">รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($p=1;$p<=$num;$p++) {
                                    $row = mssql_fetch_array($query);

                                    $Time = new datetime($row['Times']);
                                    $Time = $Time->format('d-m-Y');

                                    if($row['Status'] == '1') {
                                        $status = 'รอการยืนยัน';
                                    }
                            ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $row['ID']; ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Site_Name']); ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Group_Name']); ?></td>
                                <td style="text-align: center;"><?php echo iconv('TIS-620', 'UTF-8', $row['Detail']); ?></td>
                                <td style="text-align: center;"><?php echo $Time; ?></td>
                                <td style="text-align: center;">
                                    <a data-toggle="modal" data-target="#myModals01" onClick="dataQc(<?php echo $row['ID']; ?>);">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal inmodal" id="myModals01" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <h2 id="heads"></h2>
                                <input type="hidden" id="heads_s" />
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="radio-inline width-text2">
                                        <p id="DayTime"></p>
                                        <input type="hidden" id="DayTime_s" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline width-text2">
                                        <p id="Times"></p>
                                        <input type="hidden" id="Times_s" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline width-text2">
                                        <p id="Group"></p>
                                        <input type="hidden" id="Group_s" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline width-text2">
                                        <p id="Details"></p>
                                        <input type="hidden" id="Details_s" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline width-text2">
                                        <p id="Note"></p>
                                        <input type="hidden" id="Note_s" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <p>ผู้เข้าตรวจสอบ</p>
                                <select class="form-control-normal chosen-select" name="codes" id="codes" style="width: 250px;height: 30px;">
                                </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="pm_ids" />
                                <button class="btn btn-success" id="buttons" onclick="updateReceive(1);">ยืนยัน</button>
                                <button class="btn btn-success" id="buttons" onclick="updateReceive(0);">ยกเลิก</button>
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

    function dataQc(id) {
        tpoly.qc.Criteria['mode'] = 'load_Receive_ae';
        tpoly.qc.Criteria['code'] = id;
        var ajax_config = {
            url: "func/AjaxSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.qc.Criteria,
        };

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            receiveList = response;
            userCode();
            setReceive(0);
        });
    }

    function setReceive() {
        result = receiveList;

        pm_time = result[0]['pm_time'].split(' ');
        if(pm_time[0] == 'Jan') {
            pm_time[0] = 1;
        }
        if(pm_time[0] == 'Feb') {
            pm_time[0] = 2;
        }
        if(pm_time[0] == 'Mar') {
            pm_time[0] = 3;
        }
        if(pm_time[0] == 'Apr') {
            pm_time[0] = 4;
        }
        if(pm_time[0] == 'May') {
            pm_time[0] = 5;
        }
        if(pm_time[0] == 'Jun') {
            pm_time[0] = 6;
        }
        if(pm_time[0] == 'Jul') {
            pm_time[0] = 7;
        }
        if(pm_time[0] == 'Aug') {
            pm_time[0] = 8;
        }
        if(pm_time[0] == 'Sep') {
            pm_time[0] = 9;
        }
        if(pm_time[0] == 'Oct') {
            pm_time[0] = 10;
        }
        if(pm_time[0] == 'Nov') {
            pm_time[0] = 11;
        }
        if(pm_time[0] == 'Dec') {
            pm_time[0] = 12;
        }
        pm_time = pm_time[1]+'-'+pm_time[0]+'-'+pm_time[2];

        document.getElementById("heads").innerHTML = 'ข้อมูลโครงการ '+result[0]['site_Name'];
        document.getElementById("Details").innerHTML = 'รายละเอียด : '+result[0]['detail'];
        document.getElementById("DayTime").innerHTML = 'วันที่เข้าตรวจสอบ : '+ pm_time;
        document.getElementById("Times").innerHTML = 'เวลาเข้าตรวจสอบ : '+result[0]['t_time'];
        document.getElementById("Note").innerHTML = 'หมายเหตุ : '+result[0]['note'];
        document.getElementById("Group").innerHTML = 'หมวดงาน : '+result[0]['group_Name'];

        $('#heads_s').val(result[0]['site_Name']);
        $('#Details_s').val(result[0]['detail']);
        $('#DayTime_s').val(pm_time);
        $('#Times_s').val(result[0]['t_time']);
        $('#pm_ids').val(result[0]['id']);
    }

    function userCode() {
        tpoly.qc.Criteria['mode'] = 'load_code';
        var ajax_config = {
            url: "func/AjaxSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.qc.Criteria,
        };

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            codeList = response;
            setCode(0);
        });
    }

    function setCode() {
        result = codeList;
        div = document.getElementById('codes');
        div.innerHTML = '';
        div.add(new Option('โปรดเลือก PM', ''));
        for(i in result){
            div.add(new Option(result[i]['LongName'], result[i]['Code']));
        }
    }

    function updateReceive(val) {
        tpoly.qc.Criteria['mode'] = 'update_receive';
        tpoly.qc.Criteria['id'] = $('#pm_ids').val();
        tpoly.qc.Criteria['num'] = val;

        var ajax_config = {
            url: "func/AjaxSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.qc.Criteria,
        };

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            if(val == 1) {
                requestQC(1);
            } else {
                if(response == 1) {
                    requestQC(0);
                } else {
                    swal("Yon can not cancel!!");
                }
            }
        });
    }

    function requestQC(val) {
        tpoly.qc.Criteria['mode'] = 'sendMail_conFirm';
        tpoly.qc.Criteria['from'] = '<?php echo $_SESSION['SuperMail']; ?>';
        tpoly.qc.Criteria['name'] = '<?php echo $_SESSION['user_name']; ?>';
        tpoly.qc.Criteria['send'] = '1';
        tpoly.qc.Criteria['site'] = $('#heads_s').val();
        tpoly.qc.Criteria['details'] = $('#Details_s').val();
        tpoly.qc.Criteria['check'] = $('#DayTime_s').val();
        tpoly.qc.Criteria['times'] = $('#Times_s').val();
        tpoly.qc.Criteria['code'] = $('#codes').val();
        tpoly.qc.Criteria['num'] = val;

        var ajax_config = {
            url: "func/AjaxSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.qc.Criteria,
        };

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            window.location = 'qcRequest.php';
        });
    }
</script>

<html>
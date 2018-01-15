<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'SiteVS';
    // $HeadCheck = 'Employee';
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
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/blue/pace-theme-loading-bar.css" />
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="css/plugins/chosen/chosen.css" rel="stylesheet">
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
                    <strong> Site Visit Add </strong>
                </h1>
                <form name="frmMain" method="post" action="func/siteVSSave.php" enctype="multipart/form-data" target="iframe_target">
                <!-- <form name="frmMain" method="post" action="func/siteVSSave.php" enctype="multipart/form-data" target="iframe_target">
                <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe> -->
                    <div class="ibox-content">
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">รายงานการตรวจสอบคุณภาพโครงการ</h2>
                            <div class="form-group">
                                <div class="col-lg-12" id="data_1">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" >
                                        <label class="control-label">วันที่</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group date" data-date="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="Day" id="Day" class="form-control" value="<?php echo date('d-m-Y H:i:s'); ?>" style="width: 100px;height: 30px;" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline">โครงการ</label>
                                </div>
                                <div class="col-lg-8">
                                    <?php
                                        $site = "SELECT site_id, CAST(site_name as Text) as sName FROM [QC].[dbo].[Site]";

                                        $query_site = mssql_query($site);
                                        $num_site = mssql_num_rows($query_site);
                                    ?>
                                    <select class="form-control" name="Site" id="Site" style="height: 30px;">
                                        <?php
                                            for($ii=1;$ii<=$num_site;$ii++) {
                                            $row_site = mssql_fetch_array($query_site);
                                        ?>
                                        <option value="<?php echo $row_site['site_id']; ?>"><?php echo iconv('TIS-620','UTF-8',$row_site['sName']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ผู้จัดการโครงการ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="pSite" name="pSite" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ผู้ควบคุมงาน </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="pWork" name="pWork" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> รายละเอียดโครงการ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="pDetail" name="pDetail" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ผู้รับเหมา </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="pCharter" name="pCharter" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ผู้เข้าร่วมการตรวจสอบ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="pCheck" name="pCheck" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                        </div>
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">รายละเอียดความคืบหน้าการก่อสร้างโครงการโดยรวม %</h2>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> รายละเอียด </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="pDetails" name="pDetails" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                        </div>
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">รายละเอียดปัญหาการตรวจสอบคุณภาพของโครงการ</h2>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ประเภทงาน </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Category" name="Category" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ลักษณะที่พบ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Nature" name="Nature" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> สาเหตุ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Cause" name="Cause" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> แก้ไขโดย </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Edit" name="Edit" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                        </div>
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;"> ผลการตรวจสอบคุณภาพงาน</h2>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ผลการตรวจสอบคุณภาพงาน : </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="testResult" name="testResult" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                        </div>
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">ภาพถ่ายปัญหาที่พบภายในโครงการโครงการ </h2>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload1">
                                    <input type="text" name="detail1" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload2">
                                    <input type="text" name="detail2" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload3">
                                    <input type="text" name="detail3" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload4">
                                    <input type="text" name="detail4" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload5">
                                    <input type="text" name="detail5" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload6">
                                    <input type="text" name="detail6" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload7">
                                    <input type="text" name="detail7" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-6">
                                    <input type="file" name="filUpload8">
                                    <input type="text" name="detail8" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload9">
                                    <input type="text" name="detail9" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload10">
                                    <input type="text" name="detail10" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload11">
                                    <input type="text" name="detail11" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload12">
                                    <input type="text" name="detail12" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload13">
                                    <input type="text" name="detail13" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload14">
                                    <input type="text" name="detail14" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload15">
                                    <input type="text" name="detail15" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload16">
                                    <input type="text" name="detail16" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload17">
                                    <input type="text" name="detail17" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload18">
                                    <input type="text" name="detail18" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload19">
                                    <input type="text" name="detail19" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-5">
                                    <input type="file" name="filUpload20">
                                    <input type="text" name="detail20" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <center>
                            <div class="form-group required " style="padding:20px 15px;">
                                <button type="submit" class="btn btn-success demo1" onclick="return confirm('ยืนยันข้อมูลถูกต้องครบถ้วน')">เพิ่มข้อมูล</button>
                            </div>
                        </center>
                    </div>
                </form>
            </div>
        </div>
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
        $('.demo1').click(function(){
            swal({
                title: "โปรดรอซักครู่!",
                text: "กำลังบันทึกข้อมูล",
                timer: 2000,
                showConfirmButton: false
            },function(){
                window.location='siteVS.php';
            });
        });

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
        qc.request.Criteria = {};
        // requestLoad();

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    });

    var qc = {
        request: new Object()
    };
</script>

<html>
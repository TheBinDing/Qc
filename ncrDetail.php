<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'NCR';
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
                    <strong> NCR Add </strong>
                </h1>
                <form action="func/ncrSave.php" method="POST" enctype="multipart/form-data">
                    <div class="ibox-content">
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">รายงานสิ่งที่ไม่เป็นไปตามข้อกำหนด</h2>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Reference No. </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Reference" name="Reference" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Raised by </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Raised" name="Raised" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Department </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Department" name="Department" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
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
                        </div>
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">การแจ้งสิ่งที่ไม่เป็นไปตามข้อกำหนด</h2>
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
                                    <label class="radio-inline"> Unit No. </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Unit" name="Unit" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Department </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Departments" name="Departments" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ลักษณะของปัญหาที่พบ </label>
                                </div>
                                <div class="col-lg-8">
                                    <?php
                                        $problem = "SELECT pb_id, CAST(pb_name as Text) as pbName FROM [QC].[dbo].[Problem]";

                                        $query_problem = mssql_query($problem);
                                        $num_problem = mssql_num_rows($query_problem);
                                    ?>
                                    <select class="form-control" name="problem" id="problem" style="height: 30px;">
                                        <?php
                                            for($ip=1;$ip<=$num_problem;$ip++) {
                                            $row_problem = mssql_fetch_array($query_problem);
                                        ?>
                                        <option value="<?php echo $row_problem['pb_id']; ?>"><?php echo iconv('TIS-620','UTF-8',$row_problem['pbName']); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> รายละเอียดของปัญหา (โปรดระบุ) </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="problems" name="problems" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ภาพประกอบของปัญหาที่พบ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="file" name="filUpload">
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">การวิเคราะห์หาสาเหตุของปัญหาที่พบ</h2>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Why1" name="Why1" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Why2" name="Why2" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Why3" name="Why3" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Why4" name="Why4" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Why5" name="Why5" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> สาเหตุของปัญหา </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Cause" name="Cause" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> แนวทางการแก้ปัญหาระยะสั้น </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="WayShort" name="WayShort" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> แนวทางการแก้ปัญหาระยะยาว </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="WayLong" name="WayLong" />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
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
<script src="js/plugins/iCheck/icheck.min.js"></script>
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
                window.location='ncr.php';
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
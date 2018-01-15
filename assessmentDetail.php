<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    require('func/assessmentSearch.php');
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'assessment';
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
        <?php echo $row; ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <h1>
                    <strong> ประเมินงบประมาณNCR Add </strong>
                </h1>
                <form action="func/assessmentUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="ibox-content">
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">รายงานสิ่งที่ไม่เป็นไปตามข้อกำหนด</h2>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Reference No. </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Reference" name="Reference" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Reference']); ?>" readonly />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Raised by </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Raised" name="Raised" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Raised']); ?>" readonly />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Department </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Department" name="Department" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Department']); ?>" readonly />
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
                                            <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" name="Day" id="Day" class="form-control" value="<?php echo date('d-m-Y H:i:s'); ?>" style="width: 100px;height: 30px;" readonly>
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
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Site" name="Site" value="<?php echo iconv('TIS-620', 'UTF-8', $row['sName']); ?>" readonly />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Unit No. </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Unit" name="Unit" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Unit']); ?>" readonly />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> Department </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Departments" name="Departments" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Departments']); ?>" readonly />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ลักษณะของปัญหาที่พบ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="problem" name="problem" value="<?php echo iconv('TIS-620', 'UTF-8', $row['pbName']); ?>" readonly />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> รายละเอียดของปัญหา (โปรดระบุ) </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="problems" name="problems" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Problems']); ?>" readonly />
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> ภาพประกอบของปัญหาที่พบ </label>
                                </div>
                                <div class="col-lg-8">
                                <?php if($row['img'] != '') { ?>
                                    <img alt="image" src="img/<?php echo iconv('TIS-620', 'UTF-8', $row['img']); ?>" style="width: 300px;height: 200px;" /><br>
                                <?php } ?>
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br><br><br><br><br><br><br><br><br><br><br>
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
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Why1" name="Why1" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Why1']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Why2" name="Why2" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Why2']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Why3" name="Why3" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Why3']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Why4" name="Why4" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Why4']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> WHY ? </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Why5" name="Why5" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Why5']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> สาเหตุของปัญหา </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Cause" name="Cause" value="<?php echo iconv('TIS-620', 'UTF-8', $row['Cause']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> แนวทางการแก้ปัญหาระยะสั้น </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="WayShort" name="WayShort" value="<?php echo iconv('TIS-620', 'UTF-8', $row['WayShort']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> แนวทางการแก้ปัญหาระยะยาว </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="WayLong" name="WayLong" value="<?php echo iconv('TIS-620', 'UTF-8', $row['WayLong']); ?>" readonly />
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <h2 style="text-align: center;background-color: gray;height: 50px;color: black;">แผนการแก้ไข-ป้องกัน และผลการดำเนินการ</h2>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10" >
                                <h3 style="text-align: left;height: 30px;color: black;">แผนงานและผลการแก้ไขปัญหาที่เกิดขึ้น:</h3>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12" id="data_2">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="control-label">กำหนดเสร็จ</label>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group date" data-date="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="targetDay" id="targetDay" class="form-control" value="<?php echo date('d-m-Y H:i:s'); ?>" style="width: 100px;height: 30px;" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-12" id="data_3">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="control-label">วันที่แล้วเสร็จ</label>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group date" data-date="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="finishedDay" id="finishedDay" class="form-control" value="<?php echo date('d-m-Y H:i:s'); ?>" style="width: 100px;height: 30px;" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div><br><br><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10" >
                                <h5 style="text-align: left;height: 30px;color: #676a6c;">
                                    <p>การแก้ไขปัญหาที่เกิดขึ้นแล้วนี้ บริษัทจำเป็นต้องใช้งบประมาณเพิ่มเติมหรือไม่?:</p>
                                </h5>
                                <div class="col-lg-4" style="top: 5px;">
                                    <div class="radio radio-info radio-inline">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="solving" id="solving1" value="0" >
                                            <label for="inlineRadio1"> ไม่ใช้ </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="solving" id="solving2" value="1" >
                                            <label for="inlineRadio1"> ใช้งบประมาณเพิ่ม </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="budget" name="budget" />
                                    </div>
                                </div>
                                <div class="col-lg-4" style="top: 5px;">
                                    <div>
                                        <span>บาท (โดยประมาณ)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br><br><br>
                        <div class="form-group" id="imgs1">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> ภาพประกอบ </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" name="filUpload1">
                                <input type="text" name="detail1" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10" >
                                <h3 style="text-align: left;height: 30px;color: black;">แผนการป้องกันปัญหาไม่ให้เกิดขึ้นซ้ำ:</h3>
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-12" id="data_4">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="control-label">กำหนดเสร็จ</label>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group date" data-date="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="targetDays" id="targetDays" class="form-control" value="<?php echo date('d-m-Y H:i:s'); ?>" style="width: 100px;height: 30px;" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-12" id="data_5">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="control-label">วันที่แล้วเสร็จ</label>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group date" data-date="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="finishedDays" id="finishedDays" class="form-control" value="<?php echo date('d-m-Y H:i:s'); ?>" style="width: 100px;height: 30px;" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div><br><br><br><br>
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10" >
                                <h5 style="text-align: left;height: 30px;color: #676a6c;">
                                    <p>การแก้ไขปัญหาที่เกิดขึ้นแล้วนี้ บริษัทจำเป็นต้องใช้งบประมาณเพิ่มเติมหรือไม่?:</p>
                                </h5>
                                <div class="col-lg-4" style="top: 5px;">
                                    <div class="radio radio-info radio-inline">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="protect" id="protect1" value="0" >
                                            <label for="inlineRadio1"> ไม่ใช้ </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="protect" id="protect2" value="1" >
                                            <label for="inlineRadio1"> ใช้งบประมาณเพิ่ม </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="budgets" name="budgets" />
                                    </div>
                                </div>
                                <div class="col-lg-4" style="top: 5px;">
                                    <div>
                                        <span>บาท (โดยประมาณ)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br><br><br>
                        <div class="form-group" id="imgs2">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2" >
                                <label class="radio-inline"> ภาพประกอบ </label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" name="filUpload2">
                                <input type="text" name="detail2" value="" style="margin-top: 5px;margin-bottom: 15px;width: 400px;" placeholder="รายละเอียดรูปภาพ" >
                            </div>
                            <div class="col-lg-1"></div>
                        </div><br><br><br><br>
                    </div>
                    <div class="ibox-content">
                        <center>
                            <div class="form-group required " style="padding:20px 15px;">
                                <input type="hidden" name="Code" value="<?php echo $row['Code']; ?>" />
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
                window.location='assessment.php';
            });
        });

        $('#data_2 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
        $('#data_3 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
        $('#data_4 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
        $('#data_5 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('#solving1').click(function(){
            $('#budget').prop('readonly',true);
            $('#imgs1').css('display', 'none');
            document.getElementById("budget").style.backgroundColor = '#ddd';
        });
        $('#solving2').click(function(){
            $('#budget').prop('readonly',false);
            $('#imgs1').css('display', '');
            document.getElementById("budget").style.backgroundColor = 'rgba(255,255,255,.15)';
        });

        $('#protect1').click(function(){
            $('#budgets').prop('readonly',true);
            $('#imgs2').css('display', 'none');
            document.getElementById("budgets").style.backgroundColor = '#ddd';
        });
        $('#protect2').click(function(){
            $('#budgets').prop('readonly',false);
            $('#imgs2').css('display', '');
            document.getElementById("budgets").style.backgroundColor = 'rgba(255,255,255,.15)';
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
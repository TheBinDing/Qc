<?php
    @session_start();
    require("../inc/connect.php");
    require("../inc/function.php");
    require("func/qualityOne1Search.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/blue/pace-theme-loading-bar.css" />
    <link href="../css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="../css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="../css/plugins/chosen/chosen.css" rel="stylesheet">
    <title>บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)</title>
</head>
<body>
    <div class="row">
        <?php
            require("Head2.php");
        ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <h1 style="text-align: center;"> QC : หมวด 3  </h1>
                <!-- <form action="func/house3Save.php" method="POST" enctype="multipart/form-data"> -->
                <form name="frmMain" method="post" action="../assessment/func/house3Save.php" target="iframe_target">
                <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                    <div class="ibox-content">
                        <div class="form-gronumber">
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> โครงการ </label>
                                </div>
                                <div class="col-lg-8">
                                    <?php
                                        $site = "SELECT
                                                    Site_Name
                                                FROM
                                                    [QC].[dbo].[Request] r inner join
                                                    [QC].[dbo].[Site] s on r.site_id = s.site_id
                                                WHERE
                                                    pm_id = '". $_GET['Pm_id'] ."' ";
                                        $qsite = mssql_query($site);
                                        $row_site = mssql_fetch_assoc($qsite);
                                    ?>
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Site" name="Site" value="<?php echo iconv('TIS-620','UTF-8', $row_site['Site_Name'])?>" readonly/>
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-12"">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" >
                                        <label class="control-label">ผู้จัดการโครงการ</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="name" name="name"/>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div><br><br>
                        </div>
                        <div class="form-group">
                            <!-- <h2 style="text-align: center;background-color: gray;height: 50px;color: black;padding-top: 10px;">โครงสร้างเสา</h2> -->
                            <!-- <h4 style="height: 20px;color: black;">ก่อนเทคอนกรีต</h4>
                            <h4 style="padding-left: 20px;height: 20px;color: black;">งานแบบหล่อ</h4> -->
                            <div class="form-group">
                                <div class="col-lg-2"><strong>ลักษณะงาน</strong></div>
                                <div class="col-lg-5"><strong>ลักณะการประเมิน</strong></div>
                                <div class="col-lg-2" style="text-align: center;"><strong>คะแนนที่ได้</strong></div>
                                <div class="col-lg-2" style="text-align: center;"><strong>หมายเหตุ</strong></div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>เอกสารประกอบตรวจสอบ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>==งานเอกสาร</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การใช้เอกสาร REGUEST</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การแก้ไข Defect QC หมวด 2</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house1" name="house1" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail1" name="Detail1" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>==ผลทดสอบวงจรไฟฟ้า</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>มีผลการทดสอบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ไม่มีผลการทดสอบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house2" name="house2" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail2" name="Detail2" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>==ผลทดสอบแรงดันของท่อระบบสุขาภิบาล</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>มีผลการทดสอบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ไม่มีผลการทดสอบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house3" name="house3" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail3" name="Detail3" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>==ทดสอบการขังน้ำของพื้นห้องน้าและระเบียง</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>มีผลการทดสอบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ไม่มีผลการทดสอบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house4" name="house4" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail4" name="Detail4" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานพื้นผิวขัดมันชั้น 2</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานพื้นผิวขัดมันชั้น 2</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและผิวหน้าพื้นขัดมันถูกต้อง</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและผิวหน้าพื้นขัดมันไม่ถูกต้องบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและผิวหน้าพื้นขัดมันไม่ถูกต้องต้องทำการแก้ไข</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house5" name="house5" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail5" name="Detail5" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานฉาบปูนภายใน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ลักษณะของผิวฉาบ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ผิวฉาบเรียบสม่ำเสมอ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ผิวฉาบไม่เรียบมีรอยร้าวบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ผิวฉาบไม่เรียบมีรอยร้าวหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house6" name="house6" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail6" name="Detail6" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานฉาบมุมผนังห้องและเสา</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>งานฉาบมุมผนังห้องและเสาได้ฉาก</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>งานฉาบมุมผนังห้องและเสาได้ฉากบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>งานฉาบมุมผนังห้องและเสาได้ฉากหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house7" name="house7" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail7" name="Detail7" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานฝ้าเพดาน เฉพาะโครงเคร่าเท่านั้น ส่วนฝ้าชายคา ปิดแผ่นฝ้าได้</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ระดับและแนวโครงฝ้าเพดาน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวโครงฝ้าเพดานถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวโครงฝ้าเพดานไม่ถูกต้องบางส่วน</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวโครงฝ้าเพดานไม่ถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house8" name="house8" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail8" name="Detail8" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานพื้นปูกระเบื้องห้องน้ำ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานพื้นปูกระเบื้องห้องน้ำ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>พื้นปูกระเบื้องเรียบได้แนวและระดับ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>พื้นปูกระเบื้องบางส่วนต้องแก้ไข</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>พื้นปูกระเบื้องไม่ได้แนวและระดับจำนวนมาก</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house9" name="house9" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail9" name="Detail9" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานสีรองพื้น</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานทาสีรองพื้นภายใน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>พื้นที่ทาสีครบถ้วนและเรียบสม่ำเสมอ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>พื้นที่ทาสีไม่ครบถ้วนและไม่เรียบบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>พื้นที่ทาสีไม่ครบถ้วนและไม่เรียบหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house10" name="house10" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail10" name="Detail10" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานระบบไฟฟ้าภายใน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การเดินท่อร้อยและสายไฟฟ้า</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การเดินท่อร้อยและสายไฟถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การเดินท่อร้อยและสายไฟไม่ถูกต้องบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การเดินท่อร้อยและสายไฟไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การเดินท่อร้อยและสายไฟไม่ถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house11" name="house11" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail11" name="Detail11" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การเตรียมสายเข้าตู้ควบคุม/ราง Wire way</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ตำแหน่งและระดับของสายถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ตำแหน่งและระดับของสายถูกไม่ถูกต้องบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ตำแหน่งและระดับของสายถูกไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house12" name="house12" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail12" name="Detail12" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>ระบบแอร์ เฉพาะส่วนที่ฝังผนัง และการติดตั้ง SUPPORT</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ความเรียบร้อยในการเดินท่อ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การยึด,แนวท่อ,การหุ้มฉนวนถูกต้อง</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การยึด,แนวท่อ,การหุ้มฉนวนไม่ถูกต้องบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การยึด,แนวท่อ,การหุ้มฉนวนไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house13" name="house13" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail13" name="Detail13" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานระบบสุขาภิบาลภายใน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การเดินท่อระบบสุขาภิบาล</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวท่อถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวท่อไม่ถูกต้องบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวท่อไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวท่อไม่ถูกต้อง</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house14" name="house14" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail14" name="Detail14" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==SUPPORT ท่องานระบบสุขาภิบาล</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ขนาดและตำแหน่งถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ขนาดและตำแหน่งไม่ถูกต้องบางจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ขนาดและตำแหน่งไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house15" name="house15" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail15" name="Detail15" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>รวมคะแนน (คะแนนผ่านเกณฑ์ =85)</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Total1" name="Total1" value="" min="0" max="10" />
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>ผลการตรวจสอบ (จากระบบ = ผ่าน)</h4>
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                            <div style="clear:both;"></div>
                        </div><br><br>
                    </div>
                    <div class="ibox-content">
                        <center>
                            <div class="form-group required " style="padding:20px 15px;">
                                <input type="hidden" name="pm_id" value="<?php echo $_GET['Pm_id'];?>" />
                                <button type="submit" class="btn btn-success demo1" onclick="return confirm('ยืนยันข้อมูลถูกต้องครบถ้วน')">เพิ่มข้อมูล</button>
                            </div>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="../js/jquery.js"></script>
<script src="../js/plugins/datapicker/bootstrap-datepicker-thai.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins/chosen/chosen.jquery.js"></script>
<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../js/plugins/switchery/switchery.js"></script>
<script src="../js/plugins/iCheck/icheck.min.js"></script>
<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../js/inspinia.js"></script>
<script src="../js/pace.js"></script>
<script type="text/javascript">
    (function ( $ ) {
        $('.demo1').click(function(){
            swal({
                title: "โปรดรอซักครู่!",
                text: "กำลังบันทึกข้อมูล",
                timer: 2000,
                showConfirmButton: false
            },function(){
                window.location='evaluationForm.php';
            });
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
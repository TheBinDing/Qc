<?php
    @session_start();
    require("../inc/connect.php");
    require("../inc/function.php");
    // require("func/qualityOne1Search.php");
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
                <h1 style="text-align: center;"> QC : หมวด 1  </h1>
                <form action="func/house1Save.php" method="POST" enctype="multipart/form-data">
                <!-- <form name="frmMain" method="post" action="../assessment/func/house1Save.php" target="iframe_target">
                <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe> -->
                    <div class="ibox-content">
                        <div class="form-gronumber">
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> โครงการ </label>
                                </div>
                                <div class="col-lg-8">
                                    <?php
                                        $sql_s = "SELECT
                                                        CAST(s.Site_Name as Text) as SiteName,
                                                        CAST(s.Site_Care as Text) as SiteCare
                                                    FROM
                                                        [QC].[dbo].[Request] q inner join
                                                        [QC].[dbo].[Site] s on q.site_id = s.site_id
                                                    WHERE
                                                        q.pm_id = '". $_GET['Pm_id'] ."' ";
                                        $query_s = mssql_query($sql_s);
                                        $row_s = mssql_fetch_assoc($query_s);
                                    ?>
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Site" name="Site" value="<?php echo iconv('TIS-620','UTF-8', $row_s['SiteName'])?>" readonly/>
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
                                        <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="name" name="name" value="<?php echo iconv('TIS-620', 'UTF-8', $row_s['SiteCare']); ?>" readonly />
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div><br><br>
                        </div>
                        <div class="form-group">
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
                                    <h4>==เอกสารประกอบตรวจสอบ</h4>
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
                                    <h4>ประวัติการตรวจสอบบ้าน</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house1" name="house1" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail1" name="Detail1" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>ความแข็งแรงคอนกรีต (เสา คาน พื้น)</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ความแข็งแรงคอนกรีต (เสา คาน พื้น)</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ผลทดสอบคอนกรีตจากผู้ผลิต (เสา คาน พื้น) ครบทั้ง 3 รายการ</h4>
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
                                    <h4>ไม่มีเอกสารหรือไม่ครบทั้ง 3 รายการ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house2" name="house2" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail2" name="Detail2" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>โครงสร้างเสา</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ผิวคอนกรีต</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ผิวเรียบไม่มีโพรง</h4>
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
                                    <h4>ผิวเรียบมีโพรงไม่เห็นเหล็ก</h4>
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
                                    <h4>ผิวไม่เรียบมีโพรงจนเห็นเหล็ก</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house3" name="house3" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail3" name="Detail3" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ขนาดเสา</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ขนาดถูกต้องตามแบบไม่บวมออกข้าง</h4>
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
                                    <h4>ขนาดถูกต้องตามเบบบวมออกข้างน้อย</h4>
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
                                    <h4>ไม่ได้ขนาดเกินกว่า 2 cm.</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house4" name="house4" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail4" name="Detail4" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ตำแหน่งแนวดิ่งของเสา</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ได้แนวดิ่งระหว่างชั้นบนและชั้นล่าง</h4>
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
                                    <h4>ได้ดิ่งไม่ได้แนวระหว่างชั้นบนและล่าง</h4>
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
                                    <h4>ไม่ได้ดิ่งและแนวระหว่างชั้นบนและล่าง</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house5" name="house5" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail5" name="Detail5" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>โครงสร้างคาน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ผิวคอนกรีต</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ผิวเรียบไม่มีโพรง</h4>
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
                                    <h4>ผิวเรียบมีโพรงไม่เห็นเหล็ก</h4>
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
                                    <h4>ผิวไม่เรียบมีโพรงจนเห็นเหล็ก</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house6" name="house6" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail6" name="Detail6" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ขนาดคาน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ขนาดถูกต้องตามแบบไม่บวมออกข้าง</h4>
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
                                    <h4>ขนาดถูกต้องตามเบบบวมออกข้างน้อย</h4>
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
                                    <h4>ไม่ได้ขนาดเกินกว่า 2 cm.</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house7" name="house7" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail7" name="Detail7" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ตำแหน่งระดับแนวคาน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ทุกตัวเรียบเสมอกัน</h4>
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
                                    <h4>เรียบเสมอกันระดับแนวไม่ตรง</h4>
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
                                    <h4>ไม่ได้แนวและไม่เสมอกัน</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house8" name="house8" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail8" name="Detail8" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>โครงสร้างพื้น</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ผิวคอนกรีต</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ผิวเรียบไม่มีโพรง</h4>
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
                                    <h4>ผิวเรียบมีโพรงไม่เห็นเหล็ก</h4>
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
                                    <h4>ผิวไม่เรียบมีโพรงจนเห็นเหล็ก</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house9" name="house9" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail9" name="Detail9" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ขนาดพื้น</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ขนาดถูกต้องตามแบบไม่บวมออกข้าง</h4>
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
                                    <h4>ขนาดถูกต้องตามเบบบวมออกข้างน้อย</h4>
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
                                    <h4>ไม่ได้ขนาดเกินกว่า 2 cm.</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house10" name="house10" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail10" name="Detail10" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ระดับและแนว Floor to floor</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับและแนวถูกต้อง</h4>
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
                                    <h4>ระดับและแนวไม่ถูกต้องบางจุด</h4>
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
                                    <h4>ระดับและแนวไม่ถูกต้อง</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house11" name="house11" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail11" name="Detail11" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานโครงหลังคา</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==เหล็กอะเส และเหล็กจั่นทัน /อะเสคอนกรีต</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระยะ,ขนาดและระดับถูกต้องตามแบบ</h4>
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
                                    <h4>ระยะ,ขนาดและระดับไม่ถูกต้อง</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house12" name="house12" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail12" name="Detail12" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==สีกันสนิม</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>เข้มไม่เห็นสีเหล็ก และ รอยเชื่อม</h4>
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
                                    <h4>เข้มเห็นสีเหล็ก และรอยเชื่อมบ้าง</h4>
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
                                    <h4>ไม่เข้ม เห็นสีเหล็ก และรอยเชื่อม</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house13" name="house13" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail13" name="Detail13" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานเชื่อม</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>เชื่อมเต็มหน้าเหล็กไม่มีช่องอากาศ</h4>
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
                                    <h4>เชื่อมเต็มหน้าเหล็กมีช่องอากาศ</h4>
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
                                    <h4>เชือมไม่แข็งแรงมีโพรง</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house14" name="house14" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail14" name="Detail14" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานต่อและทาบเหล็ก</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>รอยเชื่อมตลอดแนวมีเหล็กประกับ</h4>
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
                                    <h4>รอยเชื่อมไม่ตลอดแนวต้องแก้ไข</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house15" name="house15" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail15" name="Detail15" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานอุดปูนใต้เพลท</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>เกร้าท์ปูนเต็มเพลท</h4>
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
                                    <h4>เกร้าท์ปูนไม่เต็มเพลทมีโพรง</h4>
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
                                    <h4>ใช้วัสดุผิดประเภท (ไม่ใช่ NON SHRINK)</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house16" name="house16" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail16" name="Detail16" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานระบบ</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การวาง Sleeve ห้องน้ำชั้นล่าง</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระยะและตำแหน่งตรงตามแบบ</h4>
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
                                    <h4>ระยะและตำแหน่งไม่ตรงตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house17" name="house17" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail17" name="Detail17" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การวาง Sleeve ห้องน้ำชั้นบน</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระยะและตำแหน่งตรงตามแบบ</h4>
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
                                    <h4>ระยะและตำแหน่งไม่ตรงตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house18" name="house18" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail18" name="Detail18" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การวางท่องานระบบกำจัดปลวก</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระยะและตำแหน่งตรงตามแบบ</h4>
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
                                    <h4>ระยะและตำแหน่งไม่ตรงตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house19" name="house19" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail19" name="Detail19" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานระบบท่อสุขาภิบาลในผนังก่อฮิฐเฉพาะห้องน้ำและห้องครัว</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การเดินท่องานระบบสุขาภิบาล</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับ,ตำแหน่งและจำนวนถูกต้องตามแบบ</h4>
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
                                    <h4>ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องบางจุด</h4>
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
                                    <h4>ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house20" name="house20" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail20" name="Detail20" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานระบบท่อไฟฟ้าในผนังก่อฮิฐเฉพาะห้องน้ำ และห้องครัว</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การเดินท่อไฟฟ้าและบ็อกไฟฟ้า</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ระดับ,ตำแหน่งและจำนวนถูกต้องตามแบบ</h4>
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
                                    <h4>ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องบางจุด</h4>
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
                                    <h4>ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house21" name="house21" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail21" name="Detail21" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>งานผนังก่ออิฐ</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานตีเส้น Line Offset บนพื้นโครงสร้าง</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>แนวเส้นถูกต้องตามแบบ</h4>
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
                                    <h4>แนวเส้นไม่ถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house22" name="house22" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail22" name="Detail22" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==งานเอ็นคอนกรีตทับหลัง</h4>
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
                                </div>
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ไม่ได้มาตรฐานตามที่กำหนดในแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house23" name="house23" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail23" name="Detail23" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==แนวและระดับ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>แนวและระดับถูกต้องตามแบบ</h4>
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
                                    <h4>แนวและระดับไม่ถูกต้องบางจุด</h4>
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
                                    <h4>แนวและระดับไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house24" name="house24" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail24" name="Detail24" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==แนวตาข่ายภายนอก</h4>
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
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house25" name="house25" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail25" name="Detail25" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>การติดตั้งวงกบประตูหน้าต่าง</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ขนาดและชนิดของวัสดุ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>ขนาดของวัสดุถูกต้องตามแบบ</h4>
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
                                    <h4>ไม่ได้ขนาดแต่วัสดุถูกต้อง</h4>
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
                                    <h4>วัสดุไม่ถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house26" name="house26" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail26" name="Detail26" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==การป้องกันวงกบ สภาพเนื้อไม้และผิวของวงกบ (มีมอด รอยตอกตะปู)</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>การป้องกันอย่างเหมาะสม</h4>
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
                                    <h4>มีมอดและรอยตอกตระปูเล็กน้อย</h4>
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
                                    <h4>มีมอดและรอยตอกตระปูเป็นจำนวนมาก</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house27" name="house27" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail27" name="Detail27" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h4>==ระดับและแนวดิ่งวงกบ</h4>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5">
                                    <h4>แนวระดับและดิ่งถูกต้อง</h4>
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
                                    <h4>แนวระดับและดิ่งไม่ถูกต้องบางจุด</h4>
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
                                    <h4>แนวระดับและดิ่งไม่ถูกต้องหลายจุด</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="house28" name="house28" value="0" min="0" max="10" onblur="sum();" />
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail28" name="Detail28" value="" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-7">
                                    <h4>รวมคะแนน (คะแนนผ่านเกณฑ์ =85)</h4>
                                </div>
                                <div class="col-lg-2">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Total" name="Total" value="0" readonly />
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
                                <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
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
<script src="../js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../js/inspinia.js"></script>
<script src="../js/pace.js"></script>
<script type="text/javascript">
    // (function ( $ ) {
    //     $('.demo1').click(function(){
    //         swal({
    //             title: "โปรดรอซักครู่!",
    //             text: "กำลังบันทึกข้อมูล",
    //             timer: 2000,
    //             showConfirmButton: false
    //         },function(){
    //             window.location='evaluationForm.php';
    //         });
    //     });
    // } (jQuery));
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

    function sum() {
        if($('#house1').val() == '') {
            a1 = 0;
            b1 = 0;
        } else {
            a1 = $('#house1').val();
            b1 = 1;
        }
        if($('#house2').val() == '') {
            a2 = 0;
            b2 = 0;
        } else {
            a2 = $('#house2').val();
            b2 = 1;
        }
        if($('#house3').val() == '') {
            a3 = 0;
            b3 = 0;
        } else {
            a3 = $('#house3').val();
            b3 = 1;
        }
        if($('#house4').val() == '') {
            a4 = 0;
            b4 = 0;
        } else {
            a4 = $('#house4').val();
            b4 = 1;
        }
        if($('#house5').val() == '') {
            a5 = 0;
            b5 = 0;
        } else {
            a5 = $('#house5').val();
            b5 = 1;
        }
        if($('#house6').val() == '') {
            a6 = 0;
            b6 = 0;
        } else {
            a6 = $('#house6').val();
            b6 = 1;
        }
        if($('#house7').val() == '') {
            a7 = 0;
            b7 = 0;
        } else {
            a7 = $('#house7').val();
            b7 = 1;
        }
        if($('#house8').val() == '') {
            a8 = 0;
            b8 = 0;
        } else {
            a8 = $('#house8').val();
            b8 = 1;
        }
        if($('#house9').val() == '') {
            a9 = 0;
            b9 = 0;
        } else {
            a9 = $('#house9').val();
            b9 = 1;
        }
        if($('#house10').val() == '') {
            a10 = 0;
            b10 = 0;
        } else {
            a10 = $('#house10').val();
            b10 = 1;
        }
        if($('#house11').val() == '') {
            a11 = 0;
            b11 = 0;
        } else {
            a11 = $('#house11').val();
            b11 = 1;
        }
        if($('#house12').val() == '') {
            a12 = 0;
            b12 = 0;
        } else {
            a12 = $('#house12').val();
            b12 = 1;
        }
        if($('#house13').val() == '') {
            a13 = 0;
            b13 = 0;
        } else {
            a13 = $('#house13').val();
            b13 = 1;
        }
        if($('#house14').val() == '') {
            a14 = 0;
            b14 = 0;
        } else {
            a14 = $('#house14').val();
            b14 = 1;
        }
        if($('#house15').val() == '') {
            a15 = 0;
            b15 = 0;
        } else {
            a15 = $('#house15').val();
            b15 = 1;
        }
        if($('#house16').val() == '') {
            a16 = 0;
            b16 = 0;
        } else {
            a16 = $('#house16').val();
            b16 = 1;
        }
        if($('#house17').val() == '') {
            a17 = 0;
            b17 = 0;
        } else {
            a17 = $('#house17').val();
            b17 = 1;
        }
        if($('#house18').val() == '') {
            a18 = 0;
            b18 = 0;
        } else {
            a18 = $('#house18').val();
            b18 = 1;
        }
        if($('#house19').val() == '') {
            a19 = 0;
            b19 = 0;
        } else {
            a19 = $('#house19').val();
            b19= 1;
        }
        if($('#house20').val() == '') {
            a20 = 0;
            b20 = 0;
        } else {
            a20 = $('#house20').val();
            b20 = 1;
        }
        if($('#house21').val() == '') {
            a21 = 0;
            b21 = 0;
        } else {
            a21 = $('#house21').val();
            b21 = 1;
        }
        if($('#house22').val() == '') {
            a22 = 0;
            b22 = 0;
        } else {
            a22 = $('#house22').val();
            b22 = 1;
        }
        if($('#house23').val() == '') {
            a23 = 0;
            b23 = 0;
        } else {
            a23 = $('#house23').val();
            b23 = 1;
        }
        if($('#house24').val() == '') {
            a24 = 0;
            b24 = 0;
        } else {
            a24 = $('#house24').val();
            b24 = 1;
        }
        if($('#house25').val() == '') {
            a25 = 0;
            b25 = 0;
        } else {
            a25 = $('#house25').val();
            b25 = 1;
        }
        if($('#house26').val() == '') {
            a26 = 0;
            b26 = 0;
        } else {
            a26 = $('#house26').val();
            b26 = 1;
        }
        if($('#house27').val() == '') {
            a27 = 0;
            b27 = 0;
        } else {
            a27 = $('#house27').val();
            b27 = 1;
        }
        if($('#house28').val() == '') {
            a28 = 0;
            b28 = 0;
        } else {
            a28 = $('#house28').val();
            b28 = 1;
        }

        a = (parseInt(a1) + parseInt(a2) + parseInt(a3) + parseInt(a4) + parseInt(a5) + parseInt(a6) + parseInt(a7) + parseInt(a8) + parseInt(a9) + parseInt(a10) + parseInt(a11) + parseInt(a12) + parseInt(a13) + parseInt(a14) + parseInt(a15) + parseInt(a16) + parseInt(a17) + parseInt(a18) + parseInt(a19) + parseInt(a20) + parseInt(a21) + parseInt(a22) + parseInt(a23) + parseInt(a24) + parseInt(a25) + parseInt(a26) + parseInt(a27) + parseInt(a28)) *10;
        b = (b1+b2+b3+b4+b5+b6+b7+b8+b9+b10+b11+b12+b13+b14+b15+b16+b17+b18+b19+b20+b21+b22+b23+b24+b25+b26+b27+b28);

        c = a/b;

        d = number_format(c, 2, '.', ',');

        $('#Total').val(d);
    }

    function number_format (number, decimals, dec_point, thousands_sep) {
        var exponent = "";
        var numberstr = number.toString ();
        var eindex = numberstr.indexOf ("e");
        if (eindex > -1) {
          exponent = numberstr.substring (eindex);
          number = parseFloat (numberstr.substring (0, eindex));
        }
        if (decimals != null) {
          var temp = Math.pow (10, decimals);
          number = Math.round (number * temp) / temp;
        }
        var sign = number < 0 ? "-" : "";
        var integer = (number > 0 ? Math.floor (number) : Math.abs (Math.ceil (number))).toString ();
        var fractional = number.toString ().substring (integer.length + sign.length);
        dec_point = dec_point != null ? dec_point : ".";
        fractional = decimals != null && decimals > 0 || fractional.length > 1 ? (dec_point + fractional.substring (1)) : "";
        if (decimals != null && decimals > 0) {
          for (i = fractional.length - 1, z = decimals; i < z; ++i) {
             fractional += "0";
          }
        }
        thousands_sep = (thousands_sep != dec_point || fractional.length == 0) ? thousands_sep : null;
        if (thousands_sep != null && thousands_sep != "") {
          for (i = integer.length - 3; i > 0; i -= 3){
             integer = integer.substring (0 , i) + thousands_sep + integer.substring (i);
          }
        }
        return sign + integer + fractional + exponent;
    }
</script>

<html>
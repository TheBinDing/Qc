<?php
    @session_start();
    require("../inc/connect.php");
    require("../inc/function.php");
    require("func/qualitySixSearch.php");
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
                <h1 style="text-align: center;"> QC: หมวดที่ 6 งานคอมโพสิต </h1>
                <form action="../assessment/func/qualitySixSave.php" method="POST" enctype="multipart/form-data">
                    <div class="ibox-content">
                        <div class="form-gronumber">
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" >
                                    <label class="radio-inline"> โครงการ </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;background-color: #ddd;" class="form-control-card" id="Site" name="Site" value="<?php echo iconv('TIS-620','UTF-8', $row['Name'])?>" readonly/>
                                </div>
                                <div class="col-lg-1"></div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-12" id="data_1">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" >
                                        <label class="control-label">ตรวจสอบครั้งที่ 1</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group date" data-date="<?php if($Day != ' ') echo $Day; else echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="Day" id="Day" class="form-control" value="<?php if($Day != ' ') echo $Day; else echo ''; ?>" style="width: 100px;height: 30px;" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-12" id="data_2">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" >
                                        <label class="control-label">ตรวจสอบครั้งที่ 2</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group date" data-date="<?php if($Day2 != ' ') echo $Day2; else echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="Day2" id="Day2" class="form-control" value="<?php if($Day2 != ' ') echo $Day2; else echo ''; ?>" style="width: 100px;height: 30px;" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <div class="col-lg-12" id="data_3">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" >
                                        <label class="control-label">ตรวจสอบครั้งที่ 3</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group date" data-date="<?php if($Day3 != ' ') echo $Day3; else echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" name="Day3" id="Day3" class="form-control" value="<?php if($Day3 != ' ') echo $Day3; else echo ''; ?>" style="width: 100px;height: 30px;" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div><br><br>
                        </div>
                        <div class="form-group">
                            <h2 style="text-align: center;background-color: gray;height: 50px;color: black;padding-top: 10px;">งานคอมโพสิต</h2>
                            <h4 style="height: 20px;color: black;">งานคอมโพสิต</h4>
                            <h4 style="padding-left: 20px;height: 20px;color: black;">1. โครงเหล็ก</h4>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6"></div>
                                <div class="col-lg-1" style="text-align: center;"><strong>1</strong></div>
                                <div class="col-lg-1" style="text-align: center;"><strong>2</strong></div>
                                <div class="col-lg-1" style="text-align: center;"><strong>3</strong></div>
                                <div class="col-lg-1" style="text-align: center;"><strong>หมายเหตุ</strong></div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">1.1 ความแข็งแรงจุดยึดโครงเหล็ก </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. จุดยึดแข็งแรง และจำนวนเพียงพอ</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. จุดยึดไม่แข็งแรง และจำนวนไม่เพียงพอ</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass11" name="Ass11" value="<?php echo $row['Ass11'];?>" min="0" max="10" <?php if($row['Ass11'] != ' ' && $row['Ass11'] != ''){ echo 'readonly'; } ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass12" name="Ass12" value="<?php echo $row['Ass12'];?>" min="0" max="10" <?php if($row['Ass12'] != ' ' && $row['Ass12'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass13" name="Ass13" value="<?php echo $row['Ass13'];?>" min="0" max="10" <?php if($row['Ass13'] != ' ' && $row['Ass13'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail1" name="Detail1" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail1']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">1.2 ระยะโครงเหล็ก </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. โครงเหล็กระยะถูกต้องตามแบบ</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. โครงเหล็กระยะไม่ถูกต้องตามแบบ</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass21" name="Ass21" value="<?php echo $row['Ass21'];?>" min="0" max="10" <?php if($row['Ass21'] != ' ' && $row['Ass21'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass22" name="Ass22" value="<?php echo $row['Ass22'];?>" min="0" max="10" <?php if($row['Ass22'] != ' ' && $row['Ass22'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass23" name="Ass23" value="<?php echo $row['Ass23'];?>" min="0" max="10" <?php if($row['Ass23'] != ' ' && $row['Ass23'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail2" name="Detail2" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail2']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">1.3 สีโครงเหล็ก </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. ทาสีเหล็กเต็มพื้น และบริเวณรอยเชื่อมครบ </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. ทาสีเหล็กไม่เต็มพื้นที่</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass31" name="Ass31" value="<?php echo $row['Ass31'];?>" min="0" max="10" <?php if($row['Ass31'] != ' ' && $row['Ass31'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass32" name="Ass32" value="<?php echo $row['Ass32'];?>" min="0" max="10" <?php if($row['Ass32'] != ' ' && $row['Ass32'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass33" name="Ass33" value="<?php echo $row['Ass33'];?>" min="0" max="10" <?php if($row['Ass33'] != ' ' && $row['Ass33'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail3" name="Detail3" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail3']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <h4 style="padding-left: 20px;height: 20px;color: black;">2. การติดตั้งแผ่น</h4>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">2.1 การติดตั้งแผ่นต้องได้ฉาก และระดับเดียวกันทุกแผ่น</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. แผ่นได้ฉาก และระดับเดียวกันทุกแผ่น</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. แผ่นไม่ได้ฉาก และระดับเดียวกันทุกแผ่น</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass41" name="Ass41" value="<?php echo $row['Ass41'];?>" min="0" max="10" <?php if($row['Ass41'] != ' ' && $row['Ass41'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass42" name="Ass42" value="<?php echo $row['Ass42'];?>" min="0" max="10" <?php if($row['Ass42'] != ' ' && $row['Ass42'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass43" name="Ass43" value="<?php echo $row['Ass43'];?>" min="0" max="10" <?php if($row['Ass43'] != ' ' && $row['Ass43'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail4" name="Detail4" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail4']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">2.2 ห้ามลอกฟิล์มกันลอยออกจากแผ่น (ให้แกะก่อนส่งาน) </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. ไม่มีการลอกฟิล์มกันลอยออกจากแผ่น</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. มีการลอกฟิล์มกันลอยออกจากแผ่น</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass51" name="Ass51" value="<?php echo $row['Ass51'];?>" min="0" max="10" <?php if($row['Ass51'] != ' ' && $row['Ass51'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass52" name="Ass52" value="<?php echo $row['Ass52'];?>" min="0" max="10" <?php if($row['Ass52'] != ' ' && $row['Ass52'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass53" name="Ass53" value="<?php echo $row['Ass53'];?>" min="0" max="10" <?php if($row['Ass53'] != ' ' && $row['Ass53'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail5" name="Detail5" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail5']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">2.3 ตรวจสอบรอยขีดข่วนบนแผ่น และความเรียบขอบแผ่น </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1.ไม่มีรอยขีดข่วน และผิวเรียบไม่ยุบ </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. มีรอยขีดข่วน บางส่วนสามารถแก้ไขได้</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">3. มีรอยขีดข่วน ปริมาณมากต้องเปลี่ยนแผ่น</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass61" name="Ass61" value="<?php echo $row['Ass61'];?>" min="0" max="10" <?php if($row['Ass61'] != ' ' && $row['Ass61'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass62" name="Ass62" value="<?php echo $row['Ass62'];?>" min="0" max="10" <?php if($row['Ass62'] != ' ' && $row['Ass62'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass63" name="Ass63" value="<?php echo $row['Ass63'];?>" min="0" max="10" <?php if($row['Ass63'] != ' ' && $row['Ass63'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail6" name="Detail6" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail6']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">2.4 ทิศทางการติดตั้งแผ่น </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. ลูกศรต้องชี้ไปทางเดียวกัน</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. ลูกศรต้องชี้ไม่ไปทางเดียวกัน</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass71" name="Ass71" value="<?php echo $row['Ass71'];?>" min="0" max="10" <?php if($row['Ass71'] != ' ' && $row['Ass71'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass72" name="Ass72" value="<?php echo $row['Ass72'];?>" min="0" max="10" <?php if($row['Ass72'] != ' ' && $row['Ass72'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass73" name="Ass73" value="<?php echo $row['Ass73'];?>" min="0" max="10" <?php if($row['Ass73'] != ' ' && $row['Ass73'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail7" name="Detail7" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail7']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">2.5 รอยต่อแผ่น</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. ร่องรอยต่อแผ่น มีความกว้างไม่เกิน 2 ซม.</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. ร่องรอยต่อแผ่น มีความกว้าง    เกิน 2 ซม.</h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass81" name="Ass81" value="<?php echo $row['Ass81'];?>" min="0" max="10" <?php if($row['Ass81'] != ' ' && $row['Ass81'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass82" name="Ass82" value="<?php echo $row['Ass82'];?>" min="0" max="10" <?php if($row['Ass82'] != ' ' && $row['Ass82'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="number" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass83" name="Ass83" value="<?php echo $row['Ass83'];?>" min="0" max="10" <?php if($row['Ass83'] != ' ' && $row['Ass83'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail8" name="Detail8" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail8']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">2.6 การยาซิลิโคน</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. สม่ำเสมอเป็นแนว เรียบ  </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. ไม่สม่ำเสมอไม่เรียบ (1-5 จุด)  </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">3. ไม่สม่ำเสมอไม่เรียบ > 5 จุด  </h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass91" name="Ass91" value="<?php echo $row['Ass91'];?>" min="0" max="10" <?php if($row['Ass91'] != ' ' && $row['Ass91'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass92" name="Ass92" value="<?php echo $row['Ass92'];?>" min="0" max="10" <?php if($row['Ass92'] != ' ' && $row['Ass92'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass93" name="Ass93" value="<?php echo $row['Ass93'];?>" min="0" max="10" <?php if($row['Ass93'] != ' ' && $row['Ass93'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 80px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail9" name="Detail9" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail9']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">2.7 ความสะอาดหลังติดตั้ง</h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">1. สะอาด </h4>
                                    <h4 style="padding-left: 50px;height: 20px;color: black;">2. ไม่สะอาด </h4>
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass101" name="Ass101" value="<?php echo $row['Ass101'];?>" min="0" max="10" <?php if($row['Ass101'] != ' ' && $row['Ass101'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass102" name="Ass102" value="<?php echo $row['Ass102'];?>" min="0" max="10" <?php if($row['Ass102'] != ' ' && $row['Ass102'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Ass103" name="Ass103" value="<?php echo $row['Ass103'];?>" min="0" max="10" <?php if($row['Ass103'] != ' ' && $row['Ass103'] != ''){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="padding-top: 60px;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Detail10" name="Detail10" value="<?php echo iconv('TIS-620','UTF-8', $row['Detail10']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <h4 style="height: 20px;color: black;">งานที่ต้องปรับปรุง</h4>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6" >
                                    <h4 style="height: 20px;color: black;">สาเหตุของปัญหา</h4>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Cause1" name="Cause1" value="<?php echo iconv('TIS-620','UTF-8', $row['Cause1']);?>" />
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Cause2" name="Cause2" value="<?php echo iconv('TIS-620','UTF-8', $row['Cause2']);?>" />
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Cause3" name="Cause3" value="<?php echo iconv('TIS-620','UTF-8', $row['Cause3']);?>" />
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Cause4" name="Cause4" value="<?php echo iconv('TIS-620','UTF-8', $row['Cause4']);?>" />
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Cause5" name="Cause5" value="<?php echo iconv('TIS-620','UTF-8', $row['Cause5']);?>" />
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div style="clear:both;height: 50px;"></div>
                            <div class="form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <h4 style="height: 20px;color: black;">ผลการประเมิน</h4>
                                </div>
                                <div class="col-lg-1" style="text-align: center;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Sum1" name="Sum1" value="<?php echo $row['Sum1'];?>" <?php if($row['Sum1'] != ' '){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="text-align: center;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Sum2" name="Sum2" value="<?php echo $row['Sum2'];?>" <?php if($row['Sum2'] != ' '){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="text-align: center;">
                                    <input type="text" style="text-align: center;height: 30px;width: 100%;" class="form-control-card" id="Sum3" name="Sum3" value="<?php echo $row['Sum3'];?>" <?php if($row['Sum3'] != ' '){echo 'readonly';} ?> />
                                </div>
                                <div class="col-lg-1" style="text-align: center;"></div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div><br><br>
                    </div>
                    <div class="ibox-content">
                        <center>
                            <div class="form-group required " style="padding:20px 15px;">
                                <input type="hidden" name="pm_id" value="<?php echo $_GET['Pm_id']; ?>" />
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
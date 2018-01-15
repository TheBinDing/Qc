<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    require("func/registerSearch.php");
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'register';
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
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <title>บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)</title>
</head>
<body onload="display();">
    <div class="row">
        <?php
            require("Head2.php");
        ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="animated fadeInRight ecommerce">
                <div class="middle-box">
                    <div class="ibox-content">
                        <div>
                            <form class="m-t" role="form" action="func/RegisterSave.php" method="POST" novalidate>
                                <div class="form-group">
                                    <label class="control-label" required>ชื่อผู้ใช้งาน</label>
                                    <input type="text" id="username" name="username" placeholder="<?php echo isset($userU)?$userU:'';?>" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" required>รหัสผ่าน</label>
                                    <input type="password" id="password" name="password" maxlength="20" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" required>ยืนยันรหัสผ่าน</label>
                                    <input type="password" id="confirm" name="confirm" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" required>ชื่อ</label>
                                    <input type="text" id="name" name="name" placeholder="<?php echo isset($nameU)?$nameU:'';?>" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" required>อีเมล์</label>
                                    <input type="email" id="email" name="email" placeholder="<?php echo isset($mailU)?$mailU:'';?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">สิทธิการเข้าถึง</label>
                                    <div class="form-group">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="choise" name="choise" id="QC" value="2" <?php if($permissionU == 2 || $permissionU == '') { echo 'checked'; } ?> >
                                            <label for="inlineRadio1"> QC </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="choise" name="choise" id="PM" value="3" <?php if($permissionU == 3) { echo 'checked'; } ?> >
                                            <label for="inlineRadio1"> PM </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <input type="hidden" name="userID" value="<?php echo isset($idU)?$idU:''; ?>" />
                                    <button type="submit" class="btn btn-success">ตกลง</button>
                                    <a href="User.php" class="btn btn-danger" role="button">ย้อนกลับ</a>
                                </div>
                            </form>
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
<script src="js/inspinia.js"></script>
<script src="js/pace.js"></script>
<script type="text/javascript">
    (function ( $ ) {
        var config = {
            '.chosen-select'           : {},
            '.chosen-select-deselect'  : {allow_single_deselect:true},
            '.chosen-select-no-single' : {disable_search_threshold:10},
            '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
            '.chosen-select-width'     : {width:"95%"}
            }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    } (jQuery));
</script>

<html>
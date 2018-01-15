<?php
@session_start();
$s_user = " SELECT
                CAST(u_user as text) as Name
            FROM
                [QC].[dbo].[Users]
            WHERE
                u_id = '". $_SESSION['ID'] ."' ";
$q_user = mssql_query($s_user);
$r_user = mssql_fetch_array($q_user);
$name = iconv('TIS-620', 'UTF-8', $r_user['Name']);
// $pic = $r_user['m_pic'];
?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <!-- <a href="#"> -->
                            <img alt="image" class="img-circle" src="img/<?php if($pic == ''){ echo 'black_ribbon_top_left.png'; }else{ echo $pic; } ?>" style="width: 50px;height: 50px;" />
                        <!-- </a> -->
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                          <span class="block m-t-xs">
                              <strong class="font-bold">ผู้ใช้งาน :<?php echo ' '.$name; ?></strong>
                          </span>
                          <!-- <a class="text-muted text-xs block" href="Logout.php">ออกจากระบบ</a> -->
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="Profile.php">Profile</a></li>
                        <li><a href="Logout.php">Log Out</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    <img src="img/<?php if($pic == ''){ echo 'black_ribbon_top_left.png'; }else{ echo $pic; } ?>" style="height: 40px;width: 40px;">
                </div>
            </li>

            <?php
                if($_SESSION['Permission'] == '3') {
            ?>
                <!-- ####################################################### -->
                <?php if($HeadCheck == 'questPM') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Request</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'questPM') { ?>
                        <li class="active"><a href='pmRequest.php'>PM Request</a></li>
                    <?php } else {?>
                        <li><a href='pmRequest.php'>PM Request</a></li>
                    <?php } ?>
                </ul>

                <?php if($HeadCheck == 'SiteVS' || $HeadCheck == 'NCR') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Activity</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'SiteVS') { ?>
                        <li class="active"><a href='siteVS.php'>Site Visit</a></li>
                    <?php } else {?>
                        <li><a href='siteVS.php'>Site Visit</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'NCR') { ?>
                        <li class="active"><a href='ncr.php'>NCR</a></li>
                    <?php } else {?>
                        <li><a href='ncr.php'>NCR</a></li>
                    <?php } ?>
                </ul>

                <!-- <?php if($HeadCheck == 'R1' || $HeadCheck == 'R2' || $HeadCheck == 'R3' || $HeadCheck == 'R4' || $HeadCheck == 'R5' || $HeadCheck == 'R6') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Report</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'R1') { ?>
                        <li class="active"><a href='#'>ใบสรุปผลการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปผลการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R2') { ?>
                        <li class="active"><a href='#'>ใบสรุปจำนวนครั้งการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปจำนวนครั้งการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R3') { ?>
                        <li class="active"><a href='#'>สรุปข้อมูลผลการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>สรุปข้อมูลผลการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R4') { ?>
                        <li class="active"><a href='#'>ใบสรุปเข้า Site Visit</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปเข้า Site Visit</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R5') { ?>
                        <li class="active"><a href='#'>ใบสรุปเข้าตรวจงานส่วนกลาง</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปเข้าตรวจงานส่วนกลาง</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R6') { ?>
                        <li class="active"><a href='#'>ใบสรุป NCR</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุป NCR</a></li>
                    <?php } ?>
                </ul> -->
            <?php
                }
                if($_SESSION['Permission'] == '2') {
            ?>
                <!-- ####################################################### -->
                <?php if($HeadCheck == 'questQC' || $HeadCheck == 'questevaluation') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Request</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'questQC') { ?>
                        <li class="active"><a href='qcRequest.php'>QC Receive</a></li>
                    <?php } else {?>
                        <li><a href='qcRequest.php'>QC Receive</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'questevaluation') { ?>
                        <li class="active"><a href='evaluationForm.php'>แบบประเมินคุณภาพ (In process & End Product)</a></li>
                    <?php } else {?>
                        <li><a href='evaluationForm.php'>แบบประเมินคุณภาพ (In process & End Product)</a></li>
                    <?php } ?>
                </ul>

                <?php if($HeadCheck == 'SiteVS' || $HeadCheck == 'NCR' || $HeadCheck == 'NCRs' || $HeadCheck == 'assessment') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Activity</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'SiteVS') { ?>
                        <li class="active"><a href='siteVS.php'>Site Visit</a></li>
                    <?php } else {?>
                        <li><a href='siteVS.php'>Site Visit</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'NCR') { ?>
                        <li class="active"><a href='ncr.php'>NCR</a></li>
                    <?php } else {?>
                        <li><a href='ncr.php'>NCR</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'NCRs') { ?>
                        <li class="active"><a href='ncrComferm.php'>NCR Comferm</a></li>
                    <?php } else {?>
                        <li><a href='ncrComferm.php'>NCR Comferm</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'assessment') { ?>
                        <li class="active"><a href='assessment.php'>ประเมินงบประมาณNCR</a></li>
                    <?php } else {?>
                        <li><a href='assessment.php'>ประเมินงบประมาณNCR</a></li>
                    <?php } ?>
                </ul>

                <!-- <?php if($HeadCheck == 'R1' || $HeadCheck == 'R2' || $HeadCheck == 'R3' || $HeadCheck == 'R4' || $HeadCheck == 'R5' || $HeadCheck == 'R6') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Report</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'R1') { ?>
                        <li class="active"><a href='#'>ใบสรุปผลการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปผลการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R2') { ?>
                        <li class="active"><a href='#'>ใบสรุปจำนวนครั้งการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปจำนวนครั้งการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R3') { ?>
                        <li class="active"><a href='#'>สรุปข้อมูลผลการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>สรุปข้อมูลผลการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R4') { ?>
                        <li class="active"><a href='#'>ใบสรุปเข้า Site Visit</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปเข้า Site Visit</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R5') { ?>
                        <li class="active"><a href='#'>ใบสรุปเข้าตรวจงานส่วนกลาง</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปเข้าตรวจงานส่วนกลาง</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R6') { ?>
                        <li class="active"><a href='#'>ใบสรุป NCR</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุป NCR</a></li>
                    <?php } ?>
                </ul> -->
            <?php
                }
            ?>
            <?php
                if($_SESSION['Permission'] == '1') {
            ?>
                <?php if($HeadCheck == 'register' || $HeadCheck == 'User') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">สมาชิก</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'User') { ?>
                        <li class="active"><a href='User.php'>ข้อมูลสมาชิก</a></li>
                    <?php } else {?>
                        <li><a href='User.php'>ข้อมูลสมาชิก</a></li>
                    <?php } ?>
                    <!-- <?php if($HeadCheck == 'register') { ?>
                        <li class="active"><a href='register.php'>สมัครสมาชิก</a></li>
                    <?php } else {?>
                        <li><a href='register.php'>สมัครสมาชิก</a></li>
                    <?php } ?> -->
                </ul>

                <!-- ####################################################### -->
                <?php if($HeadCheck == 'questQC' || $HeadCheck == 'questevaluation' || $HeadCheck == 'questPM') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Request</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'questPM') { ?>
                        <li class="active"><a href='pmRequest.php'>PM Request</a></li>
                    <?php } else {?>
                        <li><a href='pmRequest.php'>PM Request</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'questQC') { ?>
                        <li class="active"><a href='qcRequest.php'>QC Receive</a></li>
                    <?php } else {?>
                        <li><a href='qcRequest.php'>QC Receive</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'questevaluation') { ?>
                        <li class="active"><a href='evaluationForm.php'>แบบประเมินคุณภาพ (In process & End Product)</a></li>
                    <?php } else {?>
                        <li><a href='evaluationForm.php'>แบบประเมินคุณภาพ (In process & End Product)</a></li>
                    <?php } ?>
                </ul>

                <?php if($HeadCheck == 'SiteVS' || $HeadCheck == 'NCR' || $HeadCheck == 'NCRs' || $HeadCheck == 'assessment') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Activity</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'SiteVS') { ?>
                        <li class="active"><a href='siteVS.php'>Site Visit</a></li>
                    <?php } else {?>
                        <li><a href='siteVS.php'>Site Visit</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'NCR') { ?>
                        <li class="active"><a href='ncr.php'>NCR</a></li>
                    <?php } else {?>
                        <li><a href='ncr.php'>NCR</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'NCRs') { ?>
                        <li class="active"><a href='ncrComferm.php'>NCR Comferm</a></li>
                    <?php } else {?>
                        <li><a href='ncrComferm.php'>NCR Comferm</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'assessment') { ?>
                        <li class="active"><a href='assessment.php'>ประเมินงบประมาณNCR</a></li>
                    <?php } else {?>
                        <li><a href='assessment.php'>ประเมินงบประมาณNCR</a></li>
                    <?php } ?>
                </ul>

                <!-- <?php if($HeadCheck == 'R1' || $HeadCheck == 'R2' || $HeadCheck == 'R3' || $HeadCheck == 'R4' || $HeadCheck == 'R5' || $HeadCheck == 'R6') { ?>
                    <li class="active">
                <?php } else { ?>
                    <li>
                <?php } ?>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Report</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <?php if($HeadCheck == 'R1') { ?>
                        <li class="active"><a href='#'>ใบสรุปผลการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปผลการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R2') { ?>
                        <li class="active"><a href='#'>ใบสรุปจำนวนครั้งการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปจำนวนครั้งการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R3') { ?>
                        <li class="active"><a href='#'>สรุปข้อมูลผลการตรวจสอบคุณภาพ</a></li>
                    <?php } else {?>
                        <li><a href='#'>สรุปข้อมูลผลการตรวจสอบคุณภาพ</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R4') { ?>
                        <li class="active"><a href='#'>ใบสรุปเข้า Site Visit</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปเข้า Site Visit</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R5') { ?>
                        <li class="active"><a href='#'>ใบสรุปเข้าตรวจงานส่วนกลาง</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุปเข้าตรวจงานส่วนกลาง</a></li>
                    <?php } ?>
                    <?php if($HeadCheck == 'R6') { ?>
                        <li class="active"><a href='#'>ใบสรุป NCR</a></li>
                    <?php } else {?>
                        <li><a href='#'>ใบสรุป NCR</a></li>
                    <?php } ?>
                </ul> -->
            <?php
                }
            ?>
        </ul>
    </div>
</nav>
<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFNcrSearch.php');

class PDF extends FPDF
{
    function BasicTable($data, $id, $reference, $raised, $department, $day, $unit, $departments, $problem, $problems, $why1, $why2, $why3, $why4, $why5, $cause, $wayShort, $wayLong, $img) {
        $day = new datetime($day);
        $day = $day->format('d-m-Y');

        if($problem == '1') {
            $image1 = '../img/checked.png';
            $image2 = '../img/check.png';
            $image3 = '../img/check.png';
        }
        if($problem == '2') {
            $image1 = '../img/check.png';
            $image2 = '../img/checked.png';
            $image3 = '../img/check.png';
        }
        if($problem == '3') {
            $image1 = '../img/check.png';
            $image2 = '../img/check.png';
            $image3 = '../img/checked.png';
        }

        $this->SetFillColor(205,201,201);
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 18);
        $this->Cell(150, 10, iconv('UTF-8', 'TIS-620', 'Non - Conformance Report'), 'LTR', 0, 'C');
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 12);
        $this->Cell(40, 10, iconv('UTF-8', 'TIS-620', 'NCR No.'), 'LTR', 1, 'C');
        $this->Cell(150, 2, iconv('UTF-8', 'TIS-620', 'รายงานสิ่งที่ไม่เป็นไปตามข้อกำหนด'), 'LR', 0, 'C');
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 9);
        $this->Cell(40, 2, iconv('UTF-8', 'TIS-620', 'NCR ลำดับที่'), 'LR', 1, 'C');
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);
        $this->Cell(150, 2, '', 'LR', 0);
        $this->Cell(40, 2, '', 'LR', 1);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'Reference No./หมายเลขอ้างอิง'), 'L', 0);
        $this->Cell(100, 5, $reference, 'R', 0);
        $this->Cell(40, 5, '', 'LR', 1);
        $this->Cell(60, 5, iconv('UTF-8', 'TIS-620', 'Raised by/ ออกโดย').'     '.$raised, 'LB', 0);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'Department/ ฝ่าย').'     '.$department, 'B', 0);
        $this->Cell(40, 5, iconv('UTF-8', 'TIS-620', 'Date/ วันที่').'  '.$day, 'BR', 0);
        $this->Cell(40, 5, $id, 'LBR', 1, 'C');
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'การแจ้งสิ่งที่ไม่เป็นไปตามข้อกำหนด (ผู้ออก NCR เป็นผู้ให้รายละเอียด)'), 0, 1, 'C', true);
        $this->Cell(40, 5, iconv('UTF-8', 'TIS-620', 'Project/ โครงการ'), 'LBR', 0);
        $this->Cell(55, 5, iconv('UTF-8', 'TIS-620', $siteName), 'LBR', 0);
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', 'Sketch or Photograph/ ภาพประกอบของปัญหาที่พบ'), 'LR', 1);
        $this->Cell(40, 5, iconv('UTF-8', 'TIS-620', 'Plot/ Unit No.'), 'LBR', 0);
        $this->Cell(55, 5, iconv('UTF-8', 'TIS-620', $unit), 'LBR', 0);
        if($img != '') {
            $this->Cell(95, 5, $this->Image($img, 120, 45, 60), 'LR', 1);
        } else {
            $this->Cell(95, 5, '', 'LR', 1);
        }
        $this->Cell(40, 5, iconv('UTF-8', 'TIS-620', 'Department/ ฝ่าย'), 'LBR', 0);
        $this->Cell(55, 5, iconv('UTF-8', 'TIS-620', $departments), 'LBR', 0);
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 9);
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', 'Description of Problem or Defect/ ลักษณะของปัญหาที่พบ'), 'LR');
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);
        $this->Cell(70, 5, iconv('UTF-8', 'TIS-620', '  Design Defect/ ปัญหาจากการออกแบบ'), 'L');
        $this->Cell(25, 4, $this->Image($image1, 75, 60, 4), 'R', 0, 'C' );
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);
        $this->Cell(70, 5, iconv('UTF-8', 'TIS-620', '  Construction Defect/ ปัญหาจากการก่อสร้าง'), 'L');
        $this->Cell(25, 4, $this->Image($image2, 75, 65, 4), 'R', 0, 'C' );
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);
        $this->Cell(70, 5, iconv('UTF-8', 'TIS-620', '  Material Defect/ ปัญหาจากคุณภาพของวัสดุ'), 'L');
        $this->Cell(25, 4, $this->Image($image3, 75, 70, 4), 'R', 0, 'C' );
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', 'Details/ รายละเอียดของปัญหา (โปรดระบุ)'), 'LR');
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);
        $this->Cell(95, 5, iconv('UTF-8', 'TIS-620', $problems), 'LR');
        $this->Cell(95, 5, '', 'LR', 1);
        $this->Cell(95, 5, '', 'LR');
        $this->Cell(95, 5, '', 'LR', 1);
        $this->Cell(95, 5, '', 'LR');
        $this->Cell(95, 5, '', 'LR', 1);
        $this->Cell(95, 5, '', 'LBR');
        $this->Cell(95, 5, '', 'LBR', 1);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'Root Cause Analysis - 5 WHY / การวิเคราะห์หาสาเหตุของปัญหาที่พบ'), 0, 1, 'C', true);
        $this->Cell(20, 5, 'WHY', 'LBR', 0);
        $this->Cell(170, 5, iconv('UTF-8', 'TIS-620', $why1), 'LBR', 1);
        $this->Cell(20, 5, 'WHY', 'LBR', 0);
        $this->Cell(170, 5, iconv('UTF-8', 'TIS-620', $why2), 'LBR', 1);
        $this->Cell(20, 5, 'WHY', 'LBR', 0);
        $this->Cell(170, 5, iconv('UTF-8', 'TIS-620', $why3), 'LBR', 1);
        $this->Cell(20, 5, 'WHY', 'LBR', 0);
        $this->Cell(170, 5, iconv('UTF-8', 'TIS-620', $why4), 'LBR', 1);
        $this->Cell(20, 5, 'WHY', 'LBR', 0);
        $this->Cell(170, 5, iconv('UTF-8', 'TIS-620', $why15), 'LBR', 1);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'Root Cause/ สาเหตุของปัญหา'), 'LBR', 0);
        $this->Cell(140, 5, $cause, 'LBR', 1);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'Short Term Solutions/ '), 'LR', 0, 'C');
        $this->Cell(140, 5, $wayShort, 'LR', 1);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'แนวทางการแก้ปัญหาในระยะสั้น'), 'LBR', 0, 'C');
        $this->Cell(140, 5, '', 'LBR', 1);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'Long Term Solutions/ '), 'LR', 0, 'C');
        $this->Cell(140, 5, $wayLong, 'LR', 1);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'แนวทางการป้องกันปัญหาในระยะยาว'), 'LBR', 0, 'C');
        $this->Cell(140, 5, '', 'LBR', 1);
    }

    function BasicTable2($targetDay, $finishedDay, $solving, $budget, $targetDays, $finishedDays, $protect, $budgets, $status, $siteName, $img1, $img2, $detail1, $detail2) {

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'แผนการแก้ไข-ป้องกัน และผลการดำเนินการ (ฝ่ายผู้รับ NCR เป็นผู้ชี้แจง)'), 0, 1, 'C', true);
        $this->Cell(110, 10, iconv('UTF-8', 'TIS-620', 'Corrective Action Plan & Result/ แผนงานและผลการแก้ไขปัญหาที่เกิดขึ้น:'), 'L', 0);
        $this->Cell(20, 10, iconv('UTF-8', 'TIS-620', 'กำหนดเสร็จ'), 0, 0);
        $this->Cell(20, 10, $targetDay, 0, 0);
        $this->Cell(20, 10, iconv('UTF-8', 'TIS-620', 'วันที่แล้วเสร็จ'), 0, 0);
        $this->Cell(20, 10, $finishedDay, 'R', 1);
        $this->Cell(100, 10, iconv('UTF-8', 'TIS-620', 'การแก้ไขปัญหาที่เกิดขึ้นแล้วนี้ บริษัทจำเป็นต้องใช้งบประมาณเพิ่มเติมหรือไม่?'), 'L', 0);
        if($solving == 0) {
            $solving1 = '../img/checked.png';
            $solving2 = '../img/check.png';
        }
        if($solving == 1) {
            $solving1 = '../img/check.png';
            $solving2 = '../img/checked.png';
        }
        if($protect == 0) {
            $protect1 = '../img/checked.png';
            $protect2 = '../img/check.png';
        }
        if($protect == 1) {
            $protect1 = '../img/check.png';
            $protect2 = '../img/checked.png';
        }
        $this->Cell(5, 10, $this->Image($solving1, 112, 27, 4), 0, 0);
        $this->Cell(10, 10, iconv('UTF-8', 'TIS-620', 'ไม่ใช้'), 0, 0);
        $this->Cell(5, 10, $this->Image($solving2, 127, 27, 4), 0, 0);
        $this->Cell(25, 10, iconv('UTF-8', 'TIS-620', 'ใช้งบประมาณเพิ่ม'), 0, 0);
        $this->Cell(15, 10, $budget, 0, 0, 'C');
        $this->Cell(30, 10, iconv('UTF-8', 'TIS-620', 'บาท (โดยประมาณ)'), 'R', 1);
        if($img1 != '') {
            $this->Cell(190, 70, $this->Image($img1, 30, 45, 60), 'LR', 1);
            $this->Cell(190, 10, iconv('UTF-8', 'TIS-620', $detail1), 'LBR', 1);
            $this->Cell(190, 20, '', 'LR', 1);
        } else {
            $this->Cell(190, 70, '', 'LR', 1);
            $this->Cell(190, 30, '', 'LBR', 1);
        }
        $this->Cell(110, 10, iconv('UTF-8', 'TIS-620', 'Preventive Action Plan & Result/ แผนการป้องกันปัญหาไม่ให้เกิดขึ้นซ้ำ:'), 'L', 0);
        $this->Cell(20, 10, iconv('UTF-8', 'TIS-620', 'กำหนดเสร็จ'), 0, 0);
        $this->Cell(20, 10, $targetDays, 0, 0);
        $this->Cell(20, 10, iconv('UTF-8', 'TIS-620', 'วันที่แล้วเสร็จ'), 0, 0);
        $this->Cell(20, 10, $finishedDays, 'R', 1);
        $this->Cell(100, 10, iconv('UTF-8', 'TIS-620', 'การป้องกันปัญหาไม่ให้เกิดซ้ำ บริษัทจำเป็นต้องใช้งบประมาณเพิ่มเติมหรือไม่?'), 'L', 0);
        $this->Cell(5, 10, $this->Image($protect1, 112, 147, 4), 0, 0);
        $this->Cell(10, 10, iconv('UTF-8', 'TIS-620', 'ไม่ใช้'), 0, 0);
        $this->Cell(5, 10, $this->Image($protect2, 127, 147, 4), 0, 0);
        $this->Cell(25, 10, iconv('UTF-8', 'TIS-620', 'ใช้งบประมาณเพิ่ม'), 0, 0);
        $this->Cell(15, 10, $budgets, 0, 0, 'C');
        $this->Cell(30, 10, iconv('UTF-8', 'TIS-620', 'บาท (โดยประมาณ)'), 'R', 1);
        if($img2 != '') {
            $this->Cell(190, 70, $this->Image($img2, 30, 165, 60), 'LR', 1);
            $this->Cell(190, 10, iconv('UTF-8', 'TIS-620', $detail2), 'LR', 1);
            $this->Cell(190, 20, '', 'LBR', 1);
        } else {
            $this->Cell(190, 70, '', 'LR', 1);
            $this->Cell(190, 30, '', 'LBR', 1);
        }
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'The above rectification has been completed satisfactorily/ การแก้ไข-ป้องกันปัญหาเบื้องต้นได้ดำเนินการเสร็จสิ้นเป็นที่เรียบร้อยแล้ว'), 'LR', 1, 'C');
        $this->Cell(190, 5, '', 'LR', 1);
        $this->Cell(30, 5, 'QC Manager', 'L', 0);
        $this->Cell(60, 5, '____________________________', 0, 0);
        $this->Cell(20, 5, 'Department', 0, 0);
        $this->Cell(40, 5, '______________________', 0, 0);
        $this->Cell(10, 5, 'Date ', 0, 0);
        $this->Cell(30, 5, '________________', 'R', 1);
        $this->Cell(30, 2, iconv('UTF-8', 'TIS-620', 'ผู้จัดการ QC ลงนาม'), 'L', 0);
        $this->Cell(60, 2, '', 0, 0);
        $this->Cell(20, 2, iconv('UTF-8', 'TIS-620', 'ฝ่าย'), 0, 0);
        $this->Cell(40, 2, '', 0, 0);
        $this->Cell(10, 2, iconv('UTF-8', 'TIS-620', 'วันที่ '), 0, 0);
        $this->Cell(30, 2, '', 'R', 1);
        $this->Cell(30, 2, '', 'LB', 0);
        $this->Cell(60, 2, '', 'B', 0);
        $this->Cell(20, 2, '', 'B', 0);
        $this->Cell(40, 2, '', 'B', 0);
        $this->Cell(10, 2, '', 'B', 0);
        $this->Cell(30, 2, '', 'BR', 1);
    }
}

$pdf = new PDF( 'P' , 'mm' , 'A4');
$pdf->AddPage();
$title = 'NCR';
$pdf->SetTitle($title);

// echo $row_ncr['ncr_img_partI'].'-'.$row_ncr['ncr_img_partII_I'].'-'.$row_ncr['ncr_img_partII_II'];

if($row_ncr['ncr_img_partI'] != '' && $row_ncr['ncr_img_partI'] != ' ') {
    $img1 = '../img/'.$row_ncr['ncr_img_partI'];
} else {
    $img1 = '';
}
if($row_ncr['ncr_img_partII_I'] != '' && $row_ncr['ncr_img_partII_I'] != ' ') {
    $img2 = '../img/'.$row_ncr['ncr_img_partII_I'];
} else {
    $img2 = '';
}
if($row_ncr['ncr_img_partII_II'] != '' && $row_ncr['ncr_img_partII_II'] != ' ') {
    $img3 = '../img/'.$row_ncr['ncr_img_partII_II'];
} else {
    $img3 = '';
}

$row_ncr['ncr_targetDay'] = new datetime($row_ncr['ncr_targetDay']);
$row_ncr['ncr_targetDay'] = $row_ncr['ncr_targetDay']->format('d-m-Y');

if($row_ncr['ncr_targetDay'] == '01-01-1900') {
    $ncr_targetDay = '';
} else {
    $ncr_targetDay = $row_ncr['ncr_targetDay'];
}

$row_ncr['ncr_targetDays'] = new datetime($row_ncr['ncr_targetDays']);
$row_ncr['ncr_targetDays'] = $row_ncr['ncr_targetDays']->format('d-m-Y');

if($row_ncr['ncr_targetDays'] == '01-01-1900') {
    $ncr_targetDays = '';
} else {
    $ncr_targetDays = $row_ncr['ncr_targetDays'];
}

$row_ncr['ncr_finishedDay'] = new datetime($row_ncr['ncr_finishedDay']);
$row_ncr['ncr_finishedDay'] = $row_ncr['ncr_finishedDay']->format('d-m-Y');

if($row_ncr['ncr_finishedDay'] == '01-01-1900') {
    $ncr_finishedDay = '';
} else {
    $ncr_finishedDay = $row_ncr['ncr_finishedDay'];
}

$row_ncr['ncr_finishedDays'] = new datetime($row_ncr['ncr_finishedDays']);
$row_ncr['ncr_finishedDays'] = $row_ncr['ncr_finishedDays']->format('d-m-Y');

if($row_ncr['ncr_finishedDays'] == '01-01-1900') {
    $ncr_finishedDays = '';
} else {
    $ncr_finishedDays = $row_ncr['ncr_finishedDays'];
}

$pdf->BasicTable($data,
$row_ncr['ncr_id'],
$row_ncr['ncr_reference'],
$row_ncr['ncr_raised'],
$row_ncr['ncr_department'],
$row_ncr['ncr_day'],
$row_ncr['ncr_unit'],
$row_ncr['ncr_departments'],
$row_ncr['pb_id'],
$row_ncr['ncr_problems'],
$row_ncr['ncr_why1'],
$row_ncr['ncr_why2'],
$row_ncr['ncr_why3'],
$row_ncr['ncr_why4'],
$row_ncr['ncr_why5'],
$row_ncr['ncr_cause'],
$row_ncr['ncr_wayShort'],
$row_ncr['ncr_wayLong'],
$img1);

$pdf->AddPage();
$pdf->BasicTable2($ncr_targetDay,
$ncr_finishedDay,
$row_ncr['ncr_solving'],
$row_ncr['ncr_budget'],
$ncr_targetDays,
$ncr_finishedDays,
$row_ncr['ncr_protect'],
$row_ncr['ncr_budgets'],
$row_ncr['ncr_status'],
$row_ncr['site_name'],
$img2,
$img3,
$row_ncr['detail_partII_I'],
$row_ncr['detail_partII_II']);
$pdf->Output();
?>

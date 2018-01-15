<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFOne3Search.php');

class PDF extends FPDF
{
    function BasicTable($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8, $h9, $h10, $h11, $h12, $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12, $name, $site) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'QC : หมวด 2 '), 0, 1 ,'C');
        $this->Ln(3);

        $this->Cell(100, 5, iconv('UTF-8', 'TIS-620', 'โครงการ :  '.$site), 0, 0);
        $this->Cell(63, 5, iconv('UTF-8', 'TIS-620', 'ผู้จัดการ :  '.$name), 0, 0);
        $this->Cell(26, 5, '', 0, 1,'C');
        $this->Ln(3);

        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะงาน'), 'LT', 0, 'C');
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะการประเมิน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'ระดับคะแนน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LT', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'คะแนนที่ได้'), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', 'หมายเหตุ'), 'LTR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'เอกสารประกอบตรวจสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==เอกสารประกอบตรวจสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การใช้เอกสาร REGUEST'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การแก้ไข Defect QC หมวด 2'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ผลทดสอบวงจรไฟฟ้า'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'มีผลการทดสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่มีผลการทดสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a2), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ผลทดสอบแรงดันของท่อระบบสุขาภิบาล'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'มีผลการทดสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่มีผลการทดสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ทดสอบการขังน้ำของพื้นห้องน้าและระเบียง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'มีผลการทดสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่มีผลการทดสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a4), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d4), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานพื้นผิวขัดมันชั้น 2'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานพื้นผิวขัดมันชั้น 2'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและผิวหน้าพื้นขัดมันถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและผิวหน้าพื้นขัดมันไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a5), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d5), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและผิวหน้าพื้นขัดมันไม่ถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานฉาบปูนภายใน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ลักษณะของผิวฉาบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวฉาบเรียบสม่ำเสมอ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวฉาบไม่เรียบมีรอยร้าวบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a6), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d6), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวฉาบไม่เรียบมีรอยร้าวหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานฉาบมุมผนังห้องและเสา'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'งานฉาบมุมผนังห้องและเสาได้ฉาก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'งานฉาบมุมผนังห้องและเสาได้ฉากบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a7), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d7), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'งานฉาบมุมผนังห้องและเสาได้ฉากหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานฝ้าเพดาน เฉพาะโครงเคร่าเท่านั้น ส่วนฝ้าชายคา ปิดแผ่นฝ้าได้'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ระดับและแนวโครงฝ้าเพดาน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและโครงฝ้าเพดานถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและโครงฝ้าเพดานไม่ถูกต้องบางส่วน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a8), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d8), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและโครงฝ้าเพดานไม่ถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานพื้นปูกระเบื้องห้องน้ำ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานพื้นปูกระเบื้องห้องน้ำ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นปูกระเบื้องเรียบได้แนวและระดับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นปูกระเบื้องบางส่วนต้องแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a9), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d9), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นปูกระเบื้องไม่ได้แนวและระดับจำนวนมาก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานสีรองพื้น'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานทาสีรองพื้นภายใน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นที่ทาสีครบถ้วนและเรียบสม่ำเสมอ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นที่ทาสีไม่ครบถ้วนและไม่เรียบบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a10), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d10), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นที่ทาสีไม่ครบถ้วนและไม่เรียบหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานระบบไฟฟ้าภายใน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การเดินท่อร้อยและสายไฟฟ้า'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การเดินท่อร้อยและสายไฟถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การเดินท่อร้อยและสายไฟไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a11), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d11), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การเดินท่อร้อยและสายไฟไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การเดินท่อร้อยและสายไฟไม่ถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การเตรียมสายเข้าตู้ควบคุม/ราง Wire way'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่งและระดับของสายถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่งและระดับของสายถูกไม่ถูกบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a12), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d12), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่งและระดับของสายถูกไม่ถูกหลายจุด'), 'LTB', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LTB', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRB', 1);
    }
    function BasicTable2($h1, $h2, $h3, $d1, $d2, $d3, $total) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะงาน'), 'LT', 0, 'C');
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะการประเมิน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'ระดับคะแนน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LT', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'คะแนนที่ได้'), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', 'หมายเหตุ'), 'LTR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'ระบบแอร์ เฉพาะส่วนที่ฝังผนัง และการติดตั้ง SUPPORT'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ความเรียบร้อยในการเดินท่อ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การยึด,แนวท่อ,การหุ้มฉนวนถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การยึด,แนวท่อ,การหุ้มฉนวนไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การยึด,แนวท่อ,การหุ้มฉนวนไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานระบบสุขาภิบาลภายใน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การเดินท่อระบบสุขาภิบาล'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและแนวท่อถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและแนวท่อไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a2), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและแนวท่อไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและแนวท่อไม่ถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==SUPPORT ท่องานระบบสุขาภิบาล'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $totalP = (($total * 100) / 100);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'รวมคะแนน (คะแนนผ่านเกณฑ์ =85)'), 'LTB', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'TB', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '100'), 'LTB', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $total), 'LTB', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $totalP), 'LTRB', 1, 'C');
    }
}

$pdf = new PDF( 'P' , 'mm' , 'A4');

$pdf->AddPage();
$title = 'Cover Page';
$pdf->SetTitle($title);

$pdf->BasicTable(
    $row_point['house1'],
    $row_point['house2'],
    $row_point['house3'],
    $row_point['house4'],
    $row_point['house5'],
    $row_point['house6'],
    $row_point['house7'],
    $row_point['house8'],
    $row_point['house9'],
    $row_point['house10'],
    $row_point['house11'],
    $row_point['house12'],
    $row_point['name'],
    $row_point['Site']);
$pdf->AddPage();
$pdf->BasicTable2(
    $row_point['house13'],
    $row_point['house14'],
    $row_point['house15'],
    $row_point['total']
);
$pdf->Output();
?>

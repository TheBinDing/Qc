<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFOne4Search.php');

class PDF extends FPDF
{
    function BasicTable($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8, $h9, $h10, $h11, $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $name, $site, $total) {
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
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การแก้ไข Defect QC หมวด 3'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานพื้นปูกระเบื้องชั้นล่าง , ครัว'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานพื้นปูกระเบื้องชั้นล่าง , ครัว'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นปูกระเบื้องเรียบได้แนวและระดับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นปูกระเบื้องบางส่วนต้องแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นปูกระเบื้องไม่ได้แนวและระดับจำนวนมาก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานพื้นคอนกรีต โรงรถ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานพื้นคอนกรีต โรงรถ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นเรียบได้แนวและระดับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นบางส่วนต้องแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'พื้นไม่ได้แนวและระดับจำนวนมาก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานบัวปูนปั้น'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานบัวปูนปั้น'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานโครงสร้างบันได'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานโครงสร้างบันได'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ขนาด,การติดตั้งถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ขนาด,การติดตั้งไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ขนาด,การติดตั้งไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานปูพื้นปาร์เก้,การเรียงไม้,สีเนื้อไม้'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานปูพื้นปาร์เก้,การเรียงไม้,สีเนื้อไม้'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ชนิด,ขนาด,โทนสี,การปูไม้ปาร์เก้ถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ชนิด,ขนาด,โทนสี,การปูไม้ปาร์เก้ไม่ถูกบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ชนิด,ขนาด,โทนสี,การปูไม้ปาร์เก้ไม่ถูกหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานฝ้าเพดาน (ระดับแผ่นฝ้า , การโป๊ะแต่งเก็บรอยต่อและสกูร)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานฝ้าเพดาน (ระดับแผ่นฝ้า , การโป๊ะแต่งเก็บรอยต่อและสกูร)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เรียบสม่ำเสมอไม่เป็นคลื่น'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เรียบสม่ำเสมอเป็นคลื่นบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่เรียบสม่ำเสมอเป็นคลื่นหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานทาสีรองพื้นภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานทาสีรองพื้นภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เรียบเสมอและสีเท่ากัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่เรียบและสีไม่เท่ากัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ปรับปรุงแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานระบบสุขาภิบาลภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==แบบติดตั้ง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'มีแบบ ติดตั้ง อ้างอิงในการตรวจสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่มีแบบติดตั้งอ้างอิงในการตรวจสอบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การเดินระบบท่อภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ชนิด,ขนาด,ระดับ,และแนวท่อถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ชนิด,ขนาด,ระดับ,และแนวท่อไม่ถูกบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ชนิด,ขนาด,ระดับ,และแนวท่อไม่ถูกหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ระบบถังน้ำดี ถังบำบัด ดักไขมัน ภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง,ระดับ,และการติดตั้งต้องตามมาตรฐาน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง,ระดับ,และการติดตั้งไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง,ระดับ,และการติดตั้งถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
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
    $row_point['name'],
    $row_point['Site'],
    $row_point['total']);
$pdf->Output();
?>

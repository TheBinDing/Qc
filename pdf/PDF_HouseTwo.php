<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFOne2Search.php');

class PDF extends FPDF
{
    function BasicTable($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8, $h9, $h10, $h11, $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $name, $site) {
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
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การแก้ไข Defect QC หมวด 1'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานมุงหลังคา'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRT', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานกระเบื้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่แตกบิ่นขนาดสีเท่ากัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แตกเสียหายสีไม่เท่ากันบางส่วน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a2), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แตกเสียหายหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ครอบหลังคา'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่แตกบิ่นขนาดสีเท่ากัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แตกเสียหายสีไม่เท่ากันบางส่วน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แตกเสียหายหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==แผ่นฟร์อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ฉีกขาด/ขึงตึง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'มีรอยฉีกขาด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a4), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d4), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==แป'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การยึด ความแข็งแรง และระยะวางถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การยึด ความแข็งแรง และระยะวางไม่ถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a5), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d5), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานเชิงชาย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การยึดเชิงชายไม้'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและการยึดถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและการยึดถูกต้องบ้างจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a6), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d6), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและการยึดไม่ถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ผิวไม้'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เรียบไม่มีรอยแตก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เรียบมีรอยแตก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a7), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d7), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การต่อไม้'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การเข้ามุม 45 สนิทเป็นแนวเดียวกัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การเข้ามุม 45 สนิทไม่เป็นแนวเดียวกัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a8), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d8), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวเชิงชายคด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานผนังก่ออิฐ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==แนวตาข่ายภายใน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '9'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '9'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a9), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d9), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานระบบท่อไฟฟ้าในผนังก่อฮิฐ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การวางบล๊อกท่อไฟฟ้า'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งไม่ตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a10), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d10), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การเดินท่อในผนังก่ออิฐและบล็อกไฟฟ้า'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและแนวของท่อถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวการเดินท่อไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a11), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d11), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและแนวของท่อไม่ถูกต้อง'), 'LTB', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LTB', 0, 'C');
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

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานผนังปูกระเบื้อง ห้องน้า + ห้องครัว'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานผนังปูกระเบื้องห้องน้ำ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องเรียบได้แนวและระดับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องบางส่วนต้องแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องไม่ได้แนวและระดับจำนวนมาก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานผนังปูกระเบื้องห้องครัว'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องเรียบได้แนวและระดับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องบางส่วนต้องแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a2), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องไม่ได้แนวและระดับจำนวนมาก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานผนังฉาบปูนภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานผนังฉาบปูนภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องเรียบได้แนวและระดับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องบางส่วนต้องแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '8'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผนังปูกระเบื้องไม่ได้แนวและระดับจำนวนมาก'), 'LT', 0);
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
    $row_point['Site']);
$pdf->AddPage();
$pdf->BasicTable2(
    $row_point['house12'],
    $row_point['house13'],
    $row_point['house14'],
    $row_point['total']
);
$pdf->Output();
?>

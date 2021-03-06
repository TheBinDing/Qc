<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFThreeSearch.php');

class PDF extends FPDF
{
    function BasicTable($data, $site, $a11, $a12, $a13, $d1, $a21, $a22, $a23, $d2, $a31, $a32, $a33, $d3, $a41, $a42, $a43, $d4, $a51, $a52, $a53, $d5, $a61, $a62, $a63, $d6, $a71, $a72, $a73, $d7, $a81, $a82, $a83, $d8, $c1, $c2, $c3, $c4, $c5, $s1, $s2, $s3, $day, $day2, $day3) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'แบบตรวจประเมินคุณภาพงานระหว่างทาง'), 0, 1 ,'C');
        $this->Ln(3);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'QC: หมวดที่ 3 งานฉาบปูน'), 0, 1 ,'C');
        $this->Ln(3);

        $this->Cell(76, 5, '', 0, 0 ,'C');
        $this->Cell(63, 5, iconv('UTF-8', 'TIS-620', 'วันที่ทำการตรวจสอบ'), 0, 0 ,'C');
        $this->Cell(50, 5, '', 0, 1,'C');

        $this->Cell(76, 5, '', 0, 0 ,'C');
        $this->Cell(63, 5, iconv('UTF-8', 'TIS-620', 'Q1  ').$day, 0, 0);
        $this->Cell(50, 5, iconv('UTF-8', 'TIS-620', 'บจก/หจก'), 0, 1,'C');

        $this->Cell(76, 5, iconv('UTF-8', 'TIS-620', 'โครงการ  ').$site, 0, 0);
        $this->Cell(63, 5, iconv('UTF-8', 'TIS-620', 'Q2  ').$day2, 0, 0);
        $this->Cell(50, 5, '', 0, 1,'C');

        $this->Cell(76, 5, '', 0, 0 ,'C');
        $this->Cell(63, 5, iconv('UTF-8', 'TIS-620', 'Q3  ').$day3, 0, 0);
        $this->Cell(50, 5, '', 0, 1,'C');
        $this->Ln(10);

        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 8);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะของงาน'), 'LT', 0, 'C');
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะการประเมิน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'ระดับคะแนน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LT', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'คะแนนที่ได้'), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', 'หมายเหตุ'), 'LTR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'Q1'), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'Q2'), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'Q3'), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'งานฉาบปูน'), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(100, 4, iconv('UTF-8', 'TIS-620', '1.1 งานฉาบปูนลักษณะผิวปูน - ความเรียบและความสูง(ตรวจสอบด้วยสายตา)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.เรียบไม่เป็นคลื่น ,ไม่มีรอยต่อ ,ไม่แตกร้าว ,'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ฉาบสุดท้องคาน(ไม่ชนท้องพื้น)'), 'L', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.เรียบมีคลื่นบ้าง ,ไม่มีรอยต่อ ,ไม่แตกร้าว ,'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ฉาบสุดท้องคาน(ไม่ชนท้องพื้น)'), 'L', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7.5'), 'L', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a11), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a12), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a13), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '3.เป็นคลื่น ,มีรอยต่อ ,แตกร้าว ,'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ฉาบไม่สุดท้องคานและความสูงผิดข้อกำหนด'), 'L', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'L', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', '1.2 แนว , มุมผนัง และมุมเสา - แนวดิ่ง , แนวราบ และมุมฉาก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.ไม่ล้มดิ่ง - คดงอ -ผิดแนว < 0.5 ซม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2. ล้มดิ่ง - คดงอ - ผิดแนว > 0.5 ซม. '), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a21), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a22), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a23), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', '1.3 แนว , ร่อง ผนังด้านล่าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.ตัดแต่งได้เรียบสูงจากพื้น 3 ซม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.ตัดแต่งไม่เรียบร้อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a31), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a32), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a33), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', '1.4 ความเรียบร้อยบริเวณช่องบล็อกไฟ , แอร์ ,กำจัดปลวก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.ตัดแต่งเท่ากับขนาดตัวบล็อก '), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.ไม่ได้ตัดแต่งปากบล็อก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a41), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a42), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a43), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d4), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', '1.5  การเซาะร่องกันน้ำย้อน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.มีร่องกันน้ำย้อนและเรียบร้อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.ไม่มีร่องกันน้ำย้อนหรือไม่เรียบร้อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a51), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a52), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a53), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d5), 'LTR', 1);

        ///////////////////////////////

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'งานติดตั้งวงกบ , และช่องสำหรับประตู - หน้าต่างอลูมิเนียม '), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'งานติดตั้งวงกบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', '1.6  การติดตั้งวงกบต้องได้ระนาบดิ่งและฉาก (วงกบไม้และเหล็ก)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.ดิ่งและฉาก เอียงได้ไม่เกิน 0-2 มม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.ดิ่งและฉาก เอียง > 2 มม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a61), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a62), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a63), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d6), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'งานช่องสำหรับประตู - หน้าต่างอลูมิเนียม'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', '1.7  ช่องว่างระหว่างขอบปูนกับขอบวงกบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.ช่องว่างมีขนาด 3-5 มม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.ช่องว่างมีขนาด > 5 มม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a71), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a72), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a73), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d7), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', '1.8  งานอุดปูนรอบวงกบ ความเรียบและความแน่น'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1.อุดปูนทั้งด้านนอก-ด้านในก่อนการฉาบไม่มีแสงลอด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '   ตลอดแนว'), 'L', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.อุดปูนไม่เรียบร้อยก่อนการฉาบ ไม่อุดปูน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a81), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a82), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a83), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d8), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LT', 0, 'C');
        $this->Cell(40, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $s1), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $s2), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $s3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        if($s1 == '10') {
            $image1 = '../img/checked.png';
            $image2 = '../img/check.png';
            $image3 = '../img/check.png';
        }
        if($s1 >= '7.5') {
            $image1 = '../img/check.png';
            $image2 = '../img/checked.png';
            $image3 = '../img/check.png';
        }
        if($s1 < '7.5') {
            $image1 = '../img/check.png';
            $image2 = '../img/check.png';
            $image3 = '../img/checked.png';
        }

        if(($s1 < 7.5) && ($s2 != '' && $s2 != ' ')) {
            $image1 = '';
            $image2 = '';
            $image3 = '';

            if($s2 == '10') {
                $image1 = '../img/checked.png';
                $image2 = '../img/check.png';
                $image3 = '../img/check.png';
            }
            if($s2 >= '7.5') {
                $image1 = '../img/check.png';
                $image2 = '../img/checked.png';
                $image3 = '../img/check.png';
            }
            if($s2 < '7.5') {
                $image1 = '../img/check.png';
                $image2 = '../img/check.png';
                $image3 = '../img/checked.png';
            }
        }

        if(($s1 < 7.5) && ($s2 < 7.5) && ($s3 != '' && $s3 != ' ')) {
            $image1 = '';
            $image2 = '';
            $image3 = '';

            if($s3 == '10') {
                $image1 = '../img/checked.png';
                $image2 = '../img/check.png';
                $image3 = '../img/check.png';
            }
            if($s3 >= '7.5') {
                $image1 = '../img/check.png';
                $image2 = '../img/checked.png';
                $image3 = '../img/check.png';
            }
            if($s3 < '7.5') {
                $image1 = '../img/check.png';
                $image2 = '../img/check.png';
                $image3 = '../img/checked.png';
            }
        }

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'งานที่ต้องปรับปรุง'), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'สาเหตุของปัญหา'), 'LT', 0);
        $this->Cell(60, 4, iconv('UTF-8', 'TIS-620', 'ผลการตรวจสอบคุณภาพ'), 'LT', 0, 'C');
        $this->Cell(10, 4, '', 'LT', 0, 'C');
        $this->Cell(25, 4, '', 'LTR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', $c1), 'LT', 0);
        $this->Cell(60, 4, '', 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'รวม Q1'), 'LT', 0, 'C');
        $this->Cell(25, 4, $s1, 'LTR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', $c2), 'LT', 0);
        $this->Cell(5, 4, $this->Image($image1, 106, 220, 4), 'LT', 0, 'C' );
        $this->Cell(55, 4, iconv('UTF-8', 'TIS-620', 'งานผ่านเกณท์มาตรฐาน (10 คะแนน)'), 'T', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'รวม Q2'), 'LT', 0, 'C');
        $this->Cell(25, 4, $s2, 'LTR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', $c3), 'LT', 0);
        $this->Cell(5, 4, $this->Image($image2, 106, 224, 4), 'LT', 0, 'C' );
        $this->Cell(55, 4, iconv('UTF-8', 'TIS-620', 'งานผ่านเกณท์มาตรฐานแก้ไข'), 'T', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'รวม Q3'), 'LT', 0, 'C');
        $this->Cell(25, 4, $s3, 'LTR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', $c4), 'LT', 0);
        $this->Cell(5, 4, '', 'LT', 0, 'C' );
        $this->Cell(55, 4, iconv('UTF-8', 'TIS-620', 'ตามรายการที่ระบบุ (> 7.5 คะแนน)'), 'T', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', $c5), 'LTB', 0);
        $this->Cell(5, 4, $this->Image($image3, 106, 232, 4), 'LTB', 0, 'C' );
        $this->Cell(55, 4, iconv('UTF-8', 'TIS-620', 'ไม่ผ่านเกณ์มาตรฐานต้องแก้ไข(< 7.5 คะแนน)'), 'TB', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTBR', 1);
        $this->Ln(20);

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'ลงชื่อ...............................................................................................ผู้ทำการตรวจสอบ'), 0, 1 ,'C');
        $this->Ln(5);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'ลงชื่อ...............................................................................................ผู้จัดการโครงการ'), 0, 1 ,'C');
    }
}

$pdf = new PDF( 'P' , 'mm' , 'A4');
$pdf->AddPage();
$title = 'Cover Page';
$pdf->SetTitle($title);

$row_point['day'] = new datetime($row_point['day']);
$row_point['day'] = $row_point['day']->format('d-m-Y');

$row_point['day2'] = new datetime($row_point['day2']);
$row_point['day2'] = $row_point['day2']->format('d-m-Y');

$row_point['day3'] = new datetime($row_point['day3']);
$row_point['day3'] = $row_point['day3']->format('d-m-Y');

if($row_point['day'] == '01-01-1900') {
    $row_point['day'] = '';
}
if($row_point['day2'] == '01-01-1900') {
    $row_point['day2'] = '';
}
if($row_point['day3'] == '01-01-1900') {
    $row_point['day3'] = '';
}
$pdf->BasicTable($data,
    $row_point['Site'],
    $row_point['ass11'],
    $row_point['ass12'],
    $row_point['ass13'],
    $row_point['detail1'],
    $row_point['ass21'],
    $row_point['ass22'],
    $row_point['ass23'],
    $row_point['detail2'],
    $row_point['ass31'],
    $row_point['ass32'],
    $row_point['ass33'],
    $row_point['detail3'],
    $row_point['ass41'],
    $row_point['ass42'],
    $row_point['ass43'],
    $row_point['detail4'],
    $row_point['ass51'],
    $row_point['ass52'],
    $row_point['ass53'],
    $row_point['detail5'],
    $row_point['ass61'],
    $row_point['ass62'],
    $row_point['ass63'],
    $row_point['detail6'],
    $row_point['ass71'],
    $row_point['ass72'],
    $row_point['ass73'],
    $row_point['detail7'],
    $row_point['ass81'],
    $row_point['ass82'],
    $row_point['ass83'],
    $row_point['detail8'],
    $row_point['cause1'],
    $row_point['cause2'],
    $row_point['cause3'],
    $row_point['cause4'],
    $row_point['cause5'],
    $row_point['sum1'],
    $row_point['sum2'],
    $row_point['sum3'],
    $row_point['day'],
    $row_point['day2'],
    $row_point['day3']);
$pdf->Output();
?>

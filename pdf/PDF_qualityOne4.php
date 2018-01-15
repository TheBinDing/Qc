<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFOne4Search.php');

class PDF extends FPDF
{
    function BasicTable($data, $site, $a11, $a12, $a13, $d1, $a21, $a22, $a23, $d2, $a31, $a32, $a33, $d3, $a41, $a42, $a43, $d4, $a51, $a52, $a53, $d5, $a61, $a62, $a63, $d6, $a71, $a72, $a73, $d7, $a81, $a82, $a83, $d8, $a91, $a92, $a93, $d9, $c1, $c2, $c3, $c4, $c5, $s1, $s2, $s3, $day, $day2, $day3) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'แบบตรวจประเมินคุณภาพงานระหว่างทาง'), 0, 1 ,'C');
        $this->Ln(3);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'QC: หมวดที่ 1 - งานโครงสร้าง (โครงสร้างผนัง)'), 0, 1 ,'C');
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
        $this->Ln(3);

        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 8);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะของงาน'), 'LT', 0, 'C');
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะการประเมิน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'ระดับคะแนน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LT', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'คะแนนที่ได้'), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', 'หมายเหตุ'), 'LTR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'โครงสร้างผนัง'), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'Q1'), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'Q2'), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'Q3'), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'Main Major Defect '), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ก่อนเทคอนกรีต'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'งานแบบหล่อ'), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ระยะคอนกรีตหุ้มผิวเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ระยะคอนกรีตหุ้มผิวเหล็ก 3- 5 ซม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2.ระยะคอนกรีตหุ้มผิวเหล็ก < 3 และ > 5 ซม.(1-5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7.5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a11), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a12), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a13), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '3 ระยะคอนกรีตหุ้มผิวเหล็ก < 3 และ > 5 ซม.(> 5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง Form Tie'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ตำแหน่ง Form Tie  เพียงพอต่อพื้นที่'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 ตำแหน่ง Form Tie  ไม่เพียงพอต่อพื้นที่'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a21), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a22), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a23), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่งลูกปูนหนุนเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ตำแหน่งลูกปูนหนุนเหล็ก เพียงพอต่อพื้นที่'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 ตำแหน่งลูกปูนหนุนเหล็ก ไม่เพียงพอต่อพื้นที่'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a31), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a32), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a33), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ตำแหน่งค้ำยันแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ตำแหน่งค้ำยันแบบ แข็งแรงและจำนวนเพียงพอ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 ตำแหน่งค้ำยันแบบ ไม่แข็งแรงและจำนวนไม่เพียงพอ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a41), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a42), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a43), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d4), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'รอยต่อแบบหล่อ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ระยะห่างรอยต่อแบบหล่อ 0-3 มม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 ระยะห่างรอยต่อแบบหล่อ >3 มม. (1-5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7.5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a51), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a52), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a53), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d5), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '3 ระยะห่างรอยต่อแบบหล่อ >3 มม. (> 5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ความสะอาด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 แบบสะอาดไม่มีเศษวัสดุทุกชนิด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 แบบหล่อไม่สะอาดมีเศษ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a61), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a62), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a63), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d6), 'LTR', 1);

        ///////////////////////////////

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'Minor Defect '), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'หลังรื้อแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'งานคอนกรีตหลังเท'), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ผิวคอนกรีต'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ผิวเรียบไม่มีโพรง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 ผิวไม่เรียบมีโพรงไม่เห็นเหล็ก 1-2 จุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7.5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a71), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a72), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a73), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d7), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '3 ผิวไม่เรียบมีโพรงไม่เห็นเหล็ก > 2 จุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '4 ผิวไม่เรียบมีโพรงจนเห็นเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ผิวบริเวณรอยต่อไม้แบบ (ผิวเปลือยไม่มีการฉาบ)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ผิวรอยต่อระนาบ ต่างกัน ไม่เกิน 3 มม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 ผิวรอยต่อระนาบ ต่างกัน > 3 มม. (5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7.5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a81), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a82), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a83), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d8), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '3 ผิวรอยต่อระนาบ ต่างกัน > 3 มม. (> 5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(15, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(80, 4, iconv('UTF-8', 'TIS-620', 'ผิวบริเวณรอยต่อไม้แบบ (ผิวมีการฉาบ)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '1 ผิวรอยต่อระนาบ ต่างกัน ไม่เกิน 1 ซม.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '2 ผิวรอยต่อระนาบ ต่างกัน > 1 ซม. (5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '7.5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '10'), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a91), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a92), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', $a93), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d9), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', '3 ผิวรอยต่อระนาบ ต่างกัน > 1 ซม. (> 5 จุด)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

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
        $this->Cell(5, 4, $this->Image($image1, 106, 235, 4), 'LT', 0, 'C' );
        $this->Cell(55, 4, iconv('UTF-8', 'TIS-620', 'งานผ่านเกณท์มาตรฐาน (10 คะแนน)'), 'T', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', 'รวม Q2'), 'LT', 0, 'C');
        $this->Cell(25, 4, $s2, 'LTR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', $c3), 'LT', 0);
        $this->Cell(5, 4, $this->Image($image2, 106, 239, 4), 'LT', 0, 'C' );
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
        $this->Cell(5, 4, $this->Image($image3, 106, 247, 4), 'LTB', 0, 'C' );
        $this->Cell(55, 4, iconv('UTF-8', 'TIS-620', 'ไม่ผ่านเกณ์มาตรฐานต้องแก้ไข(< 7.5 คะแนน)'), 'TB', 0);
        $this->Cell(10, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTBR', 1);
        $this->Ln(10);

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
    $row_point['ass91'],
    $row_point['ass92'],
    $row_point['ass93'],
    $row_point['detail9'],
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

<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFHouse1Search.php');

class PDF extends FPDF
{
    function BasicTable($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8, $h9, $h10, $h11, $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $name, $site) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'QC : หมวด 1 '), 0, 1 ,'C');
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
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ประวัติการตรวจสอบบ้าน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'ความแข็งแรงคอนกรีต (เสา คาน พื้น)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ความแข็งแรงคอนกรีต (เสา คาน พื้น)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผลทดสอบคอนกรีตจากผู้ผลิต (เสา คาน พื้น)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่มีเอกสารหรือไม่ครบทั้ง 3 รายการ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a2), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'โครงสร้างเสา'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ผิวคอนกรีต'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวเรียบไม่มีโพรง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวเรียบมีโพรงไม่เห็นเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวไม่เรียบมีโพรงจนเห็นเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ขนาดเสา'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดถูกต้องตามแบบไม่บวมออกข้าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดถูกต้องตามเบบบวมออกข้างน้อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a4), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d4), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ได้ขนาดเกินกว่า 2 cm.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ตำแหน่งแนวดิ่งของเสา'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ได้แนวดิ่งระหว่างชั้นบนและชั้นล่าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ได้ดิ่งไม่ได้แนวระหว่างชั้นบนและล่าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a5), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d5), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ได้ดิ่งและแนวระหว่างชั้นบนและล่าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'โครงสร้างคาน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ผิวคอนกรีต'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวเรียบไม่มีโพรง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวเรียบมีโพรงไม่เห็นเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a6), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d6), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวไม่เรียบมีโพรงจนเห็นเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ขนาดคาน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดถูกต้องตามแบบไม่บวมออกข้าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดถูกต้องตามเบบบวมออกข้างน้อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a7), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d7), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ได้ขนาดเกินกว่า 2 cm.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ตำแหน่งระดับแนวคาน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ทุกตัวเรียบเสมอกัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เรียบเสมอกันระดับแนวไม่ตรง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a8), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d8), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ได้แนวและไม่เสมอกัน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'โครงสร้างพื้น'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ผิวคอนกรีต'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวเรียบไม่มีโพรง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวเรียบมีโพรงไม่เห็นเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a9), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d9), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ผิวไม่เรียบมีโพรงจนเห็นเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ขนาดพื้น'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดถูกต้องตามแบบไม่บวมออกข้าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดถูกต้องตามเบบบวมออกข้างน้อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a10), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d10), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ได้ขนาดเกินกว่า 2 cm.'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ระดับและแนว Floor to floor'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและแนวถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและแนวไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a11), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d11), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับและแนวไม่ถูกต้อง'), 'LTB', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LTB', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRB', 1);

        // $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0);
        // $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LTB', 0, 'C');
        // $this->Cell(40, 4, iconv('UTF-8', 'TIS-620', '10'), 'LTB', 0, 'C');
        // $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $s), 'LTB', 0, 'C');
        // $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTRB', 1);
        // $this->Ln(10);

        // $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'ลงชื่อ...............................................................................................ผู้ทำการตรวจสอบ'), 0, 1 ,'C');
        // $this->Ln(5);
        // $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'ลงชื่อ...............................................................................................ผู้จัดการโครงการ'), 0, 1 ,'C');
    }
    function BasicTable2($h1, $h2, $h3, $h4, $h5, $h6, $h7, $h8, $h9, $h10, $h11, $h12, $h13, $h14, $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12, $d13, $d14) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะงาน'), 'LT', 0, 'C');
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะการประเมิน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'ระดับคะแนน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LT', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'คะแนนที่ได้'), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', 'หมายเหตุ'), 'LTR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานโครงหลังคา'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==เหล็กอะเส และเหล็กจั่นทัน /อะเสคอนกรีต'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะ,ขนาดและระดับถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะ,ขนาดและระดับไม่ถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==สีกันสนิม'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เข้มไม่เห็นสีเหล็ก และ รอยเชื่อม'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เข้มเห็นสีเหล็ก และรอยเชื่อมบ้าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a2), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่เข้ม เห็นสีเหล็ก และรอยเชื่อม'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานเชื่อม'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เชื่อมเต็มหน้าเหล็กไม่มีช่องอากาศ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เชื่อมเต็มหน้าเหล็กมีช่องอากาศ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เชือมไม่แข็งแรงมีโพรง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานต่อและทาบเหล็ก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'รอยเชื่อมตลอดแนวมีเหล็กประกับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'รอยเชื่อมไม่ตลอดแนวต้องแก้ไข'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a4), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d4), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานอุดปูนใต้เพลท'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เกร้าท์ปูนเต็มเพลท'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'เกร้าท์ปูนไม่เต็มเพลทมีโพรง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a5), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d5), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ใช้วัสดุผิดประเภท (ไม่ใช่ NON SHRINK)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานระบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การวาง Sleeve ห้องน้ำชั้นล่าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งไม่ตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '6'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a6), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d6), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การวาง Sleeve ห้องน้ำชั้นบน'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งไม่ตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a7), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d7), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การวางท่องานระบบกำจัดปลวก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระยะและตำแหน่งไม่ตรงตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a8), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d8), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานระบบท่อสุขาภิบาลในผนังก่อฮิฐเฉพาะห้องน้ำและห้องครัว'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การเดินท่องานระบบสุขาภิบาล'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ตำแหน่งและจำนวนถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a9), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d9), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานระบบท่อไฟฟ้าในผนังก่อฮิฐเฉพาะห้องน้ำ และห้องครัว'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การเดินท่อไฟฟ้าและบ็อกไฟฟ้า'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ตำแหน่งและจำนวนถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a10), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d10), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ระดับ,ตำแหน่งและจำนวนไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'งานผนังก่ออิฐ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานตีเส้น Line Offset บนพื้นโครงสร้าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวเส้นถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวเส้นไม่ถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a11), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d11), 'LR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==งานเอ็นคอนกรีตทับหลัง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a12), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d12), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดและตำแหน่งไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ได้มาตรฐานตามที่กำหนดในแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==แนวและระดับ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวและระดับถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวและระดับไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a13), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d13), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวและระดับไม่ถูกต้องหลายจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==แนวตาข่ายภายนอก'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวและระดับถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวและระดับไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '4'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '5'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a14), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d14), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวและระดับไม่ถูกต้องหลายจุด'), 'LTB', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LTB', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRB', 1);
    }
    function BasicTable3($h1, $h2, $h3, $d1, $d2, $d3, $total) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 10);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะงาน'), 'LT', 0, 'C');
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ลักษณะการประเมิน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'ระดับคะแนน'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', 'คะแนนเต็ม'), 'LT', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', 'คะแนนที่ได้'), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', 'หมายเหตุ'), 'LTR', 1, 'C');

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', 'การติดตั้งวงกบประตูหน้าต่าง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ขนาดและชนิดของวัสดุ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ขนาดของวัสดุถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'ไม่ได้ขนาดแต่วัสดุถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a1), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d1), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'วัสดุไม่ถูกต้องตามแบบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LR', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==การป้องกันวงกบ สภาพเนื้อไม้และผิวของวงกบ (มีมอด รอยตอกตะปู)'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'การป้องกันอย่างเหมาะสม'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'มีมอดและรอยตอกตระปูเล็กน้อย'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '1'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a2), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d2), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LTB', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'มีมอดและรอยตอกตระปูเป็นจำนวนมาก'), 'LTB', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '0'), 'LTB', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LB', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LRB', 1);

        $this->Cell(95, 4, iconv('UTF-8', 'TIS-620', '==ระดับและแนวดิ่งวงกบ'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวระดับและดิ่งถูกต้อง'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', ''), 'LTR', 1);

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวระดับและดิ่งไม่ถูกต้องบางจุด'), 'LT', 0);
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '2'), 'LT', 0, 'C');
        $this->Cell(20, 4, iconv('UTF-8', 'TIS-620', '3'), 'L', 0, 'C');
        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', $a3), 'L', 0, 'C');
        $this->Cell(25, 4, iconv('UTF-8', 'TIS-620', $d3), 'LR', 1, 'C');

        $this->Cell(30, 4, iconv('UTF-8', 'TIS-620', ''), 'LT', 0);
        $this->Cell(65, 4, iconv('UTF-8', 'TIS-620', 'แนวระดับและดิ่งไม่ถูกต้องหลายจุด'), 'LT', 0);
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
    $row_point['name'],
    $row_point['Site']);
$pdf->AddPage();
$pdf->BasicTable2(
    $row_point['house12'],
    $row_point['house13'],
    $row_point['house14'],
    $row_point['house15'],
    $row_point['house16'],
    $row_point['house17'],
    $row_point['house18'],
    $row_point['house19'],
    $row_point['house20'],
    $row_point['house21'],
    $row_point['house22'],
    $row_point['house23'],
    $row_point['house24'],
    $row_point['house25']
);
$pdf->AddPage();
$pdf->BasicTable3(
    $row_point['house26'],
    $row_point['house27'],
    $row_point['house28'],
    $row_point['total']
);
$pdf->Output();
?>

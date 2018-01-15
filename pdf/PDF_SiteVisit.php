<?php
require('../inc/connect.php');
require('../fpdf.php');
require('../func/PDFVisitSearch.php');

class PDF extends FPDF
{
    function Header() {
        // Logo
        $this->Image('../img/image004.png',10,6,30);
        $this->Cell(80);
        $this->Ln(20);
    }

    function BasicTable($data, $id, $site, $work, $detail, $charter, $check, $details, $category, $nature, $cause, $result) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 12);

        $this->SetFillColor(205,201,201);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'รายงานการตรวจสอบคุณภาพโครงการ'), 0, 1, 'C', true);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'รหัสเอกสาร :'), 0, 0);
        $this->Cell(145, 5, iconv('UTF-8', 'TIS-620', $id), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'โครงการ :'), 0, 0);
        $this->Cell(145, 5, iconv('UTF-8', 'TIS-620', $site), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'ผู้จัดการโครงการ :'), 0, 0);
        $this->Cell(145, 5, iconv('UTF-8', 'TIS-620', $work), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'ผู้ควบคุมงาน :'), 0, 0);
        $this->Cell(145, 5, iconv('UTF-8', 'TIS-620', $detail), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'รายละเอียดโครงการ :'), 0, 0);
        $this->Cell(145, 5, iconv('UTF-8', 'TIS-620', $charter), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'ผู้รับเหมา :'), 0, 0);
        $this->Cell(145, 5, iconv('UTF-8', 'TIS-620', $check), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'ผู้เข้าร่วมการตรวจสอบ :'), 0, 0);
        $this->Cell(145, 5, iconv('UTF-8', 'TIS-620', $details), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', ''), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', ''), 0, 1);
        $this->Ln(5);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'รายละเอียดความคืบหน้าการก่อสร้างโครงการโดยรวม %'), 0, 1, 'C', true);
        $this->Cell(30, 5, iconv('UTF-8', 'TIS-620', 'รายละเอียด :'), 0, 0);
        $this->Cell(160, 5, iconv('UTF-8', 'TIS-620', $category), 0, 1);
        $this->Ln(5);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', 'รายละเอียดปัญหาการตรวจสอบคุณภาพของโครงการ'), 0, 1, 'C', true);
        $this->Cell(30, 5, iconv('UTF-8', 'TIS-620', 'ประเภทงาน :'), 0, 0);
        $this->Cell(160, 5, iconv('UTF-8', 'TIS-620', $nature), 0, 1);
        $this->Cell(45, 5, iconv('UTF-8', 'TIS-620', 'ลักษณะที่พบ :'), 0, 1);
        $this->Cell(30, 5, iconv('UTF-8', 'TIS-620', 'สาเหตุ :'), 0, 0);
        $this->Cell(160, 5, iconv('UTF-8', 'TIS-620', $cause), 0, 1);
        $this->Ln(5);
        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', ' ผลการตรวจสอบคุณภาพงาน'), 0, 1, 'C', true);
        $this->Cell(60, 5, iconv('UTF-8', 'TIS-620', 'ผลการตรวจสอบคุณภาพงาน :'), 0, 0);
        $this->Cell(130, 5, iconv('UTF-8', 'TIS-620', $result), 0, 1);
        $this->Ln(5);
    }
    function BasicImg($img1, $img2, $img3, $img4, $detail1, $detail2, $detail3, $detail4) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 12);

        if($img1 == '' || $img1 == ' ') {
            $img1 = '../img/black.jpg';
        }
        if($img2 == '' || $img2 == ' ') {
            $img2 = '../img/black.jpg';
        }
        if($img3 == '' || $img3 == ' ') {
            $img3= '../img/black.jpg';
        }
        if($img4 == '' || $img4 == ' ') {
            $img4 = '../img/black.jpg';
        }

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', ' ภาพถ่ายปัญหาที่พบภายในโครงการโครงการ'), 0, 1, 'C', true);
        $this->Cell(95, 85, $this->Image($img1, 10, 35, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img2, 105, 35, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail1), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail2), 'LTBR', 1);
        $this->Cell(95, 85, $this->Image($img3, 10, 155, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img4, 105, 155, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail3), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail4), 'LTBR', 1);
    }
    function BasicImg2($img1, $img2, $img3, $img4, $detail1, $detail2, $detail3, $detail4) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 12);

        if($img1 == '' || $img1 == ' ') {
            $img1 = '../img/black.jpg';
        }
        if($img2 == '' || $img2 == ' ') {
            $img2 = '../img/black.jpg';
        }
        if($img3 == '' || $img3 == ' ') {
            $img3= '../img/black.jpg';
        }
        if($img4 == '' || $img4 == ' ') {
            $img4 = '../img/black.jpg';
        }

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', ' ภาพถ่ายปัญหาที่พบภายในโครงการโครงการ'), 0, 1, 'C', true);
        $this->Cell(95, 85, $this->Image($img1, 10, 35, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img2, 105, 35, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail1), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail2), 'LTBR', 1);
        $this->Cell(95, 85, $this->Image($img3, 10, 155, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img4, 105, 155, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail3), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail4), 'LTBR', 1);
    }
    function BasicImg3($img1, $img2, $img3, $img4, $detail1, $detail2, $detail3, $detail4) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 12);

        if($img1 == '' || $img1 == ' ') {
            $img1 = '../img/black.jpg';
        }
        if($img2 == '' || $img2 == ' ') {
            $img2 = '../img/black.jpg';
        }
        if($img3 == '' || $img3 == ' ') {
            $img3= '../img/black.jpg';
        }
        if($img4 == '' || $img4 == ' ') {
            $img4 = '../img/black.jpg';
        }

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', ' ภาพถ่ายปัญหาที่พบภายในโครงการโครงการ'), 0, 1, 'C', true);
        $this->Cell(95, 85, $this->Image($img1, 10, 35, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img2, 105, 35, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail1), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail2), 'LTBR', 1);
        $this->Cell(95, 85, $this->Image($img3, 10, 155, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img4, 105, 155, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail3), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail4), 'LTBR', 1);
    }
    function BasicImg4($img1, $img2, $img3, $img4, $detail1, $detail2, $detail3, $detail4) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 12);

        if($img1 == '' || $img1 == ' ') {
            $img1 = '../img/black.jpg';
        }
        if($img2 == '' || $img2 == ' ') {
            $img2 = '../img/black.jpg';
        }
        if($img3 == '' || $img3 == ' ') {
            $img3= '../img/black.jpg';
        }
        if($img4 == '' || $img4 == ' ') {
            $img4 = '../img/black.jpg';
        }

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', ' ภาพถ่ายปัญหาที่พบภายในโครงการโครงการ'), 0, 1, 'C', true);
        $this->Cell(95, 85, $this->Image($img1, 10, 35, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img2, 105, 35, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail1), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail2), 'LTBR', 1);
        $this->Cell(95, 85, $this->Image($img3, 10, 155, 95), 'LTB', 0, 'C');
        $this->Cell(95, 85, $this->Image($img4, 105, 155, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail3), 'LTB', 0);
        $this->Cell(95, 25, iconv('UTF-8', 'TIS-620', $detail4), 'LTBR', 1);
    }
    function BasicImg5($img1, $img2, $img3, $img4, $detail1, $detail2, $detail3, $detail4) {
        $this->AddFont('Tahoma','B','Tahoma.php');
        $this->SetFont('Tahoma','B', 12);

        if($img1 == '' || $img1 == ' ') {
            $img1 = '../img/black.jpg';
        }
        if($img2 == '' || $img2 == ' ') {
            $img2 = '../img/black.jpg';
        }
        if($img3 == '' || $img3 == ' ') {
            $img3= '../img/black.jpg';
        }
        if($img4 == '' || $img4 == ' ') {
            $img4 = '../img/black.jpg';
        }

        $this->Cell(190, 5, iconv('UTF-8', 'TIS-620', ' ภาพถ่ายปัญหาที่พบภายในโครงการโครงการ'), 0, 1, 'C', true);
        $this->Cell(95, 80, $this->Image($img1, 10, 40, 95), 'LTB', 0, 'C');
        $this->Cell(95, 80, $this->Image($img2, 105, 40, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 30, iconv('UTF-8', 'TIS-620', $detail1), 'LTB', 0);
        $this->Cell(95, 30, iconv('UTF-8', 'TIS-620', $detail2), 'LTBR', 1);
        $this->Cell(95, 80, $this->Image($img3, 10, 160, 95), 'LTB', 0, 'C');
        $this->Cell(95, 80, $this->Image($img4, 105, 160, 95), 'LTBR', 1, 'C');
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTB', 0);
        $this->Cell(95, 10, iconv('UTF-8', 'TIS-620', 'คำอธิบาย :'), 'LTBR', 1);
        $this->Cell(95, 30, iconv('UTF-8', 'TIS-620', $detail3), 'LTB', 0);
        $this->Cell(95, 30, iconv('UTF-8', 'TIS-620', $detail4), 'LTBR', 1);
    }
}

$pdf = new PDF( 'P' , 'mm' , 'A4');

$pdf->AddPage();
$title = 'Site Visite';
$pdf->SetTitle($title);
$pdf->BasicTable($data, $row_visit['sv_id'], $row_visit['sv_site'], $row_visit['sv_work'], $row_visit['sv_detail'], $row_visit['sv_charter'], $row_visit['sv_check'], $row_visit['sv_details'], $row_visit['sv_category'], $row_visit['sv_nature'], $row_visit['sv_cause'], $row_visit['sv_edit'], $row_visit['sv_result']);

$m1 = 0;$m2 = 0;$m3 = 0;$m4 = 0;$m5 = 0;$m6 = 0;$m7 = 0;$m8 = 0;$m9 = 0;$m10 = 0;
$m11 = 0;$m12 = 0;$m13 = 0;$m14 = 0;$m15 = 0;$m16 = 0;$m17 = 0;$m18 = 0;$m19 = 0;$m20 = 0;
if($row_visit['img1'] != '' && $row_visit['img1'] != ' ') {
    $m1 =1;
    $img1 = '../img/'.$row_visit['img1'];
}
if($row_visit['img2'] != '' && $row_visit['img2'] != ' ') {
    $m2 =1;
    $img2 = '../img/'.$row_visit['img2'];
}
if($row_visit['img3'] != '' && $row_visit['img3'] != ' ') {
    $m3 =1;
    $img3 = '../img/'.$row_visit['img3'];
}
if($row_visit['img4'] != '' && $row_visit['img4'] != ' ') {
    $m4 =1;
    $img4 = '../img/'.$row_visit['img4'];
}
if($row_visit['img5'] != '' && $row_visit['img5'] != ' ') {
    $m5 =1;
    $img5 = '../img/'.$row_visit['img5'];
}
if($row_visit['img6'] != '' && $row_visit['img6'] != ' ') {
    $m6 =1;
    $img6 = '../img/'.$row_visit['img6'];
}
if($row_visit['img7'] != '' && $row_visit['img7'] != ' ') {
    $m7 =1;
    $img7 = '../img/'.$row_visit['img7'];
}
if($row_visit['img8'] != '' && $row_visit['img8'] != ' ') {
    $m8 =1;
    $img8 = '../img/'.$row_visit['img8'];
}
if($row_visit['img9'] != '' && $row_visit['img9'] != ' ') {
    $m9 =1;
    $img9 = '../img/'.$row_visit['img9'];
}
if($row_visit['img10'] != '' && $row_visit['img10'] != ' ') {
    $m10 = 1;
    $img10 = '../img/'.$row_visit['img10'];
}
if($row_visit['img11'] != '' && $row_visit['img11'] != ' ') {
    $m11 = 1;
    $img11 = '../img/'.$row_visit['img11'];
}
if($row_visit['img12'] != '' && $row_visit['img12'] != ' ') {
    $m12 = 1;
    $img12 = '../img/'.$row_visit['img12'];
}
if($row_visit['img13'] != '' && $row_visit['img13'] != ' ') {
    $m13 = 1;
    $img13 = '../img/'.$row_visit['img13'];
}
if($row_visit['img14'] != '' && $row_visit['img14'] != ' ') {
    $m14 = 1;
    $img14 = '../img/'.$row_visit['img14'];
}
if($row_visit['img15'] != '' && $row_visit['img15'] != ' ') {
    $m15 = 1;
    $img15 = '../img/'.$row_visit['img15'];
}
if($row_visit['img16'] != '' && $row_visit['img16'] != ' ') {
    $m16 = 1;
    $img16 = '../img/'.$row_visit['img16'];
}
if($row_visit['img17'] != '' && $row_visit['img17'] != ' ') {
    $m17 = 1;
    $img17 = '../img/'.$row_visit['img17'];
}
if($row_visit['img18'] != '' && $row_visit['img18'] != ' ') {
    $m18 = 1;
    $img18 = '../img/'.$row_visit['img18'];
}
if($row_visit['img19'] != '' && $row_visit['img19'] != ' ') {
    $m19 = 1;
    $img19 = '../img/'.$row_visit['img19'];
}
if($row_visit['img20'] != '' && $row_visit['img20'] != ' ') {
    $m20 = 1;
    $img20 = '../img/'.$row_visit['img20'];
}

$sm = ($m1 + $m2 + $m3 + $m4 + $m5 + $m6 + $m7 + $m8 + $m9 + $m10 + $m11 + $m12 + $m13 + $m14 + $m15 + $m16 + $m17 + $m18 + $m19 + $m20);

if(($sm >= 1) && ($sm <=4)) {
    $pdf->AddPage();
    $pdf->BasicImg($img1, $img2, $img3, $img4, $row_visit['detail1'], $row_visit['detail2'], $row_visit['detail3'], $row_visit['detail4']);
}
if(($sm >= 5) && ($sm <=8)) {
    $pdf->AddPage();
    $pdf->BasicImg($img1, $img2, $img3, $img4, $row_visit['detail1'], $row_visit['detail2'], $row_visit['detail3'], $row_visit['detail4']);
    $pdf->AddPage();
    $pdf->BasicImg2($img5, $img6, $img7, $img8, $row_visit['detail5'], $row_visit['detail6'], $row_visit['detail7'], $row_visit['detail8']);
}
if(($sm >= 9) && ($sm <=12)) {
    $pdf->AddPage();
    $pdf->BasicImg($img1, $img2, $img3, $img4, $row_visit['detail1'], $row_visit['detail2'], $row_visit['detail3'], $row_visit['detail4']);
    $pdf->AddPage();
    $pdf->BasicImg2($img5, $img6, $img7, $img8, $row_visit['detail5'], $row_visit['detail6'], $row_visit['detail7'], $row_visit['detail8']);
    $pdf->AddPage();
    $pdf->BasicImg3($img9, $img10, $img11, $img12, $row_visit['detail9'], $row_visit['detail10'], $row_visit['detail11'], $row_visit['detail12']);
}
if(($sm >= 13) && ($sm <=16)) {
    $pdf->AddPage();
    $pdf->BasicImg($img1, $img2, $img3, $img4, $row_visit['detail1'], $row_visit['detail2'], $row_visit['detail3'], $row_visit['detail4']);
    $pdf->AddPage();
    $pdf->BasicImg2($img5, $img6, $img7, $img8, $row_visit['detail5'], $row_visit['detail6'], $row_visit['detail7'], $row_visit['detail8']);
    $pdf->AddPage();
    $pdf->BasicImg3($img9, $img10, $img11, $img12, $row_visit['detail9'], $row_visit['detail10'], $row_visit['detail11'], $row_visit['detail12']);
    $pdf->AddPage();
    $pdf->BasicImg4($img13, $img14, $img15, $img16, $row_visit['detail13'], $row_visit['detail14'], $row_visit['detail15'], $row_visit['detail16']);
}
if(($sm >= 17) && ($sm <=20)) {
    $pdf->AddPage();
    $pdf->BasicImg($img1, $img2, $img3, $img4, $row_visit['detail1'], $row_visit['detail2'], $row_visit['detail3'], $row_visit['detail4']);
    $pdf->AddPage();
    $pdf->BasicImg2($img5, $img6, $img7, $img8, $row_visit['detail5'], $row_visit['detail6'], $row_visit['detail7'], $row_visit['detail8']);
    $pdf->AddPage();
    $pdf->BasicImg3($img9, $img10, $img11, $img12, $row_visit['detail9'], $row_visit['detail10'], $row_visit['detail11'], $row_visit['detail12']);
    $pdf->AddPage();
    $pdf->BasicImg4($img13, $img14, $img15, $img16, $row_visit['detail13'], $row_visit['detail14'], $row_visit['detail15'], $row_visit['detail16']);
    $pdf->AddPage();
    $pdf->BasicImg5($img17, $img18, $img19, $img20, $row_visit['detail17'], $row_visit['detail18'], $row_visit['detail19'], $row_visit['detail20']);
}

$pdf->Output();
?>

<?php

require_once __DIR__ . '/vendor/autoload.php';

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf([
    'margin_left' => 20,
    'margin_right' => 20,
    'margin_top' => 25,
    'margin_bottom' => 10,
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' => 'THSarabunNew Bold.ttf',
            'BI' => 'THSarabunNew BoldItalic.ttf',
        ]
    ],
    'default_font' => 'sarabun'
]);


$P_title = $_POST['P_title'];
$EP_title = $_POST['EP_title'];
$F_Name = $_POST['F_Name'];
$S_Name = $_POST['S_Name'];
$StdentId  = $_POST['StdentID'];
$Major = $_POST['Major'];
$AName = $_POST['AName'];

$data = '';
$data .= '
    <style>
        h2{
            text-align: center;
            font-size: 25px;
        }
        p{
            text-align: center;
            font-size: 25px;
        }
    </style>';

$data .= '<h2>  สาขาวิชาเทคโนโลยีสารสนเทศ<br>
                    คณะวิทยาศาสตร์และเทคโนโลยี &nbsp; มหาวิทยาลัยราชภัฏราชนครินทร์<br>
                    แบบเสนอหัวข้อโครงงานนักศึกษา
            </h2>';

$data .= '<hr><br><br><br>';

$data .= '<h2>ชื่อโครงงานภาษาไทย &nbsp;'.$P_title.'<br>
            ชื่อโครงงานภาษาอังกฤษ'.$EP_title.'</h2><br>';

$data .= '<p>ชื่อนักศึกษา &nbsp;'.$F_Name.'&nbsp;&nbsp;'.$S_Name.'<br>
            รหัสนักศึกษา &nbsp;'.$StdentId.'<br>
            หลักสูตร &nbsp;'.$Major.'</p><br><br>';

$data .= '<p><b>อาจารย์ที่ปรึกษา &nbsp;'.$AName.'</b><br>
                ชื่ออาจารย์ <br>
                (...........................................................)</p><br><br>';

$data .= '<p><b>เสนอโดย &nbsp;'.$F_Name.'&nbsp;&nbsp;'.$S_Name.'</b><br>
                ชื่อนักศึกษา<br>
                (..........................................................)<p><br>';


$mpdf->WriteHTML($data);
$output = 'form.pdf';
$mpdf->Output($output, 'I');


?>
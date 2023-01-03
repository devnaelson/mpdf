
<?php 

error_reporting(-1);
ini_set('display_errors', 'On');

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1 style="text-align: center; color: red;">Hello world!</h1>');
$mpdf->Output();
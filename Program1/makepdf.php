<?php 
ob_start();
require_once __DIR__.'/vendor/autoload.php';
$name = $_POST["name"];
$surname = $_POST["surname"];
$phone = $_POST["phone"];
$id = $_POST["id"];
$dwork = $_POST["dwork"];
$dsick = $_POST["dsick"];
$dleave = $_POST["dleave"];
$pay_per_hour = $_POST["pay_per_hour"];
$income = $dwork * 8 * $pay_per_hour;
$coida = $income / 100;
$uif = $income / 100;
$tax = $income * 3.5 / 100;
$net = $income - $uif - $coida - $tax;
$mpdf = new \Mpdf\Mpdf();
$data = <<<DELIMETER
<h1>Employee Pay Slip</h1>
<h3 style="display:inline;">Name: {$name} {$surname}</h3>
<h3 style="float:right;">ID = {$id}                 </h3>
<p>Leaves: {$dleave}</p>
<p>Sick Leaves: {$dsick}</p>
<p>Days Worked: {$dwork}</p>
<p>Pay Per Hour: <strong>{$pay_per_hour}</strong></p>
<p>Income: <strong>$ {$income}</strong></p>
<p>Coida: <strong>1% = $ {$coida}</strong></p>
<p>UIF: <strong>1% = $ {$uif}</strong></p>
<p>Tax: <strong>3.5% = $ {$tax}</strong></p>
<h4>Total: {$net}</h4>
DELIMETER;
$mpdf->WriteHTML($data);
ob_end_clean();
$mpdf->Output();
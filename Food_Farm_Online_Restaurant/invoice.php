<?php
  session_start();
  require('C:/xampp/htdocs/fpdf.php');

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(165,42,42);

$pdf->Cell(130	,5,'FOOD FARM',0,0);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(59	,5,'INVOICE',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'India',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,'22-01-2020',0,1);

$pdf->Cell(130	,5,'Email: foodfarm24@gmail.com',0,0);
$pdf->Cell(25	,5,'Invoice #',0,0);
$pdf->Cell(34	,5,rand(10,100000),0,1);

$pdf->Cell(130	,5,'Phone: +919435112890',0,0);
$pdf->Cell(25	,5,'Customer ID',0,0);
$pdf->Cell(34	,5,rand(1,1000),0,1);

$pdf->Cell(189	,10,'',0,1);

$pdf->Cell(100	,5,'Bill to',0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$_SESSION['f_name']." ".$_SESSION['l_name'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5, $_SESSION['email'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$_POST['address'],0,1);

$pdf->Cell(189	,10,'',0,1);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(80 ,6,'Description',1,0,'C');
$pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(30 ,6,'Rate',1,0,'C');
$pdf->Cell(25 ,6,'Total',1,1,'C');

$pdf->SetFont('Arial','',10);
    for ($i = 0; $i < $_SESSION['cnt'] ; $i++) {
		$pdf->Cell(10 ,6,$i+1,1,0);
		$pdf->Cell(80 ,6,$_SESSION['dish'.$i],1,0);
		$pdf->Cell(23 ,6,$_SESSION['qty'.$i],1,0,'R');
		$pdf->Cell(30 ,6,$_SESSION['prc'.$i],1,0,'R');
		$pdf->Cell(25 ,6,$_SESSION['qty'.$i]*$_SESSION['prc'.$i],1,1,'R');
	}
	
$pdf->Cell(94 ,6,'',0,0);
$pdf->Cell(49 ,6,'Reusable Utensil Used (Free)',0,0);
$pdf->Cell(35 ,7,$_POST['utensils'],1,1,'R'); 	

 $pdf->Cell(113.01 ,6,'',0,0);
 $pdf->Cell(30 ,6,'Sub Total',0,0);
 $pdf->Cell(35 ,6,$_SESSION['sub_amt'],1,1,'R');        
	
 $pdf->Cell(113.01 ,6,'',0,0);
 $pdf->Cell(30 ,6,'CGST *just 2%',0,0);
 $pdf->Cell(35 ,6,$_SESSION['sub_amt']*0.02,1,1,'R');    

 $pdf->Cell(113.01 ,6,'',0,0);
 $pdf->Cell(30 ,6,'Discount',0,0);
 $pdf->Cell(35 ,6,'- '.($_SESSION['amt']*$_SESSION['dis'])/100,1,1,'R'); 
	
 $pdf->Cell(113.01 ,6,'',0,0);
 $pdf->Cell(30 ,6,'Net Amount',0,0);
 $pdf->Cell(35 ,6,$_SESSION["amt"]*(1-0.01*($_SESSION['dis'])),1,1,'R');

 $pdf->Cell(113.01 ,6,'',0,0);
 $pdf->Cell(30 ,6,'Payment status',0,0);
 $pdf->Cell(35 ,6,"Success",1,1,'R');

$pdf->Cell(30 ,6,'',0,0);
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(30 ,85,'We hope you Enjoyed our Service!!!',0,0);
$pdf->Cell(30 ,105,'Thank You!!!',0,0);


$pdf->Output();

?>

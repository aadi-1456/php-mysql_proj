<?php
include ('configstud.php');
require('fpdf.php');

$b2=1;
$sql = "SELECT id, usn, name, surname, dbms, mp, ss FROM students where batch=$b2";
$result = mysqli_query($mysql_db,$sql);

$pdf = new FPDF( orientation: 'p', unit: 'mm', size: 'a4');
$pdf->SetFont('Arial','B',14);
$pdf->AddPage ();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,15,"No");
$pdf->Cell(30,15,"USN");
$pdf->Cell(25,15,"Name");
$pdf->Cell(25,15,"Surname");
$pdf->Cell(25,15,"DBMS");
$pdf->Cell(25,15,"MP");
$pdf->Cell(25,15,"SS");
$pdf->Ln();
$pdf->Cell(450,3,"--------------------------------------------------------------------------------------------------------------------------------------------------------");
$No = 0;
$pdf->Ln();
        while($rows=mysqli_fetch_array($result))
        {
            
            $usn=$rows[1];
            $name=$rows[2];
            $surname=$rows[3];
            $dbms=$rows[4];
            $mp=$rows[5];
            $ss=$rows[6];
            $pdf->Cell(15,15,"{$No}");
            $pdf->Cell(30,15,"{$usn}");
            $pdf->Cell(25,15,"{$name}");
            $pdf->Cell(25,15,"{$surname}");
            $pdf->Cell(25,15,"{$dbms}"); 
            $pdf->Cell(25,15,"{$mp}"); 
            $pdf->Cell(25,15,"{$ss}"); 
            $pdf->Ln();   
            $No = $No + 1;
        }

$pdf->Output();


$pdf->Output();

?>
<?php
session_start();
require"fpdf.php";
 $con=mysqli_connect("localhost",'root','','gestion_prophar');
/*include("connexionProPhar.php");
session_start();
*
 * 
 */
class myPDF extends FPDF{
	
	function header(){
		$this->Image('téléchargement1.png',-20,-1);
		$this->SetFont('Arial','B',20);
		$this->Cell(400,30,'Liste des Medicaments disponible',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		$this->Cell(400,10,date("Y-m-d"),0,0,'C');
		$this->Ln(30);
	}

	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(400,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}
	function headerTable(){
		$this->SetFont('Arial','B',12);
		$this->Cell(30,10,'Code_Lot',1,0,'C');
		
		$this->Cell(50,10,'DCI',1,0,'C');
		$this->Cell(50,10,'nom_Commercial',1,0,'C');
		$this->Cell(20,10,'dosage',1,0,'C');
		$this->Cell(40,10,'nom_form',1,0,'C');
		$this->Cell(90,10,'nom_famille',1,0,'C');
		$this->Cell(40,10,'Date_Fab',1,0,'C');
        $this->Cell(40,10,'Date_Pre',1,0,'C');
        $this->Cell(20,10,'Unite',1,0,'C');
        $this->Cell(20,10,'Qte',1,0,'C');


		$this->Ln();
	}
	function viewTable($con){
		$this->SetFont('Times','',12);
		$r2="select  medicament.code_lot,id_medicament,num_pharm,DCI,nom_C,dosage,nom_form,nom_famille,Date_Fab,Date_Pre,Unite_de_Mesure,Qte_de_produit from medicament  join lot where medicament.code_lot=lot.code_lot and CURDATE()>Date_Pre  and num_pharm='".$_SESSION['num_pharm']."'";
         $req2=mysqli_query($con,$r2);
        while($tab=mysqli_fetch_array($req2)){
            $this->Cell(30,10,$tab['code_lot'],1,0,'C');
			$this->Cell(50,10,$tab['DCI'],1,0,'C');
			$this->Cell(50,10,$tab['nom_C'],1,0,'C');
			$this->Cell(20,10,$tab['dosage'],1,0,'C');
			$this->Cell(40,10,$tab['nom_form'] ,1,0,'C');
			$this->Cell(90,10,$tab['nom_famille'],1,0,'C');
			$this->Cell(40,10,$tab['Date_Fab'],1,0,'C');
			$this->Cell(40,10,$tab['Date_Pre'],1,0,'C');
			$this->Cell(20,10,$tab['Unite_de_Mesure'],1,0,'C');
			$this->Cell(20,10,$tab['Qte_de_produit'],1,0,'C');
			$this->Ln();

		}
	}
}
$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A3',0);
$pdf->headerTable();
$pdf->viewTable($con);
$pdf->Output();
?>
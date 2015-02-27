<?php
require('fpdf.php');

class Pdf extends FPDF
{
// Cabecera de página
    function Header()
    {

        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(60,10,'Lista de paises',1,0,'C');
        // Salto de línea
        $this->Ln(20);
        $x=10;
        $y=30;
        $this->SetXY($x+5,$y);
        $this->Cell(20,10,'Numero',0,1);
        $this->SetXY($x+50,$y);
        $this->Cell(20,10,'Nombre',0,1);
        $this->SetXY($x+120,$y);
        $this->Cell(20,10,'Continente',0,1);



    }

// Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }



    function muestraPais($datos,$contador)
    {
        $y=($contador*10)+40;
        $this->SetXY(20,$y);
        $this->Cell(20,10,$datos->id,0,1);
        $this->SetXY(60,$y);
        $this->Cell(70,10,utf8_decode($datos->nombre),0,1);
        $this->SetXY(135,$y);
        $this->Cell(20,10,utf8_decode($datos->continente),0,1);

    }

}


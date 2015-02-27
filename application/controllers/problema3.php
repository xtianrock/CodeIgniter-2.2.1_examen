<?php
/**
 * Created by PhpStorm.
 * User: 2DAWT
 * Date: 27/02/2015
 * Time: 15:34
 */

class Problema3 extends CI_Controller{


    public function index()
    {
        $this->load->Model('modelo_examen');
        $paises=$this->modelo_examen->getPaises();

       // print_r($paises);
        $this->load->library('pdf');
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $pdf->SetLineWidth(0.5);
        $pdf->SetFillColor(192);

        $contador=0;
        foreach ($paises as $pais)
        {
            $pdf->muestraPais($pais,$contador);
            $contador++;
            if($contador==22)
            {
                $contador=0;
                $pdf->AddPage();
            }

        }






        $pdf->Output();


    }

} 
<?php
namespace IntelGUA\Library;

use Codedge\Fpdf\Fpdf\Fpdf;
use Carbon\Carbon;
use IntelGUA\Models\Ticket;

class Boleta extends Fpdf
{

    function row($espejo = 0, $nivel = 0, Ticket $ticket)
    {
        $this->Rect((5 + $espejo), 5 + $nivel, 65, 40); //Marco exterior
        //$this->Rect((37 + $espejo), 12 + $nivel, 25, 25); //Marco logo
        //$this->setXY((5 + $espejo), 5.5 + $nivel);
        //$this->Cell((37 + $espejo), 12 + $nivel, $this->Image('img/whatsapp-logo.jpg', (37 + $espejo), 12 + $nivel), 0, 0, 'L', false);
        $this->Image('img/para_logo_1.jpg', (29 + $espejo), 12 + $nivel, 40, 25);


        //Numero de boleta y su recuadro
        $this->SetFont('Times', '', 10); //Arial, negrita, 12 puntos
        $this->SetTextColor(37, 36, 64); //azul marino
        $this->setXY((5 + $espejo), 5.5 + $nivel);
        $this->Cell(5, 5, 'No.', 0, 0, 'L');

        $this->setXY((8 + $espejo), 5.5 + $nivel);
        $this->SetTextColor(176, 54, 72);
        $this->Cell(15, 5, str_pad($ticket->id, 4, "0", STR_PAD_LEFT), 0, 0, 'R');

        $this->SetFont('Arial', 'B', 12); //Arial, negrita, 12 puntos
        $this->SetTextColor(254, 000, 000);
        //TS y su recuadro
        $this->setXY((10 + $espejo), 14 + $nivel);
        $this->Cell(20, 5, 'Bono', 0, 0, 'C');
        //TM y su recuadro
        $this->setXY((10 + $espejo), 19 + $nivel);
        $this->Cell(20, 5, 'entre', 0, 0, 'C');
        //TI y su recuadro
        $this->setXY((10 + $espejo), 25 + $nivel);
        $this->Cell(20, 5, 'amigos', 0, 0, 'C');

        $this->SetFont('Arial', 'B', 10); //Arial, negrita, 12 puntos
        $this->SetTextColor(79, 206, 93);
        //Teléfono y su recuadro

        $this->setXY((10 + $espejo), 33 + $nivel);
        $this->Image('img/whatsapp-logo.jpg', (6 + $espejo), 32.5 + $nivel, 5, 5);
        $this->SetFont('Arial', 'B', 12); //Arial, negrita, 12 puntos
        $this->Cell(22.5, 5, $ticket->phone, 0, 0, 'C');

        //Fecha y su recuadro
        $this->SetFont('Arial', 'B', 12); //Arial, negrita, 12 puntos
        $this->SetTextColor(247, 94, 37);
        $this->setXY((6 + $espejo), 39 + $nivel);
        $this->Cell(20, 5, $ticket->date);


        //Lista de números y sus recuadros
        $this->SetTextColor(0, 14, 56);
        $this->setXY((33 + $espejo), 10 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number1, 4, "0", STR_PAD_LEFT));

        $this->setXY((52 + $espejo), 10 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number2, 4, "0", STR_PAD_LEFT));

        $this->setXY((33 + $espejo), 18 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number3, 4, "0", STR_PAD_LEFT));

        $this->setXY((52 + $espejo), 18 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number4, 4, "0", STR_PAD_LEFT));

        $this->setXY((33 + $espejo), 26 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number5, 4, "0", STR_PAD_LEFT));

        $this->setXY((52 + $espejo), 26 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number6, 4, "0", STR_PAD_LEFT));

        $this->setXY((33 + $espejo), 33 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number7, 4, "0", STR_PAD_LEFT));

        $this->setXY((52 + $espejo), 33 + $nivel);
        $this->Cell(10, 5, str_pad($ticket->number8, 4, "0", STR_PAD_LEFT));

        //Precio y su recuadro
        $this->SetTextColor(229, 26, 76);
        $this->setXY((40 + $espejo), 39 + $nivel);
        $this->Cell(10, 5, 'Valor Q. ' . $ticket->cost);

        //Imagen de expo
        //$this->Image($ticket->logo, (18 + $espejo), 65 + $nivel, 250, 205);
        //$this->ImagePngWithAlpha($ticket->logo, 55, 100, 100);
        //$this->Image($ticket->logo, (37 + $espejo), 12 + $nivel, 25, 25, 'JPG', 'http://www.desarrolloweb.com');

    }
}//fin clase PDF

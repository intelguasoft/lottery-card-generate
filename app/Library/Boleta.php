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
        $this->Rect((37 + $espejo), 12 + $nivel, 25, 25); //Marco logo

        //Numero de boleta y su recuadro
        $this->setXY((6 + $espejo), 7 + $nivel);
        $this->Cell(5, 5, 'No.', 0, 0, 'L');

        $this->setXY((10 + $espejo), 7 + $nivel);
        // $this->SetTextColor(20, 40, 210);
        $this->Cell(15, 5, str_pad($ticket->id, 4, "0", STR_PAD_LEFT), 0, 0, 'R');

        //TS y su recuadro
        $this->setXY((10 + $espejo), 14 + $nivel);
        $this->Cell(20, 5, 'Bono', 0, 0, 'C');
        //TM y su recuadro
        $this->setXY((10 + $espejo), 19 + $nivel);
        $this->Cell(20, 5, 'entre', 0, 0, 'C');
        //TI y su recuadro
        $this->setXY((10 + $espejo), 25 + $nivel);
        $this->Cell(20, 5, 'amigos', 0, 0, 'C');

        //Teléfono y su recuadro
        $this->setXY((10 + $espejo), 33 + $nivel);
        $this->Cell(20, 5, $ticket->phone, 0, 0, 'C');

        //Fecha y su recuadro
        $this->setXY((6 + $espejo), 39 + $nivel);
        $this->Cell(20, 5, $ticket->date);


        //Lista de números y sus recuadros
        $this->setXY((33 + $espejo), 10 + $nivel);
        $this->Cell(10, 5, $ticket->number1);

        $this->setXY((52 + $espejo), 10 + $nivel);
        $this->Cell(10, 5, $ticket->number2);

        $this->setXY((33 + $espejo), 18 + $nivel);
        $this->Cell(10, 5, $ticket->number3);

        $this->setXY((52 + $espejo), 18 + $nivel);
        $this->Cell(10, 5, $ticket->number4);

        $this->setXY((33 + $espejo), 26 + $nivel);
        $this->Cell(10, 5, $ticket->number5);

        $this->setXY((52 + $espejo), 26 + $nivel);
        $this->Cell(10, 5, $ticket->number6);

        $this->setXY((33 + $espejo), 33 + $nivel);
        $this->Cell(10, 5, $ticket->number7);

        $this->setXY((52 + $espejo), 33 + $nivel);
        $this->Cell(10, 5, $ticket->number8);

        //Precio y su recuadro
        $this->setXY((40 + $espejo), 39 + $nivel);
        $this->Cell(10, 5, 'Valor Q. ' . $ticket->cost);

        //Imagen de expo
        // Load an image into a variable
        //$logo = file_get_contents('{{ public_path("img/logo_round_2.png") }}');
        // Output it
        //$this->MemImage($logo, 25, 25);
        $url = asset('img/logo_round_2.png');
        //$this->Image($url, (18 + $espejo), 65 + $nivel, 250, 205);
        $this->Image($ticket->logo, (37 + $espejo), 12 + $nivel, 25, 25, 'JPG', 'http://www.desarrolloweb.com');
        //dump($ticket);
    }
}//fin clase PDF

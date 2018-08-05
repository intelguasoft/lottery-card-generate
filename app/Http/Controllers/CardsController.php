<?php

namespace IntelGUA\Http\Controllers;

use Illuminate\Http\Request;
use IntelGUA\Library\Generate;
use IntelGUA\Library\Rectangle;
use IntelGUA\Library\Boleta;
use Carbon\Carbon;
use IntelGUA\Models\Ticket;

class CardsController extends Controller
{
    public function index()
    {
        return view('ballots.index');
    }

    public function getBallots()
    {
        //ini_set('memory_limit', '1024M');

        $gen = new Generate();
        $ballots = $gen->getNumbersGenerated(16000, true, 5);
        $collectionBallots = array_chunk($ballots, 8);

        return view('ballots.ticket')->with('collectionBallots', $collectionBallots);

        //$pdf = PDF::loadView('ballots.ticket', $collectionBallots);
        //$pdf = PDF::loadView('ballots.ticket', ['collectionBallots' => $collectionBallots]);
        //return $pdf->output('ballots.pdf');

    }

    public function rectangulos()
    {
        $pdf = new Rectangle();
        $pdf->AddPage();
        $pdf->SetLineWidth(0.3);
        $pdf->SetDrawColor(155, 15, 15);
        //$pdf->SetFillColor(253, 177, 177);
        $pdf->SetFont('Arial', '', 12);
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $pdf->RoundedRect(5, 5, 60, 30, 1.5, 'DF');
            }
// Centered text in a framed 20*10 mm cell and line break
            $pdf->Cell(20, 5, '', 1, 1, 'C');
            $pdf->Cell(60, 30, "Line $i", 1, 1, 'C');
        }
        $pdf->Output();

    }

    public function labels()
    {
        /*------------------------------------------------
        To create the object, 2 possibilities:
        either pass a custom format via an array
        or use a built-in AVERY name
        ------------------------------------------------*/

        // Example of custom format
        // $pdf = new PDF_Label(array('paper-size'=>'A4', 'metric'=>'mm', 'marginLeft'=>1, 'marginTop'=>1, 'NX'=>2, 'NY'=>7, 'SpaceX'=>0, 'SpaceY'=>0, 'width'=>99, 'height'=>38, 'font-size'=>14));

        // Standard format
        $pdf = new Label('L7163');

        $pdf->AddPage();

        // Print labels
        for ($i = 1; $i <= 20; $i++) {
            $text = sprintf("%s\n%s\n%s\n%s %s, %s", "Laurent $i", 'Immeuble Toto', 'av. Fragonard', '06000', 'NICE', 'FRANCE');
            $pdf->Add_Label($text);
        }

        $pdf->Output();
    }

    public function boletas()
    {
        $gen = new Generate();
        $pdf = new Boleta();
        $fecha = new Carbon();
        $ticket = new Ticket();

        $ballots = $gen->getNumbersGenerated(16000, true, 5);
        $collectionBallots = array_chunk($ballots, 8);

        $pdf->SetAutoPageBreak(false, 0.5);
        $pdf->AddPage('P', 'Letter'); //Vertical, Carta
        $pdf->SetFont('Times', 'B', 12); //Arial, negrita, 12 puntos
        $pdf->SetTextColor(37, 36, 64);

        $ticket->cost = '10.00';
        $ticket->date = $fecha->format('d/m/Y');
        $ticket->name = 'Lotería JE';
        $ticket->phone = '5555-5555';
        $ticket->logo = asset('img/logo_round_2.png');

        //Nos ayuda a saber qué posición está haciendo
        //Posición 0 || 1 || 2 || 3
        $posicion = 0;

        for ($i = 0; $i < count($collectionBallots); $i++) {
            foreach ($collectionBallots as $key => $group) {
                $ticket->id = ($key + 1);
                $ticket->number1 = $group[0];
                $ticket->number2 = $group[1];
                $ticket->number3 = $group[2];
                $ticket->number4 = $group[3];
                $ticket->number5 = $group[4];
                $ticket->number6 = $group[5];
                $ticket->number7 = $group[6];
                $ticket->number8 = $group[7];


                switch ($posicion) {
                    case 0:
                        $pdf->row(0, 0, $ticket);

                //Imagen del usuario
                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 19, 19, 23, 28, 'PNG'); */

                        $posicion++; //Aumenta posición
                        break;

                    case 1:
                        $pdf->row(70, 0, $ticket);

                        $pdf->setXY(50, 28);
                   /*  $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 19, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 2:
                        $pdf->row(140, 0, $ticket);

                        $pdf->setXY(100, 28);
                   /*  $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 19, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 3:
                        $pdf->row(0, 45, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 19, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 4:
                        $pdf->row(70, 45, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 5:
                        $pdf->row(140, 45, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 6:
                        $pdf->row(0, 90, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 19, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 7:
                        $pdf->row(70, 90, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 8:
                        $pdf->row(140, 90, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 9:
                        $pdf->row(0, 135, $ticket);
                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 19, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 10:
                        $pdf->row(70, 135, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 11:
                        $pdf->row(140, 135, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 12:
                        $pdf->row(0, 180, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 13:
                        $pdf->row(70, 180, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 14:
                        $pdf->row(140, 180, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 15:
                        $pdf->row(0, 225, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 16:
                        $pdf->row(70, 225, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                        $posicion++;
                        break;

                    case 17:
                    //Setear la posición a cero de nuevo
                        $posicion = 0;

                        $pdf->row(140, 225, $ticket);

                    /* $pdf->Image('{{ asset("img/logo_round_2.png") }}', 119, 156, 23, 28, 'PNG'); */

                    //Esta condición asegura que se agregue una hoja necesaria
                    //para seguir con los registros
                        if ($i != (5 - 1)) {
                            $pdf->AddPage('P', 'Letter');
                        }

                        break;
                }
            }
            $pdf->Output(); //Salida al navegador del pdf
        }

    }
}
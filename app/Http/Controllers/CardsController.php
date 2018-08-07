<?php

namespace IntelGUA\Http\Controllers;

use Illuminate\Http\Request;
use IntelGUA\Library\Generate;
use IntelGUA\Library\Rectangle;
use IntelGUA\Library\Boleta;
use Carbon\Carbon;
use IntelGUA\Models\Ticket;
use Illuminate\Support\Facades\Redirect;
use Alert;


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

    public function boletas___()
    {

        //set_time_limits(300);

        $gen = new Generate();
        $pdf = new Boleta();
        $fecha = new Carbon();
        $ticket = new Ticket();

        $ballots = $gen->getNumbersGenerated(8000, true, 4);
        $collectionBallots = array_chunk($ballots, 8);

        // (0, 14, 56); negro azulado
        // (37, 36, 64); azul marino
        //$textoNormal = '(000,000,000)'; //normal
        //$textoOtro = '(244, 255, 16)'; //otro amarillo
        //$textoBono = '(254,000,000)'; //bono entre amigos
        //$textoTelefono = ' (79, 206, 93)'; //numero whattsapp
        //$textoFecha = ' (247, 094, 037)'; //fecha
        //$textoNumeros = ' (073, 103, 141)'; //numeros
        //$textoPrecio = ' (229, 26, 76)'; //valor

        $pdf->SetAutoPageBreak(false, 0.5);
        $pdf->AddPage('P', 'Letter'); //Vertical, Carta
        $pdf->SetFont('Times', 'B', 12); //Arial, negrita, 12 puntos
        $pdf->SetTextColor(37, 36, 64); //azul marino

        $ticket->cost = '10.00';
        $ticket->date = $fecha->format('d/m/Y');
        $ticket->name = 'Lotería JE';
        $ticket->phone = '5389-8977';
        $ticket->logo = asset('img/logo_round_2.png');

        //dd($ticket);
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
                        $posicion++; //Aumenta posición
                        break;

                    case 1:
                        $pdf->row(70, 0, $ticket);
                        $posicion++;
                        break;

                    case 2:
                        $pdf->row(140, 0, $ticket);
                        $posicion++;
                        break;

                    case 3:
                        $pdf->row(0, 45, $ticket);
                        $posicion++;
                        break;

                    case 4:
                        $pdf->row(70, 45, $ticket);
                        $posicion++;
                        break;

                    case 5:
                        $pdf->row(140, 45, $ticket);
                        $posicion++;
                        break;

                    case 6:
                        $pdf->row(0, 90, $ticket);
                        $posicion++;
                        break;

                    case 7:
                        $pdf->row(70, 90, $ticket);
                        $posicion++;
                        break;

                    case 8:
                        $pdf->row(140, 90, $ticket);
                        $posicion++;
                        break;

                    case 9:
                        $pdf->row(0, 135, $ticket);
                        $posicion++;
                        break;

                    case 10:
                        $pdf->row(70, 135, $ticket);
                        $posicion++;
                        break;

                    case 11:
                        $pdf->row(140, 135, $ticket);
                        $posicion++;
                        break;

                    case 12:
                        $pdf->row(0, 180, $ticket);
                        $posicion++;
                        break;

                    case 13:
                        $pdf->row(70, 180, $ticket);
                        $posicion++;
                        break;

                    case 14:
                        $pdf->row(140, 180, $ticket);
                        $posicion++;
                        break;

                    case 15:
                        $pdf->row(0, 225, $ticket);
                        $posicion++;
                        break;

                    case 16:
                        $pdf->row(70, 225, $ticket);
                        $posicion++;
                        break;

                    case 17:
                    //Setear la posición a cero de nuevo
                        $posicion = 0;

                        $pdf->row(140, 225, $ticket);

                        //Esta condición asegura que se agregue una hoja necesaria
                        //para seguir con los registros
                        if ($i != (5 - 1)) {
                            $pdf->AddPage('P', 'Letter');
                        }

                        break;
                }
            }
            $pdf->setXY(50, 28);
            //$pdf->Image($ticket->logo, 119, 19, 23, 28, 'PNG');
            $pdf->Output(); //Salida al navegador del pdf
        }
    }
    public function boletas(Request $request)
    {

        //set_time_limits(300);
        $digits = $request->input('digitos');
        $date = $request->input('fecha');
        //dd($date, $digits);
        $gen = new Generate();
        $pdf = new Boleta();
        $fecha = new Carbon($date);
        $ticket = new Ticket();
        if ($digits == 4) {
            $ballots = $gen->getFourDigits();
        } elseif ($digits == 5) {
            $ballots = $gen->getNumbersGenerated(16000, true, 5);
        }


        $collectionBallots = array_chunk($ballots, 8);

        // (0, 14, 56); negro azulado
        // (37, 36, 64); azul marino
        //$textoNormal = '(000,000,000)'; //normal
        //$textoOtro = '(244, 255, 16)'; //otro amarillo
        //$textoBono = '(254,000,000)'; //bono entre amigos
        //$textoTelefono = ' (79, 206, 93)'; //numero whattsapp
        //$textoFecha = ' (247, 094, 037)'; //fecha
        //$textoNumeros = ' (073, 103, 141)'; //numeros
        //$textoPrecio = ' (229, 26, 76)'; //valor

        $pdf->SetAutoPageBreak(false, 0.5);
        $pdf->AddPage('P', 'Letter'); //Vertical, Carta
        $pdf->SetFont('Times', 'B', 12); //Arial, negrita, 12 puntos
        $pdf->SetTextColor(37, 36, 64); //azul marino

        $ticket->cost = '10.00';
        $ticket->date = $fecha->format('d/m/Y');
        $ticket->name = 'Lotería JE';
        $ticket->phone = '5389-8977';
        $ticket->logo = asset('img/logo_round_2.png');

        //dd($ticket);
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
                        $posicion++; //Aumenta posición
                        break;

                    case 1:
                        $pdf->row(70, 0, $ticket);
                        $posicion++;
                        break;

                    case 2:
                        $pdf->row(140, 0, $ticket);
                        $posicion++;
                        break;

                    case 3:
                        $pdf->row(0, 45, $ticket);
                        $posicion++;
                        break;

                    case 4:
                        $pdf->row(70, 45, $ticket);
                        $posicion++;
                        break;

                    case 5:
                        $pdf->row(140, 45, $ticket);
                        $posicion++;
                        break;

                    case 6:
                        $pdf->row(0, 90, $ticket);
                        $posicion++;
                        break;

                    case 7:
                        $pdf->row(70, 90, $ticket);
                        $posicion++;
                        break;

                    case 8:
                        $pdf->row(140, 90, $ticket);
                        $posicion++;
                        break;

                    case 9:
                        $pdf->row(0, 135, $ticket);
                        $posicion++;
                        break;

                    case 10:
                        $pdf->row(70, 135, $ticket);
                        $posicion++;
                        break;

                    case 11:
                        $pdf->row(140, 135, $ticket);
                        $posicion++;
                        break;

                    case 12:
                        $pdf->row(0, 180, $ticket);
                        $posicion++;
                        break;

                    case 13:
                        $pdf->row(70, 180, $ticket);
                        $posicion++;
                        break;

                    case 14:
                        $pdf->row(140, 180, $ticket);
                        $posicion++;
                        break;

                    case 15:
                        $pdf->row(0, 225, $ticket);
                        $posicion++;
                        break;

                    case 16:
                        $pdf->row(70, 225, $ticket);
                        $posicion++;
                        break;

                    case 17:
                    //Setear la posición a cero de nuevo
                        $posicion = 0;

                        $pdf->row(140, 225, $ticket);

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

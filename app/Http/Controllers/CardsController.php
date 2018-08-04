<?php

namespace IntelGUA\Http\Controllers;

use Illuminate\Http\Request;
use IntelGUA\Library\Generate;
use IntelGUA\Library\Rectangle;

class CardsController extends Controller
{
    public function index()
    {
        return view('ballots.index');
    }

    public function getBallots()
    {
        //ini_set('memory_limit', '1024M');

        //$gen = new Generate();
        //$ballots = $gen->getNumbersGenerated(16000, true, 5);
        //$collectionBallots = array_chunk($ballots, 8);

        //return view('ballots.ticket')->with('collectionBallots', $collectionBallots);

        //$pdf = PDF::loadView('ballots.ticket', $collectionBallots);
        //$pdf = PDF::loadView('ballots.ticket', ['collectionBallots' => $collectionBallots]);
        //return $pdf->output('ballots.pdf');

    }

    public function rectangulos()
    {

        $ancho = 60;
        $alto = 30;
        $posX = 5;
        $posY = 8;

        $pdf = new Rectangle();
        $pdf->AddPage();
        $pdf->SetLineWidth(0.3);
        $pdf->SetDrawColor(155, 15, 15);
        $pdf->SetFillColor(253, 177, 177);
        for ($i = 1; $i <= 100; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $pdf->RoundedRect($posY, $posX, $ancho, $alto, 1.5, 'DF');
                $posY = $ancho + 5;
            }
            $posX = $alto + 5;
            //$pdf->Text(20, ($i * 1.7) * 20, 'string txt');


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
}

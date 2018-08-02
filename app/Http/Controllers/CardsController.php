<?php

namespace IntelGUA\Http\Controllers;

use Illuminate\Http\Request;
use IntelGUA\Library\Generate;
use PDF;

class CardsController extends Controller
{



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
}

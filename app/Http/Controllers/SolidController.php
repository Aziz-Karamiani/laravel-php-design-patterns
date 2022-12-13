<?php

namespace App\Http\Controllers;

use App\SOLID\OpenClosedPrinciple\MarijuanaGarden;
use App\SOLID\SingleResponsibilityPrinciple\EmptyGarden;

class SolidController extends Controller
{
    /**
     * @return array
     */
    public function srp()
    {
        $emptyGarden = new EmptyGarden(100, 200);

        return $emptyGarden->getItems();
    }

    /**
     * @return void
     */
    public function ocp()
    {
        $garden = new MarijuanaGarden(10, 10);
        $garden->items();
    }
}

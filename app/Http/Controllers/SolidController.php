<?php

namespace App\Http\Controllers;

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
}

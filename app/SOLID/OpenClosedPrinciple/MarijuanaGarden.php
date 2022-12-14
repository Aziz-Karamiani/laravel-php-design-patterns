<?php

namespace App\SOLID\OpenClosedPrinciple;

use App\SOLID\SingleResponsibilityPrinciple\EmptyGarden;

class MarijuanaGarden extends EmptyGarden
{
    /**
     * @return array
     */
    public function items()
    {
        return array_fill(0, $this->width * $this->height, 'weed');
    }
}

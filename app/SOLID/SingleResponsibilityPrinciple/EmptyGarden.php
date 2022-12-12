<?php

namespace App\SOLID\SingleResponsibilityPrinciple;

/*
 * The first principle of SOLID is the single responsibility principle.
 *  It states that a class should have a single responsibility.
 */

class EmptyGarden
{
    public int $width;

    public int $height;

    /**
     * EmptyGarden constructor.
     *
     * @param  int  $width
     * @param  int  $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        $numberOfSpots = ceil($this->width * $this->height);

        return array_fill(0, $numberOfSpots, 'handful of dirt');
    }
}

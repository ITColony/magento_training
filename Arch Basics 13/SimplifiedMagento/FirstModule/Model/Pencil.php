<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/16/2018
 * Time: 5:20 AM
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Pencil implements PencilInterface
{
    protected $color;
    protected $size;
    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getPencilType()
    {
        return "pencil has ".$this->color->getColor()." Color and ".$this->size->getSize()." size";

    }


}
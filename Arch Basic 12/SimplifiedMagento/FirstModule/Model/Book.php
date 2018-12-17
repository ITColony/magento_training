<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/16/2018
 * Time: 9:10 AM
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;
class Book
{
    protected $color;
    protected $size;
    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

}
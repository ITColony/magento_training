<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/16/2018
 * Time: 5:33 AM
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;
class Red implements Color
{

    public function getColor()
    {
        return "Red";
    }
}
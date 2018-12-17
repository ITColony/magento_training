<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/16/2018
 * Time: 5:32 AM
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;

class Yellow implements Color
{

    public function getColor()
    {
        return "Yellow";
    }
}
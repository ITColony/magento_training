<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/16/2018
 * Time: 5:34 AM
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;
class Small implements Size
{

    public function getSize()
    {
        return "Small";
    }
}
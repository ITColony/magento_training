<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/14/2018
 * Time: 5:09 AM
 */

namespace SimplifiedMagento\FirstModule\NotMagento;


class RedPencil implements PencilInterface
{

    public function getPencilType()
    {
       return "Red Pencil";
    }
}
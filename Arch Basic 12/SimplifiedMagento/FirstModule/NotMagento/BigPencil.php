<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/14/2018
 * Time: 5:20 AM
 */

namespace SimplifiedMagento\FirstModule\NotMagento;


class BigPencil implements PencilInterface
{


    public function getPencilType()
    {
        return "Big Pencil";
    }
}
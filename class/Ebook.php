<?php
/**
 * Created by PhpStorm.
 * User: davic
 * Date: 08/10/2017
 * Time: 17:31
 */

class Ebook extends Livro
{
    private $waterMark;

    public function getWaterMark()
    {
        return $this->waterMark;
    }

    public function setWaterMark($waterMark)
    {
        $this->waterMark = $waterMark;
    }


}
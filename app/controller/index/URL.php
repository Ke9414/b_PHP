<?php
/**
 * Created by PhpStorm.
 * User: gmena
 * Date: 07-03-14
 * Time: 12:13 PM
 */
use core\App;
use core\interfaces\iURL;

App::__require__ ( 'Index', 'controller/index' );

class URL implements iURL
{
    public function getUrl ()
    {
        return [
            '^$'                                                  => Index::asView (),
            '^(?<type>[a-z]+)\/(?<action>view)\/(?<curso>[0-9]+)' => Index::asView (),
        ];
    }
}
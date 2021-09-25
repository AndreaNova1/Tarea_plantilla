<?php

namespace App\Http\Controllers;

class HomeController
{
    public function Welc()
    {
        return \view('welcome');


    }
    public function form()
    {

        return \view('formulario');

    }

}

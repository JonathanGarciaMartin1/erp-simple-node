<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data['titulo'] = 'Inicio';
        echo view('front/head', $data);
        echo view('front/inicio');
    }

}

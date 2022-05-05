<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function principal()
    {
        return view('app');
    }

    public function cliente()
    {
        echo "cliente";
    }
    
}

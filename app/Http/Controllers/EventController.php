<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Weslei';

        $arr = [10,20,30,40,50,60,70,80,90,100];
        $nomes = ['Matheus, Maria, Weslei, Alice'];

        return view('welcome',  
        [    
            'nome' => $nome,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create()
    {
        return view('events.create');
    }
}

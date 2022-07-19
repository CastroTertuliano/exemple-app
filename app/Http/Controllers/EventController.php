<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $idade = 29;

        $nome = "Matheus";
    
        $arr = [10,20,30,40,50];
    
        $nomes = ["Matheus", "Maria", "João", "Saulo"];
    
        return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissão' => "programador",
            'arr' => $arr,
            'nomes' => $nomes
    
        ]);

    }

    public function create(){

        return view('events.create');

    }
}

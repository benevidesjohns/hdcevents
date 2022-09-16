<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        
        $nome = 'João';
        
        return view('welcome', ['nome' => $nome]);
    }

    public function create(){
        
        return view('events.create');
    }

    public function products () {

        $busca = request('search');
    
        return view('products', ['busca' => $busca]);
    }

    public function contact () {

        return view('contact');
    }

    public function product ($id = null) {
        
        return view('product', ['id' => $id]);
    }
    
}

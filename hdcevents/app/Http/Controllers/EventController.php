<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Igor";
        return view('welcome', ['nome'=>$nome]);
    }

    public function create(){
        return view('events.create');
    }

    public function contact() {
        return view('contact');
    }

    public function products() {
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }

    public function product ($id = null) {
        return view('product', ['id'=>$id]);
    }

}

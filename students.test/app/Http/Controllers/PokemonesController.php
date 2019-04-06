<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PokemonesController extends BaseController {
    public function index(Request $reg) {
        return view('pokemones.index');
    }

    public function create(Request $reg) {
        return view('pokemones.create');
    }

    public function store(Request $reg){
        $pokemon = $reg->input('pokemon');
        dd($pokemon);
        return 'almacena al estuadiante';
    }
}
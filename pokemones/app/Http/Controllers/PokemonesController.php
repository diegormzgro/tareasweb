<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Pokemon;

class PokemonesController extends BaseController {
    public function index(Request $reg) {
        $pokemones = Pokemon::all();
        //dd($pokemones);
        $data = [];
        $data['pokemones'] = $pokemones;
        return view('pokemones.index', $data);
    }

    public function create(Request $reg) {
        return view('pokemones.create');
    }

    public function store(Request $reg){
        $pokemonInput = $reg->input('pokemon');
        ($pokemonInput);
        $pokemon = Pokemon::create($pokemonInput);
        
        return redirect()->route('pokemones.index');
    }

    public function edit($name) {
        $pokemon = Pokemon::find($name);
        return view('pokemones.edit', compact('pokemon'));
    }

    public function update(Request $request, $name)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        //
    }
}
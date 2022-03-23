<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function verpokemons($pokemon){
        
        $apipokemon = HTTP::get("https://pokeapi.co/api/v2/pokemon/$pokemon");
        
        $pokeruta = "https://pokeapi.co/api/v2/pokemon/$pokemon";
        $arrayapi= $apipokemon->json();
        if ($arrayapi == null){
            return view('none');
        }else{
        return view('pokemon',['arrayapi'=>$arrayapi,'pokemon'=>$pokemon,'pokeruta'=>$pokeruta]);
        }

    }
}

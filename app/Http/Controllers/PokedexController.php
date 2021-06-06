<?php

namespace App\Http\Controllers;

use App\Http\Resources\PokemonResource;
use Illuminate\Support\Facades\Http;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokedex/1');

        return PokemonResource::collection($response->collect()->get('pokemon_entries'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $imagem = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/$id.png";
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/$id/");

        return $response;
    }
}

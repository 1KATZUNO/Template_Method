<?php

namespace App\Http\Controllers;

use App\Models\FightingPokemon;
use App\Models\PoisonPokemon;
use App\Models\GroundPokemon;

class PokemonController extends Controller
{
    public function index()
    {
        $log = [];

        $machamp = new FightingPokemon('Machamp', power: 80, attack: 110, defense: 70);
        $log[] = $machamp->performAttack();

        $gengar = new PoisonPokemon('Gengar', power: 95, attack: 65, defense: 60);
        $log[] = $gengar->performAttack();

        $golem = new GroundPokemon('Golem', power: 85, attack: 120, defense: 130);
        $log[] = $golem->performAttack();

        return response()->json($log);
    }
}

<?php

namespace App\Models;

class PoisonPokemon extends Pokemon
{
    protected function calculateMultiplier(): float
    {
        // El veneno no pega tan fuerte instantáneamente
        return 0.9;
    }

    protected function calculateImpact(): int
    {
        // Daño “extra” por envenenamiento
        return 25;
    }
}

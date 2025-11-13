<?php

namespace App\Models;

class GroundPokemon extends Pokemon
{
    protected function calculateMultiplier(): float
    {
        // Golpes de tierra con buena potencia
        return 1.1;
    }

    protected function calculateImpact(): int
    {
        // Impacto extra por temblor/terremoto
        return 20;
    }
}

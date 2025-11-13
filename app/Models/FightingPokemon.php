<?php

namespace App\Models;

class FightingPokemon extends Pokemon
{
    protected function calculateMultiplier(): float
    {
        // Luchador suele pegar fuerte cuerpo a cuerpo
        return 1.2;
    }

    protected function calculateImpact(): int
    {
        // Bonus fijo de impacto físico
        return 15;
    }
}

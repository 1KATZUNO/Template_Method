<?php

namespace App\Models;

abstract class Pokemon
{
    protected string $name;
    protected int $power;
    protected int $attack;
    protected int $defense;

    public function __construct(string $name, int $power, int $attack, int $defense)
    {
        $this->name   = $name;
        $this->power  = $power;
        $this->attack = $attack;
        $this->defense = $defense;
    }

    
     //* Define la estructura general del cálculo de daño.
     
    final public function calculateDamage(): int
    {
        $base = $this->power + $this->attack;

        $multiplier = $this->calculateMultiplier(); // paso “personalizable”
        $impact     = $this->calculateImpact();     // paso abstracto obligatorio

        $rawDamage = (int) round($base * $multiplier + $impact - $this->defense);

        // Nunca devolver daño negativo
        return max(0, $rawDamage);
    }

   
    protected function calculateMultiplier(): float
    {
        return 1.0; // por defecto, sin ventaja
    }

    
    abstract protected function calculateImpact(): int;

   
    public function performAttack(): string
    {
        $damage = $this->calculateDamage();

        return "{$this->name} causa {$damage} puntos de daño.";
    }
}

<?php
// 1
function additionner(float $a, float $b): float {
    return $a + $b;
}
function soustraire(float $a, float $b): float {
    return $a - $b;
}
function multiplier(float $a, float $b): float {
    return $a * $b;
}
function diviser(float $a, float $b): float {
    if ($b === 0.0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }
    return $a / $b;
}
// 2 
function estPair(int $n): bool {
    return $n % 2 === 0;
}
function estPositif(float $n): bool {
    return $n >= 0;
}
function maximum(float $a, float $b, float $c): float {
    return max($a, $b, $c);
}
function estPremier(int $n): bool {
    if ($n <= 1) return false;
    for ($i = 2; $i <= floor(sqrt($n)); $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}
// 3
function calculerTTC(float $ht, float $tva = 20.0): float {
    return $ht * (1 + $tva / 100);
}
function calculerRemise(float $prix, float $pourcentage): float {
    return round($prix * (1 - $pourcentage / 100), 2);
}
function calculerFacture(float $prixUnitaire, int $quantite, float $remise = 0.0, float $tva = 20.0): float {
    $totalHT = $prixUnitaire * $quantite;
    $totalRemise = calculerRemise($totalHT, $remise);
    return calculerTTC($totalRemise, $tva);
}
//4+5
function factorielle(int $n): int {
    if ($n < 0) throw new InvalidArgumentException("Nombre négatif");
    $resultat = 1;
    for ($i = 2; $i <= $n; $i++) $resultat *= $i;
    return $resultat;
}
function pgcd(int $a, int $b): int {
    while ($b !== 0) {
        $reste = $a % $b;
        $a = $b;
        $b = $reste;
    }
    return abs($a);
}
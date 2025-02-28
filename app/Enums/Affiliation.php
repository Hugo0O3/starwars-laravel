<?php

namespace App\Enums;

enum Affiliation: string
{
    case JEDI = 'jedi';
    case SITH = 'sith';
    case CIVIL = 'civil';
    case CHASSEUR_DE_PRIMES = 'chasseur_de_primes';
    case EMPIRE = 'empire';
    case REPUBLIQUE = 'republique';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

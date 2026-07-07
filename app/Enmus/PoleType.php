<?php

namespace App\Enums;

enum PoleType:string
{
    case PCC = 'PCC';

    case STEEL = 'Steel';

    case RAIL = 'Rail';

    case TUBULAR = 'Tubular';

    case RSJ = 'RSJ';

    public static function options(): array
    {
        return [

            self::PCC->value,

            self::STEEL->value,

            self::RAIL->value,

            self::TUBULAR->value,

            self::RSJ->value,

        ];
    }
}
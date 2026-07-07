<?php

namespace App\Enums;

enum PoleCondition:string
{
    case GOOD = 'Good';

    case AVERAGE = 'Average';

    case DAMAGED = 'Damaged';

    case BROKEN = 'Broken';

    public static function options(): array
    {
        return [

            self::GOOD->value,

            self::AVERAGE->value,

            self::DAMAGED->value,

            self::BROKEN->value,

        ];
    }
}
<?php

namespace App\Enums;

enum ProjectStatus:int
{
    case INACTIVE = 0;
    case ACTIVE = 1;

    public function label(): string
    {
        return match ($this) {

            self::ACTIVE => 'Active',

            self::INACTIVE => 'Inactive',

        };
    }

    public function badge(): string
    {
        return match ($this) {

            self::ACTIVE =>
                '<span class="badge bg-success">Active</span>',

            self::INACTIVE =>
                '<span class="badge bg-danger">Inactive</span>',

        };
    }

    public static function options(): array
    {
        return [

            self::ACTIVE->value => self::ACTIVE->label(),

            self::INACTIVE->value => self::INACTIVE->label(),

        ];
    }
}
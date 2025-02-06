<?php

namespace App\Enum;

enum OrderStatus: int
{
    case NEW = 1;
    case COMPLETED = 2;

    public function toInt(): int
    {
        return match ($this) {
            self::NEW => 1,
            self::COMPLETED => 2,
        };
    }
}
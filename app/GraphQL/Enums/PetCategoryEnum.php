<?php

declare(strict_types=1);

namespace App\GraphQL\Enums;

use Rebing\GraphQL\Support\EnumType;

class PetCategoryEnum extends EnumType
{
    protected $attributes = [
        'name' => 'PetCategoryEnum',
        'description' => 'An pet category enum',
        'values' => [
            'CAT' => 'CAT',
            'DOG' => 'DOG',
            'RABBIT' => 'RABBIT',
            'STINGRAY' => 'STINGRAY',
        ],
    ];
}

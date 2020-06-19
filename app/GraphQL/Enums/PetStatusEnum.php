<?php

declare(strict_types=1);

namespace App\GraphQL\Enums;

use Rebing\GraphQL\Support\EnumType;

class PetStatusEnum extends EnumType
{
    protected $attributes = [
        'name' => 'petStatus',
        'description' => 'An pet status enum',
        'values' => [
            'AVAILABLE' => 'AVAILABLE',
            'CHECKEDOUT' => 'CHECKEDOUT',
        ],
    ];
}

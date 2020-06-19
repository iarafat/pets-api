<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Pet;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class TotalPetsQuery extends Query
{
    protected $attributes = [
        'name' => 'totalPets',
        'description' => 'A query of total pets'
    ];

    public function type(): Type
    {
        return Type::int();
    }

    public function args(): array
    {
        return [
            'status' => ['name' => 'status', 'type' => GraphQL::type('petStatus')]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
       $pets = Pet::query();

       if (isset($args['status'])) {
           $pets = $pets->where('status', $args['status']);
       }

        return $pets->count();
    }
}

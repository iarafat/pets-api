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

class AllPetsQuery extends Query
{
    protected $attributes = [
        'name' => 'allPets',
        'description' => 'A query of all pets'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('pet'));
    }

    public function args(): array
    {
        return [
            'category' => ['name' => 'category', 'type' => GraphQL::type('petCategory')],
            'status' => ['name' => 'status', 'type' => GraphQL::type('petStatus')],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $pets = Pet::query();

        if (isset($args['category'])) {
            $pets = $pets->where('category', $args['category']);
        }

        if (isset($args['status'])) {
            $pets = $pets->where('status', $args['status']);
        }

        return $pets->get()->toArray();
    }
}

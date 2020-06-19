<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Pet;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class PetByIdQuery extends Query
{
    protected $attributes = [
        'name' => 'petById',
        'description' => 'A query of pet to get pet by id'
    ];

    public function type(): Type
    {
        return GraphQL::type('pet');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required', 'exists:pets,id']
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return Pet::find($args['id']);
    }
}

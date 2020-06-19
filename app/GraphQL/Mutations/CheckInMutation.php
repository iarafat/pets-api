<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Pet;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class CheckInMutation extends Mutation
{
    protected $attributes = [
        'name' => 'checkIn',
        'description' => 'A mutation for checkin a pet'
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
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $pet = Pet::find($args['id']);

        $pet->update([
            'user_id' => null,
            'status' => 'AVAILABLE',
            'checkin_date' => now(),
        ]);

        return $pet->toArray();
    }
}

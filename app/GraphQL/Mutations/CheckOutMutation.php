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

class CheckOutMutation extends Mutation
{
    protected $attributes = [
        'name' => 'checkOut',
        'description' => 'A mutation for checkout a pet'
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
            'user_id' => auth()->user()->id,
            'status' => 'CHECKEDOUT',
            'checkout_date' => now(),
        ]);

        return $pet->toArray();
    }
}

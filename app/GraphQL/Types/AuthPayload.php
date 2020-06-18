<?php

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class AuthPayload extends GraphQLType
{
    protected $attributes = [
        'name' => 'AuthPayload',
        'description' => 'Auth payload for a authenticated user',
    ];

    public function fields(): array
    {
        return [
            'user' => [
                'type' => GraphQL::type('user'),
                'description' => 'A authenticated user',
            ],
            'token' => [
                'type' => Type::string(),
                'description' => 'The token of a authenticated user',
            ],
        ];
    }
}

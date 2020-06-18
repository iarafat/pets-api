<?php

namespace App\GraphQL\Types;

use App\User;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user',
        'model' => User::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a user',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of a user',
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'The email address of a user',
            ],
            'pets' => [
                'type' => Type::listOf(GraphQL::type('pet')),
                'description' => 'List of pets of a user',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Date a pet was created',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Date a pet was updated',
            ],
        ];
    }

    protected function resolveCreatedAtField($root, $args)
    {
        return (string)$root->created_at;
    }

    protected function resolveUpdatedAtField($root, $args)
    {
        return (string)$root->updated_at;
    }
}

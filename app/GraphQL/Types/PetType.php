<?php

namespace App\GraphQL\Types;

use App\Pet;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PetType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Pet',
        'description' => 'A pet',
        'model' => Pet::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a pet',
            ],
            'user_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a user',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a pet',
            ],
            'weight' => [
                'type' => Type::nonNull(Type::float()),
                'description' => 'Weight of a pet',
            ],
            'photo' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Photo of a pet',
            ],
            'category' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Category of a pet',
            ],
            'status' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Status of a pet',
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

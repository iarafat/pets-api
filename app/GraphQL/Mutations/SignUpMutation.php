<?php

namespace App\GraphQL\Mutations;

use App\User;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type as GraphqlType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class SignUpMutation extends Mutation
{
    protected $attributes = [
        'name' => 'singUp'
    ];

    public function type(): GraphqlType
    {
        return GraphQL::type('user');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => GraphqlType::nonNull(GraphqlType::string()),
            ],
            'email' => [
                'name' => 'email',
                'type' => GraphqlType::nonNull(GraphqlType::string()),
            ],
            'password' => [
                'name' => 'password',
                'type' => GraphqlType::nonNull(GraphqlType::string()),
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $user = User::create([
            'name' => $args['name'],
            'email' => $args['email'],
            'password' => bcrypt($args['password']),
        ]);

        // generated jwt token for user and return the token.
        return auth()->login($user);
    }

    protected function rules(array $args = []): array
    {
        return [
            'id' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ];
    }
}

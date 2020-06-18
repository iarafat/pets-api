<?php

namespace App\GraphQL\Mutations;

use Closure;
use Exception;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type as GraphqlType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class LogInMutation extends Mutation
{
    protected $attributes = [
        'name' => 'logIn'
    ];

    public function type(): GraphqlType
    {
        return GraphQL::type('authPayload');
    }

    public function args(): array
    {
        return [
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
        $credentials = [
            'email' => $args['email'],
            'password' => $args['password'],
        ];

        if (!$token = auth()->attempt($credentials)) {
            throw new Exception('Unauthorized!');
        }


        // generated jwt token for user and return the token.
        return [
            'user' => auth()->user(),
            'token' => $token
        ];
    }

    protected function rules(array $args = []): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }
}

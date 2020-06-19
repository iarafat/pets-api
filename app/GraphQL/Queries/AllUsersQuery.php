<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\User;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class AllUsersQuery extends Query
{
    protected $attributes = [
        'name' => 'allUsers',
        'description' => 'A query of all users'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('user'));
    }

    public function args(): array
    {
        return [];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $users = User::query();

        return $users->get()->toArray();
    }
}

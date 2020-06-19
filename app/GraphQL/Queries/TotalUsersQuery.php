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

class TotalUsersQuery extends Query
{
    protected $attributes = [
        'name' => 'totalUser',
        'description' => 'A query of total users'
    ];

    public function type(): Type
    {
        return Type::int();
    }

    public function args(): array
    {
        return [];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
       $users = User::query();

        return $users->count();
    }
}

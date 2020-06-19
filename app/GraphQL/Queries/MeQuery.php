<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type as GraphqlType;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class MeQuery extends Query
{
    protected $attributes = [
        'name' => 'me',
        'description' => 'A query of auth user'
    ];

    public function type(): GraphqlType
    {
        return GraphQL::type('user');
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return auth()->user();
    }
}

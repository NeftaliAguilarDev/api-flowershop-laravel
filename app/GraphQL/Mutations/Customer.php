<?php

namespace App\GraphQL\Mutations;

final class Customer
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return [
            'name' =>  $args['name'],
            'email' =>  $args['email'],
            'phone' =>  $args['phone'],
        ];
    }
}

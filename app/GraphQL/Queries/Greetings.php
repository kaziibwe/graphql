<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

final class Greetings
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        return 'hello world';

        // {
        //     users {
        //       id
        //       name
        //       email
        //     }
        // }


        // mutation {
        //     updateUser(name: "alfred kaxiibwe", id:11) {
        //       id
        //       name
        //       email
        //   }
        //   }


        // {
        //     user(id:4) {
        //       id
        //       name
        //       email
        //     }
        // }

        // mutation {
        //     createUser(name: "jami", email: "jami@gmail.com", password: "jami") {
        //       id
        //       name
        //       email
        //   }
        //   }
    }
}

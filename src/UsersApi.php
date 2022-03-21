<?php

declare(strict_types=1);

namespace dozer111\UsersMicroservice;

final class UsersApi extends UsersApiSkeleton
{

    protected function getEndpoint(): string
    {
        return  env('USERS_MS'). '/api';
    }
}

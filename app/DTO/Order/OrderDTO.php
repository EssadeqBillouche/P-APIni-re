<?php

namespace App\DTO\Order;

readonly class OrderDTO
{

    public function __construct(public readonly int $userId)
    {

    }


}

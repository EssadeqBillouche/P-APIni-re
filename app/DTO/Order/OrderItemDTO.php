<?php

namespace App\DTO\Order;

readonly class OrderItemDTO
{
    public function __construct(
        public readonly int $productId,
        public readonly int $quantity,
        public readonly float $unitPrice
    ) {}
}

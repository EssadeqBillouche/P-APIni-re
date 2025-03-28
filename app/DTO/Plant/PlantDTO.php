<?php

namespace App\DTO\Plant;

readonly class PlantDTO
{

    public function __construct( public readonly string $name,
                                 public readonly string $slag,
                                 public readonly string $description,
                                 public readonly float $price,
                                 public  readonly int $categoryId,
                                public readonly int $stockQuantity,
                                public readonly bool $isActive,
                                public readonly string $image
    )
    {

    }

}

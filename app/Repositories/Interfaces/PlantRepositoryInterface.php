<?php

namespace App\Repositories\Interfaces;

use App\DTO\Plant\PlantDTO;

interface PlantRepositoryInterface
{
    public function AddPlant(PlantDTO $PlantDto);
    public function updatePlant(string $slug, PlantDTO $plantDTO);
    public function show(string $slug);
    public function DeletePlant(string $slug);

}

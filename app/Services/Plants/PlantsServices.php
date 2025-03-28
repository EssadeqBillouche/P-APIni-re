<?php

namespace App\Services\Plants;

use App\Repositories\Interfaces\PlantRepositoryInterface;

class PlantsServices
{
    protected PlantRepositoryInterface $plantRepository;

    public function __construct( PlantRepositoryInterface $plantRepository)
    {
        $this->plantRepository = $plantRepository;
    }

    public function AddPlant(){

    }

}

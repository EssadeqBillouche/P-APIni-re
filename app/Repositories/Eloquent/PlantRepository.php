<?php

namespace App\Repositories\Eloquent;

use App\DTO\Plant\PlantDTO;
use App\Models\plant;
use App\Repositories\Interfaces\PlantRepositoryInterface;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class PlantRepository implements PlantRepositoryInterface
{

    public function AddPlant(PlantDTO $PlantDto) :plant
    {
        try {
            $plant = new plant();
            $plant->name = $PlantDto->name;
            $plant->category_id = $PlantDto->categoryId;
            $plant->description = $PlantDto->description;
            $plant->price = $PlantDto->price;
            $plant->stock_quantity = $PlantDto->stockQuantity;
            $plant->is_active = $PlantDto->isActive;
            $plant->imageUrl = $PlantDto->image;
            $plant->save();
            return $plant;
        } catch (\Exception $e){
            throw new Exception();
        }
    }

    public function updatePlant(string $slug, PlantDTO $plantDTO)
    {
        // TODO: Implement updatePlant() method.
    }

    public function show(string $slug)
    {
        // TODO: Implement show() method.
    }

    public function DeletePlant(string $slug)
    {
        // TODO: Implement DeletePlant() method.
    }
}

<?php

namespace App\Http\Controllers\Planet;

use App\Http\Controllers\Controller;
use App\Services\Plants\PlantsServices;
use Illuminate\Http\Request;

class planetController extends Controller
{
    protected PlantsServices $plantsServices;
    public function __construct( PlantsServices $plantsServices)
    {
        $this->plantsServices = $plantsServices;
    }
    public function create()
    {

    }
}

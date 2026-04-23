<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function display()
    {
        $car = Car::create('BMW', 'M5', 2022);

        return "
            <h1>Car Info</h1>
            <ul>
                <li>Brand: {$car->brand}</li>
                <li>Model: {$car->model}</li>
                <li>Year: {$car->year}</li>
            </ul>
        ";
    }
}
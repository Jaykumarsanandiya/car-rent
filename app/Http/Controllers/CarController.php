<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function listCar(){
        $cars = Car::all();
        return view('index', ["cars" => $cars]);
    }

    public function form($id){
        $car = Car::find($id);
        return view('form', ["car" => $car]);
    }
}

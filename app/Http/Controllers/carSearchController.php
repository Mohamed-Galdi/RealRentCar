<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class carSearchController extends Controller
{
    public function search(Request $request)
    {
        $cars = Car::where([
            ['brand', 'like', '%' . $request->brand . '%'],
            ['model', 'like', '%' . $request->model . '%'],
            // ['price_per_day', '>', $request->min_price],
            // ['price_per_day', '<', $request->max_price]
        ])->paginate(6);
        return view('cars.searchedCars', compact('cars'));
    }
}

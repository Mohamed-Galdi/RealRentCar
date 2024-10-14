<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class carSearchController extends Controller
{
    public function search(Request $request)
    {
        // Parse prices to int
        $minPrice = intval($request->min_price);
        $maxPrice = intval($request->max_price);

        // Prepare the base query to select cars
        $query = Car::query();

        // Check if the 'brand' input is provided and add the filter to the query
        if ($request->filled('brand')) {
            $query->where('brand', 'like', '%' . $request->brand . '%');
        }

        // Check if the 'model' input is provided and add the filter to the query
        if ($request->filled('model')) {
            $query->where('model', 'like', '%' . $request->model . '%');
        }

        // Check if the 'min_price' input is provided and add the filter to the query
        if ($request->filled('min_price')) {
            $minPrice = is_numeric($request->min_price) ? $request->min_price : 0;
            $query->where('price_per_day', '>=', $minPrice);
        }

        // Check if the 'max_price' input is provided and add the filter to the query
        if ($request->filled('max_price')) {
            $maxPrice = is_numeric($request->max_price) ? $request->max_price : PHP_INT_MAX;
            $query->where('price_per_day', '<=', $maxPrice);
        }

        // Add the 'status' filter to only show available cars
        $query->where('status', '=', 'available');

        // Execute the query and paginate the results
        $cars = $query->paginate(9);

        // Include any additional query parameters in the pagination links
        $cars->appends($request->except('page'));


        return view('cars.searchedCars', compact('cars'));
    }
}

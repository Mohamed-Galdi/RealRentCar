<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::latest()->paginate(8);
        return view('admin.cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'engine' => 'required',
            'quantity' => 'required',
            'price_per_day' => 'required',
            'status' => 'required',
            'reduce' => 'required',
            'stars' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $car = new Car;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->engine = $request->engine;
        $car->quantity = $request->quantity;
        $car->price_per_day = $request->price_per_day;
        $car->status = $request->status;
        $car->reduce = $request->reduce;
        $car->stars = $request->stars;

        if ($request->hasFile('image')) {
            $imageName = $request->brand . '-' . $request->model . '-' . $request->engine . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('images/cars', $imageName);
            $car->image = '/'.$path;
        }
        $car->save();

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $car = Car::findOrFail($car->id);
        return view('admin.updateCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'engine' => 'required',
            'quantity' => 'required',
            'price_per_day' => 'required',
            'status' => 'required',
            'reduce' => 'required',
            'stars' => 'required',
        ]);

        $car = Car::findOrFail($car->id);

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->engine = $request->engine;
        $car->quantity = $request->quantity;
        $car->price_per_day = $request->price_per_day;
        $car->status = $request->status;
        $car->reduce = $request->reduce;
        $car->stars = $request->stars;

        if ($request->hasFile('image')) {

            $filename = basename($car->image);
            Storage::disk('local')->delete('images/cars/' . $filename);
            $car->delete();

            $imageName = $request->brand . '-' . $request->model . '-' . $request->engine . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('images/cars', $imageName);
            $car->image = $path;
        }
        $car->save();

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car = Car::findOrFail($car->id);
        
        // Check if the car has any active reservations
        $activeReservations = $car->reservations()->where('status', 'Active')->count();
        
        if ($activeReservations > 0) {
            // Prevent deletion and return with error message
            return redirect()->route('cars.index')->with('error', 'Cannot delete car with active reservations.');
        }
        
        // Delete inactive reservations
        $car->reservations()->where('status', '!=', 'Active')->delete();
        
        // if ($car->image) {
        //     // Get the filename from the image path
        //     $filename = basename($car->image);

        //     // Delete the image file from the storage
        //     Storage::disk('local')->delete('images/cars/' . $filename);
        // }
        
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}

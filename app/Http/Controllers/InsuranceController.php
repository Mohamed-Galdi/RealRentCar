<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insurances = Insurance::paginate(5);
        $cars = Car::all();
        return view('admin.insurances', compact('insurances', 'cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::where('insu_id', null)->get();

        return view('admin.createInsurance', compact('cars') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required',
            'price' => 'required',
            'car' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'type' => 'required',
        ]);

        $insurance = new Insurance;
        $car = Car::find($request->car);

        $insurance->car()->associate($car);

        $insurance->company = $request->company;
        $insurance->price = $request->price;
        $insurance->start_date = $request->start_date;
        $insurance->end_date = $request->end_date;
        $insurance->type = $request->type;

        if($request->end_date > now() ){
            $insurance->status = 'Active';
        }else{
            $insurance->status = 'Expired';
        }

        $insurance->save();
        $car->insu_id = $insurance->id;
        $car->save();

        return redirect()->route('insurances.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Insurance $insurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insurance $insurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insurance $insurance)
    {
        $car = Car::where('insu_id', $insurance->id)->first();
        if ($car) {
            $car->insu_id = null;
            $car->save();
        }

        $insurance->delete();

        return redirect()->route('insurances.index');
    }

}

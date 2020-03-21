<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Http\JsonResponse;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = $request->input('take', Car::count());

        return Car::skip($skip)->take($take)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        // $car = new Car();

        // $car->brand = $request->input('brand');
        // $car->model = $request->input('model');
        // $car->year = $request->input('year');
        // $car->maxSpeed = $request->input('maxSpeed');
        // $car->isAutomatic = $request->input('isAutomatic');
        // $car->engine = $request->input('engine');
        // $car->numberOfDoors = $request->input('numberOfDoors');

        // $car->save();

        return $car = Car::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return $car;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarRequest $request, Car $car)
    {
        // $car = Car::find($id);

        // $car->brand = $request->input('brand');
        // $car->model = $request->input('model');
        // $car->year = $request->input('year');
        // $car->maxSpeed = $request->input('maxSpeed');
        // $car->isAutomatic = $request->input('isAutomatic');
        // $car->engine = $request->input('engine');
        // $car->numberOfDoors = $request->input('numberOfDoors');

        // $car->save();

        $car->update($request->all());

        return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        // $car = Car::find($id);

        $car->delete();

        return new JsonResponse(true);
    }
}

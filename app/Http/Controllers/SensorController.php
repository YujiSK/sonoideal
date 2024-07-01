<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorController extends Controller
{
    public function index()
    {
        $sensor_data = Sensor::orderBy('created_at', 'desc')->take(10)->get();
        return view('raspi.sensor.index', ['sensor_data' => $sensor_data]);
    }

    public function store(Request $request)
    {
        $sensorData = new Sensor;
        $sensorData->temperature = $request->temperature;
        $sensorData->humidity = $request->humidity;
        $sensorData->save();

        return response()->json(['message' => 'Data saved successfully'], 200);
    }
}

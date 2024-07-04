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
        try {
            $sensorData = new Sensor;
            $sensorData->temperature = $request->temperature;
            $sensorData->humidity = $request->humidity;
            $sensorData->save();
            // $createdAt = $sensorData->created_at;
            return response()->json(['message' => 'Data saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save data', 'message' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'Data saved successfully'], 200);
    }

    public function home()
    {
        $new = Sensor::select('temperature', 'humidity')
            ->orderBy('created_at', 'desc')
            ->first();

        // 取得したデータを配列として整形
        $data = [
            'temperature' => $new->temperature,
            'humidity' => $new->humidity
        ];

        return view('home', compact('data'));
    }
}

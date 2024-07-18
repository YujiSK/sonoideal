<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;
use App\Models\Initialization;

class SensorController extends Controller
{
    public function index()
    {
        $sensor_datas = SensorData::orderBy('created_at', 'desc')->take(10)->get();
        return view('raspi.sensor.index', ['sensor_datas' => $sensor_datas]);
    }

    public function store(Request $request)
    {
        try {
            $sensorData = new SensorData();
            $sensorData->temperature = $request->temperature;
            $sensorData->humidity = $request->humidity;
            $sensorData->save();
            return response()->json(['message' => 'Data saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save data', 'message' => $e->getMessage()], 500);
        }
    }

    public function home()
    {
        $sensor_data = SensorData::select('temperature', 'humidity')->orderBy('created_at', 'desc')->first();

        $data = [
            'temperature' => $sensor_data->temperature,
            'humidity' => $sensor_data->humidity,
        ];

        return view('home', ['data' => $data]);
    }

    public function manualcontrol()
    {
        $init = Initialization::select('*')
            ->where('type', 1)
            ->orderBy('id', 'desc')
            ->first();
        return view('manualcontrol', ['init' => $init]);
    }

    public function sensorcontrol()
    {
        $init = Initialization::select('*')
            ->where('type', 2)
            ->orderBy('id', 'desc')
            ->first();
        return view('sensorcontrol', ['init' => $init]);
    }

    public function getinit()
    {
        try {
            $init = Initialization::select('*')
                ->where('type', 2)
                ->orderBy('id', 'desc')
                ->first();

            return response()->json([$init, 'message' => 'Data saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save data', 'message' => $e->getMessage()], 500);
        }
    }

    public function initialization(Request $request)
    {
        try {
            $new_init = new Initialization();
            $new_init->temperature = $request->temperature;
            $new_init->humidity = $request->humidity;
            $new_init->light = $request->light;
            $new_init->type = $request->type;
            $new_init->save();
            return redirect()->route('home')->with('message', 'データ保存完了');
        } catch (\Exception $e) {
            return redirect()
                ->route('manualcontrol')
                ->with(['error' => 'データ保存失敗', 'message' => $e->getMessage()]);
        }
    }
}

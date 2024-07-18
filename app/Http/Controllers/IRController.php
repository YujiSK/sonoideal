<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class IRController extends Controller
{
    public function sendIR(Request $request)
    {
        $irData = $request->input('irData');
        $raspberryPiUrl = 'http://raspberrypi.local/send-ir'; // Raspberry Piのアドレス

        $client = new Client();
        $response = $client->post($raspberryPiUrl, [
            'form_params' => ['irData' => $irData]
        ]);

        return response()->json(['status' => 'success']);
    }

    public function sendToArduino()
    {
        // 最新のデータをデータベースから取得
        $data = DB::table('your_table_name')
                  ->orderBy('created_at', 'desc')
                  ->first();

        // データをPythonに送信
        $raspberryPiUrl = 'http://raspberrypi.local/send-to-arduino'; // Raspberry Piのアドレス
        $client = new Client();
        $response = $client->post($raspberryPiUrl, [
            'form_params' => ['data' => json_encode($data)]
        ]);

        return response()->json(['status' => 'success']);
    }

    // 10進数を16進数に変換し、バイナリ文字列を生成する関数
    private function decToBinaryString($num, $length)
    {
        return str_pad(decbin($num), $length, '0', STR_PAD_LEFT);
    }

    private function encodeToNEC($temperature, $humidity, $light)
    {
    }

    private function decodeFromNEC($necData)
    {
    }

    public function sendInfraRed(Request $request)
    {
        // Example: Retrieve data from request
        $temperature = $request->input('temperature');
        $humidity = $request->input('humidity');
        $light = $request->input('light');

        // Encode data to NEC format
        $necData = $this->encodeToNEC($temperature, $humidity, $light);

        // Example: Output the NEC data (for testing purposes)
        return response()->json(['nec_data' => $necData]);
    }

    public function convertToNEC(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'temperature' => 'required|integer',
            'humidity' => 'required|integer',
            'light' => 'required|integer',
        ]);

        // Retrieve validated data
        $temperature = $validatedData['temperature'];
        $humidity = $validatedData['humidity'];
        $light = $validatedData['light'];

        // Encode data to NEC format
        $necData = $this->encodeToNEC($temperature, $humidity, $light);

        // Return view with NEC data
        return view('infrared.necConversion', ['necData' => $necData]);
    }

    public function convertToTXT(Request $request)
    {
        // Validate NEC data input
        $validatedData = $request->validate([
            'necData' => 'required|string',
        ]);

        // Retrieve NEC data from input
        $necDataString = $validatedData['necData'];
        $necDataString = str_replace(["\r", "\n", "\t", '[', ',]'], '', $necDataString);

        // Convert NEC data string to array
        $necData = array_map('trim', explode(',', $necDataString));

        // Decode NEC data
        $decodedData = $this->decodeFromNEC($necData);

        // Return view with decoded NEC data
        return view('infrared.necConversion', ['decodedData' => $decodedData]);
    }
}

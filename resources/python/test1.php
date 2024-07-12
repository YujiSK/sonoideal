<?php

// ヘッダーとフッター
$header = [9000, 4500]; // Header (9ms burst and 4.5ms space)
$footer = [560, 800]; // Footer (leader burst)

// 光度、温度、湿度のデータ (例として100を使用)
$luminosity = 100; // 光度
$temperature = 25; // 温度
$humidity = 60; // 湿度

// カスタマーコード (例として0x1A2Bを使用)
$customer_code = 0x1a2b;

// 反転データを生成する関数
if (!function_exists('invertData')) {
    function invertData($data)
    {
        return $data ^ 0xff; // データのビットを反転
    }
}

// 10進数を16進数に変換し、バイナリ文字列を生成する関数
if (!function_exists('decToBinaryString')) {
    function decToBinaryString($num, $length)
    {
        return str_pad(decbin($num), $length, '0', STR_PAD_LEFT);
    }
}

// バイナリ文字列をNECフォーマットのパルス列に変換する関数
if (!function_exists('binaryStringToNecPulses')) {
    function binaryStringToNecPulses($bin_str)
    {
        $pulses = [];
        foreach (str_split($bin_str) as $bit) {
            if ($bit == '1') {
                $pulses[] = 560; // 1のバースト
                $pulses[] = 1690; // 1のスペース
            } else {
                $pulses[] = 560; // 0のバースト
                $pulses[] = 560; // 0のスペース
            }
        }
        return $pulses;
    }
}

// データをNECフォーマットのパルス列に変換する関数
if (!function_exists('createNecFrame')) {
    function createNecFrame($customer_code, $data)
    {
        $inverted_data = invertData($data);

        $customer_code_bin = decToBinaryString($customer_code, 16);
        $data_bin = decToBinaryString($data, 8);
        $inverted_data_bin = decToBinaryString($inverted_data, 8);

        $customer_code_pulses = binaryStringToNecPulses($customer_code_bin);
        $data_pulses = binaryStringToNecPulses($data_bin);
        $inverted_data_pulses = binaryStringToNecPulses($inverted_data_bin);

        return array_merge($customer_code_pulses, $data_pulses, $inverted_data_pulses);
    }
}

// NECフォーマットのパルス列を生成
$luminosity_pulses = createNecFrame($customer_code, $luminosity);
$temperature_pulses = createNecFrame($customer_code, $temperature);
$humidity_pulses = createNecFrame($customer_code, $humidity);

// 全てのパルス列を結合
$ir_signal = array_merge($header, $luminosity_pulses, $footer, $header, $temperature_pulses, $footer, $header, $humidity_pulses, $footer);

// NECデータを出力
// echo json_encode(['ir_signal' => $ir_signal]);

// NECフォーマットのパルス列からデータをデコードする関数
function decodeNecFrame($ir_signal)
{
    global $header, $footer;

    // データの準備
    $data = [];
    $index = 0;
    $length = count($ir_signal);
    $header_length = count($header);
    $footer_length = count($footer);

    // ヘッダーの検証
    if (array_slice($ir_signal, $index, $header_length) !== $header) {
        die("Invalid header.");
    }
    $index += $header_length;

    // フッターの検証
    if (array_slice($ir_signal, $length - $footer_length, $footer_length) !== $footer) {
        die("Invalid footer.");
    }

    // データの抽出
    while ($index < $length - $footer_length) {
        $data[] = $ir_signal[$index];
        $index++;
    }

    echo "Data: " . json_encode($data) . "\n";

    // カスタマーコードの解析 (16bit)
    $customer_code = ($data[0] << 8) | $data[1];

    // データ部分の解析 (8bitデータ + 8bit反転データ)
    $real_data = [];
    for ($i = 2; $i < count($data) - 1; $i += 2) {
        $real_data[] = $data[$i];
    }

    // 反転データの解析
    $inverted_data = [];
    for ($i = 3; $i < count($data); $i += 2) {
        $inverted_data[] = $data[$i];
    }

    return [
        'customer_code' => $customer_code,
        'luminosity' => $real_data[0],
        'temperature' => $real_data[1],
        'humidity' => $real_data[2],
        'inverted_luminosity' => $inverted_data[0],
        'inverted_temperature' => $inverted_data[1],
        'inverted_humidity' => $inverted_data[2]
    ];
}

// NECデータをデコード
$decoded_data = decodeNecFrame($ir_signal);

// 結果の出力
echo "\n\n";
echo "Customer Code: 0x" . dechex($decoded_data['customer_code']) . "\n";
echo "Luminosity: " . $decoded_data['luminosity'] . "\n";
echo "Temperature: " . $decoded_data['temperature'] . "\n";
echo "Humidity: " . $decoded_data['humidity'] . "\n";
echo "Inverted Luminosity: " . $decoded_data['inverted_luminosity'] . "\n";
echo "Inverted Temperature: " . $decoded_data['inverted_temperature'] . "\n";
echo "Inverted Humidity: " . $decoded_data['inverted_humidity'] . "\n";

?>

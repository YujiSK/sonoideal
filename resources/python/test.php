<?php

// 反転データを生成する関数
if (!function_exists('invertData')) {
    function invertData($data)
    {
        return $data ^ 0xff; // データのビットを反転
    }
}

// 10進数をバイナリ文字列に変換する関数
if (!function_exists('decToBinStr')) {
    function decToBinStr($num, $length)
    {
        return str_pad(decbin($num), $length, '0', STR_PAD_LEFT);
    }
}

// バイナリ文字列をNECフォーマットのパルス列に変換する関数
if (!function_exists('binStrToNecPulses')) {
    function binStrToNecPulses($bin_str)
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

        $customer_code_bin = decToBinStr($customer_code, 16);
        $data_bin = decToBinStr($data, 8);
        $inverted_data_bin = decToBinStr($inverted_data, 8);

        $customer_code_pulses = binStrToNecPulses($customer_code_bin);
        $data_pulses = binStrToNecPulses($data_bin);
        $inverted_data_pulses = binStrToNecPulses($inverted_data_bin);

        $frame = array_merge($customer_code_pulses, $data_pulses, $inverted_data_pulses);
        return $frame;
    }
}

if (!function_exists('divideArrayIntoThree')) {
    function divideArrayIntoThree($array)
    {
        $length = count($array);
        if ($length % 32 == 0) { // 32で割り切れる場合
            // 何個に分割できるかを計算
            // customer_code_bin(16) + data_bin(8) + inverted_data_bin(8) = 32
            $denominator = $length / 32;

            // 配列を $denominator 個に分割
            $partSize = floor($length / $denominator);

            // 分割した配列を返す
            $part1 = array_slice($array, 0, $partSize);
            $part2 = array_slice($array, $partSize, $partSize);
            $part3 = array_slice($array, $partSize * 2);
            return [$part1, $part2, $part3];
        }
        return false;
    }
}

// NECフォーマットのパルス列をバイナリ文字列に変換する関数
if (!function_exists('necPulsesTobinStr')) {
    function necPulsesTobinStr($pulses, $pulse0 = [560, 560], $pulse1 = [560, 1690])
    {
        $bin_str = [];
        for ($i = 0; $i < count($pulses); $i = $i + 2) {
            if ($i + 1 != count($pulses)) {
                if ($pulses[$i] == $pulse1[0] && $pulses[$i + 1] == $pulse1[1]) {
                    $bin_str[] = 1;
                } elseif ($pulses[$i] == $pulse0[0] && $pulses[$i + 1] == $pulse0[1]) {
                    $bin_str[] = 0;
                }
            }
        }
        return $bin_str;
    }
}

// 32ビットのバイナリ文字列を(16, 8, 8)に分割して、10進数に変換する関数
if (!function_exists('binStrToDec')) {
    function binStrToDec($bin_str)
    {
        if (count($bin_str) == 32) {
            $customer_code_bin = array_slice($bin_str, 0, 16);
            $data_bin = array_slice($bin_str, 16, 8);
            $inverted_data_bin = array_slice($bin_str, 24, 8);

            $customer_code = bindec(implode($customer_code_bin));
            $data = bindec(implode($data_bin));
            $inverted_data = bindec(implode($inverted_data_bin));

            return [$customer_code, $data, $inverted_data];
        }
    }
}

// ヘッダーとフッター
$header = [9000, 4500]; // Header (9ms burst and 4.5ms space)
$footer = [560]; // Footer (leader burst)

// 光度、温度、湿度のデータ (例として100を使用)
$luminosity = 100; // 光度
$temperature = 25; // 温度
$humidity = 60; // 湿度

// カスタマーコード (例として0x1A2Bを使用)
$customer_code = 0x1a0a;

// ____________________ エンコード ____________________

// NECフォーマットのパルス列を生成
$luminosity_pulses = createNecFrame($customer_code, $luminosity);
$temperature_pulses = createNecFrame($customer_code, $temperature);
$humidity_pulses = createNecFrame($customer_code, $humidity);

// 全てのパルス列を結合
$all_pulses = array_merge($header, $luminosity_pulses, $temperature_pulses, $humidity_pulses, $footer);

echo "\nall_pulses: ";
echo implode(", ", $all_pulses);

// ____________________ デコード ____________________

// NECフォーマットのパルス列からデータをデコードする関数
$pulse0 = [560, 560];
$pulse1 = [560, 1690];
$decoded = necPulsesToBinStr($all_pulses, $pulse0, $pulse1);
list($luminosity_code_bin, $temperature_code_bin, $humidity_code_bin) = divideArrayIntoThree($decoded);

// 10進数に変換
list($luminosity_code, $temperature_code, $humidity_code) = [
    binStrToDec($luminosity_code_bin),
    binStrToDec($temperature_code_bin),
    binStrToDec($humidity_code_bin)
];

echo "\ntemperature_code: ";
var_dump($temperature_code);

echo "\nluminosity_code:  ";
var_dump($luminosity_code);

echo "\nhumidity_code:    ";
var_dump($humidity_code);

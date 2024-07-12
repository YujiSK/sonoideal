<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEC Data Conversion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-10 bg-gray-100">
    <h1 class="font-semibold text-2xl mb-4">NEC Data Conversion</h1>

    <!-- NEC エンコードフォーム -->
    <form method="POST" action="{{ route('convertToNEC') }}" class="mb-8">
        @csrf
        <label for="temperature" class="block mb-2">Temperature:</label>
        <input type="number" id="temperature" name="temperature" required
            class="border border-gray-300 p-2 rounded-md w-full mb-4">

        <label for="humidity" class="block mb-2">Humidity:</label>
        <input type="number" id="humidity" name="humidity" required class="border border-gray-300 p-2 rounded-md w-full mb-4">

        <label for="light" class="block mb-2">Light:</label>
        <input type="number" id="light" name="light" required class="border border-gray-300 p-2 rounded-md w-full mb-4">

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition duration-200">Convert to NEC Data</button>
    </form>

    <!-- NEC デコードフォーム -->
    <h2 class="font-semibold text-xl mb-4">Decode NEC Data</h2>
    <form method="POST" action="{{ route('convertToTXT') }}" class="mb-8">
        @csrf
        <label for="necData" class="block mb-2">Enter NEC Data:</label>
        <textarea id="necData" name="necData" rows="4" cols="50" class="border border-gray-300 p-2 rounded-md w-full mb-4" required></textarea>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition duration-200">Decode NEC Data</button>
    </form>

    <!-- 変換結果表示 -->
    @if (isset($necData))
        <h2 class="font-semibold text-xl mb-2">Converted to NEC Data:</h2>
        <div class="border border-gray-300 p-4 rounded-md bg-white mb-4">
            [
            <br>
            @foreach ($necData as $key => $value)
                <span>{{ sprintf('%04d', $value) }},</span>
                @if (($key + 1) % 4 == 0 && $key + 1 != count($necData))
                    <br>
                @endif
            @endforeach
            <br>
            ]
        </div>
    @endif

    <!-- デコード結果表示 -->
    @if (isset($decodedData))
        <h2 class="font-semibold text-xl mb-2">Decoded NEC Data:</h2>
        <pre class="border border-gray-300 p-4 rounded-md bg-white">{{ json_encode($decodedData, JSON_PRETTY_PRINT) }}</pre>
    @endif
</body>

</html>

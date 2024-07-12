<!DOCTYPE html>
<html>

<head>
    <title>Sensor Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-screen bg-gray-300 p-10">
        <h1>Latest Sensor Data</h1>
        <table class="border">
            <tr>
                <th>ID</th>
                <th>Temperature</th>
                <th>Humidity</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            @foreach ($sensor_datas as $data)
                <?php
                $createdAt = explode(' ', $data->created_at);
                $date = $createdAt[0];
                $time = $createdAt[1];
                ?>
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ number_format($data->temperature, 2) }}</td>
                    <td>{{ number_format($data->humidity, 2) }}</td>
                    <td>{{ $date }}</td>
                    <td>{{ $time }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>

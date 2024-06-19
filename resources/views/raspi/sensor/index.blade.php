<!DOCTYPE html>
<html>
<head>
    <title>Sensor Data</title>
</head>
<body>
    <h1>Latest Sensor Data</h1>
    <table border="1">
        <tr>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Timestamp</th>
        </tr>
        @foreach ($sensor_data as $data)
            <tr>
                <td>{{ $data->temperature }}</td>
                <td>{{ $data->humidity }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
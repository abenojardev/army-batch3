<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redis</title>
</head>
<body>
    <h1>
        Execution time : {{ $execution_time }}
    </h1>
    <h1>
        Load time : <span id="load_time"></span>
    </h1>

    <ul>
        @php
            $doctors = collect($doctors);
        @endphp
        @foreach($doctors->chunk(500) as $doctor_data)
            @foreach($doctor_data as $doctor)
                <li>
                    {{ $doctor->name }}
                </li>
            @endforeach
        @endforeach
    </ul>

    <script>
        window.onload = () => {
            loadTime = parseInt(
                window.performance.timing.domContentLoadedEventEnd 
                - 
                window.performance.timing.navigationStart
            ) / 1000;

            document.getElementById('load_time').innerHTML = loadTime;
        }
    </script> 
</body>
</html>
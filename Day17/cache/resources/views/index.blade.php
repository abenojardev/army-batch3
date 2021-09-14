<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Execution time : {{ $execution_time }}
    </h1>
    <h1>
        Load time : <span id="load_time"></span>
    </h1>

    <ul>
        @foreach($doctors as $doctor)
            <li>
                {{ $doctor->name }}
            </li>
        @endforeach
    </ul>

    <script>

    </script> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="row p-5">
        <div class="col-12 pb-2">
            <table class="table"> 
                <thead>
                    <tr>
                        <th scope="col">Alpha Code</th>
                        <th scope="col">Country</th>
                        <th scope="col">Region</th>
                        <th scope="col">Sub Region</th> 
                        <th scope="col">Population</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($countries as $key => $country)
                        <tr>
                            <td>{{ $country->alpha2Code }}</td> 
                            <td>{{ $country->name }}</td> 
                            <td>{{ $country->region }}</td> 
                            <td>{{ $country->subregion }}</td> 
                            <td>{{ number_format($country->population, 2, '.', ',') }}</td>  
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>

    <!-- JavaScript Bundle with Popper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

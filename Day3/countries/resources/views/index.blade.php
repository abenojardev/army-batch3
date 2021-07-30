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

        @foreach($countries as $key => $country)
            <div class="col-2 pb-2">
                <div class="card">
                    <a data-bs-toggle="modal" data-bs-target="#country_{{ $key }}" >
                        <img src="{{ $country->flag }}" class="card-img-top" alt="...">
                        <div class="card-body"> 
                            <p class="card-text">
                                {{ $country->name }}   
                            </p> 
                        </div>
                    </a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="country_{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <img src="{{ $country->flag }}" width="100%">
                    </div> 
                </div>
                </div>
            </div>
        @endforeach

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
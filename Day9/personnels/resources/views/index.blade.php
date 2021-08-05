<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class="p-5">
    
    <a href="" class="btn btn-success">Create Personnel</a>

    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Division</th>
                <th scope="col">Rank</th>
                <th scope="col">Badge Number</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $person)
                <tr>
                    <th scope="row">{{ $person->id }}</th>
                    <td>{{ $person->first_name }}</td>
                    <td>{{ $person->last_name }}</td>
                    <td>{{ $person->division }}</td>
                    <td>{{ $person->rank }}</td>
                    <td>{{ $person->badge_number }}</td>
                    <td>
                        <a href="" class="btn btn-xs btn-warning">Update</a>
                        <a href="" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>  
            @endforeach
        </tbody>
    </table>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
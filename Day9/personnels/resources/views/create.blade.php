<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class="p-5"> 
    <form action="{{ URL::route('create_save') }}" method="post">
        @csrf
        <div class="form-group mb-2">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name"> 
        </div>
        <div class="form-group mb-2">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name"> 
        </div> 
        <div class="form-group mb-2">
            <label>Division</label>
            <input type="text" class="form-control" name="division"> 
        </div>
        <div class="form-group mb-2">
            <label>Rank</label>
            <input type="text" class="form-control" name="rank"> 
        </div>
        <div class="form-group mb-2">
            <label>Badge Number</label>
            <input type="text" class="form-control" name="badge_number"> 
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body> 
</html>
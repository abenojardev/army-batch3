<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-danger">  
    <div class="row d-flex flex-row justify-content-center mt-5">
        <div class="col-md-4 col-12">
            <div class="text-center">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/panda-express-logo-1-logo-png-transparent.png" class="card-img-top" style="width:35%;">
            </div>
            <div class="card w-100 mt-4"> 
                <div class="card-body">
                    <h5 class="card-title">Sign In</h5>
                    <p class="card-text text-muted">
                        <small>Access using your email and passcode.</small>
                    </p>
                    
                    <form>
                        <div class="mb-3">
                            <label class="form-label">
                                <small>Email address</small>
                            </label>
                            <input type="email" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                <small>Password</small>
                            </label>
                            <input type="password" class="form-control">
                        </div> 
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger">Sign In</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
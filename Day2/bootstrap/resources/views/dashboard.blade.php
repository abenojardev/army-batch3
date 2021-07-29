<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>   
    <div class="row">
        <div class="col-12">
            @include('components.navbar')
        </div>
    </div>

    <div class="row">
        <div class="col-3 p-0">
            @include('components.sidebar')
        </div>
        <div id="content" class="col-9 p-4">
            <div class="card">
                <div class="card-body pt-4">
                    <h5 class="card-title">Accounts</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <small>Active accounts we can see on the dashboard</small>
                    </h6>  
                    <div class="table-responsive mt-5">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td class="text-muted fs-6"><small>Fullname</small></td>
                                    <td class="text-muted fs-6"><small>Email Address</small></td>
                                    <td class="text-muted fs-6"><small>Location</small></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>jd2021@gmail.com</td>
                                    <td>Philippines</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              Dropdown button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                              <li><a class="dropdown-item" href="#">Action</a></li>
                                              <li><a class="dropdown-item" href="#">Another action</a></li>
                                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                          </div>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


   


    <style>
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
            background-color: #ffc007;
        } 
        #sidebar{
          height: 100vh;
        }
        body{
          overflow-y: hidden;
          background: #e9e9e9;
        }
        #content{ 
          overflow-y: scroll; 
          height: 90vh; 
          background: #e9e9e9;
        }
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
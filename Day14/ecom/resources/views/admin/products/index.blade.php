
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Admin dashboard</title> 
    <link href="{{ URL::asset('theme/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link href="{{ URL::asset('theme/admin/css/admin.css') }}" rel="stylesheet"> 
    <link href="{{ URL::asset('theme/admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"> 
    <link href="{{ URL::asset('theme/admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"> 
    <link href="{{ URL::asset('theme/admin/css/custom.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
        <a class="navbar-brand">
            <img src="{{ URL::asset('theme/img/logo.svg') }}" alt="" width="142" height="36">
        </a> 
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>  
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">   
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fa fa-fw fa-sign-out"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Data Table Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Price</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div> 
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('theme/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('theme/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('theme/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ URL::asset('theme/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('theme/admin/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('theme/admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('theme/admin/vendor/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('theme/admin/js/admin.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ URL::asset('theme/admin/js/admin-datatables.js') }}"></script>
</body>

</html>
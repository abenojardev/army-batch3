@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="box_general padding_bottom">
                        <div class="header_box version_2">
                            <h2><i class="fa fa-lock"></i>Change password</h2>
                        </div>
                        <div class="form-group">
                            <label>Old password</label>
                            <input class="form-control" type="password">
                        </div>
                        <div class="form-group">
                            <label>New password</label>
                            <input class="form-control" type="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm new password</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
@endsection
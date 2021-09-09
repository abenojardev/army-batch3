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
                            <h2>Create Product</h2>
                        </div>
                        name
                    category
                    price
                    description
                    image
                        <form action="">
                            <div class="form-group">
                                <label>Old password</label>
                                <input class="form-control" type="password">
                            </div>
                            <div class="form-group">
                                <label>New password</label>
                                <input class="form-control" type="password">
                            </div>
                            <div class="form-group">
                                <button>Save</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
@endsection
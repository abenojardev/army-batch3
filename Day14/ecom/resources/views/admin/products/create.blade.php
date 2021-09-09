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
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" required>
                            </div> 
                            <div class="form-group">
                                <label>Category</label>
                                <input class="form-control" type="text" name="category" required>
                            </div> 
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" name="price" required>
                            </div> 
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" name="description" required>
                            </div> 
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="text" name="img" required>
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
@extends('main-layout')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                
                <a href="{{ URL::route('category.create') }}" class="btn btn-dark">
                    Add New Category
                </a>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th> 
                            <th scope="col">Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td> 
                                <td>
                                    <a href="{{ URL::route('category.update', $item->id) }}" class="btn btn-warning btn-sm">
                                        Update
                                    </a>
                                    <a href="{{ URL::route('category.delete', $item->id) }}" class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
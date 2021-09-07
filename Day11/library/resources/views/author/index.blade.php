@extends('main-layout')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                
                <a href="{{ URL::route('author.create') }}" class="btn btn-dark">
                    Add New Author
                </a>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($author as $item)
                            <tr> 
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->first_name }}</td> 
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->middle_name }}</td> 
                                <td>
                                    <a href="{{ URL::route('author.update', $item->id) }}" class="btn btn-sm btn-warning">
                                        Update
                                    </a>
                                    <a href="{{ URL::route('author.delete', $item->id) }}" class="btn btn-sm btn-danger">
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
@extends('main-layout')
@section('content')
    <div class="container">
        <div class="row pt-5">
            
            <div class="col-3 mb-2">
                <a href="{{ URL::route('book.create') }}" class="btn btn-sm btn-dark">Add new Book</a>
            </div>
            <div class="col-9"></div>

            @foreach($books as $book)
                <div class="col-3 mb-2">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build 
                                on the card title and make up the 
                                bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">
                                Go somewhere
                            </a>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>
@endsection
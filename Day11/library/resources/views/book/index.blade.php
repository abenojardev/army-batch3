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
                        <img src="{{ URL::asset('storage/'.$book->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $book->title }}
                            </h5>
                            <p class="card-text">
                                {{ $book->description }} <br>

                                Author :  
                                {{ $book->first_name }} 
                                {{ $book->middle_name }} 
                                {{ $book->last_name }} <br>

                                Category: 
                                {{ $book->name }}
                            </p> 
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>
@endsection
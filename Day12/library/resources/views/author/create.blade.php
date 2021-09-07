@extends('main-layout')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <form method="post" action="{{ URL::route('author.create.save') }}">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control" name="first_name"> 
                  </div> 
                  <div class="mb-3">
                    <label class="form-label">Middle name</label>
                    <input type="text" class="form-control" name="middle_name"> 
                  </div> 
                  <div class="mb-3">
                    <label class="form-label">Last name</label>
                    <input type="text" class="form-control" name="last_name"> 
                  </div> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
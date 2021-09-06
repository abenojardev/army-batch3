@extends('main-layout')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <form>
                  <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control">
                  </div> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
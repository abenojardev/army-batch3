@extends('main-layout')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <form method="post" >
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" required>
                  </div> 
                  <button class="btn btn-dark">
                    Save
                  </button>
                </form>
            </div>
        </div>
    </div>
@endsection
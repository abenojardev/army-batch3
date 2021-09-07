@extends('main-layout')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <form method="post" action="{{ URL::route('book.create.save') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title"> 
                  </div> 
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description"> 
                  </div> 
                  <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="img"> 
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Author</label>
                <select class="form-control" name="author_id"> 
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">
                                {{ $author->first_name}}
                                {{ $author->last_name}}
                                {{ $author->middle_name}}
                            </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-control" name="category_id"> 
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }} 
                            </option>
                        @endforeach
                    </select>
                  </div> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
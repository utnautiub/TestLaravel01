@extends('layouts.app')

@section('title', 'Edit Author')


@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Book Information
                </div>
                <div class="float-end">
                    <a href="{{ route('women.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('women.update', $woman->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">ID:</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ $woman->id }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bookName" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('bookName') is-invalid @enderror" id="bookName" name="name" value="{{ $woman->name }}">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="bookYear" class="col-md-4 col-form-label text-md-end text-start">Biography</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('bookYear') is-invalid @enderror" id="bookYear" name="biography" value="{{ $woman->biography }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Field Of Work</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('authorId') is-invalid @enderror" id="authorId" name="field_of_work" value="{{ $woman->field_of_work }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('authorId') is-invalid @enderror" id="authorId" name="image" value="{{ $woman->image }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Birth Date</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('authorId') is-invalid @enderror" id="birth_date" name="birth_date" value="{{ $woman->birth_date }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
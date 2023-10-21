@extends('layouts.app')

@section('title', 'Add Book')


@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Woman
                </div>
                <div class="float-end">
                    <a href="{{ route('women.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
            <form action="{{ route('women.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="bookName" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                        <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bookYear" class="col-md-4 col-form-label text-md-end text-start">Biography</label>
                        <div class="col-md-6">
                        <input type="text" name="biography" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Field Of Work</label>
                        <div class="col-md-6">
                        <input type="text" name="field_of_work" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                        <div class="col-md-6">
                        <input type="text" name="image" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Birth Date</label>
                        <div class="col-md-6">
                        <input type="text" name="birth_date" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add New Book">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>

@endsection


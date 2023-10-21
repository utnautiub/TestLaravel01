@extends('layouts.app')

@section('title', 'Show Book')


@section('content')


<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Show Book Information
                </div>
                <div class="float-end">
                    <a href="{{ route('women.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">  
                    <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">ID:</label>
                        <div class="col-md-6">                            
                            <input type="text" class="form-control" id="id" value="{{ $woman->id }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bookName" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="bookName" value="{{ $woman->name }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bookYear" class="col-md-4 col-form-label text-md-end text-start">Biography</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="bookYear" value="{{ $woman->biography }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Field Of Work</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="authorId" value="{{ $woman->field_of_work }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="authorId" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="authorId" value="{{ $woman->image }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="created_at" class="col-md-4 col-form-label text-md-end text-start">Created At</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="created_at" value="{{ $woman->created_at }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="updated_at" class="col-md-4 col-form-label text-md-end text-start">Updated At</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="updated_at" value="{{ $woman->updated_at }}" readonly>
                        </div>
                    </div>                
            </div>
        </div>
    </div>    
</div>


@endsection


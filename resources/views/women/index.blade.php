@extends('layouts.app')

@section('title', 'Women')

@section('content')

@if (session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif



<a href="{{route('women.create')}}">
    <button type="button" class="btn btn-success">Add New Woman</button>
</a>

<table class="table text-center">
<thead>
    <tr>
        <th scope="col">#id</th>
        <th scope="col">Name</th>
        <th scope="col">Biograppy</th>
        <th scope="col">Field Of Work</th>
        <th scope="col">Image</th>
        <th scope="col">Birth_Date</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    @foreach($women as $woman)

    <tr>
    <td>{{$woman->id}}</td>
    <td>{{$woman->name}}</td>
    <td>{{$woman->biography}}</td>
    <td>{{$woman->field_of_work}}</td>
    <td>{{$woman->image}}</td>
    <td class="long-column">{{$woman->birth_date}}</td>
    <td class="long-column">
        <a href="{{ route('women.show', $woman->id) }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-eye"></i></a>
        <a href="{{ route('women.edit', $woman->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>   
        <button type="button" class="btn btn-danger btn-sm fs-7" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $woman->id }}">
            <i class="fa-solid fa-trash"></i>
        </button>
    </td>
    <!-- model delete --> 
        <!-- Modal -->
        <div class="modal fade" id="deleteModal-{{ $woman->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this woman?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('women.destroy', $woman->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </tr>
    @endforeach
    
</tbody>
</table>

@endsection


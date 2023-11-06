@extends('layouts.app')

@section('contents')

<div id="statusMessage" class="alert" style="display: none;"></div>

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }


    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>



@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

<div class="container mt-5">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('users/create') }}" class="btn btn-info">Add New User</a>
        </div>
        <div class="col-md-8 mt-4">
            <table class="table table-hover display nowrap text-center" id="example" style="width:100%">
                <thead class="table table-bordered">
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">User Name</th>
                        <th class="text-center" scope="col">User Email</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $item)
                    <tr>
                        <td>{{ $item->id ?? '' }}</td>
                        <td>{{ $item->name ?? '' }}</td>
                        <td>{{ $item->email ?? '' }}</td>
                        <td class="align-middle">
                            <a href="{{ route('users.show', $item->id) }}" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('users.destroy', $item->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                    <tr>
                        <td class="text-center" colspan="5">Users not found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
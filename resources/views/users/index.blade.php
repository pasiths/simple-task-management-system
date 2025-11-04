@extends('users.layout')

@section('content')
<div class="row pb-3">
   <div class="col-lg-12 margin-tb ">
    <div class="pull-left">
        <h2>Users Management</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
    </div>
   </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->is_active == 1 ? 'true' : 'false' }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="post">
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $users->links() !!}
@endsection

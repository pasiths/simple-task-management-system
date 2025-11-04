@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb pb-3">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<from action="{{ url('/user-store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group pb-2">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Example" required>
            </div>
            <div class="form-group pb-2">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="example@mail.com" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class="btn btn-primary" type="submit" >Save</button>
        </div>
    </div>
</from>

@endsection

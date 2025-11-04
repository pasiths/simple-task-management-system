@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show User Details</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
<div class="form-group">
    <strong>Email:</strong>
    {{ $user->email }}
</div>
    </div>
</div>
@endsection

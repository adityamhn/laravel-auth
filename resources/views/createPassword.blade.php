@extends('layouts.app')
  
@section('content')
<div class="row px-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new Password</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('passwords.index') }}"> Back</a>
        </div>
    </div>
</div>

   
<form action="{{ route('passwords.store') }}" method="POST">
    @csrf
     <div class="row px-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name : </strong>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username : </strong>
                <input type="text" name="username" class="form-control" placeholder="Enter username">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password : </strong>
                <input class="form-control" name="password" placeholder="Enter your password" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
   
</form>
@endsection
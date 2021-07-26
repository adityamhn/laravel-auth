@extends('layouts.app')
   
@section('content')
    <div class="row px-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Password</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('passwords.index') }}"> Back</a>
            </div>
        </div>
    </div>
   

  
    <form action="{{ route('passwords.update',$password->id) }}"  method="POST">
        @csrf
        @method('PUT')
   
         <div class="row px-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $password->name }}" class="form-control" placeholder="Enter Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="username" value="{{ $password->username }}" class="form-control" placeholder="Enter Username">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input id="edit-pass-field" type="password" name="password" value="{{ $password->password }}" class="form-control" placeholder="Enter password">
                    <div onclick="ToggleEditPass()" id="edit-pass-toggle" style="cursor:pointer;">show</div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
   
    </form>
@endsection
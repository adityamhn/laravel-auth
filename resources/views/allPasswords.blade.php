@extends('layouts.app')

@section('content')

   <div class="row px-4">
        <div class="col-lg-12 margin-tb my-4">
            <div class="pull-left">
                <h2>Manage Your Passwords</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('passwords.create') }}">Add Password</a>
            </div>
        </div>
    </div>
   

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>username</th>
            <th>Password</th>
            <th width="250px">Action</th>
        </tr>

        @foreach ($passwords as $password)
        <tr>
            <td>{{$password -> id }}</td>
            <td>{{$password -> name }}</td>
            <td>{{$password -> username }}</td>
            <td><input id="password-field{{$password -> id }}" type="password" value="{{ $password -> password}}" readonly /><i onclick="togglePassword({{$password -> id }})" id="eye-toggle{{$password -> id }}" style="cursor:pointer;" class="fa fa-eye ml-2" /></td>
            <td>
            <form action="{{ route('passwords.destroy',$password->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('passwords.edit',$password->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>
  

@endsection

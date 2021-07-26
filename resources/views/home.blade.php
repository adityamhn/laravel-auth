@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

   <div class="row px-4">
        <div class="col-lg-12 margin-tb my-4">
            <div class="pull-left">
                <h2>Manage Your Passwords</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=" ">Add Password</a>
            </div>
        </div>
    </div>
   

   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Website</th>
            <th>Password</th>
            <th width="250px">Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>passowrd</td>
            <td>asdadkjahdjaksh</td>
            <td>
                <form method="POST">
   
    
                    <a class="btn btn-primary" href=" ">Edit</a>

      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </table>
  

@endsection

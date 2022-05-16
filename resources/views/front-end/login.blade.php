@extends('front-end.master')



@section('content')

<div class="container" style="margin-bottom:20px;">
    
    <div class="container" style="width: 60%; margin:0 auto;">
        <h2>Customer Login</h2>
        <form action="{{ route('customerlogin.auth') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
          </div>
          
          <button style="margin-top: 10px; width:100px;" type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>

  </div>

@endsection

@extends('layouts.app')
@section('content')
    <!-- ========== signin-section start ========== -->

<div class="container">
    <div class="row  justify-content-center mt-5">
        <div class="col-12">
        <div class="title mb-30">
            <h3 class="text-center">Sign in</h3>
        </div>
        </div>
    </div>
    <div class="row  justify-content-center">
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="jumbotron">            
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="Email">Email</label>
                      <input type="email" id="Email" placeholder="Enter Your Email" class="form-control" name="email" required/>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="Password">Password</label>
                      <input type="password" class="form-control" placeholder="Enter Your Password" id="Passsword" name="password" required/>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-sm-6">
                    <div class="row">
                    <div class="col-sm-3">
                      <button class="btn btn-success" type='submit'>Login</button>
                    </div>  
                    <div class="col-sm-3">
                      <button class="btn btn-primary" type='button'><a href="{{ route('register')}}" style="color:white">Register</a></button>
                    </div>  
                    </div>  
                  </div>
                </div>
    </div>        
                <!-- end row -->
    </form>   
    </div>    
</div>



    <!-- ========== signin-section end ========== -->
@endsection
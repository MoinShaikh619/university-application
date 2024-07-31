@extends('layouts.app')
@section('content')
    <!-- ========== signin-section start ========== -->

<div class="container">
    <div class="row  justify-content-center mt-5">
        <div class="col-12">
        <div class="title mb-30">
            <h3 class="text-center">Register</h3>
        </div>
        </div>
    </div>
    <div class="row  justify-content-center">
    <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="jumbotron">          
                <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                      <label for="Name">Name</label>
                      <input type="text" id="Name" placeholder="Enter Your Name" class="form-control" name="name" required/>
                    </div>
                  </div>
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
                    <div class="col-sm-12">
                      <button class="btn btn-success" type='submit'>Create Account</button>
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
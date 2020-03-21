@extends('layouts.app')

@section('content')
<title>Registration</title>
<div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">
                     <h1 class="text-center">Registration Form</h1>
                   
                    

                    <form class="form-group text-center">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>First Name:</label>
                                <input id="Firstname" type="text" class="form-control @error('Firstname') is-invalid @enderror" name="Firstname" value="{{ old('Firstname') }}" required autocomplete="Firstname" autofocus placeholder="Enter Your First Name..">

                                @error('Firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> <br>
                            <div class="col-lg-6">
                                <label>Middle Name:</label>
                                <input id="Middlename" type="text" class="form-control @error('Middlename') is-invalid @enderror" name="Middlename" value="{{ old('Middlename') }}" required autocomplete="Middlename" autofocus placeholder="Enter Your Middle Name..">

                                @error('Middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div> <br>                        

                            
                                <label>Last Name:</label> 
                                <input id="Lastname" type="text" class="form-control @error('Lastname') is-invalid @enderror" name="Lastname" value="{{ old('Lastname') }}" required autocomplete="Lastname" autofocus placeholder="Enter Your Last Name..">

                                @error('Lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <label>Mobile</label>
                                <input id="Mobile" type="number" class="form-control @error('Mobile') is-invalid @enderror" name="Mobile" value="{{ old('Mobile') }}" required autocomplete="Mobile" placeholder="Optionally">

                                @error('Mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>
                        

                            <div class="col-lg-6">
                                <label>Phone Number</label>
                               <input id="Phone" type="number" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}" required autocomplete="Mobile" placeholder="Optionally">
                               @error('Phone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror 
                            </div>
                        </div><br>

                        <label>E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br>
                        

                        <div class="row">
                            <div class="col-lg-6">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <div class="col-lg-6">
                                <label>Re-type Password:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Enter Password">
                            </div>
                        </div><br> <br>
                            <select class="form-control">
                            <option>Choose Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            
                        </select>
                        <br>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">
                                    
           </form>
       </div>
   </div>

@endsection
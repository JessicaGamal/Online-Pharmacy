@extends('layouts.app')

@section('content')

<div class="container">
   <h1>LOGIN</h1>
 <form method="POST" action="{{ route('login') }}">
            @csrf

    <div class="tbox">
      <label >email address</label>

         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autofocusd>

             @error('email')
               <span class="invalid-feedback" role="alert">
                <strong>invalid username or password</strong>
                  </span>
                    @enderror
                    </div>
    <div class="tbox">
       <label >password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autofocusd>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>invalid username or password</strong>
                             </span>
                                @enderror
        </div>
        <button type="submit" class="button">
                                 LOGIN
                </button>
                <br>
    <a class="b1" href="{{ route('register') }}">
                CREATE ANACCOUNT
        </a>
                    </form>
    </div>
@endsection

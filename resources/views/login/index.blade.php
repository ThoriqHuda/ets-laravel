@extends('layouts.main')

@section('container')


<main class="form-signin">
    <form action="login" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
            
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password"  placeholder="Password">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
            
        @enderror
      </div>
  
     
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
    <small>Not Registered? <a href="/register">Register Now!</a></small>
  </main>   

@endsection
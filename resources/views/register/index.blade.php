@extends('layouts.main')

@section('container')
    
<main class="form-signin">
    <form action="/register" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Registration form</h1>
  
      <div class="form-floating">
        <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
            
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">{{ $message }}</div>
            
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
            
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
            
        @enderror
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>   

@endsection
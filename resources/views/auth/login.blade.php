@extends('layouts.app')
{{-- <x-logout-message /> --}}
@section('content')
<div class="container">
        <form class="form-signin" method="POST" action="{{ route('login') }}" novalidate>
            @csrf
        <img class="mb-4" src="{{ asset('assets/img/geote.png') }}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        {{-- <label for="inputEmail" class="sr-only">Email address</label> --}}

        <input type="email" id="inputEmail" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        {{-- <label for="inputPassword" class="sr-only">Password</label> --}}
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; GeoTE {{ date('Y') }}</p>
      </form>
</div>
@endsection

@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/custom/css/auth.min.css') }}" rel="stylesheet">
@endpush

@push('js')
@endpush

@section('content')
    <main class="form-auth">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autofocus>
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" name="password" placeholder="Password" required autocomplete="current-password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="checkbox mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="row mb-0">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
@endsection

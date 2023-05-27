@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/custom/css/auth.min.css') }}" rel="stylesheet">
@endpush

@push('js')
@endpush

@section('content')
    <main class="form-auth">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-floating">
                <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name">{{ __('Name') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" autofocus>
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

            <div class="form-floating">
                <input type="password" id="password-confirm" class="form-control @error('password') is-invalid @enderror"
                    id="password" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
                <label for="password">{{ __('Confirm Password') }}</label>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-primary">
                {{ __('Register') }}
            </button>

        </form>

    </main>
@endsection

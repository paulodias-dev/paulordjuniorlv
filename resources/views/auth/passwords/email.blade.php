@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/custom/css/auth.min.css') }}" rel="stylesheet">
@endpush

@push('js')
@endpush

@section('content')
    <main class="form-auth">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-floating">
                <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email"
                    autofocus>
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>

        </form>
    </main>
@endsection

@extends('layouts.app')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create contact</h1>
        </div>

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name"
                        name="name" aria-describedby="nameHelp" value="{{ old('name') }}" minlength="6" required autofocus>
                    <div id="nameHelp" class="form-text">Insert name of contact</div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-md-4">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone"
                        pattern="\d{9}" maxlength="9" minlength="9" name="phone" aria-describedby="phoneHelp"
                        value="{{ old('phone') }}" required>
                    <div id="phoneHelp" class="form-text">Insert phone of contact</div>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-md-4">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                        name="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>
                    <div id="emailHelp" class="form-text">Insert email address of contact</div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 offset-md-0 mt-5">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </main>
@endsection

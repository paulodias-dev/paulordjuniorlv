@extends('layouts.app')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update contact</h1>
        </div>


        @if(session('failed'))
            <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">
                    <i class="bi bi-exclamation-triangle fs-3x"></i>
                </span>

                <div class="d-flex flex-column">
                    <h5 class="mb-1">Error!</h5>
                    <span>{{ session('failed') }}</span>
                </div>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success d-flex align-items-center p-5 mb-10">
                <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">
                    <i class="bi bi-exclamation-triangle fs-3x"></i>
                </span>

                <div class="d-flex flex-column">
                    <h5 class="mb-1">Success!</h5>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('contact.update', $contact->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name"
                        name="name" aria-describedby="nameHelp" value="{{ $contact->name }}" minlength="6" required
                        autofocus>
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
                        value="{{ $contact->phone }}" required>
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
                        name="email" aria-describedby="emailHelp" value="{{ $contact->email }}" required>
                    <div id="emailHelp" class="form-text">Insert email address of contact</div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 offset-md-0 mt-5">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>
        </form>
    </main>
@endsection

@extends('layouts.app')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail contact</h1>
        </div>


        @if (session('failed'))
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

        @if (session('success'))
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


        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>ID:</strong> {{ $contact->id }}</li>
            <li class="list-group-item"><strong>Name:</strong> {{ $contact->name }}</li>
            <li class="list-group-item"><strong>Phone:</strong> {{ $contact->phone }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $contact->email }}</li>
            <li class="list-group-item"></li>

        </ul>


        <div class="row mt-5">
            <div class="col-md-6">
                <div class="d-flex justify-content-start">
                    <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary m-1">Edit</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
                        onsubmit="return confirmDelete()">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>


    </main>
@endsection

@extends('layouts.app')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">List contacts</h1>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
                                    onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            <td><a href="{{ route('contact.show', $contact->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No contacts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $contacts->links() }}

        </div>

    </main>
@endsection

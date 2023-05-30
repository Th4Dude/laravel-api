@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-4 d-flex justify-content-between align-items-center">
        <h1>Contacts</h1>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>name</th>
                <th>e-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <ul class="d-flex list-unstyled gap-2 justify-content-end align-items-center m-0">
                        <li><a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-primary p-2">Show</a></li>
                        <li><a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#contact-{{ $contact->id }}">Delete</a></li>
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
</div>
@endsection
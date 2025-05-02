@extends('backend.layouts.master')
@section('title', 'Edit User')

@section('content')

<h2>Edit User</h2>

<form action="{{ route('userdetails.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
    </div>

    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('userdetails.userdetail') }}" class="btn btn-secondary">Back</a>
</form>

@endsection

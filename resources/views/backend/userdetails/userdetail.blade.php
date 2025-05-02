@extends('backend.layouts.master')
@section('title','userdetail')
@section('content')


<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>lastName</th>
                <th>email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->first_name ?? '' }}</td>
                <td>{{ $user->last_name ?? '' }}</td>
                <td>{{ $user->email ?? '' }}</td>

                <td>
                    <a href="{{ route('userdetails.edit', $user->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ route('userdetails.delete', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                </td>


            </tr>
            @empty
            <tr>
                <td colspan='6' class="text-center">NO RECORDS FOUND</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection

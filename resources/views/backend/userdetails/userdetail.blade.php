@extends('backend.layouts.master')
@section('title','userdetail')
@section('content')

<a href ='{{ route("category.create")}}' class='btn btn-primary mb-3 float-end'> Create</a>

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
            @forelse($user as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->first_name ?? '' }}</td>
                <td>{{ $user->last_name ?? '' }}</td>
                <td>{{ $user->email ?? '' }}</td>

                
                
                  
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

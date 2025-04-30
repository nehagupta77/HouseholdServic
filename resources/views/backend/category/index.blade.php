@extends('backend.layouts.master')
@section('title','Category')
@section('content')

<a href ='{{ route("category.create")}}' class='btn btn-primary mb-3 float-end'> Create</a>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>S.N</th>
                <th>Category_Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name ?? '' }}</td>
                <td>{{ $category->description ?? '' }}</td>
                <td>
                   <a href = "{{ asset('uploads/' . $category->image) }} "  target="_blank" >  <img src="{{ asset('uploads/' . $category->image) }}" height='100px' width='100px'> </a>
                </td>
                <td>{{ $category->status ==1 ? 'Active': 'Inactive' }}</td>
                <td>
                    <a href='{{ route("category.edit",$category->id)}}' class="btn btn-sm btn-success">Edit</a>
                    <a href='{{ route("category.delete",$category->id) }}' class="btn btn-sm btn-danger">Delete</a>
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

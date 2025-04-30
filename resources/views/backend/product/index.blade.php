@extends('backend.layouts.master')

@section('title', 'Products')

@section('content')
<a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Create Product</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Category</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <!-- join -->
                <td>{{ $product->category->name ??'' }}</td> 
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                   <a href = "{{ asset('uploads/' . $product->image) }} "  target="_blank" >  <img src="{{ asset('uploads/' . $product->image) }}" height='100px' width='100px'> </a>
                </td>
                <td>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

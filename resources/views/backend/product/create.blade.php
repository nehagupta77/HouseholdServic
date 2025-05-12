@extends('backend.layouts.master')

@section('title', 'Create Product')

@section('content')

<div class="container mt-4">
    <h2>Create Product</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Category</label>
        <select name='category' class='form-control'>
            @forelse($categories as $category)

            <option value ="{{ $category ->id}}"> {{$category->name?? ''}} </option>

            @empty
            <option>No category </option>

            @endforelse

        </select>
    </div>
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="tiny">Description</label>
        <textarea class="form-control" id="tiny" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save Product</button>
</form>
@endsection

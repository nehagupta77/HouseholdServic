@extends('backend.layouts.master')

@section('title', 'Create Price')

@section('content')

<div class="container mt-4">
    <h2>Create Price</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pricing.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
    <label for="product_id">Select Product</label>
    <select name="product_id" class="form-control" required>
        @foreach ($products as $prd)
            <option value="{{ $prd->id }}">{{ $prd->name }}</option>
        @endforeach
    </select>
</div>

    
    <!-- <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div> -->
    <div class="form-group">
        <label for="price">Price(Rs)</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="discount">Discount(%)</label>
        <input type="number" class="form-control" id="discount" name="discount" required>
    </div>
    <!-- <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div> -->
    <button type="submit" class="btn btn-primary">Save Price</button>
</form>
@endsection

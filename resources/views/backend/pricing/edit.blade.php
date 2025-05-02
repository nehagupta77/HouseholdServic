@extends('backend.layouts.master')

@section('title', 'Edit Price')

@section('content')

<div class="container mt-4">
    <h2>Edit price</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pricing.update', $price->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- <div class="form-group">
        <label for="name">Price</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
    </div> -->
    <div class="form-group">
        <label for="price">Price(Rs)</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $price->price }}" required>
    </div>
    <div class="form-group">
        <label for="discount">Discount(%)</label>
        <input type="number" class="form-control" id="discount" name="discount" value="{{ &price->discount}}" required>
    </div>
    <!-- <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
    </div> -->
    <button type="submit" class="btn btn-primary">Update Price</button>
</form>
@endsection

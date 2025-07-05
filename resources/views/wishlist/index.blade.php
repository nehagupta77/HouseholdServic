@extends('backend.layouts.master')
@section('title', 'Wishlist')
@section('content')

<div class="row">
    @forelse($wishlist as $product)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            @if($product->image)
            <img src="{{ asset('upload/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            @else
            <img src="default-image.jpg" class="card-img-top" alt="No image">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">
                    <strong>Price:</strong> {{ $product->price }}<br>
                    <strong>Description:</strong> {{ $product->description }}
                </p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-warning text-center">No products in wishlist.</div>
    </div>
    @endforelse
</div>

@endsection

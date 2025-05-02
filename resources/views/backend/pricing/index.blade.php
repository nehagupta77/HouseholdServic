@extends('backend.layouts.master')
@section('title','Price List')
@section('content')

<a href="{{ route('pricing.create') }}" class="btn btn-primary mb-3 float-end">Create</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Product Name</th>
            <th>Price (Rs.)</th>
            <th>Discount (%)</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse($prices as $price)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $price->product->product_name ?? '' }}</td>
            <td>{{ $price->price }}</td>
            <td>{{ $price->discount ?? '0' }}</td>
            <td>
                <a href="{{ route('pricing.edit', $price->id) }}" class="btn btn-sm btn-info">Edit</a>
                <a href="{{ route('pricing.delete', $price->id) }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No price records found.</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection

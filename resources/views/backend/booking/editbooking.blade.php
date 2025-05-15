@extends('backend.layouts.master')

@section('title', 'Edit Booking')

@section('content')

<div class="container mt-4">
    <h2>Edit Booking</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('booking.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $booking->full_name }}" required>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" value="{{ $booking->mobile }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="2" required>{{ old('address', $booking->address ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="date">Preferred Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $booking->date }}" required>
        </div>

        <div class="form-group">
            <label for="time">Preferred Time</label>
            <input type="time" class="form-control" id="time" name="time" value="{{ $booking->time }}" required>
        </div>

        <div class="form-group">
            <label for="problem_description">Problem Description</label>
            <textarea class="form-control" id="problem_description" name="problem_description" rows="3" required>{{ old('problem_description', $booking->problem_description ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Booking</button>
        <a href="{{ route('booking.bookingStatus') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection




@extends('backend.layouts.master')
@section('title','bookingdetails')
@section('content')


<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Full_Name</th>
                <th>Mobile</th>
                <th>Adress</th>
                <th>date</th>
                <th>Time</th>
                <th>problem_description</th>
                <th>Action</th>

                
            </tr>
        </thead>

        <tbody>
            @forelse($booking as $bookings)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $bookings->full_name ?? '' }}</td>
                <td>{{ $bookings->mobile ?? '' }}</td>
                <td>{{ $bookings->address ?? '' }}</td>
                <td>{{ $bookings->date ?? '' }}</td>
                <td>{{ $bookings->time ?? '' }}</td>
                <td>{{ $bookings->problem_description ?? '' }}</td>

                <td>
                    <a href="{{ route('booking.editbooking', $bookings->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ route('booking.delete', $bookings->id) }}" class="btn btn-danger btn-sm">Delete</a>
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

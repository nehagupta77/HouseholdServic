@extends('backend.layouts.master')
@section('title','Category')
@section('content')

<a href ='{{ route("category.create")}}' class='btn btn-primary'> Create</a>
<table border=1 class ='table'>
        <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Status</th>
        <th>Action</th>
        </tr>
@forelse($categories as $category)
<tr>
    <td> {{ $loop->iteration}} </td>
    <td> {{ $category ->name ?? ''}} </td>
    <td> {{ $category ->description ?? ''}} </td>
    <td> <img src="{{ asset('uploads/').'/'.$category ->image}}" height='100px' width='100px'> </td>
    <td> {{ $category ->status ?? ''}} </td>
    <td>
         <a href='#'> Edit </a> | 
         <a href='#'> Delete </a>
    </td>
</tr>

@empty

<tr>
    <td colspan='5'> NO RECORDS FOUND</td>
</tr>

@endforelse


        
    </table>
@endsection
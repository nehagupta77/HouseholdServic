@extends('backend.layouts.master')
@section('title','Category')
@section('content')
<table border=1>
        <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
        </tr>



        {{ dd($category)}}
    </table>
@endsection
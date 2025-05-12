@extends('backend.layouts.master')

@section('title', 'Add Category')

@section('content')
<div class="container mt-4">
    <h2>Add Category</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Category Name --}}
        <div class="form-group mb-3">
            <label for="name">Category Name:</label>
            <input type="text" class="form-control" id="name" name="name" value ='{{ $category ->name}}' required>
        </div>
        <a href = "{{ asset('uploads/' . $category->image) }} "  target="_blank" >  <img src="{{ asset('uploads/' . $category->image) }}" height='100px' width='100px'> </a>
        {{-- Category Image --}}
        <div class="form-group mb-3">
            <label for="image">Category Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        {{-- Description --}}
        <div class="form-group mb-3">
            <label for="tiny">Description:</label>
            <textarea class="form-control" id="tiny" name="description" value ='{{ $category ->description}}'></textarea>
        </div>

        {{-- Status --}}
        <div class="form-group mb-3">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="1" {{ $category->status ==1 ? 'selected' : ''}}>Active</option>
                <option value="0" {{ $category->status ==0 ? 'selected' : ''}}>Inactive</option>
            </select>
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

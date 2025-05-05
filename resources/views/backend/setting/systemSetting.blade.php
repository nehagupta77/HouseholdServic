@extends('backend.layouts.master')

@section('title', 'System Settings')

@section('content')

<div class="container mt-4">
    <h2>System Settings</h2>

    <form action="{{ route('setting.systemSetting.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="logo">Logo</label>
            @if (!empty($settings['logo']))
                <div class="mb-2">
                    <img src="{{ asset($settings['logo']) }}" alt="Logo" height="60">
                </div>
            @endif
            <input type="file" class="form-control-file" id="logo" name="logo">
        </div>

        <div class="form-group">
            <label for="hero_image">Hero Section Image</label>
            @if (!empty($settings['hero_image']))
                <div class="mb-2">
                    <img src="{{ asset($settings['hero_image']) }}" alt="Hero Image" height="80">
                </div>
            @endif
            <input type="file" class="form-control-file" id="hero_image" name="hero_image">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="site_name" name="name" placeholder="Enter name" value="{{ $settings['name'] ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="hero_text">Hero Section Text</label>
            <textarea class="form-control" id="hero_text" name="hero_text" rows="2">{{ $settings['hero_text'] ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="agency_description">Agency Description</label>
            <textarea class="form-control" id="agency_description" name="agency_description" rows="3">{{ $settings['agency_description'] ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <textarea class="form-control" id="category" name="category" rows="3">{{ $settings['category'] ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="{{ $settings['phone'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $settings['email'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="address">Office Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $settings['address'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="privacy_policy">Privacy Policy</label>
            <textarea class="form-control" id="privacy_policy" name="privacy_policy" rows="4">{{ $settings['privacy_policy'] ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="terms_conditions">Terms & Conditions</label>
            <textarea class="form-control" id="terms_conditions" name="terms_conditions" rows="4">{{ $settings['terms_conditions'] ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="footer_text">Footer Text</label>
            <textarea class="form-control" id="footer_text" name="footer_text" rows="4">{{ $settings['footer_text'] ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="copyright">Copyright</label>
            <input type="text" class="form-control" id="copyright" name="copyright" value="{{ $settings['copyright'] ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
</div>

@endsection
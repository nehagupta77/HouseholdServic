<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', sans-serif;
}

.container {
    max-width: 600px;
    background-color: #fff;
    padding: 25px 30px;
    margin: 40px auto;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
}

form label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #333;
}

form input,
form textarea {
    width: 100%;
    padding: 10px 14px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 15px;
    transition: border 0.3s;
}

form input:focus,
form textarea:focus {
    border-color: #007bff;
}

button[type="submit"] {
    width: 100%;
    background-color: #007bff;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
</style

</head>
<body>
    

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container mt-5">
    <h2 class="mb-4">Book a Service</h2>

    <form action="{{ route('booking.store')}}" method="POST">
        @csrf

        <!-- Full Name -->
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <!-- Mobile Number -->
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="tel" name="mobile" class="form-control" pattern="[0-9]{10}" required>
        </div>

        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" class="form-control" rows="2" required></textarea>
        </div>

        <!-- Date of Service -->
        <div class="mb-3">
            <label for="date" class="form-label">Preferred Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <!-- Preferred Time -->
        <div class="mb-3">
            <label for="time" class="form-label">Preferred Time</label>
            <input type="time" name="time" class="form-control" required>
        </div>

        <!-- Problem Description -->
        <div class="mb-3">
            <label for="problem_description" class="form-label">Problem Description</label>
            <textarea name="problem_description" class="form-control" rows="3" required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit Booking</button>
    </form>
</div>

    
</body>
</html>
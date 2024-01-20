<!DOCTYPE html>
<html>
<head>
    <title>Counselor Registration</title>
</head>
<body>
    <h2>Counselor Registration</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ url('/counselor/register') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Counselor Login</title>
</head>
<body>
    <h2>Counselor Login</h2>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ url('/counselor/login') }}" method="post">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>

    <h1>Admin Login</h1>

    @if ($errors->any())
        <div>
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <input
            type="email"
            name="email"
            placeholder="Email"
            value="{{ old('email') }}"
        >
        <br><br>

        <input
            type="password"
            name="password"
            placeholder="Password"
        >
        <br><br>

        <button type="submit">Login</button>
    </form>

</body>
</html>
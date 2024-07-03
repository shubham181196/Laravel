<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

    <h2>Create User</h2>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('store') }}">
        @csrf

        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
        </div>

        <div>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>

</body>
</html>

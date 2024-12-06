<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg max-w-md w-full px-8 py-6">
        <h1 class="text-center text-2xl font-bold text-blue-500">Login</h1>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="block w-full mt-1 border border-gray-300 px-3 py-2 rounded-md">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="block w-full mt-1 border border-gray-300 px-3 py-2 rounded-md">
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                Login
            </button>
        </form>
    </div>
</body>
</html>

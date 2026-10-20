<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account | SURGESTARPROJECT</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            width: 100%;
            max-width: 430px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #173b57;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #1769aa;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #104d80;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #1769aa;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            color: #b42318;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 12px;
        }

        .success {
            color: #18794e;
            background: #e8f7ee;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Create Account</h1>

        <p class="subtitle">
            Join SURGESTARPROJECT today.
        </p>

        @if (session('status'))
            <div class="success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <label for="name">Full Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                autocomplete="name"
                required
                autofocus
            >

            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                autocomplete="email"
                required
            >

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                autocomplete="new-password"
                minlength="8"
                required
            >

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="password_confirmation">Confirm Password</label>

            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                autocomplete="new-password"
                minlength="8"
                required
            >

            <button type="submit">Create Account</button>
        </form>

        <div class="links">
            Already have an account?
            <a href="{{ route('login') }}">Log in</a>
        </div>

    </div>
</body>
</html>
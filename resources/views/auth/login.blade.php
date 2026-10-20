<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | SURGESTARPROJECT</title>

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
            line-height: 1.8;
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

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
        }

        .remember input {
            width: auto;
            margin: 0;
        }

        .remember label {
            margin: 0;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Welcome Back</h1>

        <p class="subtitle">
            Log in to your SURGESTARPROJECT account.
        </p>

        @if (session('status'))
            <div class="success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                autocomplete="username"
                required
                autofocus
            >

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                autocomplete="current-password"
                required
            >

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="remember">
                <input
                    type="checkbox"
                    id="remember"
                    name="remember"
                    value="1"
                >

                <label for="remember">Remember me</label>
            </div>

            <button type="submit">Log In</button>
        </form>

        <div class="links">
            <a href="{{ route('password.request') }}">
                Forgot your password?
            </a>

            <br>

            Don't have an account?
            <a href="{{ route('register') }}">Register here</a>
        </div>

    </div>
</body>
</html>
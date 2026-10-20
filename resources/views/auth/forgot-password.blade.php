<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forgot Password | SURGESTARPROJECT</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            margin: 0;
            padding: 40px 15px;
        }

        .container {
            max-width: 450px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            color: #0f766e;
        }

        p {
            line-height: 1.6;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #0f766e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: #b91c1c;
            margin-bottom: 15px;
        }

        .success {
            color: #047857;
            margin-bottom: 15px;
        }

        a {
            color: #0f766e;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Forgot Password?</h1>

        <p>
            Enter the email address associated with your account.
            We will help you reset your password.
        </p>

        @if (session('status'))
            <p class="success">{{ session('status') }}</p>
        @endif

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >

            <button type="submit">Send Password Reset Link</button>
        </form>

        <p>
            <a href="{{ route('login') }}">Back to Login</a>
        </p>
    </div>

</body>
</html>
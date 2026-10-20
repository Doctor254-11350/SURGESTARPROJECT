<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reset Password | SURGESTARPROJECT</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fb;
            margin: 0;
            padding: 40px 15px;
        }

        .container {
            max-width: 450px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
        }

        h1 {
            color: #0f766e;
        }

        label {
            display: block;
            margin: 18px 0 8px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 22px;
            background-color: #0f766e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: #b91c1c;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Reset Your Password</h1>

        <p>Enter your new password below.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input
                type="hidden"
                name="token"
                value="{{ request()->route('token') }}"
            >

            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', request()->email) }}"
                required
            >

            <label for="password">New Password</label>

            <input
                type="password"
                id="password"
                name="password"
                required
                autocomplete="new-password"
            >

            <label for="password_confirmation">Confirm New Password</label>

            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                required
                autocomplete="new-password"
            >

            <button type="submit">Reset Password</button>

        </form>

    </div>

</body>
</html>
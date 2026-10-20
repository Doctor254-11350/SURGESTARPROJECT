<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change Password | SURGESTARPROJECT</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        nav {
            background: #0f766e;
            color: white;
            padding: 20px 7%;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #0f766e;
            margin-bottom: 15px;
        }

        .field {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            margin-top: 25px;
            padding: 12px 18px;
            background: #0f766e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background: #115e59;
        }

        .errors {
            background: #fee2e2;
            color: #991b1b;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .success {
            background: #d1fae5;
            color: #065f46;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <nav>
        <h2 style="margin-bottom: 15px;">SURGESTARPROJECT</h2>

        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        <a href="{{ url('/profile') }}">My Profile</a>
    </nav>

    <main class="container">

        <section class="card">

            <h1>Change Password</h1>

            <p>
                Enter your current password and choose a new password
                for your account.
            </p>

            @if (session('status'))
                <div class="success">
                    Password updated successfully.
                </div>
            @endif

            @if ($errors->any())
                <div class="errors">
                    <ul style="margin-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST"
                  action="{{ route('user-password.update') }}">

                @csrf
                @method('PUT')

                <div class="field">
                    <label for="current_password">
                        Current Password
                    </label>

                    <input
                        type="password"
                        id="current_password"
                        name="current_password"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <div class="field">
                    <label for="password">
                        New Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <div class="field">
                    <label for="password_confirmation">
                        Confirm New Password
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <button type="submit" class="button">
                    Update Password
                </button>

            </form>

        </section>

    </main>

</body>
</html>
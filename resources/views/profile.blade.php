<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile | SURGESTARPROJECT</title>

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
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
        }

        .profile-card {
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #0f766e;
            margin-bottom: 20px;
        }

        .detail {
            margin: 20px 0;
            padding: 15px;
            background: #f5f7fb;
            border-radius: 5px;
            overflow-wrap: anywhere;
        }

        .button {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 18px;
            background: #0f766e;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background: #115e59;
        }

        footer {
            margin-top: 40px;
            padding: 25px;
            background: #111827;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>

    <nav>
        <h2>SURGESTARPROJECT</h2>

        <div>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </div>
    </nav>

    <main class="container">

        <section class="profile-card">

            <h1>My Profile</h1>

            <p>
                Welcome to my personal account page.
                Below are my account details.
            </p>

            <div class="detail">
                <strong>Full Name:</strong>
                {{ auth()->user()->name }}
            </div>

            <div class="detail">
                <strong>Email Address:</strong>
                {{ auth()->user()->email }}
            </div>
            <hr style="margin: 25px 0;">

<h2 style="margin-bottom: 20px;">Edit My Profile</h2>

@if (session('status'))
    <div style="background: #d1fae5; color: #065f46; padding: 12px; margin-bottom: 20px; border-radius: 5px;">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div style="background: #fee2e2; color: #991b1b; padding: 12px; margin-bottom: 20px; border-radius: 5px;">
        <ul style="margin-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')

    <div style="margin-bottom: 20px;">
        <label for="name" style="display: block; margin-bottom: 8px;">
            Full Name
        </label>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', auth()->user()->name) }}"
            required
            maxlength="255"
            style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 5px;"
        >
    </div>

    <div style="margin-bottom: 20px;">
        <label for="email" style="display: block; margin-bottom: 8px;">
            Email Address
        </label>

        <input
    type="email"
    id="email"
    name="email"
    value="{{ auth()->user()->email }}"
    readonly
    style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 5px; background: #eee;"
>
    </div>

    <button
        type="submit"
        class="button"
        style="border: none; cursor: pointer;"
    >
        Save Changes
    </button>
</form>

            <a href="{{ url('/dashboard') }}" class="button">
                Back to Dashboard
            </a>

        </section>
    </main>

    <footer>
        <p>
            @Daktari&copy; {{ date('Y') }} SURGESTARPROJECT.
            All rights reserved.
        </p>
    </footer>

</body>
</html>
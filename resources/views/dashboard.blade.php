<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | SURGESTARPROJECT</title>

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
            margin-left: 18px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .welcome h1 {
            color: #0f766e;
            margin-bottom: 15px;
        }

        .welcome p {
            line-height: 1.7;
        }

        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            flex: 1;
            min-width: 220px;
        }

        .card h3 {
            color: #0f766e;
            margin-bottom: 12px;
        }

        .card p {
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .button {
            display: inline-block;
            background: #0f766e;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 5px;
        }

        .button:hover {
            background: #115e59;
        }

        .logout-button {
            background: #b91c1c;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background: #111827;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }

            nav a {
                margin: 6px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <h2>SURGESTARPROJECT</h2>

        <div>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact</a>

            <form method="POST"
                  action="{{ route('logout') }}"
                  style="display: inline;">
                @csrf

                <button type="submit" class="logout-button">
                    Log Out
                </button>
            </form>
        </div>
    </nav>

    <main class="container">

        <section class="welcome">
            <h1>Welcome, {{ auth()->user()->name }}!</h1>

            <p>
                You have successfully logged in to your
                SURGESTARPROJECT account.
            </p>

            <p>
                From here, you can explore your website and manage
                your account.
            </p>
        </section>

        <section class="cards">

            <div class="card">
                <h3>My Account</h3>

                <p>
                    View the basic information associated with
                    your account.
                </p>

                <p>
                    <strong>Name:</strong>
                    {{ auth()->user()->name }}
                </p>

                <p>
                    <strong>Email:</strong>
                    {{ auth()->user()->email }}
                </p>
            </div>

            <div class="card">
                <h3>Explore Website</h3>

                <p>
                    Visit the public pages of SURGESTARPROJECT.
                </p>

                <a href="{{ url('/about') }}" class="button">
                    About Us
                </a>
            </div>

            <div class="card">
                <h3>Contact Me</h3>

                <p>
                    Have a question or suggestion? Visit My
                    Contact page.
                </p>

                <a href="{{ url('/contact') }}" class="button">
                    Contact Me
                </a>
                </div>

                <div class="card">
                    <h3>Admin Dashboard</h3>
                    <p> This is only for Admin check and Management</p>
                @auth
@if(auth()->user()->isAdmin()) <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
@endif
@endauth
</div>

            

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

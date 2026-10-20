<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | SURGESTARPROJECT</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
        }

        nav {
            background: #111827;
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

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            flex: 1;
            min-width: 230px;
        }

        .card h2 {
            color: #0f766e;
            margin-bottom: 15px;
        }

        .card p {
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 18px;
            background: #0f766e;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout-button {
            background: #b91c1c;
            color: white;
            border: none;
            padding: 10px 15px;
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
    </style>
</head>

<body>

    <nav>
        <h2>SURGESTARPROJECT ADMIN</h2>

        <div>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/dashboard') }}">My Dashboard</a>

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
            <h1>Welcome, Administrator!</h1>

            <p>
                You are logged in to the SURGESTARPROJECT
                administration area.
            </p>

            <p style="margin-top: 12px;">
                <strong>Name:</strong>
                {{ auth()->user()->name }}
            </p>

            <p style="margin-top: 8px;">
                <strong>Role:</strong>
                {{ auth()->user()->role }}
            </p>
        </section>

        <section class="cards">

            <div class="card">
                <h2>Manage Users</h2>

                <p>
                    This section i view and
                    manage registered website users.
                </p>
            </div>

            <div class="card">
                <h2>Contact Messages</h2>

                <p>
                    This is the section where i view 
                    messages submitted through the Contact page.
                </p>

                <a href="{{ url('/contact') }}" class="button">
                    View Contact Page </a>
                    <a href="{{ route('admin.messages') }}" class="button">
    View Contact Messages
</a>
<a href="{{ route('admin.users') }}" class="button">
    View Registered Users
</a>
    
            </div>

            <div class="card">
                <h2>Website Pages</h2>

                <p>
                    Visit the public pages of your website.
                </p>

                <a href="{{ url('/about') }}" class="button">
                    About Page
                </a>
                @auth
@if(auth()->user()->role === 'admin') <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
@endif
@endauth

            </div>

        </section>

    </main>

    <footer>
        <p>
            @Daktari&copy; {{ date('Y') }} SURGESTARPROJECT.
            Administration Area.
        </p>
    </footer>

</body>
</html>
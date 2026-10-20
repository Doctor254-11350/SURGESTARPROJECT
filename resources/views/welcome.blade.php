<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SURGESTARPROJECT | Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fb;
            color: #1f2937;
        }

        /* Navigation bar */

        nav {
            background-color: #0f766e;
            color: white;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-size: 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Main section */

        .hero {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-content {
            max-width: 750px;
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 52px);
            margin-bottom: 20px;
            color: #0f766e;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background-color: #0f766e;
            color: white;
            padding: 13px 25px;
            text-decoration: none;
            border-radius: 6px;
            margin: 5px;
        }

        .button:hover {
            background-color: #115e59;
        }

        .secondary-button {
            background-color: #374151;
        }

        .secondary-button:hover {
            background-color: #1f2937;
        }

        /* Information section */

        .features {
            padding: 50px 7%;
            background-color: white;
            text-align: center;
        }

        .features h2 {
            margin-bottom: 30px;
            font-size: 30px;
        }

        .feature-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .feature-card {
            background-color: #f5f7fb;
            padding: 25px;
            border-radius: 8px;
            flex: 1;
            min-width: 220px;
            max-width: 350px;
        }

        .feature-card h3 {
            margin-bottom: 12px;
            color: #0f766e;
        }

        .feature-card p {
            line-height: 1.6;
        }

        /* Footer */

        footer {
            background-color: #111827;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                text-align: center;
            }

            nav a {
                margin: 6px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">SURGESTARPROJECT</div>

        <div>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">

            <h1>Welcome to SURGESTARPROJECT</h1>

            <p>
                Discover my platform, explore what i offer,
                and create an account to get started.
                Iam  building a simple and accessible
                experience for all the  users.
            </p>

            <a href="{{ route('register') }}" class="button">
                Get Started
            </a>

            <a href="{{ route('login') }}"
               class="button secondary-button">
                Login to Your Account
            </a>

        </div>
    </section>

    <section class="features">

        <h2>Explore Our Website</h2>

        <div class="feature-container">

            <div class="feature-card">
                <h3>Easy Registration</h3>
                <p>
                    Create an account to access the
                    features available to registered users.
                </p>
            </div>

            <div class="feature-card">
                <h3>User Dashboard</h3>
                <p>
                    Sign in to access your personal
                    dashboard and account information.
                </p>
            </div>

            <div class="feature-card">
                <h3>Secure Access</h3>
                <p>
                    Use your account credentials to
                    access protected areas of the website.
                </p>
            </div>

        </div>

    </section>

    <footer>
        <p>&copy; {{ date('Y') }} SURGESTARPROJECT. All rights reserved.</p>
    </footer>

</body>

</html>
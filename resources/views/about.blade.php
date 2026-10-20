<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | SURGESTARPROJECT</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fb;
            color: navy blue;
        }

        nav {
            background-color: #0f766e;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 {
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .content {
            max-width: 900px;
            margin: 60px auto;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
        }

        h1 {
            color: #0f766e;
            margin-bottom: 20px;
        }

        p {
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        footer {
            background-color: #111827;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }

            nav a {
                margin: 6px;
            }

            .content {
                margin: 30px 15px;
                padding: 25px;
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
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </nav>

    <section class="content">
        <h1>About Cally's SURGESTARPROJECT</h1>

        <p>
            Welcome to Doctor Cally's SURGESTARPROJECT, a platform designed to
            provide visitors with a simple and accessible website experience.
        </p>

        <p>
            My website allows users to create accounts, log in securely,
            and access their personal dashboards.
        </p>

        <p>
            I aim to build a reliable platform that is easy to navigate
            and useful to its users.
        </p>

        <p>
            Thank you for visiting Doctor Cally's SURGESTARPROJECT.
        </p>
    </section>

    <footer>
        <p>&copy@daktari; {{ date('Y') }} SURGESTARPROJECT. All rights reserved.</p>
    </footer>

</body>
</html>
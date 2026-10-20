<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | SURGESTARPROJECT</title>

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

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 35px;
            background-color: white;
            border-radius: 10px;
        }

        h1 {
            color: #0f766e;
            margin-bottom: 15px;
        }

        .intro {
            line-height: 1.7;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #cbd5e1;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            min-height: 140px;
            resize: vertical;
        }

        button {
            background-color: #0f766e;
            color: white;
            border: none;
            padding: 13px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #115e59;
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

            .container {
                margin: 25px 15px;
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <h2>Doctor Cally SURGESTARPROJECT</h2>

        <div>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </nav>

    <main class="container">
        <h1>Contact Me</h1>
        @if (session('success'))
    <div style="background-color: #d1fae5; color: #065f46; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif

        <p class="intro">
            Have a question or suggestion or a complain?
            Fill in the form below to get in touch with me.
        </p>

        <form method="POST" action="{{ url('/contact') }}">
            @csrf

            <label for="name">Your Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Enter your name"
                required
            >

            <label for="email">Your Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email"
                required
            >

            <label for="message">Your Message</label>
            <textarea
                id="message"
                name="message"
                placeholder="Write your message here"
                required
            >{{ old('message') }}</textarea>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        <p>@Daktari Cally&copy; {{ date('Y') }} SURGESTARPROJECT. All rights reserved.</p>
    </footer>

</body>
</html>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Contact Messages | SURGESTARPROJECT</title>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
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
        margin-right: 15px;
    }

    .container {
        max-width: 1100px;
        margin: 35px auto;
        padding: 20px;
    }

    .panel {
        background: white;
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    h1 {
        color: #0f766e;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 14px;
        border-bottom: 1px solid #e5e7eb;
        text-align: left;
        vertical-align: top;
    }

    th {
        background: #f9fafb;
    }

    .message {
        min-width: 220px;
        white-space: pre-wrap;
        overflow-wrap: anywhere;
    }

    .delete-button {
        background: #b91c1c;
        color: white;
        border: none;
        padding: 9px 12px;
        border-radius: 5px;
        cursor: pointer;
    }

    .empty {
        padding: 20px 0;
        color: #6b7280;
    }

    footer {
        background: #111827;
        color: white;
        text-align: center;
        padding: 20px;
    }
</style>
```

</head>

<body>

<nav>
    <h2>SURGESTARPROJECT ADMIN</h2>

```
<div>
    <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
    <a href="{{ url('/contact') }}">Contact Page</a>
</div>
```

</nav>

<main class="container">

```
<section class="panel">
    <h1>Contact Messages</h1>

    <p>
        Review messages submitted through your website's contact form.
    </p>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if ($messages->isEmpty())
        <p class="empty">
            No contact messages have been received yet.
        </p>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date Received</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>

                            <td>{{ $message->email }}</td>

                            <td class="message">{{ $message->message }}</td>

                            <td>
                                {{ $message->created_at?->format('d M Y, H:i') ?? 'Unknown' }}
                            </td>

                            <td>
                                <form
                                    method="POST"
                                    action="{{ route('admin.messages.delete', $message->id) }}"
                                    onsubmit="return confirm('Are you sure you want to delete this message?');"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="delete-button">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>
```

</main>

<footer>
    <p>
        @Daktari&copy; {{ date('Y') }} SURGESTARPROJECT. Administration Area.
    </p>
</footer>

</body>
</html>

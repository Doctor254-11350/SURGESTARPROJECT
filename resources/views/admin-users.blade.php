<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users | SURGESTARPROJECT</title>

```
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
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
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

    th,
    td {
        padding: 14px;
        border-bottom: 1px solid #e5e7eb;
        text-align: left;
    }

    th {
        background: #f9fafb;
    }

    .role {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 13px;
        font-weight: bold;
    }

    .admin {
        background: #d1fae5;
        color: #065f46;
    }

    .user {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .empty {
        color: #6b7280;
        padding: 20px 0;
    }

    .button {
        display: inline-block;
        background: #0f766e;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
    }

    footer {
        text-align: center;
        padding: 20px;
        color: #6b7280;
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
    <a href="{{ route('admin.messages') }}">Contact Messages</a>
</div>
```

</nav>

<main class="container">
    <section class="panel">

```
    <h1>Manage Registered Users</h1>

    <p>
        View the accounts registered on your website and identify
        their assigned roles.
    </p>

    <p>
        <strong>Total registered users:</strong>
        {{ $users->count() }}
    </p>

    @if ($users->isEmpty())

        <p class="empty">
            No registered users were found.
        </p>

    @else

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Role</th>
                        <th>Date Registered</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>

                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>

                            <td>
                                @if ($user->role === 'admin')
                                    <span class="role admin">
                                        Administrator
                                    </span>
                                @else
                                    <span class="role user">
                                        Normal User
                                    </span>
                                @endif
                            </td>

                            <td>
                                {{ $user->created_at?->format('d M Y, H:i') ?? 'Unknown' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endif

    <br>

    <a href="{{ route('admin.dashboard') }}" class="button">
        Back to Admin Dashboard
    </a>

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

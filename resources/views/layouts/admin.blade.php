<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            color: #222;
        }

        /* Sidebar */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            height: 100vh;
            background: #111827;
            padding: 25px 15px;
        }

        .sidebar h2 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: #d1d5db;
            text-decoration: none;
            padding: 12px 15px;
            margin-bottom: 8px;
            border-radius: 6px;
        }

        .sidebar a:hover {
            background: #374151;
            color: white;
        }

        .logout-btn {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 6px;
            background: #dc2626;
            color: white;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #b91c1c;
        }

        /* Main Content */

        .main {
            margin-left: 220px;
            padding: 30px;
        }

        /* Cards */

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        /* Buttons */

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-warning {
            background: #f59e0b;
            color: white;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }

        /* Forms */

        input,
        textarea,
        select {
            width: 100%;
            padding: 11px;
            margin-top: 5px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #2563eb;
        }

        /* Project Image */

        .project-image {
            width: 180px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Mobile */

        @media (max-width: 700px) {

            .sidebar {
                width: 180px;
            }

            .main {
                margin-left: 180px;
                padding: 20px;
            }

        }

    </style>
</head>

<body>

    <!-- Sidebar -->

    <aside class="sidebar">

        <h2>ADMIN PANEL</h2>

        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>

        <a href="{{ route('projects.index') }}">
            Projects
        </a>

        <a href="{{ route('admin.messages') }}">
    Messages
</a>


        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button class="logout-btn" type="submit">
                Logout
            </button>
        </form>

    </aside>


    <!-- Main Content -->

    <main class="main">

        @yield('content')

    </main>

</body>

</html>
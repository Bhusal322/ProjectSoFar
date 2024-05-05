<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Horticulture Website</title>
    <link rel="stylesheet" href="/css/allstyles.css">
    <!-- Include FontAwesome for icons if not already included in allstyles.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        .header {
            padding: 20px;
            text-align: center;
            color: green;
            background-color: green;
            background-image: url('/image/heading.jpg');
            background-size: cover;
            background-position: center;
        }

        .navbar {
            overflow: hidden;
            background-color: green;
            position: sticky;
            top: 0;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .main {
            max-width: 960px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .admin-option {
            text-align: center;
            padding: 20px;
            margin: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .admin-option:hover {
            background-color: #e0e0e0;
        }

        .admin-option h3 {
            font-size: 20px;
            color: green;
        }

        .admin-option p {
            font-size: 16px;
            color: #666;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Panel</h1>
        <p>Welcome to the Admin Dashboard</p>
    </div>

    <div class="navbar">
    <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('admin.accounts') }}">Admin Accounts</a>
        <a href="{{ route('admin.home') }}">Admin Home</a>
        <a href="{{ route('admin.myaccount') }}">Admin My Account</a>
        <a href="{{ route('admin.posts') }}">Admin Posts</a>
    </div>

    <div class="main">
        <div class="admin-option" onclick="window.location.href='#users';">
            <h3>Manage Users</h3>
            <p>Add, edit, or delete users</p>
        </div>
        <div class="admin-option" onclick="window.location.href='#posts';">
            <h3>Manage Posts</h3>
            <p>View, edit, or delete posts</p>
        </div>
        <div class="admin-option" onclick="window.location.href='#analytics';">
            <h3>Analytics</h3>
            <p>View application analytics</p>
        </div>
    </div>

    <footer class="footer">
        <p>Copyright © Your Website 2022</p>
    </footer>
</body>
</html>



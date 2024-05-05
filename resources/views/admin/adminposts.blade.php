<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts - Admin Panel</title>
    <link rel="stylesheet" href="/css/allstyles.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Set minimum height to 100% of viewport height */
        }

        .header {
            background-color: green;
            color: green;
            padding: 20px;
            text-align: center;
        }

        .main {
            flex-grow: 1; /* Grow to fill remaining vertical space */
            width: 95%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .search-bar {
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .actions button {
            padding: 5px 10px;
            margin-right: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
            flex-shrink: 0; /* Prevent shrinking */
        }

        .edit { background-color: #4CAF50; color: white; }
        .delete { background-color: #f44336; color: white; }
        .approve { background-color: #008CBA; color: white; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Panel - Manage Posts</h1>
        <p>Review and manage all user-submitted posts</p>
    </div>
    <div class="navbar">
        <a href="{{ route('admin.accounts') }}">Admin Accounts</a>
<a href="{{ route('admin.home') }}">Admin Home</a>
<a href="{{ route('admin.myaccount') }}">Admin My Account</a>
<a href="{{ route('admin.posts') }}">Admin Posts</a>
    </div>

    <div class="main">
        <div class="search-bar">
            <input type="text" placeholder="Search posts...">
        </div>
      
        
        <table>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Date Posted</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <!-- Example Post Entries -->
            <tr>
                <td>Spring Garden Tips</td>
                <td>John Doe</td>
                <td>Gardening</td>
                <td>2023-04-01</td>
                <td>Pending</td>
                <td class="actions">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                    <button class="approve">Approve</button>
                </td>
            </tr>
            <!-- Add more rows for other posts -->
        </table>
    </div>

    

    <footer class="footer">
        <p>Copyright © Your Website 2022</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - Admin Panel</title>
    <link rel="stylesheet" href="/css/allstyles.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: black;
            color: black;
            padding: 20px;
            text-align: center;
        }

        .main {
            width: 90%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
        }

        .approve { background-color: #4CAF50; color: white; }
        .delete { background-color: #f44336; color: white; }
        .block { background-color: #ff9800; color: white; }
        .suspend { background-color: #e91e63; color: white; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Manage Users</h1>
        <p>Administrate user accounts, approve, block, or delete as needed.</p>
    </div>
    <div class="navbar">
      <a href="{{ route('admin.accounts') }}">Admin Accounts</a>
      <a href="{{ route('admin.home') }}">Admin Home</a>
      <a href="{{ route('admin.myaccount') }}">Admin My Account</a>
      <a href="{{ route('admin.posts') }}">Admin Posts</a>
    </div>
    <div class="main">
   <div class="main">
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Category</th>
            <th>Created Date</th>
            <th>Actions</th>
        </tr>
        @foreach ($persons as $person)
        <tr>
            <td>{{ $person->first_name }} {{ $person->last_name }}</td>
            <td><a href="{{ route('person.details', $person->id) }}">{{ $person->email }}</a></td>
            <td>{{ $person->type }}</td>
            <td>{{ $person->created_at->toDateString() }}</td>
            <td class="actions">
                <button class="approve">Approve</button>
                <!-- Delete button with data-id attribute -->
                <button class="delete" data-id="{{ $person->id }}">Delete</button>
                <button class="block">Block</button>
                <button class="suspend">Suspend</button>
            </td>
        </tr>
        <form id="delete-form-{{ $person->id }}" action="{{ route('person.delete', $person->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        @endforeach
    </table>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all delete buttons
    var deleteButtons = document.querySelectorAll('.delete');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var personId = this.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this person?')) {
                event.preventDefault();
                document.getElementById('delete-form-' + personId).submit();
            }
        });
    });
});
</script>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all delete buttons
    var deleteButtons = document.querySelectorAll('.delete');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var personId = this.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this person?')) {
                event.preventDefault();
                document.getElementById('delete-form-' + personId).submit();
            }
        });
    });
});
</script>









    <footer class="footer">
        <p>Copyright © Your Website 2023</p>
    </footer>
</body>
</html>




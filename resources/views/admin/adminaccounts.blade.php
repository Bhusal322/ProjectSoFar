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
        <a href="#users">Manage Users</a>
        <a href="#posts">Manage Posts</a>
        <a href="#analytics">View Analytics</a>
    </div>

    <div class="main">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Category</th>
                <th>Created Date</th>
                <th>Actions</th>
            </tr>
            <!-- Dummy records -->
            <tr>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td>Seller</td>
                <td>2023-01-01</td>
                <td class="actions">
                    <button class="approve">Approve</button>
                    <button class="delete">Delete</button>
                    <button class="block">Block</button>
                    <button class="suspend">Suspend</button>
                </td>
            </tr>
            <!-- Additional dummy records, repeat the above row with different names and details -->
<tr>
    <td>Jane Smith</td>
    <td>janesmith@example.com</td>
    <td>Buyer</td>
    <td>2023-01-02</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Mike Johnson</td>
    <td>mikejohnson@example.com</td>
    <td>Seller</td>
    <td>2023-01-03</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Sarah Williams</td>
    <td>sarahwilliams@example.com</td>
    <td>Buyer</td>
    <td>2023-01-04</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>David Brown</td>
    <td>davidbrown@example.com</td>
    <td>Seller</td>
    <td>2023-01-05</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Emma Davis</td>
    <td>emmadavis@example.com</td>
    <td>Buyer</td>
    <td>2023-01-06</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>James Wilson</td>
    <td>jameswilson@example.com</td>
    <td>Seller</td>
    <td>2023-01-07</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Daniel Taylor</td>
    <td>danieltaylor@example.com</td>
    <td>Buyer</td>
    <td>2023-01-08</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Elizabeth White</td>
    <td>elizabethwhite@example.com</td>
    <td>Seller</td>
    <td>2023-01-09</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>James Harris</td>
    <td>jamesharris@example.com</td>
    <td>Buyer</td>
    <td>2023-01-10</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>John Moore</td>
    <td>johnmoore@example.com</td>
    <td>Seller</td>
    <td>2023-01-11</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Ella Jackson</td>
    <td>ellajackson@example.com</td>
    <td>Buyer</td>
    <td>2023-01-12</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Sam Green</td>
    <td>samgreen@example.com</td>
    <td>Seller</td>
    <td>2023-01-13</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>Harry Gray</td>
    <td>harrygray@example.com</td>
    <td>Buyer</td>
    <td>2023-01-14</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
    <td>William Harris</td>
    <td>williamharris@example.com</td>
    <td>Seller</td>
    <td>2023-01-15</td>
    <td class="actions">
      <button class="approve">Approve</button>
      <button class="delete">Delete</button>
      <button class="block">Block</button>
      <button class="suspend">Suspend</button>
    </td>
  </tr>
  <tr>
        </table>
    </div>

    <footer class="footer">
        <p>Copyright © Your Website 2023</p>
    </footer>
</body>
</html>

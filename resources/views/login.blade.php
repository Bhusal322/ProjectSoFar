<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

.tab {
    overflow: hidden;
    border-bottom: 1px solid #ccc;
    margin-bottom: 10px;
}

.tab button {
    background-color: inherit;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 15px;
    transition: background-color 0.3s;
}

.tab button:hover {
    background-color: #f0f0f0;
}

.tab button.active {
    background-color: #ccc;
}

.tabcontent {
    display: none;
}

.tabcontent.active {
    display: block;
}

input[type="text"],
input[type="password"],
input[type="submit"],
select { /* Added select selector */
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.back-btn {
    display: block;
    margin-top: 20px;
    text-align: center;
}

.back-btn a {
    color: #333;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openForm(event, 'Login')">Login</button>
            <button class="tablinks" onclick="openForm(event, 'Signup')">Signup</button>
        </div>
        
        <div id="Login" class="tabcontent">
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="post">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Login">
</form>
</div>
        
  
        <div id="Signup" class="tabcontent">
    <h2>Signup</h2>
    <form action="{{ route('signup.submit') }}" method="post">
    @csrf <!-- Laravel CSRF protection -->
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>
        
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="buyer">Buyer</option>
            <option value="seller">Seller</option>
        </select>
        
        <label for="newPassword">Password:</label>
        <input type="password" id="newPassword" name="newPassword" required>
        
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        
        <input type="submit" value="Signup">
    </form>
</div>




























    <script>
        function openForm(evt, formName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(formName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementsByClassName("tablinks")[0].click(); // Open Login tab by default
    </script>
</body>
</html>
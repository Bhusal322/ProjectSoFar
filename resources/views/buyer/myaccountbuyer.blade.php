<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/allstyles.css">
<style>
    /* Add your CSS styles here */
    .edit-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        z-index: 1000;
    }

    .popup-content {
        text-align: center;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="header">
  <h1>Horticulture Website Buyer!!!</h1>
  <p>Make the world green</p>
</div>

<div class="navbar">
    <a href="{{ route('home') }}" class="nav-link">Home</a>
    <a href="{{ route('buyer.home') }}" class="nav-link">Post Project</a>
    <a href="{{ route('buyer.myprojects') }}" class="nav-link">My Projects</a>
    <a href="{{ route('buyer.search') }}" class="nav-link">Search Sellers</a>
    <a href="{{ route('buyer.myaccount') }}" class="nav-link">My Account</a>
    <a href="{{ route('login') }}" class="right">Log-in</a>
</div>

<header>
    <h1>My Account</h1>
</header>

<section class="profile-details">
    <h2>Profile Details</h2>
    <p>Name: John Doe</p>
    <p>Email: john.doe@example.com</p>
    <p>Phone: +1234567890</p>
    <!-- Add more details as needed -->

    <button onclick="openEditPopup()">Edit Details</button>
</section>

<section class="edit-popup" id="edit-popup">
    <div class="popup-content">
        <span class="close" onclick="closeEditPopup()">&times;</span>
        <h2>Edit Profile</h2>
        <form>
            <label for="edit-name">Name:</label>
            <input type="text" id="edit-name" name="edit-name" value="John Doe"><br>
            <label for="edit-email">Email:</label>
            <input type="email" id="edit-email" name="edit-email" value="john.doe@example.com"><br>
            <label for="edit-phone">Phone:</label>
            <input type="tel" id="edit-phone" name="edit-phone" value="+1234567890"><br>
            <!-- Add more fields as needed -->
            <button type="submit">Save Changes</button>
        </form>
    </div>
</section>

<script>
    function openEditPopup() {
        document.getElementById('edit-popup').style.display = 'block';
    }

    function closeEditPopup() {
        document.getElementById('edit-popup').style.display = 'none';
    }
</script>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Partnerships</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Copyright Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Support</h5>
                <ul class="list-unstyled">
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Help Center</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Follow Us</h5>
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>

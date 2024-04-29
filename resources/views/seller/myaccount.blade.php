<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/allstyles.css">
</head>
<body>

<div class="header">
  <h1>Horticulture Website</h1>
  <p>Make the world green</p>
</div>

<div class="navbar">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('seller.home') }}" class="nav-link">Post product</a>
    <a href="{{ route('seller.browse') }}" class="nav-link">Browse</a>
    <a href="{{ route('seller.myaccount') }}" class="nav-link">My Account</a>
    <a href="{{ route('login') }}" class="right">Log-in</a>
</div>


<div class="main">
    <h2>My Account</h2>
    <div class="account-details">
        <p><strong>Username:</strong> johndoe</p>
        <p><strong>Email:</strong> johndoe@example.com</p>
        <p><strong>First Name:</strong> John</p>
        <p><strong>Last Name:</strong> Doe</p>
        <p><strong>Date of Birth:</strong> January 1, 1990</p>
        <p><strong>Address:</strong> 123 Main Street, City, Country</p>
        <!-- Add more account details here -->
    </div>
    <a href="edit-profile.html">Edit Profile</a>
    <!-- Link to edit profile page -->
</div>


  
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
  
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/allstyles.css">
<style>
    .project-grid {
        padding: 20px;
    }

    .project-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        grid-gap: 20px;
    }

    .project-item {
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #f9f9f9;
    }

    .project-item h3 {
        margin-top: 0;
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


<body>
    <header>
        <h1>My Projects</h1>
    </header>

    <section class="project-grid">
        <h2>Previous Projects</h2>
        <div class="project-container">
            @foreach(auth()->user()->projects as $project)
                <div class="project-item">
                    <h3>{{ $project->title }}</h3>
                    <p>Description: {{ $project->description }}</p>
                    <p>Timelines: {{ $project->timelines }}</p>
                    <!-- Add more details as needed -->
                </div>
            @endforeach
        </div>
    </section>
    

    
  
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
  
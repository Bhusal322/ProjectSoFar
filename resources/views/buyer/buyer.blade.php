<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/allstyles.css">
    <style>
        /* Custom styles for the main content */
        .main {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .section {
            margin-bottom: 30px;
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            background-color: #f9f9f9;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            margin-top: 0;
            margin-bottom: 15px;
            color: #333;
        }

        /* Custom styles for the form */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Custom styles for the footer */
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
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

<div class="main">
    <section class="section">
        <h2>Project Posting</h2>
        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf <!-- Laravel CSRF protection -->
            <label for="project-title">Title:</label>
            <input type="text" id="project-title" name="title" required>
            
            <label for="project-description">Description:</label>
            <textarea id="project-description" name="description" required></textarea>
            
            <label for="project-photos">Photos:</label>
            <input type="file" id="project-photos" name="photos[]" multiple>
            
            <label for="project-timelines">Timelines:</label>
            <input type="text" id="project-timelines" name="timelines">
            
            <input type="submit" value="Post Project">
        </form>
        
        
    </section>

    <section class="section">
        <h2>Search and Filter</h2>
        <!-- Advanced search form -->
        <form>
            <!-- Add search fields and filters here -->
        </form>
    </section>

    <section class="section">
        <h2>Request for Proposal (RFP)</h2>
        <!-- Form to send RFPs -->
        <form>
            <!-- Add fields to solicit bids here -->
        </form>
    </section>

    <section class="section">
        <h2>Ratings and Reviews</h2>
        <!-- Display ratings and reviews for sellers -->
    </section>
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

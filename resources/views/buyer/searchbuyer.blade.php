<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Sellers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/allstyles.css">
    <style>
        /* Add custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .header {
            background-color: #4CAF50;
            color:green;
            text-align: center;
            padding: 20px;
        }

        .navbar {
            overflow: hidden;
            background-color: green;
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

        .search-sellers {
            text-align: center;
            margin-top: 50px;
        }

        .search-sellers input[type=text] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: width 0.4s ease-in-out;
        }

        .search-sellers input[type=text]:focus {
            width: 80%;
        }

        .search-sellers button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-sellers button:hover {
            background-color: #45a049;
        }

        .sellers-results {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        .sellers-results li {
            background-color: #f2f2f2;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
        }

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
    <a href="/html/home.html" class="nav-link">Home</a>
    <a href="/html/buyer/myprojects.html" class="nav-link">My Projects</a>
    <a href="/html/buyer/searchbuyer.html" class="nav-link">Search Sellers</a>
   <a href="/html/buyer/buyer.html" class="nav-link">Post Project</a>
    <a href="/html/buyer/myaccountbuyer.html" class="nav-link">My Account</a>
  <a href="/html/login.html" class="right">Log-in</a>
</div>

<section class="search-sellers">
    <h2>Search Bidders</h2>
    <form>
        <input type="text" id="search-sellers-input" placeholder="Enter seller name...">
        <button type="button" onclick="searchSellers()">Search</button>
    </form>
</section>

<section>
    <ul class="sellers-results" id="sellers-results">
        <!-- Sellers search results will appear here -->
    </ul>
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

<script>
    // Function to search for sellers
    function searchSellers() {
        var input, filter, sellersList, sellers, i, sellerName;
        input = document.getElementById('search-sellers-input');
        filter = input.value.toUpperCase();
        sellersList = document.getElementById('sellers-results');
        sellers = sellersList.getElementsByTagName('li');

        // Loop through all sellers and hide those who don't match the search query
        for (i = 0; i < sellers.length; i++) {
            sellerName = sellers[i].getElementsByTagName('span')[0];
            if (sellerName.innerHTML.toUpperCase().indexOf(filter) > -1) {
                sellers[i].style.display = "";
            } else {
                sellers[i].style.display = "none";
            }
        }
    }
</script>

</body>
</html>

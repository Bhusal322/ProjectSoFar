<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Posts</title>
    <link rel="stylesheet" href="/css/allstyles.css">
    <!-- Add additional stylesheets or CSS here -->
    <style>
        /* Add your custom styles here */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .search-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-right: 10px;
        }

        .search-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-btn:hover {
            background-color: #45a049;
        }

        .post {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .post-description {
            margin-bottom: 10px;
        }

        .post-image {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .post-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .post-author {
            font-weight: bold;
        }

        .post-date {
            color: #999;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Horticulture Website Seller!!!</h1>
        <p>Make the world green</p>
    </div>

    <div class="navbar">
        <a href="/html/home.html">Home</a>
        <a href="/html/seller/sellerbrowse.html">Browse</a>
       <a href="/html/seller/seller.html">Sell</a>
        <a href="/html/myaccount.html">My Account</a>
      <a href="/html/login.html" class="right">Log-in</a>
    </div>
    

    <div class="container">
        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search posts..." class="search-input">
            <button class="search-btn">Search</button>
        </div>

        <!-- Filter Options -->
        <div class="filters">
            <!-- Add your filter options here -->
        </div>

        <!-- Post Feed -->
        <div class="post-feed">
            <!-- Sample Post (Repeat for each post) -->
            <div class="post">
                <h2 class="post-title">Post Title</h2>
                <img src="/image/sample-image.jpg" alt="Post Image" class="post-image">
                <p class="post-description">Post description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="post-footer">
                    <span class="post-author">Posted by: John Doe</span>
                    <span class="post-date">Posted on: April 25, 2024</span>
                </div>
            </div>

            <div class="post-feed">
                <!-- Sample Post (Repeat for each post) -->
                <div class="post">
                    <h2 class="post-title">Post Title</h2>
                    <img src="/image/sample-image.jpg" alt="Post Image" class="post-image">
                    <p class="post-description">Post description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="post-footer">
                        <span class="post-author">Posted by: John Doe</span>
                        <span class="post-date">Posted on: April 25, 2024</span>
                    </div>
                </div>

                <div class="post-feed">
                    <!-- Sample Post (Repeat for each post) -->
                    <div class="post">
                        <h2 class="post-title">Post Title</h2>
                        <img src="/image/sample-image.jpg" alt="Post Image" class="post-image">
                        <p class="post-description">Post description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="post-footer">
                            <span class="post-author">Posted by: John Doe</span>
                            <span class="post-date">Posted on: April 25, 2024</span>
                        </div>
                    </div>


                    <div class="post-feed">
                        <!-- Sample Post (Repeat for each post) -->
                        <div class="post">
                            <h2 class="post-title">Post Title</h2>
                            <img src="/image/sample-image.jpg" alt="Post Image" class="post-image">
                            <p class="post-description">Post description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="post-footer">
                                <span class="post-author">Posted by: John Doe</span>
                                <span class="post-date">Posted on: April 25, 2024</span>
                            </div>
                        </div>
        </div>
    </div>

    <!-- Footer (You can include the footer here or use the existing footer) -->

</body>
</html>

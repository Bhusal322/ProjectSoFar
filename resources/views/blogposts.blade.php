<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="/css/allstyles.css">
    <style>
        /* Additional styles for the blog post page */
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        
        .post {
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        
        .post:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        
        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .post-author {
            font-weight: bold;
        }
        
        .post-date {
            color: #999;
            font-size: 14px;
        }
        
        .post-content {
            margin-bottom: 10px;
        }
        
        .post-image {
            max-width: 100%;
            margin-bottom: 10px;
        }
        
        .post-actions {
            display: flex;
            align-items: center;
        }
        
        .action {
            margin-right: 10px;
            color: #555;
            cursor: pointer;
        }
        
        .action:hover {
            color: #1877f2;
        }
        
        .action i {
            margin-right: 5px;
        }
        
        .like-count {
            color: #999;
            margin-left: 5px;
        }

        /* Styles for the footer */
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
        
        .footer ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        .footer li {
            display: inline-block;
            margin: 0 10px;
        }
        
        .footer a {
            color: #333;
            text-decoration: none;
        }
        
        .footer a:hover {
            color: #1877f2;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Horticulture Website Buyer!!!</h1>
        <p>Make the world green</p>
    </div>
    <div class="navbar">
        <a href="/html/home.html" >Home</a>
        <a href="/html/seller/seller.html">Seller</a>
        <a href="/html/buyer/buyer.html">Buyer</a>
        <a href="#">Blog</a>
        <a href="login.html" class="right">Log-in</a>
      </div>

    <div class="container">
        <div class="post">
            <div class="post-header">
                <img src="avatar.jpg" alt="Avatar" class="avatar">
                <div>
                    <div class="post-author">John Doe</div>
                    <div class="post-date">April 25, 2024</div>
                </div>
            </div>
            <div class="post-content">
                <p>This is a blog post content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="/image/image2.jpg" alt="Post Image" class="post-image">
            </div>
            <div class="post-actions">
                <div class="action"><i class="fas fa-thumbs-up"></i>Like</div>
                <div class="action"><i class="fas fa-comment"></i>Comment</div>
                <div class="action"><i class="fas fa-share"></i>Share</div>
                <div class="like-count">25 Likes</div>
            </div>
        </div>

        <!-- More posts can be added here -->
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

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
        <a href="{{ route('home') }}">Home</a>
        @if (session('user_type') === 'seller')
    <a href="{{ route('seller.home') }}">Seller</a>
@elseif (session('user_type') === 'buyer')
    <a href="{{ route('buyer.home') }}">Buyer</a>
@endif
        <a href="{{ route('blogposts') }}">Blog</a>
        <a href="{{ route('login') }}" class="right">Log-in</a>
        <form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
    </div>

    <div class="container">
        <div class="post">
            <div class="post-header">
                <img src="avatar.jpg" alt="Avatar" class="avatar">
                <div>
                    <div class="post-author">   @auth
        {{ Auth::user()->first_name }}
                @else
        Guest
    @endauth</div>
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




    <h1>Upload</h1>
<form method="POST" action="{{ route('store.blogpost') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="submit" name="Upload">
</form>

@foreach($photos as $photo)
    <img src="{{ route('photos.show', $photo->id) }}" alt="Uploaded Image">
@endforeach


 

</body>
</html>

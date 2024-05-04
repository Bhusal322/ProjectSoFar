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
        @foreach($posts as $post)
        <div class="post">
            <div class="post-header">
                <img src="avatar.jpg" alt="Avatar" class="avatar">
                <div>
                    <div class="post-author">
                        @if($post->user)
                            {{ $post->user->first_name }}
                        @else
                            Guest
                        @endif
                    </div>
                    <div class="post-date">{{ $post->created_at->format('F d, Y') }}</div>
                </div>
            </div>
            <div class="post-content">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="post-image">
                @endif
            </div>
            <div class="post-actions">
                <div class="action"><i class="fas fa-thumbs-up"></i>Like</div>
                <div class="action"><i class="fas fa-comment"></i>Comment</div>
                <div class="action"><i class="fas fa-share"></i>Share</div>
                <div class="like-count">25 Likes</div>
            </div>
        </div>
        @endforeach
    </div>

        <!-- More posts can be added here -->
    </div



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <div class="row mt-5">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $image->file_path) }}" class="card-img-top" alt="{{ $image->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->title }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



















 

</body>
</html>

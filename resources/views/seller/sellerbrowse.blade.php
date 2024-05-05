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
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('seller.home') }}" class="nav-link">Post product</a>
        <a href="{{ route('seller.browse') }}" class="nav-link">Browse</a>
        <a href="{{ route('seller.myaccount') }}" class="nav-link">My Account</a>
        <a href="{{ route('login') }}" class="right">Log-in</a>
    </div>
    

    <div class="container">
    <div class="search-bar">
        <form action="{{ route('seller.browse') }}" method="GET">
            <input type="text" name="search" placeholder="Search posts by buyer's name..." class="search-input">
            <button type="submit" class="search-btn">Search</button>
        </form>
    </div>

    <div class="post-feed">
        @forelse ($projects as $project)
            <div class="post">
                <h2 class="post-title">{{ $project->title }}</h2>
                <img src="{{ asset('storage/' . $project->photos) }}" alt="Project Image" class="post-image">
                <p class="post-description">{{ $project->description }}</p>
                <div class="post-footer">
                    <span class="post-author">Posted by: {{ $project->buyer->first_name }} {{ $project->buyer->last_name }}</span>
                    <span class="post-date">Posted on: {{ $project->created_at->format('F d, Y') }}</span>
                </div>
            </div>
        @empty
            <p>No projects found.</p>
        @endforelse
    </div>
</div>







            
        </div>
    </div>

    <!-- Footer (You can include the footer here or use the existing footer) -->

</body>
</html>

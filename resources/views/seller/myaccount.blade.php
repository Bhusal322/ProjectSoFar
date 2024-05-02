<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account</title>
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
    <h2>
        @auth
            {{ Auth::user()->first_name }}
        @else
            Guest
        @endauth
    </h2>
    <h2>
        @auth
            {{ Auth::user()->email }}
        @else
            Guest
        @endauth
    </h2>
    <h2>
        @auth
            {{ Auth::user()->type }}
        @else
            Guest
        @endauth
    </h2>


    <!-- Display services associated with the logged-in user -->
<!-- Display services in a table -->
<!-- Display services in a table with cell borders -->




<table style="width: 30%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 1px solid black;">Services</th>
        </tr>
    </thead>
    <tbody>
        @isset($services)
            @forelse ($services as $service)
                <tr>
                    <td style="border: 1px solid black;">
                        <strong>{{ $service->name }}</strong><br>
                        <p>{{ $service->description }}</p>
                    </td>
                </tr>
            @empty
                <tr>
                    <td style="border: 1px solid black;">No services available.</td>
                </tr>
            @endforelse
        @else
            <tr>
                <td style="border: 1px solid black;">No services available.</td>
            </tr>
        @endisset
    </tbody>
</table>

















    <!-- Add service form -->
    <form method="POST" action="{{ route('services.store') }}">
        @csrf
        <div>
            <label for="name">Service Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit">Add Service</button>
    </form>
</div>




<table style="width: 30%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 1px solid black;">Credentials</th>
        </tr>
    </thead>
    <tbody>
        @isset($credentials)
            @forelse ($credentials as $credential)
                <tr>
                    <td style="border: 1px solid black;">
                        <strong>{{ $credential->credential_name }}</strong><br>
                        <p>{{ $credential->institution_name }}</p>
                    </td>
                </tr>
            @empty
                <tr>
                    <td style="border: 1px solid black;">No credentials available.</td>
                </tr>
            @endforelse
        @else
            <tr>
                <td style="border: 1px solid black;">No credentials available.</td>
            </tr>
        @endisset
    </tbody>
</table>




<!-- Add credential form -->
<form method="POST" action="{{ route('credentials.store') }}">
    @csrf
    <div>
        <label for="credential_name">Credential Name:</label>
        <input type="text" id="credential_name" name="credential_name" required>
    </div>
    <div>
        <label for="institution_name">Institution Name:</label>
        <input type="text" id="institution_name" name="institution_name" required>
    </div>
    <button type="submit">Add Credential</button>
</form>





















</body>
</html>

  
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/allstyles.css">
</head>
<style>
    /* Add your CSS styles here */
    .edit-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        z-index: 1000;
    }

    .popup-content {
        text-align: center;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
</style>
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
                        <!-- Button to trigger the popup -->
                        <button onclick="openEditPopup('editForm{{ $service->id }}')">Edit</button>
                        
                        <!-- Hidden form for each service -->
                       <!-- Hidden form for each service -->
<div id="editForm{{ $service->id }}" class="edit-popup">
    <form action="{{ route('update-service', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $service->name }}" required>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $service->description }}</textarea>
        <button type="submit">Update</button>
        <button type="button" onclick="closeEditPopup('editForm{{ $service->id }}')">Close</button>
    </form>
    <!-- Delete form -->
    <form action="{{ route('delete-service', $service->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
    </form>
</div>

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




<script>
function openEditPopup(formId) {
    document.getElementById(formId).style.display = 'block';
}

function closeEditPopup(formId) {
    document.getElementById(formId).style.display = 'none';
}
</script>


























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
                        <!-- Button to trigger the popup -->
                        <button onclick="openEditPopup('editCredentialForm{{ $credential->id }}')">Edit</button>

                        <!-- Hidden form for each credential -->
                        <div id="editCredentialForm{{ $credential->id }}" class="edit-popup">
                            <form action="{{ route('update-credential', $credential->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="credential_name">Credential Name:</label>
                                <input type="text" name="credential_name" value="{{ $credential->credential_name }}" required>
                                <label for="institution_name">Institution Name:</label>
                                <input type="text" name="institution_name" value="{{ $credential->institution_name }}" required>
                                <button type="submit">Update</button>
                                <button type="button" onclick="closeEditPopup('editCredentialForm{{ $credential->id }}')">Close</button>
                            </form>
                            <!-- Delete form -->
                            <form action="{{ route('delete-credential', $credential->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this credential?')">Delete</button>
                            </form>
                        </div>
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




<table style="width: 30%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 1px solid black;">Experiences</th>
        </tr>
    </thead>
    <tbody>
        @isset($experiences)
            @forelse ($experiences as $experience)
                <tr>
                    <td style="border: 1px solid black;">
                        <strong>{{ $experience->job_title }}</strong> at {{ $experience->company_name }}<br>
                        <p>{{ $experience->description }}</p>
                        <!-- Button to trigger the popup -->
                        <button onclick="openEditPopup('editForm{{ $experience->id }}')">Edit</button>
                        
                        <!-- Hidden form for each experience -->
                        <div id="editForm{{ $experience->id }}" class="edit-popup" style="display:none;">
                            <form action="{{ route('update-experience', $experience->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="job_title">Job Title:</label>
                                <input type="text" name="job_title" value="{{ $experience->job_title }}" required>
                                <label for="company_name">Company Name:</label>
                                <input type="text" name="company_name" value="{{ $experience->company_name }}">
                                <label for="description">Description:</label>
                                <textarea name="description" required>{{ $experience->description }}</textarea>
                                <button type="submit">Update</button>
                                <button type="button" onclick="closeEditPopup('editForm{{ $experience->id }}')">Close</button>
                            </form>
                            <!-- Delete form -->
                            <form action="{{ route('delete-experience', $experience->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this experience?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td style="border: 1px solid black;">No experiences available.</td>
                </tr>
            @endforelse
        @else
            <tr>
                <td style="border: 1px solid black;">No experiences available.</td>
            </tr>
        @endisset
    </tbody>
</table>

<script>
function openEditPopup(formId) {
    document.getElementById(formId).style.display = 'block';
}

function closeEditPopup(formId) {
    document.getElementById(formId).style.display = 'none';
}
</script>


    <form action="{{ route('store.experience') }}" method="POST">
        @csrf {{-- CSRF token for protection --}}
        <div class="form-group">
            <label for="job_title">Job Title:</label>
            <input type="text" class="form-control" id="job_title" name="job_title" required>
        </div>
        <div class="form-group">
            <label for="company_name">Company Name:</label>
            <input type="text" class="form-control" id="company_name" name="company_name">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>





















</body>
</html>

  

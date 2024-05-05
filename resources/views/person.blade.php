<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Person Details</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Name:</strong> {{ $person->first_name }} {{ $person->last_name }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $person->email }}</p>
            <p class="card-text"><strong>Type:</strong> {{ $person->type }}</p>
            <p class="card-text"><strong>Created On:</strong> {{ $person->created_at->toDateString() }}</p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
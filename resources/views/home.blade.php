<!DOCTYPE html>
<html lang="en">
<head>
<title>My Account - Horticulture Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/try.css">
<!-- Ensure you include FontAwesome for the icons if not already included in allstyles.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<div class="header">
  <h1>Horticulture Website</h1>
  <p>Make the world green</p>
</div>

<div class="navbar">
    <a href="home.html">Home</a>
    <a href="#">Browse</a>
    <a href="/html/seller/seller.html">Sell</a>
    <a href="/html/myaccount.html">My Account</a>
    <a href="login.html" class="right">Log-in</a>
</div>

<div class="main">
    <h2>My Account</h2>
    <!-- Contact Details Section -->
    <div class="account-section">
        <h3>Contact Details</h3>
        <p>Some details...</p>
        <i class="fa fa-cog edit-button" onclick="openEditCredentialPopup('credential1')"></i>
    </div>

    <!-- Experience Section -->
    <div class="account-section">
        <h3>Experience</h3>
        <ul class="experience-list">
            <!-- Experience items will be dynamically populated -->
        </ul>
        <button class="add-button" onclick="addExperience()">+</button> <!-- Plus symbol to add experience -->
    </div>

    <!-- Credentials Section -->
    <div class="account-section">
        <h3>Credentials</h3>
        <ul class="credentials-list">
            <!-- Credentials items will be dynamically populated -->
        </ul>
        <button class="add-button" onclick="addCredential()">+</button> <!-- Plus symbol to add credentials -->
    </div>

    <!-- Service Listing Section -->
    <div class="account-section">
        <h3>Service Listing</h3>
        <ul class="service-listing">
            <!-- Service items will be dynamically populated -->
        </ul>
        <button class="add-button" onclick="addService()">+</button> <!-- Plus symbol to add service -->
    </div>

    <!-- Seller's Projects Section -->
    <div class="projects-section">
        <input type="text" id="search-projects" placeholder="Search Projects" onkeyup="filterProjects()">
        <div id="project-list">
            <!-- Project items will be dynamically populated -->
        </div>
    </div>
</div>

<div id="edit-credential-popup" class="credential-popup">
    <form id="edit-credential-form" class="credential-form">
        <h3>Edit Credential <span onclick="closeEditCredentialPopup()" class="close-popup">&times;</span></h3>
        <label for="credential-job">Job:</label>
        <input type="text" id="credential-job" name="job">
        <label for="credential-years">Years:</label>
        <input type="text" id="credential-years" name="years">
        <label for="credential-description">Description:</label>
        <input type="text" id="credential-description" name="description">
        <div class="popup-buttons">
            <button type="submit" class="confirm-button">Confirm</button>
            <button type="button" onclick="deleteCredential()" class="delete-button">Delete</button>
            <button type="button" onclick="closeEditCredentialPopup()" class="cancel-button">Cancel</button>
        </div>
    </form>
</div>

<script src="/js/myaccount.js"></script> <!-- Link to your JavaScript file -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
            <?php 
  $basePath = '../'; // because this page is inside a subfolder
  include('../includes/inc/header.php'); 
?>
</head>
<body>
<?php include('../includes/inc/topbar.php');?>

       <!-- side bar call  php function -->

    <?php include('../includes/inc/sidebar.php');?>

  
       <!-- Row1 Main Content -->
    <div class="main-content  ">

    
     

<div class="profile-body container mt-5">
  <div class="row align-items-start">
    
    <!-- Left: Profile Image with Name/Info -->
    <div class="col-md-3 text-center">
      <img src="../assests/images/default.png" alt="Profile Picture" class="img-fluid profile-pic mt-4 mb-5" style="max-width: 260px;">

      <!-- Name and Details under image -->
      <div>
        <h5 class="mb-1">Jeremy Rose</h5>
        <p class="text-primary mb-1 meduim">Teacher</p>
        <p class="text-muted small"><i class="bi bi-geo-alt me-1"></i>Islambad</p>
      </div>
    </div>

    <!-- Right: Info and Tabs -->
    <div class="col-md-8">

      <!-- Rankings -->
      <div class="border-bottom mb-3 pb-2 d-flex justify-content-between align-items-center">
        <div>
          <span class="me-2 fw-bold">Rankings:</span>
          <span>8.6</span>
          <span class="text-warning ms-2">★ ★ ★ ★ ☆</span>
        </div>
        <div>
          <button class="btn btn-outline-primary btn-sm me-2 mb-3">Send Message</button>
          <button class="btn btn-primary btn-sm mb-3">Contacts</button>
        </div>
      </div>

      <!-- Nav Tabs -->
      <ul class="nav nav-tabs mb-3" id="profileTabs">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#aboutTab">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#settingsTab">Settings</a>
        </li>
      </ul>

<!-- Tab Contents -->
<div class="tab-content">
  <!-- About Tab (NO SHADOW) -->
  <div class="tab-pane fade show active" id="aboutTab">
    <div class="row">
          <h5 class="fw-bold text-muted mb-3">Personal Information</h5>

      <!-- Phone -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Phone:</span>
        <span>(+54) 11234 56789</span>
      </div>

      <!-- Address -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Address:</span>
        <span>Buenos Aires, Argentina</span>
      </div>

      <!-- Email -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">E-mail:</span>
        <span class="text-primary">lucas@domiex.com</span>
      </div>

      <!-- Role -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Role:</span>
        <span>UI / UX Designer</span>
      </div>

      <!-- Birthday -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Birthday:</span>
        <span>January 15, 1995</span>
      </div>

      <!-- Joining Date -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Joining Date:</span>
        <span>July 1, 2023</span>
      </div>

      <!-- Language -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Language:</span>
        <span>English, Spanish</span>
      </div>

      <!-- Currency -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Currency:</span>
        <span>USD ($)</span>
      </div>

      <!-- Objective -->
      <div class="col-12 mb-3 d-flex justify-content-between">
        <span class="fw-bold text-muted">Objective:</span>
        <span class="text-end">To create intuitive and user-centered digital experiences that elevate brand value and usability.</span>
      </div>
    </div>
  </div>
</div>


<!-- Settings Tab -->
<div class="tab-pane fade" id="settingsTab">
  <h5 class="fw-bold text-muted mt-3 mb-3">Account Settings</h5>
  <form>
    <!-- Full Name -->
    <div class="mb-3">
      <label class="form-label">Full Name</label>
      <input type="text" class="form-control" value="Lucas Martinez">
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" value="lucas@domiex.com">
    </div>

    <!-- Phone -->
    <div class="mb-3">
      <label class="form-label">Phone</label>
      <input type="text" class="form-control" value="(+54) 11234 56789">
    </div>

    <!-- Address -->
    <div class="mb-3">
      <label class="form-label">Address</label>
      <input type="text" class="form-control" value="Buenos Aires, Argentina">
    </div>

    <!-- Role -->
    <div class="mb-3">
      <label class="form-label">Role</label>
      <input type="text" class="form-control" value="UI / UX Designer">
    </div>

    <!-- Birthday -->
    <div class="mb-3">
      <label class="form-label">Birthday</label>
      <input type="date" class="form-control" value="1995-01-15">
    </div>

    <!-- Joining Date -->
    <div class="mb-3">
      <label class="form-label">Joining Date</label>
      <input type="date" class="form-control" value="2023-07-01">
    </div>

    <!-- Language -->
    <div class="mb-3">
      <label class="form-label">Language</label>
      <input type="text" class="form-control" value="English, Spanish">
    </div>

    <!-- Currency -->
    <div class="mb-3">
      <label class="form-label">Currency</label>
      <input type="text" class="form-control" value="USD ($)">
    </div>

    <!-- Objective -->
    <div class="mb-3">
      <label class="form-label">Objective</label>
      <textarea class="form-control" rows="3">To create intuitive and user-centered digital experiences that elevate brand value and usability.</textarea>
    </div>

    <!-- Save Button -->
    <button class="btn btn-primary">Save Changes</button>
  </form>
</div>

    </div>
  </div>
</div>
</div>







    



<?php include('../includes/inc/footer.php'); ?>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
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
     



<!-- teacher Profile Section  -->
<div class="teacher-profile mt-3">
  <div class="profile-cover">
    <!-- Background Cover (if needed) -->
  </div>

  <div class="profile-card d-flex align-items-center ps-5 py-4 gap-4">
    
    <!-- Profile Picture -->
    <div class="profile-picture-wrapper position-relative pb-3">
      <img src="../assests/images/default.png" alt="Profile Picture" class="rounded-circle profile-picture" style="width: 90px; height: 90px; object-fit: cover;">
    </div>

    <!-- Text Content Right Side -->
    <div class="profile-info pt-5 ps-3">
      <h2 class="mb-1">Lucas Ethan</h2>
      <div class="d-flex align-items-center text-muted flex-wrap small">
        <span class="me-3">
          <i class="bi bi-laptop"></i> UI / UX Designer
        </span>
        <span class="me-3">
    <i class="bi bi-envelope me-1"></i> info@example.com
          
        </span>
        <span>
          <i class="bi bi-calendar"></i> 24 April, 2024
        </span>
      </div>
    </div>

  </div>
</div>








    



<?php include('../includes/inc/footer.php'); ?>


</body>
</html>

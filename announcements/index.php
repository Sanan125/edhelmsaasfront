<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>

    <!-- header call php function -->
    <?php 
  $basePath = '../'; // because this page is inside a subfolder
  include('../includes/inc/header.php'); 
?>
</head>
<body>

 <?php include('../includes/inc/topbar.php');?>
    <!-- sidebar call php function -->
    <?php include('../includes/inc/sidebar.php');?>



    <!-- Main Content -->
    <div class="main-content">
       
 <?php include('../includes/inc/breadcrumb.php');?>




 <!-- notification body -->
<div class="notifications-wrapper mx-5">
  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <div>
<h5 class="mb-1 fw-bold">
  <span class="position-relative d-inline-block">
    <i class="bi bi-bell-fill text-dark" style="font-size: 1rem;"></i>
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem; ">
      44
    </span>
  </span>
  <span class="ms-2"> Announcements</span>
</h5>

      <small class="text-muted">44  announcements </small>
    </div>
    <input type="text" class="form-control form-control-sm" placeholder="Search..." style="max-width: 250px;">
  </div>
<!--  Announcements -->
<div class="notification-list">

  <!--  Announcements Items Combined from All Tabs -->
<div class="bg-white p-4 rounded-3 shadow-sm">

  <!-- Announcement 1 -->
  <div class="mb-3">
    <h6 class="fw-semibold text-dark">
      <i class="fas fa-bullhorn text-success me-2"></i> Mid-Term Exams Announcement
    </h6>
    <p class="text-muted small w-50">
      Mid-term exams will begin from June 15. All students are required to be prepared in advance. Ensure you submit all necessary documents to the admin office on time.
    </p>
    <small class="text-secondary">
      <i class="far fa-calendar-alt me-1"></i> Date: 2025-06-01
    </small>
    <hr>
  </div>

  <!-- Announcement 2 -->
  <div class="mb-3">
    <h6 class="fw-semibold text-dark">
      <i class="fas fa-bullhorn text-danger me-2"></i> Document Submission Deadline
    </h6>
    <p class="text-muted small w-50">
      Please ensure that all required documents are submitted before the deadline. Late submissions will not be entertained and may affect your participation in upcoming assessments.
    </p>
    <small class="text-secondary">
      <i class="far fa-calendar-alt me-1"></i> Date: 2025-06-03
    </small>
    <hr>
  </div>

  <!-- Announcement 3 -->
  <div>
    <h6 class="fw-semibold text-dark">
      <i class="fas fa-bullhorn text-primary me-2"></i> Final Exam Schedule Notice
    </h6>
    <p class="text-muted small w-50">
      The final examination schedule will be published soon. Students are advised to stay updated and begin revising accordingly. Further details will follow via email.
    </p>
    <small class="text-secondary">
      <i class="far fa-calendar-alt me-1"></i> Date: 2025-06-05
    </small>
  </div>

</div>



<?php include('../includes/inc/footer.php');?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Management</title>

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
  <span class="ms-2">List Notification</span>
</h5>

      <small class="text-muted">44 Notifications</small>
    </div>
    <input type="text" class="form-control form-control-sm" placeholder="Search..." style="max-width: 250px;">
  </div>

  <!-- Tabs -->
  <div class="d-flex justify-content-center gap-4 border-bottom mb-3 pb-2">
    <div class="tab-box active" data-tab="all">All <span class="badge bg-danger">20</span></div>
    <div class="tab-box" data-tab="archive">Archive <span class="badge bg-secondary">10</span></div>
    <div class="tab-box" data-tab="favorite">Favorite <span class="badge bg-warning ">17</span></div>
  </div>

  <!-- Notifications -->
  <div class="notification-list">

    <!-- All Notifications -->
    <div class="tab-content" data-tab="all">
      <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-success"></span>
          <i class="bi bi-star text-warning"></i>
          <span class="notification-text">New student registered.</span>
          <small class="text-muted">Just Now</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>

      

    <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-success"></span>
          <i class="bi bi-star text-warning"></i>
          <span class="notification-text"> New teacher Ahmad added to Class 10th.</span>
          <small class="text-muted">30 min ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>
      <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-success"></span>
          <i class="bi bi-star text-warning"></i>
          <span class="notification-text">Exam invigilator list needs approval.</span>
          <small class="text-muted">1 day ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>
      <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-success"></span>
          <i class="bi bi-star text-warning"></i>
          <span class="notification-text"> Fee payment received for student Ayesha Siddiqui.</span>
          <small class="text-muted">1 hour ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>
    </div>

    <!-- Archive Notifications -->
    <div class="tab-content d-none" data-tab="archive">
      <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-secondary"></span>
          <i class="bi bi-star text-muted"></i>
          <span class="notification-text"> Class 10th timetable updated.</span>
          <small class="text-muted">5 min ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>

      <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-secondary"></span>
          <i class="bi bi-star text-muted"></i>
          <span class="notification-text"> Class 9th timetable updated.</span>
          <small class="text-muted">30 min ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>

<div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-secondary"></span>
          <i class="bi bi-star text-muted"></i>
          <span class="notification-text"> Class 8th timetable updated.</span>
          <small class="text-muted">1 hour ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>

    </div>

    <!-- Favorite Notifications -->
    <div class="tab-content d-none" data-tab="favorite">
      <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-warning"></span>
          <i class="bi bi-star-fill text-warning"></i>
          <span class="notification-text">Parent-teacher meeting scheduled for tomorrow.</span>
          <small class="text-muted">10 min ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>

<div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-warning"></span>
          <i class="bi bi-star-fill text-warning"></i>
          <span class="notification-text"> Final exam schedule needs urgent approval from admin.</span>
          <small class="text-muted">20 min ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>

      <div class="notification-item d-flex justify-content-between align-items-center p-3 mb-2 bg-white rounded shadow-sm border">
        <div class="d-flex gap-3 align-items-center">
          <input type="checkbox" class="form-check-input mt-0">
          <span class="dot bg-warning"></span>
          <i class="bi bi-star-fill text-warning"></i>
          <span class="notification-text"> Fee due reminder for Class 10th.</span>
          <small class="text-muted">1 hour min ago</small>
        </div>
        <button class="btn btn-link text-danger p-0"><i class="bi bi-trash fs-5"></i></button>
      </div>


    </div>

  </div>
</div>





<?php include('../includes/inc/footer.php');?>
</body>
</html>

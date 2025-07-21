<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement Page</title>


              <!-- header call  php function -->

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
     


     <?php include('../includes/inc/breadcrumb.php');?>

        <!-- Announcement Section -->
        <div class="announcement card pb-4">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-0 fw-bold">Manage Announcements</h5>
                    <small class="fw-normal">Manage announcements and view the list.</small>
                </div>

                <div>
                    <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                        <i class="fas fa-plus"></i>
                        <span class="btn-text">Add Announcement</span>
                    </button>
                </div>
            </div>

            <!-- Announcements List -->
            <div class="card-body mt-4">
                <div class="mb-4">
                    <div class="card shadow-md rounded mb-3">
                        <div class="card-header bg-primary text-white">
                            <strong>Mid-Term Exams Announcement</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Important Announcement:</strong></p>
                            <ul>
                                <li>Mid-Term Exams will begin from June 15th. Please be prepared.</li>
                                <li>Ensure to submit all documents before the exam date.</li>
                                <li>The final exam schedule will be announced soon.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="card shadow-md rounded mb-3">
                        <div class="card-header bg-info text-white">
                            <strong>Final Exam Schedule</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Important Announcement:</strong></p>
                            <ul>
                                <li>The final exam schedule will be announced soon.</li>
                                <li>Stay tuned for updates.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Add more announcements dynamically -->
            </div>
        </div>
    </div>

    <!-- Add New Announcement Modal -->
    <div class="modal fade" id="addAnnouncementModal" tabindex="-1" aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAnnouncementModalLabel">Add New Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="announcementTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="announcementTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="announcementDetails" class="form-label">Details</label>
                        <textarea class="form-control" id="announcementDetails" rows="4" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Post Announcement</button>
                </div>
            </form>
        </div>
    </div>


<?php 
  include('../includes/inc/footer.php'); 
?>
</body>
</html>

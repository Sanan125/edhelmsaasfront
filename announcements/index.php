<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement Page</title>

    <!-- Include the Header -->
  <?php 
  $basePath = '../'; // because this page is inside a subfolder
  include('../includes/inc/header.php'); 
?>
</head>
<body>
    
    <!-- Include the Sidebar -->
    <?php include('../includes/inc/sidebar.php');?>

    <!-- Sidebar Toggle Button for mobile -->
    <button id="sidebarToggle" class="btn btn-primary d-md-none" style="margin: 10px 20px;">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Main Content -->
    <div class="main-content px-5">
        <!-- Top Navbar -->
        <?php include('../includes/inc/topbar.php');?>

        <!-- Announcement Section -->
        <div class="card pb-4" style="margin-left: 62px; margin-right: 62px;">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-0 fw-bold">Manage Announcements</h5>
                    <small class="fw-normal">Manage announcements and view the list.</small>
                </div>

                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                        <i class="bi bi-plus-circle"></i> Add New Announcement
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



    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>

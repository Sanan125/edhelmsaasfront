<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Management</title>

    <!-- header call php function -->
    <?php include('../header.php');?>
</head>
<body>
    <!-- sidebar call php function -->
    <?php include('../sidebar.php');?>

    <!-- Sidebar Toggle Button for mobile -->
    <button id="sidebarToggle" class="btn btn-primary d-md-none" style="margin: 10px 20px;">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Main Content -->
    <div class="main-content px-5">
        <?php include('../topbar.php');?>

 <!-- Announcement and Upcoming Exams Sections -->
<div class="row mt-4 mx-5 ">
    <div class="d-flex flex-row gap-4">
        <!-- Announcement Section -->
        <div class="card shadow-md rounded border-light" style="flex: 1;">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0 fw-bold">Exam Announcements</h5>
            </div>
            <div class="card-body">
                <p><strong>Important Announcement:</strong></p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-bell-fill me-2 text-primary"></i> Mid-Term Exams will begin from June 15th. Please be prepared.</li>
                    <li><i class="bi bi-file-earmark-check me-2 text-success"></i> Remember to submit all required documents before the exam date.</li>
                    <li><i class="bi bi-calendar-event me-2 text-warning"></i> The final exam schedule will be announced soon.</li>
                </ul>
                <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
            Add Announcement
                </button>
            </div>
        </div>

        <!-- Upcoming Exams Section -->
        <div class="card shadow-md rounded border-light" style="flex: 1;">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0 fw-bold">Upcoming Exams</h5>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li><i class="bi bi-clock me-2 text-info"></i> <strong>Class One - Mid-Term Exam</strong><br>Scheduled for: June 15, 2025, 10:00 AM - 11:00 AM</li>
                    <li><i class="bi bi-clock me-2 text-info"></i> <strong>Class Two - Final Exam</strong><br>Scheduled for: July 5, 2025, 9:00 AM - 12:00 PM</li>
                    <li><i class="bi bi-clock me-2 text-info"></i> <strong>Class Three - Monthly Test</strong><br>Scheduled for: June 25, 2025, 11:00 AM - 12:00 PM</li>
                </ul>
            </div>
        </div>
    </div>
</div>



        <!-- Exam Table -->
        <div class="card pt-4 pb-4 mt-5" style="margin-left: 62px; margin-right: 62px;">
            <div class="card-header d-flex justify-content-between align-items-center bg-white">
                <div>
                    <h5 class="mb-0 fw-bold">All Exams</h5>
                    <small class="fw-normal">Manage your exams from start to finish with complete control.</small>
                </div>
                <div class="d-flex gap-2">
                    <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addExamModal">
                        <i class="fas fa-plus"></i>
                        <span class="btn-text">Add New Exam</span>
                    </button>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle download-btn" type="button" id="fileOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-download"></i><span class="btn-text">Download</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="fileOptionsDropdown">
                            <li><a class="dropdown-item" href="#">Excel</a></li>
                            <li><a class="dropdown-item" href="#">CSV</a></li>
                            <li><a class="dropdown-item" href="#">PDF</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="d-flex justify-content-between mt-3 mb-3 w-100 gap-4 ps-4 pe-4">
                <div class="d-flex w-25">
                    <input type="text" id="searchExam" class="form-control w-100" placeholder="Search Exams" onkeyup="filterTable()" />
                </div>
                <div class="d-flex w-50 gap-3 justify-content-end">
                    <!-- Filter by Class -->
                    <select class="form-select w-25" id="classSelect" aria-label="Select Class" style="font-size: 14px!important;" onchange="filterTableSelect()">
                        <option selected>Select Class</option>
                        <option value="One">Class One</option>
                        <option value="Two">Class Two</option>
                        <option value="Three">Class Three</option>
                        <option value="Four">Class Four</option>
                        <option value="Five">Class Five</option>
                    </select>
                    <select class="form-select w-25" id="examStatusSelect" aria-label="Status Select" style="font-size: 14px!important;" onchange="filterTableSelect()">
                        <option selected>Status</option>
                        <option value="Scheduled">Scheduled</option>
                        <option value="Completed">Completed</option>
                        <option value="Graded">Graded</option>
                    </select>
                </div>
            </div>

            <!-- Exam Table -->
            <table class="table ps-3 pe-3" id="examTable" data-toggle="table" data-sortable="true" data-classes="table">
                <thead>
                    <tr class="custom-header">
                        <th class="ps-4 pe-4">Exam Name</th>
                        <th class="ps-4 pe-4">Class</th>
                        <th class="ps-4 pe-4">Date</th>
                        <th class="ps-4 pe-4">Duration</th>
                        <th class="ps-4 pe-4">Status</th>
                        <th class="ps-4 pe-4">Participation</th>
                        <th class="ps-4 pe-4">Action</th>
                    </tr>
                </thead>
                <tbody id="examTableBody">
                    <!-- Exam Row Example -->
                    <tr>
                        <td class="ps-4 pe-4">Mid-Term Exam</td>
                        <td class="ps-4 pe-4">Class One</td>
                        <td class="ps-4 pe-4">2025-06-15</td>
                        <td class="ps-4 pe-4">1 hour</td>
                        <td class="ps-4 pe-4"><span class="badge bg-success">Scheduled</span></td>
                        <td class="ps-4 pe-4"><span class="badge bg-warning">Not Attempted</span></td>
                        <td class="ps-4 pe-4">
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">View Results</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Exam</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete Exam</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination Controls -->
            <div class="d-flex justify-content-between pt-4 pe-4 ps-4">
                <div>Showing 1 to 2 of 2 entries</div>
                <div>
                    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                        <i class="bi bi-chevron-left"></i>Previous
                    </button>
                    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                        <span>1</span>
                    </button>
                    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                        Next<i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Exam Modal -->
    <div class="modal fade" id="addExamModal" tabindex="-1" aria-labelledby="addExamModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addExamModalLabel">Add New Exam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="examName" class="form-label">Exam Name</label>
                        <input type="text" class="form-control" id="examName" required>
                    </div>
                    <div class="mb-3">
                        <label for="classSelect" class="form-label">Select Class</label>
                        <select class="form-select" id="classSelect" required>
                            <option value="One">Class One</option>
                            <option value="Two">Class Two</option>
                            <option value="Three">Class Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="examDate" class="form-label">Exam Date</label>
                        <input type="date" class="form-control" id="examDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="examDuration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="examDuration" placeholder="e.g., 1 hour" required>
                    </div>
                    <div class="mb-3">
                        <label for="examStatus" class="form-label">Status</label>
                        <select class="form-select" id="examStatus" required>
                            <option value="Scheduled">Scheduled</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Add Exam</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Announcement Modal -->
    <div class="modal fade" id="addAnnouncementModal" tabindex="-1" aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAnnouncementModalLabel">Add New Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="announcementText" class="form-label">Announcement</label>
                        <textarea class="form-control" id="announcementText" rows="4" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Post Announcement</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Include JS libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

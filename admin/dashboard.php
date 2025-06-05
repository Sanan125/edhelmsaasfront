<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

              <!-- header call  php function -->

          <?php include('../header.php');?>

</head>
<body>
    

       <!-- side bar call  php function -->


   <?php include('../sidebar.php');?>


    
          <!-- Sidebar Toggle Button for mobile -->
            <button id="sidebarToggle" class="btn btn-primary d-md-none" style="margin: 10px 20px;">
                <i class="fas fa-bars"></i>
            </button>


    <!-- Row1 Main Content -->
    <div class="main-content px-5 ">
        <!-- <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>School Management Dashboard</h2>
        </div> -->

        
    <?php include('../topbar.php');?>

        
        <!-- Row 2: New Sections -->
     <div class="row mx-5">
    <!-- Calendar Section -->
    <div class="col-md-4 mb-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-header bg-info text-white">
                <h5><i class="fas fa-calendar-alt me-2"></i>School Calendar</h5>
            </div>
            <div class="card-body">
                <div class="text-center mb-3">
                    <h4>June 2023</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td class="bg-primary text-white">9</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge bg-primary me-2">&nbsp;</span>
                        <small>Exam Date</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="badge bg-danger me-2">&nbsp;</span>
                        <small>Holiday</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Stats -->
    <div class="col-md-4 mb-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-header bg-secondary text-white">
                <h5><i class="fas fa-chart-pie me-2"></i>Quick Stats</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h6>Today's Attendance</h6>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%">85%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>Fee Collection</h6>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 65%">65%</div>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>Exam Preparation</h6>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%">45%</div>
                    </div>
                </div>
                <div class="mt-4">
                    <h6>Upcoming Events</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sports Day
                            <span class="badge bg-primary">15 Jun</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Parent Meeting
                            <span class="badge bg-primary">20 Jun</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- To-Do List -->
    <div class="col-md-4 mb-4">
        <div class="card dashboard-card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5><i class="fas fa-tasks me-2"></i>To-Do List</h5>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add new task...">
                    <button class="btn btn-primary" type="button">Add</button>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Prepare exam schedule</label>
                        </div>
                        <span class="badge bg-danger">High</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label text-muted"><del>Send fee reminders</del></label>
                        </div>
                        <span class="badge bg-success">Done</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Arrange staff meeting</label>
                        </div>
                        <span class="badge bg-warning">Medium</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Update library records</label>
                        </div>
                        <span class="badge bg-secondary">Low</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

        <!-- Row 3: Student List & Announcements -->
        <div class="row mx-5">
            <!-- Student List -->
            <div class="col-md-8 mb-4">
                <div class="card dashboard-card">
                    <div class="card-header bg-primary text-white">
                        <h5>Recent Student Admissions</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Admission Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>Ali Ahmed</td>
                                        <td>Class 5</td>
                                        <td>15 May 2023</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>102</td>
                                        <td>Sara Khan</td>
                                        <td>Class 7</td>
                                        <td>14 May 2023</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>103</td>
                                        <td>Usman Malik</td>
                                        <td>Class 9</td>
                                        <td>10 May 2023</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            
            <!-- Announcements -->
            <div class="col-md-4 mb-4">
                <div class="card dashboard-card">
                    <div class="card-header bg-success text-white">
                        <h5>Announcements</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <h6><i class="fas fa-info-circle me-2"></i> Summer Vacation</h6>
                            <small>School will remain closed from 1st June to 15th July</small>
                        </div>
                        <div class="alert alert-warning">
                            <h6><i class="fas fa-exclamation-triangle me-2"></i> Fee Submission</h6>
                            <small>Last date for fee submission is 30th May</small>
                        </div>
                        <div class="alert alert-primary">
                            <h6><i class="fas fa-bullhorn me-2"></i> Sports Day</h6>
                            <small>Annual sports day on 15th June</small>
                        </div>
                        <button class="btn btn-outline-success w-100 mt-2">
                            <i class="fas fa-plus"></i> Add New Announcement
                        </button>
                    </div>
                </div>
            </div>
        </div>
             <!-- row 3 site status left and events  -->
    <!-- Row 4: Site Stats (left) and Events (right) -->
<div class="row mx-5">
    <!-- Site Stats -->
    <div class="col-md-6 mb-4 site-stats">
        <div class="card dashboard-card">
            <div class="card-header bg-warning text-dark ">
                <h5>📊 Site Stats</h5>
            </div>
            <div class="card-body">
                <canvas id="siteStatsChart" height="100"></canvas>
            </div>
        </div>
    </div>

    <!-- Events/Notices -->
    <div class="col-md-6 mb-4 events">
        <div class="card dashboard-card">
            <div class="card-header bg-primary text-white">
                <h5>📌 Events & Notices</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Farewell Ceremony - The most of the words ado..</li>
                    <li class="list-group-item">Second Semester - Dedicated athlete, an ama..</li>
                    <li class="list-group-item">First Semester - If you are a dedicated at..</li>
                    <li class="list-group-item">Annual Sports Day - You surely are familiar w..</li>
                    <li class="list-group-item">Teachers Reunion - An amateur player, or a sport geek..</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    </div>


     

    <!-- Bootstrap JS + Popper (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="/includes/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.21.4/bootstrap-table.min.js"></script>
    <!-- Include Bootstrap Drop Down -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
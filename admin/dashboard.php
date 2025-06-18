<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- header call php function -->
    <?php include('../header.php');?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Sidebar -->
    <?php include('../sidebar.php');?> 

    <!-- Sidebar Toggle Button for mobile -->
    <button id="sidebarToggle" class="btn btn-primary d-md-none m-3">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Main Content -->
    <div class="main-content px-5">
        <!-- Include Top Navbar -->
        <?php include('../topbar.php');?>

        <!-- Row: Widgets Section -->
        <div class="row g-4">

            <!-- School Calendar Widget -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white d-flex align-items-center">
                        <i class="fas fa-calendar-alt me-2"></i> School Calendar
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h4>June 2023</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
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
                                        <td></td><td></td><td></td><td>1</td><td>2</td><td></td><td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td><td>6</td><td >7</td><td>8</td><td>9</td><td>10</td><td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td><td>13</td><td>14</td><td >15</td><td>16</td><td>17</td><td>18</td>
                                    </tr>
                                    <tr>
                                        <td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td>
                                    </tr>
                                    <tr>
                                        <td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td></td><td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Class Timetable Widget -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white d-flex align-items-center">
                        <i class="fas fa-table me-2"></i> Class Timetable
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9:00 AM - 10:00 AM</td><td>Math</td><td>English</td><td>Physics</td><td>Chemistry</td><td>Biology</td>
                                </tr>
                                <tr>
                                    <td>10:00 AM - 11:00 AM</td><td>English</td><td>Math</td><td>History</td><td>Physics</td><td>Chemistry</td>
                                </tr>
                                <tr>
                                    <td>11:00 AM - 12:00 PM</td><td>History</td><td>Science</td><td>Geography</td><td>Math</td><td>English</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Exam Date Sheets Widget -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <i class="fas fa-calendar-check me-2"></i> Exam Datesheets
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Physics Exam: June 15th - 9:00 AM</li>
                            <li class="list-group-item">Chemistry Exam: June 16th - 9:00 AM</li>
                            <li class="list-group-item">Mathematics Exam: June 17th - 9:00 AM</li>
                            <li class="list-group-item">English Exam: June 18th - 9:00 AM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End of Main Content -->

    <!-- Include Footer -->
    <?php include('../footer.php');?> 

</body>
</html>

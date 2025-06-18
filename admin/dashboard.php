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
    <div class="col-md-4 mb-4 w-50">
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
    
    <!-- Student Time Table -->
    <div class="col-md-4 mb-4 w-50">
    <div class="card dashboard-card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h5><i class="fas fa-calendar me-2"></i>Student Time Table</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Time</th>
                            <th scope="col">Instructor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>Math</td>
                            <td>9:00 AM - 10:30 AM</td>
                            <td>Mr. Ali</td>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>Physics</td>
                            <td>10:45 AM - 12:15 PM</td>
                            <td>Dr. Ahmed</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>Chemistry</td>
                            <td>9:00 AM - 10:30 AM</td>
                            <td>Ms. Sara</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>Biology</td>
                            <td>11:00 AM - 12:30 PM</td>
                            <td>Mr. Zain</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>Computer Science</td>
                            <td>2:00 PM - 3:30 PM</td>
                            <td>Ms. Fatima</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>History</td>
                            <td>1:00 PM - 2:30 PM</td>
                            <td>Mr. Omar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    

  <div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class=" text-center mb-0"style="font-size:16px;">School Final Exam Date Sheet - 2025</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered  table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Subject</th>
                        <th>Subject Code</th>
                        <th>Exam Date</th>
                        <th>Time</th>
                        <th>Duration</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mathematics</td>
                        <td>MAT101</td>
                        <td>15 June 2025</td>
                        <td>9:00 AM - 12:00 PM</td>
                        <td>3 Hours</td>
                        <td>Room 101, Block A</td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td>PHY102</td>
                        <td>17 June 2025</td>
                        <td>9:00 AM - 12:00 PM</td>
                        <td>3 Hours</td>
                        <td>Room 102, Block B</td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td>CHE103</td>
                        <td>19 June 2025</td>
                        <td>9:00 AM - 12:00 PM</td>
                        <td>3 Hours</td>
                        <td>Room 201, Block C</td>
                    </tr>
                    <tr>
                        <td>Computer Science</td>
                        <td>CSE104</td>
                        <td>21 June 2025</td>
                        <td>2:00 PM - 5:00 PM</td>
                        <td>3 Hours</td>
                        <td>Room 301, Block D</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>ENG105</td>
                        <td>23 June 2025</td>
                        <td>9:00 AM - 12:00 PM</td>
                        <td>3 Hours</td>
                        <td>Room 202, Block E</td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-info mt-4">
                <h5><i class="fas fa-info-circle"></i> Important Instructions:</h5>
                <ul>
                    <li> Arrive at least 30 minutes before the exam starts.</li>
                    <li> Bring your student ID card, admit card, and a valid photo ID.</li>
                    <li> Mobile phones, calculators, and other electronic devices are strictly prohibited inside the exam hall.</li>
                    <li> Ensure you have all necessary stationery (pens, pencils, etc.) before entering the exam room.</li>
                </ul>
            </div>
        </div>
    </div>
</div>



       
          
     

    <?php include('../footer.php');?>
</body>
</html>
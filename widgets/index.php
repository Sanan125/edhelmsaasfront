<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Widgets</title>

              <!-- header call  php function -->
            
              <?php 
  $basePath = '../'; // because this page is inside a subfolder
  include('../includes/inc/header.php'); 
?>


<!-- Bootstrap JS for Tooltip -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });
  });
</script>
    

</head>
<body>
     <?php include('../includes/inc/topbar.php');?>

       <!-- side bar call  php function -->

    <?php include('../includes/inc/sidebar.php');?>


    
    <!-- Row1 Main Content -->
    <div class="main-content  ">
     


     <?php include('../includes/inc/breadcrumb.php');?>
         



       <!-- Row 2: New Sections -->
<div class="calendar row mx-4 mb-5  ">
  <!-- Calendar Section -->
  <div class="col-md-4 mb-4 w-50 ">
    <div class="card dashboard-card shadow-sm">
<div class="card-header bg-primary text-white">
        <h5><i class="fas fa-calendar-alt me-2 pt-2"></i>School Calendar</h5>
      </div>
      <div class="card-body">
        <div class="text-center mb-3">
          <h4>June 2023</h4>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center align-middle">
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
                <td data-bs-toggle="tooltip" title="Parent Meeting">
                  1<br><span class="text-primary fs-6">●</span>
                </td>
                <td>2</td>
                <td data-bs-toggle="tooltip" title="Quiz Competition">
                  3<br><span class="text-success fs-6">●</span>
                </td>
                <td>4</td>
              </tr>
              <tr>
                <td data-bs-toggle="tooltip" title="Monthly Test">
                  5<br><span class="text-warning fs-6">●</span>
                </td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td class="bg-primary text-white" data-bs-toggle="tooltip" title="Final Exam Starts">
                  9<br><span class="text-white fs-6">●</span>
                </td>
                <td>10</td>
                <td>11</td>
              </tr>
              <tr>
                <td>12</td>
                <td data-bs-toggle="tooltip" title="Holiday - Eid">
                  13<br><span class="text-danger fs-6">●</span>
                </td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
              </tr>
              <tr>
                <td>19</td>
                <td>20</td>
                <td data-bs-toggle="tooltip" title="Sports Day">
                  21<br><span class="text-success fs-6">●</span>
                </td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
              </tr>
              <tr>
                <td>26</td>
                <td>27</td>
                <td data-bs-toggle="tooltip" title="Staff Meeting">
                  28<br><span class="text-info fs-6">●</span>
                </td>
                <td>29</td>
                <td>30</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>


        <!-- Legend -->
       <!-- Legend with Icons -->
<div class="mt-3 d-flex align-items-center gap-4">
  <!-- Exam Date -->
  <div class="d-flex align-items-center">
    <span class="badge bg-primary me-2">
      <i class="fas fa-calendar-alt" style="color: #555;"></i>
    </span>
    <small>Exam Date</small>
  </div>

  <!-- Holiday -->
  <div class="d-flex align-items-center">
    <span class="badge bg-danger me-2">
      <i class="fas fa-umbrella-beach" style="color: #555;"></i>
    </span>
    <small>Holiday</small>
  </div>
</div>


      </div>
    </div>
  </div>







    <!-- Student Time Table -->
   <div class="calendar-table col-md-4 mb-4 w-50">
    <div class="card dashboard-card shadow-sm">
        <div class="card-header text-white" style="background-color: #4caf50;">
            <h5 class="mb-0 d-flex align-items-center ">
                <i class="fas fa-calendar-alt me-2 pt-2"></i> Student Time Table
            </h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="monthSelector" class="form-label">Select Month:</label>
                <select id="monthSelector" class="form-select">
                    <option value="january" selected>January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
            </div>

            <div id="calendar"></div>
            <div id="eventDetails" class="mt-3"></div>
        </div>
    </div>
</div>    
  <div class="final-exam container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class=" text-center mb-0"style="font-size:16px;">School Final Exam Date Sheet - 2025</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
           <table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>Day</th>
            <th>Subject</th>
            <th>Exam Date</th>
            <th>Time</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Sunday</td>
            <td colspan="4" style="text-align: center; color: red; font-weight: bold;">OFF</td>
        </tr>
        <tr>
            <td>Monday</td>
            <td>Mathematics</td>
            <td>10 March 2025</td>
            <td>9:00 AM - 12:00 PM</td>
            <td>3 Hours</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>Physics</td>
            <td>11 March 2025</td>
            <td>9:00 AM - 12:00 PM</td>
            <td>3 Hours</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>Biology</td>
            <td>12 March 2025</td>
            <td>9:00 AM - 12:00 PM</td>
            <td>3 Hours</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>Chemistry</td>
            <td>13 March 2025</td>
            <td>9:00 AM - 12:00 PM</td>
            <td>3 Hours</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>Islamiyat</td>
            <td>14 March 2025</td>
            <td>10:00 AM - 12:00 PM</td>
            <td>2 Hours</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>Computer Science</td>
            <td>15 March 2025</td>
            <td>2:00 PM - 5:00 PM</td>
            <td>3 Hours</td>
        </tr>
        <tr>
            <td>Monday</td>
            <td>English</td>
            <td>17 March 2025</td>
            <td>9:00 AM - 12:00 PM</td>
            <td>3 Hours</td>
        </tr>
    </tbody>
</table>
           
 </div>
</div>
</div>
</div>

<?php 
  include('../includes/inc/footer.php'); 
?>
</body>
</html>
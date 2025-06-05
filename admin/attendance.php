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

<!-- Attendance Table -->
<div class="card pt-4 pb-4" style="margin-left: 62px; margin-right: 62px;">
    <div class="card-header d-flex justify-content-between align-items-center bg-white">
        <!-- Left Side: Section Title and Suboptions -->
        <div>
            <h5 class="mb-0 fw-bold">All Attendance</h5>
            <small class="fw-normal">Manage student attendance with complete control.</small>
        </div>

        <!-- Right Side: Download and Add Buttons -->
        <div class="d-flex gap-2">
            <div class="add-container">
                <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addAttendanceModal">
                    <i class="fas fa-plus"></i>
                    <span class="btn-text">Add New Attendance</span>
                </button>
            </div>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle download-btn" type="button" id="fileOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-download"></i>
                    <span class="btn-text">Download</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="fileOptionsDropdown">
                    <li><a class="dropdown-item" href="#">Excel</a></li>
                    <li><a class="dropdown-item" href="#">CSV</a></li>
                    <li><a class="dropdown-item" href="#">PDF</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Filter Section with Search and Filters -->
    <div class="d-flex justify-content-between mt-3 mb-3 w-100 gap-4 ps-4 pe-4">
        <!-- Left: Search Bar -->
        <div class="d-flex w-25">
            <input type="text" id="search" class="form-control w-100" placeholder="Search" onkeyup="filterTable()" />
        </div>

        <!-- Right: Filter Date, Status, and Select Department -->
        <div class="d-flex w-50 gap-3 justify-content-end">
            <!-- Filter Date Select Dropdown -->
            <select class="form-select w-25" aria-label="Filter Date Select" style="font-size: 14px!important;">
                <option selected>Filter Date Select</option>
                <option value="1">Weekly</option>
                <option value="2">Monthly</option>
                <option value="3">Yearly</option>
            </select>

            <!-- Status Select Dropdown -->
            <select class="form-select w-25" id="statusSelect" aria-label="Status Select" style="font-size: 14px!important;" onchange="filterTableSelect()">
                <option selected>Status Select</option>
                <option value="Active">Active</option>
                <option value="On Leave">On Leave</option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
            </select>

            <!-- Select Class Dropdown -->
            <select class="form-select w-25" id="classSelect" aria-label="Select Class" style="font-size: 14px!important;" onchange="filterTableSelect()">
                <option selected>Select Class</option>
                <option value="Class 1">Class 1</option>
                <option value="Class 2">Class 2</option>
                <option value="Class 3">Class 3</option>
                <option value="Class 4">Class 4</option>
                <option value="Class 5">Class 5</option>
                <option value="Class 6">Class 6</option>
                <option value="Class 7">Class 7</option>
                <option value="Class 8">Class 8</option>
            </select>

        </div>
    </div>

    <!-- Table Data -->
    <table class="table ps-3 pe-3" id="myTable" data-toggle="table" data-sortable="true" data-classes="table">
        <thead>
            <tr class="custom-header">
                <!-- Checkbox for Select All -->
                <th class="ps-3 pe-3"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()" /></th>
                <th class="ps-3 pe-3">Name</th>
                <th class="ps-3 pe-3" data-sortable="true">Class</th> <!-- Changed from Subject to Class -->
                <th class="ps-3 pe-3" data-sortable="true">Email</th>
                <th class="ps-3 pe-3">Status</th>
                <th class="ps-3 pe-3">Attendance</th> <!-- New Column for Attendance -->
                <th class="ps-3 pe-3">Action</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Row 1 -->
            <tr>
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox1" /></td>
                <td class="ps-4 pe-4">Sarah Johnson</td>
                <td class="ps-4 pe-4">Class 5</td> <!-- Class added here -->
                <td class="ps-4 pe-4">sarah.johnson@example.com</td>
                <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
                <td class="ps-4 pe-4">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%;">85%</div>
                    </div>
                </td>
                <td class="ps-4 pe-4">
                    <!-- Dropdown with 3 dots -->
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Overview</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Row 2 -->
            <tr>
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox2" /></td>
                <td class="ps-4 pe-4">Mark Lee</td>
                <td class="ps-4 pe-4">Class 7</td> <!-- Class added here -->
                <td class="ps-4 pe-4">mark.lee@example.com</td>
                <td class="ps-4 pe-4"><span class="badge bg-warning">On Leave</span></td>
                <td class="ps-4 pe-4">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;">40%</div>
                    </div>
                </td>
                <td class="ps-4 pe-4">
                    <!-- Dropdown with 3 dots -->
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Overview</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Row 3 -->
            <tr>
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox3" /></td>
                <td class="ps-4 pe-4">Emma Williams</td>
                <td class="ps-4 pe-4">Class 9</td> <!-- Class added here -->
                <td class="ps-4 pe-4">emma.williams@example.com</td>
                <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
                <td class="ps-4 pe-4">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%;">90%</div>
                    </div>
                </td>
                <td class="ps-4 pe-4">
                    <!-- Dropdown with 3 dots -->
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item" href="#">Overview</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Pagination Controls -->
    <div class="d-flex justify-content-between pt-4 pe-4 ps-4">
        <div>Showing 1 to 3 of 3 entries</div>
        <div>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                <i class="bi bi-chevron-left"></i>Previous
            </button>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                <span>1</span>
            </button>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                <span >2</span>
            </button>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;" >
                Next <i class="bi bi-chevron-right"></i>
            </button>
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
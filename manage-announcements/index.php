<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Announcements</title>


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
         
<!-- Subject Table -->
<div class="card pt-4 pb-4">
    <div class="card-header d-flex justify-content-between align-items-center bg-white">
        <!-- Left Side: Section Title and Suboptions -->

        <div>
          <h5 class="mb-0 fw-bold">
<img src="../assests/images/anoucement2.svg" alt="Bullhorn Icon" width="20" height="20" style="margin-right: 8px;">Manage Announcements
  
</h5>
            <small class="fw-normal">Manage your Announcements from start to finish with complete control.</small>
        </div>

        <!-- Right Side: Download and Add Buttons -->
        <div class="d-flex gap-2">
            <div class="add-container">
                <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                    <i class="fas fa-plus"></i>
                    <span class="btn-text">Add Announcement</span>
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

            <!-- Delete Button with Trash Icon (Initially Hidden) -->
            <button id="deleteBtn" class="btn btn-danger" style="display:none;" onclick="deleteSelectedTeachers()">
                <i class="fas fa-trash-alt"></i> 
            </button>
            
        </div>
    </div>

    <!-- Filter Section with Search -->
    <div class="d-flex justify-content-between mt-3 mb-3 w-100 gap-4 ps-4 pe-4">
    <!-- Left: Search Bar -->
    <div class="d-flex w-25">
        <input type="text" id="search" class="form-control w-100" placeholder="Search" onkeyup=" filterTable()" />
    </div>

        <!-- Right: Filter by Status -->
        <div class="d-flex w-50 gap-3 justify-content-end">
            <!-- Status Select Dropdown -->
            <select class="form-select w-25" id="statusSelect" aria-label="Status Select" style="font-size: 14px!important;" onchange="filterTableSelect()">
                <option selected>Status Select</option>
                <option value="	Published">	Published</option>
                <option value="Pending">Pending</option>
                <option value="Draft">Draft</option>

            </select>
        </div>
    </div>

    <!-- Table Data -->
   <table class="table ps-3 pe-3" id="subjectTable" data-toggle="table" data-sortable="true" data-classes="table">
    <thead>
        <tr class="custom-header">
            <th class="ps-3 pe-3"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()" /></th>
            <th class="ps-3 pe-3" data-sortable="true">Title</th>
            <th class="ps-3 pe-3">Description</th> <!-- New -->
            <th class="ps-3 pe-3" data-sortable="true">Status</th>
            <th class="ps-3 pe-3" data-sortable="true">Date Added</th>
            <th class="ps-3 pe-3">Last Updated</th>
            <th class="ps-3 pe-3">Action</th>
        </tr>
    </thead>
    <tbody id="tableBody">

        <!-- Row 1 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Mid-Term Exams Announcement</td>
            <td class="ps-4 pe-4">Mid-terms start from June 15. Be prepared and submit documents.</td> <!-- Description -->
            <td class="ps-4 pe-4">Published</td>
            <td class="ps-4 pe-4">2025-06-01</td>
            <td class="ps-4 pe-4">2025-06-12</td>
            <td class="ps-4 pe-4">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">View</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>

        <!-- Row 2 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Document Submission Deadline</td>
            <td class="ps-4 pe-4">All documents must be submitted before the due date.</td> <!-- Description -->
            <td class="ps-4 pe-4">Draft</td>
            <td class="ps-4 pe-4">2025-06-03</td>
            <td class="ps-4 pe-4">2025-06-10</td>
            <td class="ps-4 pe-4">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">View</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>

        <!-- Row 3 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Final Exam Schedule Notice</td>
            <td class="ps-4 pe-4">Final exam dates will be announced by the admin soon.</td> <!-- Description -->
            <td class="ps-4 pe-4">Pending</td>
            <td class="ps-4 pe-4">2025-06-05</td>
            <td class="ps-4 pe-4">2025-06-10</td>
            <td class="ps-4 pe-4">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">View</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>

    </tbody>
</table>



 <!-- Pagination Controls -->
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-2 pt-4 px-4">
  
  <!-- Showing results text -->
  <div>
    Showing 1 to 3 of 3 entries
  </div>

  <!-- Pagination buttons -->
  <div class="d-flex flex-wrap gap-2">
    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      <i class="bi bi-chevron-left"></i> Previous
    </button>

    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      <span>1</span>
    </button>

    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      <span>2</span>
    </button>

    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      Next <i class="bi bi-chevron-right"></i>
    </button>
  </div>
</div>
</div>




    <!-- Add New Announcement Modal -->
   <div class="modal fade" id="addAnnouncementModal" tabindex="-1" aria-labelledby="addAnnouncementModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAnnouncementModalLabel">Add New Announcement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Title -->
        <div class="mb-4">
          <label for="announcementTitle" class="form-label ">Title</label>
          <input type="text" class="form-control  " id="announcementTitle" required>
        </div>

        <!-- Description -->
        <div class="mb-4">
       <label for="announcementDescription" class="form-label">Description</label>
        <textarea class="form-control" id="announcementDescription" rows="4" required></textarea>
       </div>


        <!-- Status -->
<div class="mb-4">
  <label for="announcementStatus" class="form-label">Status</label>
  <select class="form-select " id="announcementStatus" required>
    <option value="">Select Status</option>
    <option value="Published">Published</option>
    <option value="Draft">Draft</option>
    <option value="Pending">Pending</option>
  </select>
</div>


        <!-- Date Added -->
        <div class="mb-3">
          <label for="dateAdded" class="form-label"> Announcement Date</label>
          <input type="date" class="form-control " id="dateAdded" required>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
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
     



<!-- teacher Profile Section  -->
<div class="teacher-profile mt-3 ">
    <div class="profile-cover">
        <!-- Cover image (background) -->
    </div>
    <div class="profile-card d-flex justify-content-center align-items-center flex-column">
        <!-- Profile Picture -->
      <div class="profile-picture-wrapper position-relative">
  <img src="../assests/images/default.png" alt="Profile Picture" class="rounded-circle profile-picture">
  
  <!-- Status Indicator (Green Dot) -->
  <div class="status-edit d-flex justify-content-center align-items-center">
    <span class="status-online"></span>
    <!-- Pencil Icon inside the Green Dot (Hidden initially) -->
    <label for="profileImage" class="pencil-icon ">
      <i class="fas fa-pen"></i> <!-- A better pencil icon -->
    </label>
  </div>

  <!-- File input (hidden, triggered by pencil icon) -->
  <input type="file" id="profileImage" class="d-none" accept="image/*" onchange="previewImage(event)">
</div>



        <!-- User Info -->
        <h3 class="d-flex justify-content-center align-items-center gap-2" >Lucas Ethan </h3>
        
        <!-- Information in a single row -->
        <div class="d-flex justify-content-center align-items-center text-muted mb-3">
            <span class="me-3">
                <i class="bi bi-laptop"></i> UI / UX Designer
            </span>
            <span class="me-3">
                <i class="bi bi-geo-alt"></i> Argentina
            </span>
            <span>
                <i class="bi bi-calendar"></i> 24 April, 2024
            </span>
        </div>
</div>





<!--  Tab Navigation -->
<ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-account-tab" data-bs-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="true">
      <i class="bi bi-person"></i> Account
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-security-tab" data-bs-toggle="pill" href="#pills-security" role="tab" aria-controls="pills-security" aria-selected="false">
      <i class="bi bi-shield-lock"></i> Security
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-activity-tab" data-bs-toggle="pill" href="#pills-activity" role="tab" aria-controls="pills-activity" aria-selected="false">
      <i class="bi bi-credit-card"></i> Activity
    </a>
  </li>
  <li class="nav-item" role="presentation">
  <a class="nav-link" id="pills-billing-tab" data-bs-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-selected="false">
    <i class="bi bi-cash"></i> Billing & Plans
  </a>
</li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-logs-tab" data-bs-toggle="pill" href="#pills-logs" role="tab" aria-controls="pills-logs" aria-selected="false">
      <i class="bi bi-box-arrow-right"></i> Logs
    </a>
  </li>

</ul>

<!-- Tab Content -->
<div class="tab-content" id="pills-tabContent">
  <!-- Account Tab Content -->
 <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
  <div class="row pt-3 pb-3">

    <!-- Left Column: Personal Info -->
    <div class="col-12 col-md-4 mb-3 mb-md-0">
      <div class="personal-info">
        <h4>Personal Information</h4>
      </div>
    </div>

    <!-- Right Column: Profile Form -->
    <div class="col-12 col-md-8">
      <form>
        <div class="row">

          <!-- First Name & Last Name -->
          <div class="col-12 col-md-6 mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" value="Lucas">
          </div>
          <div class="col-12 col-md-6 mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" value="Ethan">
          </div>

          <!-- Email & Phone -->
          <div class="col-12 col-md-6 mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" value="lucas@domiex.com">
          </div>
          <div class="col-12 col-md-6 mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" value="(+00) 00000 00000">
          </div>

          <!-- Birth & Joining -->
          <div class="col-12 col-md-6 mb-3">
            <label for="birthDate" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birthDate">
          </div>
          <div class="col-12 col-md-6 mb-3">
            <label for="joiningDate" class="form-label">Joining Date</label>
            <input type="date" class="form-control" id="joiningDate">
          </div>

          <!-- Location & Role -->
          <div class="col-12 col-md-6 mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" value="Argentina">
          </div>
          <div class="col-12 col-md-6 mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" id="role" value="UI / UX Designer">
          </div>

          <!-- Language & Currency -->
          <div class="col-12 col-md-6 mb-3">
            <label for="language" class="form-label">Language</label>
            <select class="form-control" id="language">
              <option>Select</option>
              <option>English</option>
              <option>Spanish</option>
              <option>French</option>
            </select>
          </div>
          <div class="col-12 col-md-6 mb-3">
            <label for="currency" class="form-label">Currency</label>
            <select class="form-control" id="currency">
              <option>Select</option>
              <option>USD</option>
              <option>EUR</option>
              <option>ARS</option>
            </select>
          </div>

          <!-- Objective -->
          <div class="col-12 mb-3">
            <label for="objective" class="form-label">Objective</label>
            <textarea class="form-control" id="objective" rows="3">Write your objective</textarea>
          </div>
        </div>

        <!-- Submit Button -->
<button type="submit" class="btn btn-primary w-20 d-block ms-md-auto mx-auto mx-md-0">
  Update Profile
</button>
      </form>
    </div>

  </div>
</div>

  <!--  Security tab-2 -->
   

 <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
  <div class="row pt-3 pb-3">
    <!-- Left Column: Heading (Full width on mobile, 2/12 on medium+) -->
    <div class="col-12 col-md-2 mb-3 mb-md-0">
      <div class="security-info">
        <h4>Security</h4>
      </div>
    </div>

    <!-- Right Column: Form (Full width on mobile, 10/12 on medium+) -->
    <div class="col-12 col-md-10">
      <form>
        <!-- Password Change Section -->
        <div class="mb-3">
          <label for="currentPassword" class="form-label">Current Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="currentPassword" placeholder="Enter your current password">
            <span class="input-group-text" onclick="togglePasswordVisibility('currentPassword')">
              <i class="bi bi-eye"></i>
            </span>
          </div>
        </div>

        <div class="mb-3">
          <label for="newPassword" class="form-label">New Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="newPassword" placeholder="Enter your new password">
            <span class="input-group-text" onclick="togglePasswordVisibility('newPassword')">
              <i class="bi bi-eye"></i>
            </span>
          </div>
        </div>

        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm New Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your new password">
            <span class="input-group-text" onclick="togglePasswordVisibility('confirmPassword')">
              <i class="bi bi-eye"></i>
            </span>
          </div>
        </div>

        <!-- 2FA Section -->
        <div class="mb-3">
          <label for="enable2FA" class="form-label">Enable Two-Factor Authentication (2FA)</label>
          <select class="form-control" id="enable2FA">
            <option>Select</option>
            <option>Enable 2FA</option>
            <option>Disable 2FA</option>
          </select>
        </div>

        <!-- Security Question -->
        <div class="mb-3">
          <label for="securityQuestion" class="form-label">Security Question</label>
          <select class="form-control" id="securityQuestion">
            <option>Select a question</option>
            <option>What is your mother's maiden name?</option>
            <option>What was the name of your first pet?</option>
            <option>What is the name of the city you were born in?</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="securityAnswer" class="form-label">Answer</label>
          <input type="text" class="form-control" id="securityAnswer" placeholder="Enter the answer to your security question">
        </div>

<button type="submit" class="btn btn-primary w-20 d-block ms-md-auto mx-auto mx-md-0">
    Update Security Settings
</button>        
      </form>
    </div>
  </div>
</div>




 <!-- Activity Tab 3 -->
<div class="tab-pane fade" id="pills-activity" role="tabpanel" aria-labelledby="pills-activity-tab">
  <div class="row pt-3 pb-3">
    <!-- Left Column: Filter Activity -->
    <div class="col-md-4">
      <div class="filter-activity">
        <h4>Filter Activity</h4>

        <!-- Activity Type Filter -->
        <div class="mb-3">
          <label for="activityType" class="form-label">Type</label>
          <select class="form-control" id="activityType" onchange="filterActivities()">
            <option value="all">All Select</option>
            <option value="comments">Comments</option>
            <option value="files">Uploaded Files</option>
            <option value="sales">Sales & Products</option>
            <option value="projects">Projects</option>
            <option value="flags">Flags</option>
          </select>
        </div>

        <!-- Contributor Filter -->
        <div class="mb-3">
          <label for="contributor" class="form-label">Contributor</label>
          <select class="form-control" id="contributor" onchange="filterActivities()">
            <option value="all">All Select</option>
            <option value="SRBThemes">SRBThemes</option>
            <option value="ThomasHayes">Thomas Hayes</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Right Column: Activity Stream -->
    <div class="col-md-8">
      <div class="activity-stream">
        <h4>Today</h4>

        <!-- Example Activity Cards (Add your activities here) -->
        <div class="activity-card mb-3" data-type="comments" data-contributor="SRBThemes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-chat-dots"></i>
            </div>
            <div class="activity-details">
              <span><strong>Jerome sent a message</strong></span>
              <p>Jerome sent a message to thread in channel #show-tell</p>
            </div>
          </div>
          <small>12:59 PM</small>
        </div>

        <div class="activity-card mb-3" data-type="sales" data-contributor="ThomasHayes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-bag-check"></i>
            </div>
            <div class="activity-details">
              <span><strong>New Sale</strong></span>
              <p>A returning visitor from Thomas, Italy just bought a new MacBook Pro for $1999.99</p>
            </div>
          </div>
          <small>02:35 PM</small>
        </div>

        <div class="activity-card mb-3" data-type="projects" data-contributor="SRBThemes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-cogs"></i>
            </div>
            <div class="activity-details">
              <span><strong>Project status updated</strong></span>
              <p>Marked #25 Marge as Completed</p>
            </div>
          </div>
          <small>10:27 AM</small>
        </div>

        <!-- More Today's Activities -->
        <div class="activity-card mb-3" data-type="comments" data-contributor="SRBThemes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-chat-dots"></i>
            </div>
            <div class="activity-details">
              <span><strong>John commented on a post</strong></span>
              <p>John commented on your post about web development tips.</p>
            </div>
          </div>
          <small>9:45 AM</small>
        </div>

        <div class="activity-card mb-3" data-type="files" data-contributor="ThomasHayes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-file-earmark"></i>
            </div>
            <div class="activity-details">
              <span><strong>Uploaded File</strong></span>
              <p>Thomas uploaded a file: "UI/UX Design Brief.pdf"</p>
            </div>
          </div>
          <small>8:30 AM</small>
        </div>

        <!-- Yesterday's Activities -->
        <h4>Yesterday</h4>
        <div class="activity-card mb-3" data-type="flags" data-contributor="SRBThemes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-flag"></i>
            </div>
            <div class="activity-details">
              <span><strong>Flagged Content</strong></span>
              <p>The article "Top 10 Web Design Trends" was flagged for review.</p>
            </div>
          </div>
          <small>Yesterday, 7:20 PM</small>
        </div>

        <div class="activity-card mb-3" data-type="sales" data-contributor="ThomasHayes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-bag-check"></i>
            </div>
            <div class="activity-details">
              <span><strong>New Sale</strong></span>
              <p>A customer from the USA just bought an iPhone 12 for $999.99.</p>
            </div>
          </div>
          <small>11:20 AM</small>
        </div>

        <div class="activity-card mb-3" data-type="projects" data-contributor="SRBThemes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-cogs"></i>
            </div>
            <div class="activity-details">
              <span><strong>Project Created</strong></span>
              <p>New project "Website Redesign" created by SRBThemes.</p>
            </div>
          </div>
          <small>10:45 AM</small>
        </div>

        <div class="activity-card mb-3" data-type="comments" data-contributor="ThomasHayes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-chat-dots"></i>
            </div>
            <div class="activity-details">
              <span><strong>Thomas commented</strong></span>
              <p>Thomas commented on your blog post about "CSS Grid".</p>
            </div>
          </div>
          <small>9:30 AM</small>
        </div>

        <div class="activity-card mb-3" data-type="flags" data-contributor="SRBThemes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-flag"></i>
            </div>
            <div class="activity-details">
              <span><strong>Flagged Content</strong></span>
              <p>The post "Best practices for SEO" was flagged for inappropriate content.</p>
            </div>
          </div>
          <small>Yesterday, 6:15 PM</small>
        </div>

        <div class="activity-card mb-3" data-type="files" data-contributor="ThomasHayes">
          <div class="activity-header d-flex align-items-center">
            <div class="activity-icon me-3">
              <i class="bi bi-file-earmark"></i>
            </div>
            <div class="activity-details">
              <span><strong>File Uploaded</strong></span>
              <p>Thomas uploaded a document titled "Project Plan - Marketing Strategy".</p>
            </div>
          </div>
          <small>Yesterday, 5:00 PM</small>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- tab-4 billing -->

<div class="tab-pane fade" id="pills-billing" role="tabpanel" aria-labelledby="pills-billing-tab">
  <div class="row pt-3 pb-3">
    <div class="col-12">
      <!-- Billing Table Wrapper -->
      <div class="table-responsive">
        <table class="table align-middle text-nowrap">
          <thead class="table-light">
            <tr>
              <th scope="col">Billing ID</th>
              <th scope="col">Payment Date</th>
              <th scope="col">Plan</th>
              <th scope="col">Payment Type</th>
              <th scope="col">Amount</th>
              <th scope="col">Status</th>
              <th scope="col">Invoice</th>
            </tr>
          </thead>
          <tbody>
            <!-- Sample Row -->
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>Mastercard</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <!-- Duplicate this row 8 more times with same data -->
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>Mastercard</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>Visa</td>
              <td>$29.99</td>
              <td><span class="badge bg-danger"> Unpaid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Professional Plan</td>
              <td>Mastercard</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>Mastercard</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>Mastercard</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>American Express</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>Mastercard</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
            <tr>
              <td>PEB15915</td>
              <td>03 May, 2024</td>
              <td>Basic Plan</td>
              <td>Mastercard</td>
              <td>$29.99</td>
              <td><span class="badge bg-success">Paid</span></td>
              <td><a href="#" class="btn btn-link"><i class="bi bi-download"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end mt-3">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>



<!-- Logs Tab Content -->
<div class="tab-pane fade" id="pills-logs" role="tabpanel" aria-labelledby="pills-logs-tab">
  <div class="row pt-3 pb-3">
    <div class="col-12">
      <h4 class="mb-3">Activity Logs</h4>

      <!-- Responsive Logs Table -->
      <div class="table-responsive">
        <table class="table align-middle text-nowrap">
          <thead class="table-light">
            <tr>
              <th>Device</th>
              <th>Location</th>
              <th>IP Address</th>
              <th>Status</th>
              <th>Last Activity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Apple Mac 12.5.1</td>
              <td>London, UK</td>
              <td>81.64.22.98</td>
              <td><span class="badge bg-success">Online</span></td>
              <td>12:59 PM</td>
            </tr>
            <tr>
              <td>Samsung Galaxy S20</td>
              <td>Berlin, Germany</td>
              <td>192.168.0.25</td>
              <td><span class="badge bg-danger">Offline</span></td>
              <td>11:35 AM</td>
            </tr>
            <tr>
              <td>Windows PC</td>
              <td>New York, USA</td>
              <td>192.168.5.12</td>
              <td><span class="badge bg-warning">Idle</span></td>
              <td>10:00 AM</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Log Out Button -->
      <div class="d-flex justify-content-center justify-content-md-end mt-3">
        <a href="#" class="btn btn-link text-decoration-none">
          <span>All Logouts</span>
          <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</div>





<?php include('../includes/inc/footer.php'); ?>


</body>
</html>

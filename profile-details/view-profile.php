<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Profile</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { background:#f7f9fb; }
    .profile-pic-box {
      width: 140px; height: 140px; border-radius: 50%; overflow: hidden; background: #e9ecef;
      margin-bottom: 18px; position: relative; display: flex; align-items: center; justify-content: center;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      transition: box-shadow 0.2s;
    }
    .profile-pic-box:hover { box-shadow: 0 4px 24px rgba(0,0,0,0.13); }
    .profile-pic-box img { width: 100%; height: 100%; object-fit: cover; transition: filter 0.2s; }
    .profile-pic-overlay {
      position: absolute; inset: 0; background: rgba(0,0,0,0.25); color: #fff;
      display: flex; align-items: center; justify-content: center;
      opacity: 0; transition: opacity 0.2s; font-size: 2rem; cursor: pointer;
    }
    .profile-pic-box:hover .profile-pic-overlay { opacity: 1; }
    .profile-pic-remove {
      position: absolute; top: 8px; right: 8px; background: #fff; border: none; border-radius: 50%;
      width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
      cursor: pointer; box-shadow: 0 1px 4px rgba(0,0,0,0.08); font-size: 18px; color: #888;
      transition: background 0.2s;
      z-index: 2;
    }
    .profile-pic-remove:hover { background: #f8d7da; color: #c00; }
    .sidebar-card {
      background: #f8fafc;
      border-radius: 18px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.08);
      border: 1px solid #e3e7ed;
      padding: 2.5rem 1.5rem 2rem 1.5rem;
    }
    .sidebar-card .btn-outline-secondary { border-radius: 8px; }
    .sidebar-card form .form-label { font-size: 14px; color: #888; }
    .sidebar-card form .form-control { border-radius: 8px; }
    .sidebar-card form .btn-primary { border-radius: 8px; }
    .nav-pills .nav-link {
      background: none;
      color: #888;
      border-radius: 0;
      font-weight: 500;
      position: relative;
      margin-right: 18px;
      padding-bottom: 8px;
      transition: color 0.2s;
    }
    .nav-pills .nav-link.active {
      color: #0d6efd;
      background: none;
      border-bottom: 3px solid #0d6efd;
    }
    .nav-pills .nav-link:not(.active):hover { color: #0a58ca; }
    .profile-section-title {
      font-size: 1.15rem;
      font-weight: 700;
      color: #222;
      margin-bottom: 1.2rem;
      margin-top: 0.5rem;
      letter-spacing: 0.01em;
    }
    .form-label { font-weight: 500; color: #555; }
    .form-control, .form-select, textarea.form-control {
      border-radius: 8px;
      border: 1px solid #e3e7ed;
      background: #f8fafc;
      transition: border-color 0.2s, box-shadow 0.2s;
    }
    .form-control:focus, .form-select:focus, textarea.form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 2px rgba(13,110,253,0.08);
      background: #fff;
    }
    .form-control[readonly] { background-color: #f3f4f6; }
    .save-btn {
      position: absolute;
      right: 2rem;
      bottom: 2rem;
      z-index: 2;
      min-width: 140px;
      border-radius: 8px;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(13,110,253,0.08);
    }
    .card-main {
      position: relative;
      border-radius: 18px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.08);
      border: 1px solid #e3e7ed;
      padding-bottom: 4.5rem;
    }
    .muted-label { color: #888; font-size: 13px; }
    @media (max-width: 991px) {
      .save-btn { position: static; width: 100%; margin-top: 1.5rem; }
      .card-main { padding-bottom: 2rem; }
    }
    @media (max-width: 600px) {
      .sidebar-card, .card-main { padding: 1rem !important; }
      .save-btn { right: 1rem; bottom: 1rem; }
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="row g-4">
      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="sidebar-card">
          <div class="profile-pic-box mb-3" id="profilePicBox">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" id="profilePic">
            <span class="profile-pic-overlay" id="editPicOverlay" onclick="document.getElementById('uploadInput').click()">
              <i class="bi bi-pencil"></i>
            </span>
            <button class="profile-pic-remove" id="removePicBtn" title="Remove Photo">&times;</button>
          </div>
          <input type="file" id="uploadInput" accept="image/*" style="display:none">
          <button class="btn btn-outline-secondary w-100 mb-3" onclick="document.getElementById('uploadInput').click()">
            <i class="bi bi-upload me-1"></i> Upload Photo
          </button>
          <form>
            <div class="mb-2">
              <label class="form-label">Old Password</label>
              <input type="password" class="form-control" placeholder="Old Password">
            </div>
            <div class="mb-2">
              <label class="form-label">New Password</label>
              <input type="password" class="form-control" placeholder="New Password">
            </div>
            <button type="button" class="btn btn-primary w-100">Change Password</button>
          </form>
        </div>
      </div>
      <!-- Main Content -->
      <div class="col-lg-8">
        <div class="card card-main border-0">
          <div class="card-body">
            <!-- Tabs -->
            <ul class="nav nav-pills mb-4" id="profileTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-users-tab" data-bs-toggle="pill" data-bs-target="#all-users" type="button" role="tab">All Users</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="settings-tab" data-bs-toggle="pill" data-bs-target="#settings" type="button" role="tab">Settings</button>
              </li>
              <li class="ms-auto">
                <button class="btn btn-primary" type="button"><i class="bi bi-plus-lg me-1"></i>Add New User</button>
              </li>
            </ul>
            <div class="tab-content" id="profileTabContent">
              <!-- All Users Tab -->
              <div class="tab-pane fade show active" id="all-users" role="tabpanel">
                <div class="profile-section-title">Profile Information</div>
                <form>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label">Username <span class="muted-label">(readonly)</span></label>
                      <input type="text" class="form-control" value="gene.rodrig" readonly>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">First Name</label>
                      <input type="text" class="form-control" value="Gene">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Nickname</label>
                      <input type="text" class="form-control" value="Gene.r">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Role</label>
                      <select class="form-select">
                        <option>Subscriber</option>
                        <option>Admin</option>
                        <option>Editor</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" value="Rodriguez">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Display Name Publicly as</label>
                      <input type="text" class="form-control" value="Gene">
                    </div>
                  </div>
                  <div class="profile-section-title mt-4">Contact Info</div>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label">Email <span class="muted-label">(required)</span></label>
                      <input type="email" class="form-control" value="gene.rodrig@gmail.com">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">WhatsApp</label>
                      <input type="text" class="form-control" value="@gene-rod">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Website</label>
                      <input type="text" class="form-control" value="gene-rodrig.webflow.io">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Telegram</label>
                      <input type="text" class="form-control" value="@gene-rod">
                    </div>
                  </div>
                  <div class="profile-section-title mt-4">About the User</div>
                  <div class="mb-3">
                    <label class="form-label">Biographical Info</label>
                    <textarea class="form-control" rows="3">Albert Einstein was a German mathematician and physicist who developed the special and general theories of relativity. In 1921, he won the Nobel Prize for physics for his explanation of the photoelectric effect, in the following decade.</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary save-btn">Save Changes</button>
                </form>
              </div>
              <!-- Settings Tab -->
              <div class="tab-pane fade" id="settings" role="tabpanel">
                <div class="profile-section-title">Settings</div>
                <p class="text-muted">Settings content goes here...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Profile photo upload
    document.getElementById('uploadInput').addEventListener('change', function(e) {
      if (e.target.files && e.target.files[0]) {
        var reader = new FileReader();
        reader.onload = function(ev) {
          document.getElementById('profilePic').src = ev.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
      }
    });
    // Remove profile photo
    document.getElementById('removePicBtn').addEventListener('click', function() {
      document.getElementById('profilePic').src = 'https://randomuser.me/api/portraits/men/32.jpg';
    });
  </script>
</body>
</html> 
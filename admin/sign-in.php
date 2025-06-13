<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

           <!--  call  php function -->


      <?php include('../header.php');?>

   
</head>
<body>
   
 <!-- !-- Full page container with flexbox to center content --> 
     <div class="container-fluid d-flex justify-content-center align-items-center vh-100 p-0">
        <div class="row w-50 no-gap"> <!-- no-gap removes the gap between columns -->
            <!-- Left Column (Form) -->
            <div class="col-md-6 p-0"> <!-- w-50 replaced with col-md-6 for 50% width -->
                <div class="card p-4 w-100 ">
                    <h2 class="text-left mb-2 mt-2"><b>Welcome Back! </b></h2>
                     <h6 class="text-left mb-4"style="color:#7E787C;">Please login to your account</h6>

                    <form>
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username" placeholder="admin">
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="••••••" >

                        </div>
                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <div class="d-grid">

                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </form>

                    <p class="text-center mt-2 mb-2"><a href="#">Forgot Password?</a></p>
                    <hr>

                    <div class="new-acount row justify-content-center"> 
                           <a href="../admin/sign-up.php" class="btn btn-success mt-2 w-50 " style="--bs-btn-bg:#4CAF50;">Create New Account</a>
                    </div>

                    <div class="mt-0">

          <div class="row justify-content-center">
        
    </div>
   
     </div>

      </div>
        </div>

            <!-- Right Column (Image as Background) -->
            <div class="col-md-6 p-0 right-column">
                <!-- Background image will automatically fill the column -->
            </div>
        </div>
    </div>








     

    <!-- Bootstrap JS + Popper (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="../includes/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.21.4/bootstrap-table.min.js"></script>
    <!-- Include Bootstrap Drop Down -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
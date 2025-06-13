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
   
 <!-- Full page container with flexbox to center content -->
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="row w-100">
            <!-- Left Column (Form) -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card p-4 w-75">
                    <h4 class="text-center mb-4">Welcome Back!</h4>
                    <form>
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username" placeholder="admin">
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="••••••">
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

                    <p class="text-center mt-2"><a href="#">Forgot Password?</a></p>

                    <div class="mt-4">
                        <p class="text-center">For Quick Demo Login Click Below...</p>
                        <div class="d-flex flex-wrap justify-content-center">
                            <button class="btn btn-info m-1">Admin</button>
                            <button class="btn btn-primary m-1">Teacher</button>
                            <button class="btn btn-success m-1">Student</button>
                            <button class="btn btn-warning m-1">Parent</button>
                            <button class="btn btn-danger m-1">Class</button>
                            <button class="btn btn-secondary m-1">Subject</button>
                            <button class="btn btn-dark m-1">Fees</button>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <p>“Education is the most powerful weapon which can use to change the world.” --Nelson Mandela</p>
                    </div>
                </div>
            </div>

            <!-- Right Column (Image) -->
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <img src="../assests/images/cover.jpg" alt="Cover Image" class="img-fluid rounded-3">
            </div>
        </div>
    </div>







     

    <?php include('../footer.php');?>
</body>
</html>
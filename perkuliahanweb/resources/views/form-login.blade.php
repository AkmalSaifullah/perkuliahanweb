<!-- <link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">

<form action="{{ route("proses_login") }}" method="post">
 @csrf

 <div class="col-lg-6">
    <div class="p-5">
        <center><h3>LOGIN</h3></center>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan username ..." required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password ..." required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control form-control-user" required>
                      <option value="">Pilih Level</option>
                      <option value="Admin">Admin</option>
                      <option value="Member">Member</option>
            </select>
        </div>
        <button class="btn btn-info btn-user btn-block" type="submit">Log In</button>
    </div>
</div>

</form> -->
<form action="{{ route("proses_login") }}" method="post">
 @csrf
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latform - Login and Register Form Templates</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="Login web//dist/vendor/bootstrap-4.5.3/css/bootstrap.min.css" type="text/css">
    <!-- Material design icons -->
    <link rel="stylesheet" href="Login web//dist/icons/material-design-icons/css/mdi.min.css" type="text/css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <!-- Latform styles -->
    <link rel="stylesheet" href="Login web//dist/css/latform-style-12.min.css" type="text/css">
</head>
<body>
<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="logo">
                    <img src="Login web//dist/images/logo-black.png" alt="logo">
                </div>
                <div class="my-5 text-center">
                    <h3 class="font-weight-bold mb-3">Sign In</h3>
                    <p class="text-muted">Sign in to Latform to continue</p>
                </div>
                <form>
                    <div class="form-group">
                        <div class="form-icon-wrapper">
                            <input type="text" name="username" class="form-control" placeholder="Enter email" autofocus
                                   required>
                            <i class="form-icon-left mdi mdi-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-icon-wrapper">
                            <input type="password" name="password" class="form-control" placeholder="Enter password"
                                   required>
                            <i class="form-icon-left mdi mdi-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide"
                               title="Hide or show password">
                                <i class="mdi mdi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-icon-wrapper">
                        <select name="level" class="form-control form-control-user" required>
                      <option value="">Pilih Level</option>
                      <option value="Admin">Admin</option>
                      <option value="Member">Member</option>
            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                            </div>
                            <a href="password-reset.html">I forgot my password!</a>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary">Sign In</button>
                    </div>
                    <div class="text-center">
                        Don't have an account?
                        <a href="sign-up.html">Create a free account</a>.
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 offset-md-4">
                <div class="text-divider">or</div>
            </div>
        </div>
        <div class="social-links justify-content-center">
            <a href="#">
                <i class="mdi mdi-google"></i>
            </a>
            <a href="#">
                <i class="mdi mdi-facebook"></i>
            </a>
            <a href="#">
                <i class="mdi mdi-twitter"></i>
            </a>
            <a href="#">
                <i class="mdi mdi-github"></i>
            </a>
        </div>
    </div>
</div>
<!-- Jquery -->
<script src="Login web/dist/vendor/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Login web/dist/vendor/bootstrap-4.5.3/js/bootstrap.min.js"></script>
<!-- Latform scripts -->
<script src="Login web/dist/js/latform.min.js"></script>
</body>
</html>
</form>
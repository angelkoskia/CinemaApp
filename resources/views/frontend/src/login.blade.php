<!doctype html>
<html lang="en">
<head>
    <title>Cinema App Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/frontend_assets/css_login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">User Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Welcome!</h3>

                    <form action="/login" method="post" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input name = "email" type="email" class="form-control rounded-left" placeholder="Email" required>
                        </div>
                        <div class="form-group d-flex">
                            <input name="password" type="password" class="form-control rounded-left" placeholder="Password" required>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="text-center">Don't have an account?</h4>
                            <a class="btn btn-primary rounded submit p-3" href="/register">Click here</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="/frontend_assets/js_login/jquery.min.js"></script>
<script src="/frontend_assets/js_login/popper.js"></script>
<script src="/frontend_assets/js_login/bootstrap.min.js"></script>
<script src="/frontend_assets/js_login/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>


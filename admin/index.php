<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './admin/components/style.php' ?>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">

                <main>
                    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
                            <div class="col-12 col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <!-- <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div> -->
                                    <div class="card-header d-flex justify-content-center py-3">
                                        <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="" srcset="" width="200px">
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="/tests/404.php">Forgot Password?</a>
                                                <a class="btn btn-success" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </main>
                
            </div>
        </div>
        
        <?php include './admin/components/script.php' ?>
    </body>
</html>

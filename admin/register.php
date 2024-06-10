<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/style.php' ?>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
                        <div class="col-12 col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg">
                                <div class="card-header d-flex justify-content-center py-3">
                                    <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="" srcset="" width="200px">
                                </div>                                
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputUsername" type="text" placeholder="Username" />
                                            <label for="inputUsername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><a class="btn btn-success btn-block" href="index.html">Create Account</a></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="index.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <?php include 'components/script.php' ?>
    </body>
</html>

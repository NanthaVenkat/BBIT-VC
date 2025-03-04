<!-- Header -->
<?php require "header.php"; ?>
<!-- / Header -->

<!-- login section -->
<section class="login-section login blue-gradient py-5 px-3 px-md-5 ">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 col-md-6 mb-4 mb-sm-5 mb-lg-0 d-flex align-items-center">
                <div class="login-banner login rounded-5 w-100"></div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="form-container col-12 col-lg-10 col-xl-7 mx-auto">
                    <h1 class="main-title text-white aftr-line-white d-flex flex-column mb-4">Welcome Back ! 👋</h1>
                    
                    <form action="" id="login-form" class="login-form account-form">

                        <!-- username -->
                        <div class="input-wrr d-flex flex-column mb-3">
                            <label for="username" class="required text-capitalize text-white mb-1 text-sms">Username</label>
                            <div class="inr-input d-flex align-items-center w-100 rounded-1">
                                <input type="text" name="username" class="username bg-transparent rounded-1 w-100 py-2 px-3 text-white">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="input-wrr d-flex flex-column mb-3">
                            <label for="password" class="required text-capitalize text-white mb-1 text-sms">Password</label>
                            <div class="password-wr rounded-1 d-flex align-items-center">
                                <div class="inr-input d-flex align-items-center w-100 rounded-1">
                                    <input type="password" name="password"class="password bg-transparent rounded-1 w-100 py-2 px-3 text-white w-100">
                                    
                                    <button class="toggle-pass btn">
                                        <!-- <img src="images/show-hide-eye-1.svg" alt="eye" class="hide"> -->
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- remember me -->
                        <div class="d-flex justify-content-between mb-4">
                            <div class="input-wrr remember-me d-flex align-items-center">
                                <input type="checkbox" name="remember-me" class="me-2">
                                <label for="remember-me" class="text-white text-sms ">Remember me</label>
                            </div>

                            <a href="#" class="text-white text-decoration-none text-sms">Forgot Password?</a>
                        </div>

                        <button class="btn btn-primary rounded-1 w-100 mb-3 fw-medium">Login</button>

                        <p class="text-white text-sms">Don’t have an account? <a href="#" class="text-white">Sign Up Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- / login section -->

<script type="text/javascript" src="./js/script.js"></script>
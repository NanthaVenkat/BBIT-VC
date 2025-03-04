<!-- Header -->
<?php require "header.php"; ?>
<!-- / Header -->

<!-- login section -->
<section class="login-section signin blue-gradient py-5 px-3 px-md-5 ">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 col-md-6 mb-4 mb-sm-5 mb-lg-0 d-flex align-items-center">
                <div class="login-banner w-100 signin rounded-5"></div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="form-container col-12 col-lg-10 col-xl-7 mx-auto">
                    <h1 class="main-title text-white aftr-line-white d-flex flex-column mb-4">Create Account</h1>

                    <form action="" id="login-form" class="signin-form account-form">
                        <!-- Username -->
                        <div class="input-wrr d-flex flex-column mb-3">
                            <label for="username" class="required text-capitalize text-white mb-1 text-sms">Username</label>
                            <div class="inr-input d-flex align-items-center w-100 rounded-1">
                                <input type="text" class="username bg-transparent rounded-1 w-100 py-2 px-3 text-white">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="input-wrr d-flex flex-column mb-3">
                            <label for="email" class="required text-capitalize text-white mb-1 text-sms">Email</label>
                            <div class="inr-input d-flex align-items-center w-100 rounded-1">
                                <input type="email" class="email bg-transparent rounded-1 w-100 py-2 px-3 text-white">
                            </div>
                        </div>

                        <!-- phone Number -->
                        <div class="input-wrr d-flex flex-column mb-3">
                            <label for="phone" class="required text-capitalize text-white mb-1 text-sms">Phone Number</label>
                            <div class="inr-input d-flex align-items-center w-100 rounded-1">
                                <div class="country-code-wrr px-2 border-right d-flex align-items-center justify-content-center text-white">
                                    <img src="./Images/IndianFlag.png" alt="country flag" class="rounded-5 me-2 text-sms">
                                    <span class="coun-code">+91</span>
                                </div>
                                <input type="number" name="phone" placeholder="Enter Mobile" class="phone bg-transparent rounded-1 w-100 py-2 px-3 text-white">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="input-wrr d-flex flex-column mb-3">
                            <label for="password" class="required text-capitalize text-white mb-1 text-sms">Password</label>
                            <div class="password-wr rounded-1 d-flex align-items-center">
                                <div class="inr-input d-flex align-items-center w-100 rounded-1">
                                    <input type="password" class="password bg-transparent rounded-1 w-100 py-2 px-3 text-white w-100">
                                    
                                    <button class="toggle-pass btn">
                                        <!-- <img src="images/show-hide-eye-1.svg" alt="eye" class="hide"> -->
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- conform Password -->
                        <div class="input-wrr d-flex flex-column mb-3">
                            <label for="conformPasswors" class="required text-capitalize text-white mb-1 text-sms">Confirm Password</label>
                            <div class="password-wr rounded-1 d-flex align-items-center">
                                <div class="inr-input d-flex align-items-center w-100 rounded-1">
                                    <input type="password" class="conf-password bg-transparent rounded-1 w-100 py-2 px-3 text-white w-100">

                                    <button class="toggle-pass btn">
                                        <!-- <img src="images/show-hide-eye-1.svg" alt="eye" class="hide"> -->
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <div class="input-wrr remember-me d-flex align-items-center">
                                <input type="checkbox" name="acceptPrivacyPolicy" class="me-2">
                                <label for="acceptPrivacyPolicy" class="text-white text-sms ">I agree to all terms and Privacy Policy</label>
                            </div>
                        </div>

                        <button class="btn btn-primary rounded-1 w-100 mb-3 fw-medium">Sifnf Up</button>

                        <p class="text-white text-sms">Already have an account? <a href="#" class="text-white">Log in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- / login section -->

<script type="text/javascript" src="./js/script.js"></script>
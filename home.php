<!-- Header -->
<?php include "header.php"; ?>
<!-- / Header -->

<!-- Hero Section -->
<section class="hero__section d-flex flex-column">
    <div class="swiper-container hero-swiper position-relative">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide d-flex align-items-start align-items-sm-center py-5 ">
                <div class="container">
                    <div class="row w-100 mx-0">
                        <div class="col-6 d-none d-sm-block"></div>
                        <div class="col-12 col-sm-6">
                            <div class="hero-content text-white text-center ms-auto">
                                <p class="main-sml-title text-sm mb-1">Get expert consultation at your own comfort</p>
                                <h1 class="hero-main-title">Bring your Healthcare to Your Screen!</h1>
                                <a href="#" class="btn rounded-1">Get Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide d-flex align-items-start align-items-sm-center py-5 ">
                <div class="container">
                    <div class="row w-100 mx-0">
                        <div class="col-6 d-none d-sm-block"></div>
                        <div class="col-12 col-sm-6">
                            <div class="hero-content text-white text-center ms-auto">
                                <p class="main-sml-title text-sm mb-1">Get expert consultation at your own comfort</p>
                                <h1 class="hero-main-title">Bring your Healthcare to Your Screen!</h1>
                                <a href="#" class="btn rounded-1">Get Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide d-flex align-items-start align-items-sm-center py-5 ">
                <div class="container">
                    <div class="row w-100 mx-0">
                        <div class="col-6 d-none d-sm-block"></div>
                        <div class="col-12 col-sm-6">
                            <div class="hero-content text-white text-center ms-auto">
                                <p class="main-sml-title text-sm mb-1">Get expert consultation at your own comfort</p>
                                <h1 class="hero-main-title">Bring your Healthcare to Your Screen!</h1>
                                <a href="#" class="btn rounded-1">Get Consult Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next d-none d-sm-flex"></div>
        <div class="swiper-button-prev d-none d-sm-flex"></div>
    </div>

    <div class="find-a-doc py-4">
        <div class="container">
            <form action="" id="find-doc" class="d-flex align-items-evenly justify-content-between flex-wrap gap-3">
                <h1 class="text-white mb-0 text-center text-sm-left">Find a Doctor</h1>
                <div class="input-wr input-field d-flex align-items-center gap-3">
                    <input type="text" placeholder="Name" class="py-3 px-3 rounded-1 bg-transparent">
                    <input type="text" placeholder="Speciality" class="py-3 px-3 rounded-1 bg-transparent">
                </div>
                <div class="toggle-wr d-flex align-items-center">
                    <h2 class="text-white me-2 mb-0 text-sms">Available</h2>
                    <div class="toggle-bar">
                        <a id="dr-status-btn" href="javascript:void(0);" class="toggle-btn"></a>
                    </div>
                </div>
                <button class="btn btn-primary rounded-1 px-5 py-3 text-sm">Search</button>
            </form>
        </div>
    </div>
</section>
<!-- / Hero Section -->

<!-- category -->
<section class="service-categories py-5">
    <div class="container text-center">
        <p class="titles-title text-sm mb-2">Categories</p>
        <h3 class="main-title">Services for your Health</h3>

        <div class="category-wrr d-flex flex-wrap py-4">
            <a href="#" class="category-container rounded p-3 d-flex align-items-center justify-content-between flex-column">
                <img src="./Images/Dentist-Icon.svg" alt="Dentist" class="hvr mb-2">
                <h4 class="text-sm hvr">Dentist</h4>
            </a>

            <a href="#" class="category-container rounded p-3 d-flex align-items-center justify-content-between flex-column">
                <img src="./Images/Cardiologist-Icon.svg" alt="Dentist" class="hvr mb-2">
                <h4 class="text-sm hvr">Cardiologist</h4>
            </a>

            <a href="#" class="category-container rounded p-3 d-flex align-items-center justify-content-between flex-column">
                <img src="./Images/Orthopedic-Icon.svg" alt="Dentist" class="hvr mb-2">
                <h4 class="text-sm hvr">Orthopedic</h4>
            </a>

            <a href="#" class="category-container rounded p-3 d-flex align-items-center justify-content-between flex-column">
                <img src="./Images/Neurologist-Icon.svg" alt="Dentist" class="hvr mb-2">
                <h4 class="text-sm hvr">Neurologist</h4>
            </a>

            <a href="#" class="category-container rounded p-3 d-flex align-items-center justify-content-between flex-column">
                <img src="./Images/Otology-Icon.svg" alt="Dentist" class="hvr mb-2">
                <h4 class="text-sm hvr">Otology</h4>
            </a>

            <a href="#" class="category-container rounded p-3 d-flex align-items-center justify-content-between flex-column">
                <img src="./Images/Hematology-Icon.svg" alt="Dentist" class="hvr mb-2">
                <h4 class="text-sm hvr">Hematology</h4>
            </a>

            <a href="#" class="category-container rounded p-3 d-flex align-items-center justify-content-between flex-column">
                <img src="./Images/GeneralDoctor-Icon.svg" alt="Dentist" class="hvr mb-2">
                <h4 class="text-sm hvr">General Doctor</h4>
            </a>

            <a href="#" class="category-container view-more-container rounded p-3">
                <div class="view-more-wr mb-2">
                    <div href="#" class="view-more d-flex align-items-center justify-content-center">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <h4 class="text-sm hvr">View More</h4>
            </a>
        </div>
    </div>
</section>
<!-- / category -->

<!-- 4 Steps Solution -->
<section class="four-easy-steps">
    <div class="container">
        <div class="heading text-center mb-5">
            <h3 class="main-title">4 Easy steps and get your solution</h3>
            <p class="text-sms mb-0">Navigation health together: Your trusted medical resource.</p>
            <p class="text-sms mb-0">Medicine meets technology your <span class="inr-bold">online health hub</span></p>
        </div>

        <!-- slider -->
         <div class="swiper-container four-step-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide border p-4 rounded-4">
                    <div class="img-wrr d-flex align-items-center justify-content-center p-3 mb-3">
                        <img src="./Images/doctorIcon.svg" alt="">
                    </div>
                    <div class="cnt-wr">
                        <h3 class="text-md">Check Doctor Profile</h3>
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">Online Health Hub</span></p>
                    </div>
                </div>
                
                <div class="swiper-slide border p-4 rounded-4">
                    <div class="img-wrr d-flex align-items-center justify-content-center p-3 mb-3">
                        <img src="./Images/messageIcon.svg" alt="">
                    </div>
                    <div class="cnt-wr">
                        <h3 class="text-md">Request Consultation</h3>
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">Online Health Hub</span></p>
                    </div>
                </div>

                <div class="swiper-slide border p-4 rounded-4">
                    <div class="img-wrr d-flex align-items-center justify-content-center p-3 mb-3">
                        <img src="./Images/calendarIcon.svg" alt="">
                    </div>
                    <div class="cnt-wr">
                        <h3 class="text-md">Schedule Meeting</h3>
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">Online Health Hub</span></p>
                    </div>
                </div>

                <div class="swiper-slide border p-4 rounded-4">
                    <div class="img-wrr d-flex align-items-center justify-content-center p-3 mb-3">
                        <img src="./Images/solutionIcon.svg" alt="">
                    </div>
                    <div class="cnt-wr">
                        <h3 class="text-md">Get your Solution</h3>
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">Online Health Hub</span></p>
                    </div>
                </div>
            </div>
         </div>
    </div>
</section>
<!-- / 4 Steps Solution -->

<!-- Footer -->
<?php include "footer.php"; ?>
<!-- / Footer -->
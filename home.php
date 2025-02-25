<!-- Header -->
<?php include "header.php"; ?>
<!-- / Header -->

<!-- Hero Section -->
<section class="hero__section d-flex flex-column">
    <div class="swiper-container hero-swiper position-relative">

        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide d-flex align-items-start align-items-sm-center py-5">
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
<section class="service-categories py-4 py-md-5">
    <div class="container text-center">
        <p class="titles-title text-sm mb-2">Categories</p>
        <h3 class="main-title">Services for your Health</h3>

        <div class="category-wrr d-flex flex-wrap flex-xl-nowrap py-4">
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
<section class="four-easy-steps py-4 py-md-5">
    <div class="container">
        <div class="heading text-center mb-4 mb-md-5">
            <h3 class="main-title">4 Easy steps and get your solution</h3>
            <p class="text-sms mb-0">Navigation health together: Your trusted medical resource.</p>
            <p class="text-sms mb-0">Medicine meets technology your <span class="inr-bold">status-online health hub</span></p>
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
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">status-online Health Hub</span></p>
                    </div>
                </div>

                <div class="swiper-slide border p-4 rounded-4">
                    <div class="img-wrr d-flex align-items-center justify-content-center p-3 mb-3">
                        <img src="./Images/messageIcon.svg" alt="">
                    </div>
                    <div class="cnt-wr">
                        <h3 class="text-md">Request Consultation</h3>
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">status-online Health Hub</span></p>
                    </div>
                </div>

                <div class="swiper-slide border p-4 rounded-4">
                    <div class="img-wrr d-flex align-items-center justify-content-center p-3 mb-3">
                        <img src="./Images/calendarIcon.svg" alt="">
                    </div>
                    <div class="cnt-wr">
                        <h3 class="text-md">Schedule Meeting</h3>
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">status-online Health Hub</span></p>
                    </div>
                </div>

                <div class="swiper-slide border p-4 rounded-4">
                    <div class="img-wrr d-flex align-items-center justify-content-center p-3 mb-3">
                        <img src="./Images/solutionIcon.svg" alt="">
                    </div>
                    <div class="cnt-wr">
                        <h3 class="text-md">Get your Solution</h3>
                        <p class="text-sms">Navigating health together your trusted medical resource. Medicine meets technology your <span class="inr-bold">status-online Health Hub</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / 4 Steps Solution -->

<!-- Doctors Section -->
<section class="four-easy-steps py-4 py-md-5">
    <div class="container">
        <div class="text-center mb-4 mb-md-5">
            <p class="titles-title text-sm mb-2">Meet Our Doctors</p>
            <h3 class="main-title">We’re Dedicated to Your well-Being</h3>
        </div>

        <!-- Doctor Slide  -->
        <div class="swiper-container doctor-slider">
            <div class="swiper-wrapper">

                <!-- Dr one -->
                <div class="swiper-slide border p-4 rounded-2 text-center bg-white">
                    <div class="dr-ratting position-absolute">
                        <div class="px-2 py-2 d-flex align-items-center justify-content-start">
                            <img src="./Images/RatingStar.svg" alt="rating Star" class="me-2"><span class="drs-ratings">4.9</span>
                        </div>
                    </div>

                    <div class="dr-prfile-img position-relative mb-3 mx-auto">
                        <span class="position-absolute inon-status status-offline d-inline-block"></span>
                        <img src="./Images/Dr.S.Balaji.webp" alt="Balaji">
                    </div>

                    <div class="dr-details mb-3">
                        <h3 class="text-md ff-degular">Dr. S. Balaji</h3>
                        <p class="mb-0 text-sms ff-helvetica">MRCP (UK), FICC.,</p>
                        <p class="mb-0 text-sms ff-helvetica">Senior Consultant Cardiologist</p>
                    </div>

                    <div class="dr-btn-wr ff-degular">
                        <div class="btn-wr mb-3">
                            <a href="#" class="btn text-sms w-100"><i class="fa-regular fa-envelope"></i> Ask a Query</a>
                        </div>
                        <div class="btn-wr">
                            <a href="#" class="btn text-sms w-100"><img src="./Images/video-icon.svg" alt="camera" class="">Consult on Video</a>
                        </div>
                    </div>

                </div>

                <!-- Dr two -->
                <div class="swiper-slide border p-4 rounded-2 text-center bg-white">
                    <div class="dr-ratting position-absolute">
                        <div class="px-2 py-2 d-flex align-items-center justify-content-start">
                            <img src="./Images/RatingStar.svg" alt="rating Star" class="me-2"><span class="drs-ratings">4.9</span>
                        </div>
                    </div>

                    <div class="dr-prfile-img position-relative mb-3 mx-auto">
                        <span class="position-absolute inon-status status-online d-inline-block"></span>
                        <img src="./Images/Dr.S.Balaji.webp" alt="Balaji">
                    </div>

                    <div class="dr-details mb-3">
                        <h3 class="text-md ff-degular">Dr. S. Balaji</h3>
                        <p class="mb-0 text-sms ff-helvetica">MRCP (UK), FICC.,</p>
                        <p class="mb-0 text-sms ff-helvetica">Senior Consultant Cardiologist</p>
                    </div>

                    <div class="dr-btn-wr ff-degular">
                        <div class="btn-wr mb-3">
                            <a href="#" class="btn text-sms w-100"><i class="fa-regular fa-envelope"></i> Ask a Query</a>
                        </div>
                        <div class="btn-wr">
                            <a href="#" class="btn text-sms w-100"><img src="./Images/video-icon.svg" alt="camera" class="">Consult on Video</a>
                        </div>
                    </div>

                </div>

                <!-- Dr Three -->
                <div class="swiper-slide border p-4 rounded-2 text-center bg-white">
                    <div class="dr-ratting position-absolute">
                        <div class="px-2 py-2 d-flex align-items-center justify-content-start">
                            <img src="./Images/RatingStar.svg" alt="rating Star" class="me-2"><span class="drs-ratings">4.9</span>
                        </div>
                    </div>

                    <div class="dr-prfile-img position-relative mb-3 mx-auto">
                        <span class="position-absolute inon-status status-offline d-inline-block"></span>
                        <img src="./Images/Dr.S.Balaji.webp" alt="Balaji">
                    </div>

                    <div class="dr-details mb-3">
                        <h3 class="text-md ff-degular">Dr. S. Balaji</h3>
                        <p class="mb-0 text-sms ff-helvetica">MRCP (UK), FICC.,</p>
                        <p class="mb-0 text-sms ff-helvetica">Senior Consultant Cardiologist</p>
                    </div>

                    <div class="dr-btn-wr ff-degular">
                        <div class="btn-wr mb-3">
                            <a href="#" class="btn text-sms w-100"><i class="fa-regular fa-envelope"></i> Ask a Query</a>
                        </div>
                        <div class="btn-wr">
                            <a href="#" class="btn text-sms w-100"><img src="./Images/video-icon.svg" alt="camera" class="">Consult on Video</a>
                        </div>
                    </div>

                </div>

                <!-- Dr Four -->
                <div class="swiper-slide border p-4 rounded-2 text-center bg-white">
                    <div class="dr-ratting position-absolute">
                        <div class="px-2 py-2 d-flex align-items-center justify-content-start">
                            <img src="./Images/RatingStar.svg" alt="rating Star" class="me-2"><span class="drs-ratings">4.9</span>
                        </div>
                    </div>

                    <div class="dr-prfile-img position-relative mb-3 mx-auto">
                        <span class="position-absolute inon-status status-online d-inline-block"></span>
                        <img src="./Images/Dr.S.Balaji.webp" alt="Balaji">
                    </div>

                    <div class="dr-details mb-3">
                        <h3 class="text-md ff-degular">Dr. S. Balaji</h3>
                        <p class="mb-0 text-sms ff-helvetica">MRCP (UK), FICC.,</p>
                        <p class="mb-0 text-sms ff-helvetica">Senior Consultant Cardiologist</p>
                    </div>

                    <div class="dr-btn-wr ff-degular ">
                        <div class="btn-wr mb-3">
                            <a href="#" class="btn text-sms w-100"><i class="fa-regular fa-envelope"></i> Ask a Query</a>
                        </div>
                        <div class="btn-wr">
                            <a href="#" class="btn text-sms w-100"><img src="./Images/video-icon.svg" alt="camera" class="">Consult on Video</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center view-all-wr mt-5">
                <a href="#" class="btn rounded-1 px-4 py-2 ff-helvetica">View all Doctors</a>
            </div>
        </div>
    </div>
</section>
<!-- / Doctors Section -->

<!-- Results Section -->
<section class="results-section py-4 py-md-5">
    <div class="container">
        <h3 class="main-title text-center">Our Results in Numbers</h3>
        <div class="results-wrr d-flex flex-wrap align-items-center justify-content-center mt-4 mt-md-5 ff-degular">
            <div class="results text-center">
                <h4 class="mb-0">99%</h4>
                <p class="text-sm">Customer Satisfication</p>
            </div>

            <div class="results text-center">
                <h4 class="mb-0">15k</h4>
                <p class="text-sm">Customer Satisfication</p>
            </div>

            <div class="results text-center">
                <h4 class="mb-0">12k</h4>
                <p class="text-sm">Customer Satisfication</p>
            </div>

            <div class="results text-center">
                <h4 class="mb-0">240%</h4>
                <p class="text-sm">Customer Satisfication</p>
            </div>
        </div>
    </div>
</section>
<!-- / Results Section -->

<!-- Testimonials Section -->
<?php include "./template-parts/testimonials-section.php"; ?>
<!-- / Testimonials Section -->

<!-- Form Section -->
<section class="form-section bg-secondary">
    <div class="scrooling-text-wrr ff-degular fw-700 pt-4 marquee">
        <h1 class="text-white scrolling-txt d-flex align-items-start px-3 marquee-text">
            <span class="d-inline-block me-2">
                <img src="./Images/down-arrow-degular.svg" alt="Down Arrow Degular">
            </span>This form is open 24/7. Literally. Reach us here
        </h1>
    </div>

    <div class="home-form-wrr container py-4 py-md-5">
        <form action="" class="home-form">
            <div class="row">
                <div class="input-wrr col-12 col-md-6 my-3 px-4">
                    <input type="text" name="name" id="home-name" placeholder="Your Name" class="w-100 py-3 text-sm bg-transparent border-bottom">
                </div>

                <div class="input-wrr col-12 col-md-6 my-3 px-4">
                    <input type="mail" name="mail" id="home-mail" placeholder="Your Email" class="w-100 py-3 text-sm bg-transparent border-bottom">
                </div>

                <div class="input-wrr col-12 col-md-6 my-3 px-4">
                    <input type="number" name="phone" id="home-phone" placeholder="Your Phone" class="w-100 py-3 text-sm bg-transparent border-bottom">
                </div>

                <div class="input-wrr col-12 col-md-6 my-3 px-4">
                    <textarea name="problems" id="home-textarea" placeholder="Share Problem Brief" class="w-100 py-3 text-sm bg-transparent border-bottom"></textarea>
                </div>
                <div class="homr-form-submit mt-4">
                    <button class="btn bg-white rounded-5 text-sm fw-medium px-5 py-3">Get In Touch</button>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.marquee').marquee({
            duration: 15000,
            gap: 50,
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true
        });
    });
</script>
<!-- Form Section -->

<style>
    .home-form .input-wrr input,
    .home-form .input-wrr textarea {
        border-width: 0 0 1px 0;
        border-color: #fff;
        outline: none;
        max-height: 60px;
        min-height: 60px;
        height: 60px;
        overflow: auto;
        color: #fff;
    }

    .home-form .input-wrr input::placeholder,
    .home-form .input-wrr textarea::placeholder {
        color: #FFFFFF75;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .accordion-button:focus {
        box-shadow: none;
    }
</style>

<section class="faq-section py-5">
    <div class="faq-wrapper container">
        <div class="row">
            <div class="col-12 col-md-5 ff-degular">
                <h2 class="faq-titles kas">Keep answer short</h2>
                <h2 class="faq-titles faq">FAQs</h2>
            </div>
            <div class="col-12 col-md-7 px-4 px-md-5">
                <div class="accordion" id="homefaq">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button px-0 text-sm bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is referred to as video consultation?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#homefaq">
                            <div class="accordion-body pt-0  ps-0 text-sms">
                                I had a very busy schedule which made visiting hospitals a difficult task for me. That is when I came upon this webpage from Sri Ramakrishna Hospital.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button px-0 text-sm bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Does the Sri Ramakrishna Hospital provide video consultation?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#homefaq">
                            <div class="accordion-body pt-0  ps-0 text-sms">
                                I had a very busy schedule which made visiting hospitals a difficult task for me. That is when I came upon this webpage from Sri Ramakrishna Hospital.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button px-0 text-sm bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is iclinic a safe app?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#homefaq">
                            <div class="accordion-body pt-0  ps-0 text-sms">
                                I had a very busy schedule which made visiting hospitals a difficult task for me. That is when I came upon this webpage from Sri Ramakrishna Hospital.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button px-0 text-sm bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is the process of video consultation?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#homefaq">
                            <div class="accordion-body pt-0  ps-0 text-sms">
                                I had a very busy schedule which made visiting hospitals a difficult task for me. That is when I came upon this webpage from Sri Ramakrishna Hospital.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button px-0 text-sm bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What is referred to as video consultation?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#homefaq">
                            <div class="accordion-body pt-0  ps-0 text-sms">
                                I had a very busy schedule which made visiting hospitals a difficult task for me. That is when I came upon this webpage from Sri Ramakrishna Hospital.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include "footer.php"; ?>
<!-- / Footer -->
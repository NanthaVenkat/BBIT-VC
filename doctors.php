<!-- Header -->
<?php require "header.php"; ?>
<!-- / Header -->

<style>
    .hero-section__doctors {
        background-color: #EBEEF0;
    }

    .hero-section__doctors {
        color: #6B6B6B;
    }

    .second-line {
        color: #151515;
    }

    .hero-section__doctors h1 {
        color: #151515;
        font-weight: 600;
    }

    .hero-image img {
        width: 85px;
    }

    .hero-search-input {
        outline: none;
    }

    .hr-search-btn img {
        width: 15px;
        height: 15px;
    }

    .doct-category {
        background-color: #F8F9FB;
    }

    .doctors-details__wrr {
        transition: 0.3s;

        &:hover {
            cursor: pointer;
            box-shadow: 0 0 10px -2px #00000057;
        }
    }

    .doctor-dp img {
        min-width: 160px;
        width: 160px;
        height: 200px;
        object-fit: cover;
    }

    .designation {
        color: #F78D1E;
        background-color: #F78D1E1A;
        width: max-content;
    }

    .dr-name {
        font-weight: 600;
    }

    .dr-qualifications {
        color: #6B6B6B;
    }

    .total-reviews-wrr {
        color: #151515;
    }

    .consult-langualge {
        font-weight: 500;
        color: #F78D1E;
    }

    .doctors-cnt-btn__wrr a {
        font-weight: 500;
        transition: 0.3s;
        font-size: 12px;

        &:hover {
            transform: scale(1.01);
        }

        & img {
            width: 20px;
        }
    }

    .doctors-cnt-btn__wrr a.aaq {
        border: 1px solid #E5E5E5;
        color: #151515;
    }

    .doctors-cnt-btn__wrr a.cov {
        background-color: #02B1DA;
        color: #fff;
    }

    @media screen and (min-width: 1400px) {
        .doctor-bio {
            border-right: 1px solid #E3E3E3;
        }

        /* .doctors-cnt-btn__wrr a {
            width: 150px;
        } */
    }

    @media (min-width: 576px) and (max-width: 993px) {
        .doctor-bio {
            border-right: 1px solid #E3E3E3;
        }
    }

    @media (min-width: 993px) and (max-width: 1400px) {
        .doctors-details__wrr {
            flex-direction: column !important;
        }

        /* .doctors-cnt-btn__wrr {
            margin-top: 20px !important;
            display: flex !important;
        } */

        .doctors-cnt-btn__wrr a {
            width: 50%;

            /* &.aaq {
                margin-bottom: 0 !important;
                margin-right: 20px !important;
            } */
        }
    }

    @media (max-width: 768px) {
        .doctor-dp img {
            min-width: 100px;
            width: 100px;
            height: 120px;
        }
    }

    @media screen and (max-width: 576px) {
        /* .doctors-details__wrr {
            flex-direction: column;
            margin-top: 20px;
        } */

        .doctors-cnt-btn__wrr a {
            width: 50%;
        }
    }

    @media screen and (min-width: 576px) {
        .search-wrr {
            width: 500px;
        }
    }

    .show-all-btn {
        color: #151515;
        border: 1px solid #151515 !important;
    }

    .doctors-fliter a {
        color: #BDBDBD !important;
        min-width: max-content;
    }

    .doctors-fliter a.active {
        color: #fff !important;
        background-color: #02B1DA !important;
    }
</style>

<!-- Hero Section -->
<section class="hero-section__doctors py-4 py-md-5">
    <div class="container">
        <div class="bread-crums-wrr">

            <!-- bread Crumb -->
            <ul class="breadcrumb d-flex align-items-center justify-content-start text-sms">
                <li class="location"><img src="./Images/bread-home.svg" alt="Home Button"></li>
                <li class="current location">Doctors</li>
            </ul>
        </div>
        <!-- / bread Crumb -->

        <div class="hero-image text-center"><img src="./Images/SRH-logo-icon.svg" alt="sri ramakrishna hospital logo"></div>
        <h1 class="text-center ff-degular">Doctors at Sri Ramakrishna Hospital</h1>
        <p class="text-center text-sms">"Find one of the best Doctors to get instant medical advice and second opinion for your health problems. <br>
            <span class="second-line">
                Ask doctors online and consult them through video, phone, or chat."
            </span>
        </p>

        <div class="hero-search">
            <form class="search-wrr d-flex align-items-center justify-content-center bg-white mx-auto border rounded-2 overflow-hidden">
                <input type="search" placeholder="Search Doctor’s Name and Speciality" class="hero-search-input border-0 px-3 py-2 w-100">
                <button class="hr-search-btn btn d-flex align-items-center justify-content-center border-0">
                    <img src="images/search-lence-icon.svg" alt="Search Bar">
                </button>
            </form>
        </div>
    </div>
</section>
<!-- / Hero Section -->

<!-- Doctors Category -->
<section class="doct-category pb-5">
    <div class="d-flex align-items-center justify-content-center bg-dark mb-4 mb-md-5">
        <div class="doctors-fliter py-2 px-5 overflow-auto d-flex align-items-center justify-content-start">
            <a href="#" class="btn bg-transparent mx-2 px-3 py-2 rounded-5 text-sms active border-0" data-category="all-doctor">All Doctors</a>
            <a href="#" class="btn bg-transparent mx-2 px-3 py-2 rounded-5 text-sms border-0" data-category="cardiology">Cardiology</a>
            <a href="#" class="btn bg-transparent mx-2 px-3 py-2 rounded-5 text-sms border-0" data-category="cardiothoracic">Cardiothoracic Surgery</a>
            <a href="#" class="btn bg-transparent mx-2 px-3 py-2 rounded-5 text-sms border-0" data-category="dermatology">Dermatology</a>
            <a href="#" class="btn bg-transparent mx-2 px-3 py-2 rounded-5 text-sms border-0" data-category="diabetology">Diabetology</a>
            <a href="#" class="btn bg-transparent mx-2 px-3 py-2 rounded-5 text-sms border-0" data-category="endocrinology">Endocrinology</a>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- book consult wrapper -->
            <div class="col-of-docs col-12 col-lg-6" data-location="doctors-page" data-category="cardiology">
                <div class="doctors-details__wrr d-flex align-items-center justify-content-center bg-white border rounded-4 py-3 mb-4 mb-lg-0 flex-column flex-sm-row">
                    <div class="doctors-resume w-100 d-flex align-items-start">
                        <div class="doctor-dp mx-3 ">
                            <img src="./Images/review(2).webp" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                        </div>
                        <div class="doctor-bio pe-3">
                            <!-- doctors designation -->
                            <p class="mb-0 designation px-3 py-1 rounded-4 text-center mb-3 text-sms ff-helvetica"> Surgical Gastroenterologist</p>

                            <!-- doctors name -->
                            <h3 class="dr-name text-mdx ff-degular">Dr. Anand Bharathan</h3>

                            <!-- doctors qualifications -->
                            <p class="dr-qualifications ff-helvetica text-sms mb-2 border-bottom pb-2">MBBS., MS., DNB Surgical Gastroenterology</p>
                            <div class="dr-rating">
                                <p class="text-sms ff-helvetica mb-1">Consulting Language : <span class="consult-langualge">English</span></p>

                                <div class="stars d-flex align-items-center justify-content-start">

                                    <!-- start rating  -->
                                    <p class="mb-0 me-2">
                                        <?php
                                        $rating = 4;
                                        for ($index = 1; $index <= 5; $index++) {
                                            if ($index <= $rating) {
                                                echo '<i class="fa-solid fa-star on"></i>';
                                            } else {
                                                echo '<i class="fa-solid fa-star not"></i>';
                                            }
                                        }
                                        ?>
                                    </p>

                                    <!-- total reviews -->
                                    <p class="mb-0 total-reviews-wrr ff-helvetica"><span class="total-reviews">2374</span><span> reviews</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctors-cnt-btn__wrr d-flex d-sm-block mt-4 mt-sm-0 w-100 px-3 mt-lg-3 mt-xxl-0 d-lg-flex d-xxl-block">
                        <a href="#" class="btn d-flex align-items-center justify-content-center aaq mb-0 mb-sm-3 me-3 me-sm-0 mb-lg-0 me-lg-3 mb-xxl-3 me-xxl-0"><span class="d-inline-flex me-2"><img src="./Images/envelope.svg" alt="envelope"></span><span>Ask a Query</span></a>

                        <a href="#" class="btn d-flex align-items-center justify-content-center cov"><span class="d-inline-flex me-2"><img src="./Images/video-camera.svg" alt=""></span><span>Consult on Video</span></a>
                    </div>
                </div>
            </div>

            <!-- book consult wrapper -->
            <div class="col-of-docs col-12 col-lg-6" data-location="doctors-page" data-category="endocrinology">
                <div class="doctors-details__wrr d-flex align-items-center justify-content-center bg-white border rounded-4 py-3 mb-4 mb-lg-0 flex-column flex-sm-row">
                    <div class="doctors-resume w-100 d-flex align-items-start">
                        <div class="doctor-dp mx-3 ">
                            <img src="./Images/review(2).webp" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                        </div>
                        <div class="doctor-bio pe-3">
                            <!-- doctors designation -->
                            <p class="mb-0 designation px-3 py-1 rounded-4 text-center mb-3 text-sms ff-helvetica">Surgical Gastroenterologist</p>

                            <!-- doctors name -->
                            <h3 class="dr-name text-mdx ff-degular">Dr. Anand Bharathan</h3>

                            <!-- doctors qualifications -->
                            <p class="dr-qualifications ff-helvetica text-sms mb-2 border-bottom pb-2">MBBS., MS., DNB Surgical Gastroenterology</p>
                            <div class="dr-rating">
                                <p class="text-sms ff-helvetica mb-1">Consulting Language : <span class="consult-langualge">English</span></p>

                                <div class="stars d-flex align-items-center justify-content-start">

                                    <!-- start rating  -->
                                    <p class="mb-0 me-2">
                                        <?php
                                        $rating = 4;
                                        for ($index = 1; $index <= 5; $index++) {
                                            if ($index <= $rating) {
                                                echo '<i class="fa-solid fa-star on"></i>';
                                            } else {
                                                echo '<i class="fa-solid fa-star not"></i>';
                                            }
                                        }
                                        ?>
                                    </p>
                                    <!-- total reviews -->
                                    <p class="mb-0 total-reviews-wrr ff-helvetica"><span class="total-reviews">2374</span><span> reviews</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctors-cnt-btn__wrr d-flex d-sm-block mt-4 mt-sm-0 w-100 px-3 mt-lg-3 mt-xxl-0 d-lg-flex d-xxl-block">
                        <a href="#" class="btn d-flex align-items-center justify-content-center aaq mb-0 mb-sm-3 me-3 me-sm-0 mb-lg-0 me-lg-3 mb-xxl-3 me-xxl-0"><span class="d-inline-flex me-2"><img src="./Images/envelope.svg" alt="envelope"></span><span>Ask a Query</span></a>

                        <a href="#" class="btn d-flex align-items-center justify-content-center cov"><span class="d-inline-flex me-2"><img src="./Images/video-camera.svg" alt=""></span><span>Consult on Video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="show-all-wrr text-center mt-5">
        <a href="#" class="btn show-all-btn d-inline-block rounded-2 px-5">Show all Doctors</a>
    </div>
</section>
<!-- / Doctors Category -->
 
<!-- Footer -->
<?php require "footer.php"; ?>
<!-- / Footer -->
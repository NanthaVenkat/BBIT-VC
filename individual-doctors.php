<!-- Header -->
<?php require "header.php"; ?>
<!-- / Header -->

<style>
    @media screen and (max-width: 576px) {
        .hero-section__individual-dr .container {
            padding: 0;
        }
    }

    .doctors-details__wrr {
        background-image: linear-gradient(45deg, #49DBFF, #0085A7, #06405A);
    }

    .doctors-cnt-btn__wrr a {
        border: 1px solid #FFFFFF66 !important;
        font-weight: 500;

        & span {
            filter: brightness(0) invert(1)
        }

        &.aaq:hover {
            background-color: #fff;
        }

        &.cov:hover {
            background-color: #F78D1E;
        }
    }

    /* .doctors-resume {
        border-right: 1px solid #FFFFFF80;
    } */

    .doctors-cnt-btn__wrr a.aaq:hover span {
        filter: brightness(0) invert(0);
    }

    .doctor-dp.pic > img {
        width: 220px;
        height: 250px;
        object-fit: cover;
        object-position: center;
    }

    .doctor-dp.years img {
        width: 130px;
        height: 100%;
    }

    @media screen and (max-width: 993px) {
        .doctor-dp.pic > img {
            width: 170px;
            height: 200px;
        }

        .doctor-dp.years img {
            width: 90px;
        }
    }

    .designation {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .doc-divider {
        width: 1px;
        background: #ffffff50;
    }

    @media screen and (max-width: 576px) {
        ul.breadcrumb.text-sms {
            font-size: 12px !important;
        }

        .doctors-details__wrr {
            border-radius: 0 !important;

            &.row {
                margin-left: 0;
                margin-right: 0;
            }
        }

        .doctors-cnt-btn__wrr a {
            &.cov {
                background-color: #F78D1E;
            }

            &.aaq:hover {
                background-color: #ffffff00 !important;
                filter: brightness(0) invert(1) !important;
            }
        }

        .doctor-dp.years {
            position: absolute;
            left: -95px;
        }
    }
</style>

<section class="hero-section__individual-dr py-4">
    <div class="container">
        <div class="bread-crums-wrr">

            <!-- bread Crumb -->
            <ul class="breadcrumb d-flex align-items-center justify-content-start text-sms">
                <li class="location"><img src="./Images/bread-home.svg" alt="Home Button"></li>
                <li class="location">Doctors</li>
                <li class="location">Surgical Gastroenterologist</li>
                <li class="current location">Dr. Anand Bharathan</li>
            </ul>
        </div>
        <!-- / bread Crumb -->

        <!-- Doctor Card -->
        <!-- <div class="doctor-card p-4 rounded-4">
            <div class="years-of-service">
                <img src="" alt="Years Of service">
            </div>

            <div class="doctor-image">

            </div>

            <div class="doctor-details-wrapper">

            </div>
        </div> -->
        <div class="doctors-details__wrr row bg-white border rounded-4 px-3 py-5 p-sm-4">
            <!-- Doctor image -->
            <div class="doctor-dp-wrr col-12 col-md-6 col-xl-4 d-flex align-items-start justify-content-center position-relative">
                <div class="doctor-dp years px-0 px-sm-3 d-none d-sm-block">
                    <img src="./Images/ten-years-exp.svg" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                </div>

                <div class="doctor-dp pic position-relative">
                    <div class="doctor-dp years px-0 px-sm-3 d-block d-sm-none">
                        <img src="./Images/ten-years-exp.svg" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                    </div>

                    <img src="./Images/review(2).webp" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                </div>
            </div>

            <!-- Doctor Resume -->
            <div class="doctors-resume col-12 col-md-6 col-xl-5 d-flex align-content-center justify-content-evenly mt-4 mt-md-0">
                <div class="doctor-bio pe-0 pe-md-3 d-flex flex-column justify-content-center">
                    <!-- doctors designation -->
                    <p class="mb-0 designation px-3 py-2 rounded-2 text-center mb-3 text-sms ff-helvetica text-white"> Surgical Gastroenterologist</p>

                    <!-- doctors name -->
                    <h3 class="dr-name ff-degular text-white">Dr. Anand Bharathan</h3>

                    <!-- doctors qualifications -->
                    <p class="dr-qualifications ff-helvetica text-sms mb-3 border-bottom pb-3 text-white">MBBS., MS., DNB Surgical Gastroenterology</p>
                    <div class="dr-rating">
                        <p class="text-sms ff-helvetica mb-1 text-white">Consulting Language : <span class="consult-langualge">English, Tamil</span></p>

                        <div class="stars d-flex align-items-center justify-content-start">

                            <!-- start rating  -->
                            <p class="mb-0 me-2">
                                <?php
                                $rating = 4;
                                for ($index = 1; $index <= 5; $index++) {
                                    if ($index <= $rating) {
                                        echo '<i class="fa-solid fa-star on"></i>';
                                    } else {
                                        echo '<i class="fa-solid fa-star not text-white"></i>';
                                    }
                                }
                                ?>
                            </p>

                            <!-- total reviews -->
                            <p class="mb-0 total-reviews-wrr ff-helvetica text-white"><span class="total-reviews">2374</span><span> reviews</span></p>
                        </div>
                    </div>
                </div>

                <div class="d-none d-xl-inline-block h-100 doc-divider"></div>
            </div>

            <!-- Doctor Contemnt -->
            <div class="doctors-cnt-btn__wrr col-12 col-xl-3 d-flex align-content-center flex-column flex-sm-row flex-xl-column justify-content-center mt-4 mt-xl-0">
                <a href="#" class="btn d-flex align-items-center mb-3 mb-sm-0 me-4 me-xl-0 mb-xl-4 rounded-1 px-4 py-2 justify-content-center w-100 aaq"><span class="d-inline-flex me-2"><img src="./Images/envelope.svg" alt="envelope"></span><span>Ask a Query</span></a>

                <a href="#" class="btn d-flex align-items-center rounded-1 px-4 py-2 justify-content-center w-100 cov"><span class="d-inline-flex me-2"><img src="./Images/video-camera.svg" alt=""></span><span>Consult on Video</span></a>
            </div>
        </div>
        <!-- / Doctor Card -->
    </div>
</section>

<!-- Footer -->
<?php require "footer.php"; ?>
<!-- / Footer -->
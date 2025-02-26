<!-- Header -->
<?php require "header.php"; ?>
<!-- / Header -->

<style>
    .blue-gradient {
        background-image: linear-gradient(225deg, #49DBFF, #0085A7, #06405A);
    }

    .dr-profile {
        width: max-content;

        & .doc-img {
            width: 200px;
            height: 200px;
        }
    }

    .dr-profile .exp-years {
        --width: 80px;
        width: var(--width);
        left: calc(-1 * (var(--width) + 5px));
        top: 20px;
    }

    @media screen and (max-width: 576px) {

        .dr-profile {
            width: max-content;

            & .doc-img {
                width: 170px;
                height: 170px;
            }
        }

        .dr-profile .exp-years {
            --width: 60px;
            top: 30px;
        }
    }

    @media screen and (min-width: 576px) {
        .hero-section__query .container:last-of-type {
            border-radius: 12px;
            border: 1px solid #EBEEF0;
        }

        .query-area {
            max-width: 500px;
            min-height: 200px;
        }

        .query-form .btn {
            width: 220px;
        }
    }

    .query-area {
        min-height: 200px;
    }
</style>

<!-- Hero Section -->
<section class="hero-section__query pt-5">
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
    </div>
    <div class="container bg-white p-3 p-sm-5">
        <div class="row">
            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                <div class="blue-gradient pt-4 pb-5 px-4 px-md-5  px-xl-4 rounded-2 position-relative text-center d-block d-md-flex d-xl-block">

                    <div class="dr-profile position-relative mx-auto mx-md-5 mx-xl-auto">
                        <img src="./Images/ten-years-exp.svg" alt="Dr Ananth Bharathan" class="position-absolute exp-years">
                        <img src="./Images/review(2).webp" alt="Doctor Name" class="doc-img rounded-3 mt-5 mb-4 mb-md-0 mb-xl-4">
                    </div>

                    <div class="doctors-resume d-flex align-content-center justify-content-center">
                        <div class="doctor-bio d-flex flex-column justify-content-center text-center text-md-start text-xl-center">

                            <!-- doctors name -->
                            <h3 class="dr-name ff-degular text-white">Dr. Anand Bharathan</h3>

                            <!-- doctors qualifications -->
                            <p class="dr-qualifications ff-helvetica text-sms text-white">MBBS., MS., DNB Surgical Gastroenterology</p>
                            <div class="dr-rating">

                                <!-- doctors designation -->
                                <p class="mb-0 designation glass-transparent px-3 py-2 rounded-2 text-center mb-3 text-sms ff-helvetica text-white mx-auto mx-md-0 mx-xl-auto"> Surgical Gastroenterologist</p>
                                <p class="text-sms ff-helvetica mb-1 text-white">Consulting Language : <span class="consult-langualge">English, Tamil</span></p>

                                <div class="stars d-flex align-items-center justify-content-start mx-auto mx-md-0 mx-xl-auto">

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
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="query-wrr ms-0 ms-xl-5">
                    <p class="text-sms mb-1">Get free medical advice on your first query</p>

                    <h3 class="main-title aftr-line mb-3">Ask a Doctor Online</h3>

                    <form action="" class="query-form mt-4">
                        <div class="input-wrr d-flex justify-content-start flex-column">
                            <label for="querys" class="text-uppercase text-sms required fw-medium mb-3">Enter your health query</label>
                            <textarea name="querys" placeholder="Elaborate your health query with symptoms, current medication, gender, age, height and weight" class="query-area p-3 rounded-3 border text-sms"></textarea>

                            <button class="btn btn-primary rounded-1 text-sm mt-4 mt-md-5">Submit & Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Hero Section -->


<!-- Testimonials Section -->
<?php include "./template-parts/testimonials-section.php"; ?>
<!-- / Testimonials Section -->

<!-- Footer -->
<?php require "footer.php"; ?>
<!-- / Footer -->
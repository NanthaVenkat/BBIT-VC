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

    .doctor-dp.pic>img {
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
        .doctor-dp.pic>img {
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
        width: max-content;
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
    }

    @media screen and (max-width: 768px) {
        .doctor-dp.years {
            position: absolute;
            left: -95px;
        }

        .designation {
            width: max-content;
        }
    }

    #accordionprofesionalBio {
        background-color: #F8F9FB;

        & .accordion-item:not(.accordion-item:last-child) {
            border-width: 0 0 1px 0;
            border-bottom: 1px solid #D3D3D3;
        }

        & .accordion-button::after {
            background-image: url("./Images/accordionArrow.svg");
            width: 15px;
            height: 15px;
            background-size: contain;
        }

        & .accordion-item {
            background-color: transparent;
        }

        & .accordion-item:last-of-type {
            border: none;
        }
    }

    .profesional-bio-des p {
        color: #6B6B6B;
    }

    .inperson-consultation .container .inpersion-inner::before {
        content: "";
        position: absolute;
        width: 100%;
        background-image: url(./Images/gradient-circle.svg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        display: inline-block;
        left: 0;
        top: 0;
        z-index: 0;
    }

    .inpersion-inner p {
        color: #6B6B6B;
    }

    .inpersion-inner .srh {
        color: #02B1DA;
    }

    .inpersion-inner h3,
    .inpersion-inner p,
    .inpersion-inner a {
        z-index: 1;
        position: relative;
    }

    .inpersion-inner {
        max-width: 700px;
    }

    .profesional-bio-wrr {
        border: 1px solid #EBEEF0;
        border-radius: 12px;
    }

    @media screen and (max-width: 576px) {
        .profesional-bio-wrr {
            border-radius: 0px;
        }

        .inperson-consultation .container .inpersion-inner::before {
            display: none;
        }
    }
</style>

<!-- hero section -->
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
                <div class="doctor-dp years px-0 px-md-3 d-none d-md-block">
                    <img src="./Images/ten-years-exp.svg" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                </div>

                <div class="doctor-dp pic position-relative">
                    <div class="doctor-dp years px-0 px-md-3 d-block d-md-none">
                        <img src="./Images/ten-years-exp.svg" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                    </div>

                    <img src="./Images/review(2).webp" alt="Dr Ananth Bharathan" class="rounded-3 overflow-hidden">
                </div>
            </div>

            <!-- Doctor Resume -->
            <div class="doctors-resume col-12 col-md-6 col-xl-5 d-flex align-content-center justify-content-center justify-content-evenly mt-4 mt-md-0">
                <div class="doctor-bio pe-0 pe-md-3 d-flex flex-column justify-content-center text-center text-md-start">
                    <!-- doctors designation -->
                    <p class="mb-0 designation px-3 py-2 rounded-2 text-center mb-3 text-sms ff-helvetica text-white mx-auto mx-md-0"> Surgical Gastroenterologist</p>

                    <!-- doctors name -->
                    <h3 class="dr-name ff-degular text-white">Dr. Anand Bharathan</h3>

                    <!-- doctors qualifications -->
                    <p class="dr-qualifications ff-helvetica text-sms mb-3 border-bottom pb-3 text-white">MBBS., MS., DNB Surgical Gastroenterology</p>
                    <div class="dr-rating">
                        <p class="text-sms ff-helvetica mb-1 text-white">Consulting Language : <span class="consult-langualge">English, Tamil</span></p>

                        <div class="stars d-flex align-items-center justify-content-start  mx-auto mx-md-0">

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

<!-- profesional Bio -->
<section class="profesional-bio py-md-4">
    <div class="container">
        <div class="row profesional-bio-wrr bg-white py-4 py-md-5 px-3 px-md-5">
            <div class="col-12 col-lg-6 profesional-bio-des mb-3 mb-sm-4 mb-lg-0">
                <h2 class="ff-degular">Professional Bio</h2>
                <p class="text-sms ff-helvetica">Dr. Anand Bharathan is a senior consultant surgeon in HPB, GI Surgery and Liver Transplantation at Sri Ramakrishna Hospital, Coimbatore. He did his higher surgical training in Surgical Gastroenterology from the renowned “Nizam’s Institute of Medical Sciences, Hyderabad”. He worked as a consultant Surgeon in Hepato Biliary Pancreatic (HPB) Surgery at the world renowned “Christian Medical College, Vellore”. His liver transplantation fellowship training was under the supervision of world renowned liver transplant surgeon, “Prof. Mohamed Rela” at Global Hospital, Chennai and was affiliated to Tamilnadu Dr. MGR Medical University.</p>
            </div>

            <div class="col-12 col-lg-6">
                <div class="accordion border rounded-4 overflow-hidden px-4 px-md-5 py-3" id="accordionprofesionalBio">
                    <div class="accordion-item">
                        <h2 class="accordion-header ff-degular" id="headingOne">
                            <button class="accordion-button text-mdx px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Academics
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionprofesionalBio">
                            <div class="accordion-body text-xsm pt-0 px-0 fw-normal ff-helvetica">
                                M.S.,<br>
                                DNB., (SURGICAL GASTROENTEROLOGY)<br>
                                PDF., (Liver Transplantation)<br>
                                Mgr University<br>
                                2002
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header ff-degular" id="headingTwo">
                            <button class="accordion-button text-mdx px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Experience
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionprofesionalBio">
                            <div class="accordion-body text-xsm pt-0 px-0 fw-normal ff-helvetica">
                                M.S.,<br>
                                DNB., (SURGICAL GASTROENTEROLOGY)<br>
                                PDF., (Liver Transplantation)<br>
                                Mgr University<br>
                                2002
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header ff-degular" id="headingThree">
                            <button class="accordion-button text-mdx px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Expertise
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionprofesionalBio">
                            <div class="accordion-body text-xsm pt-0 px-0 fw-normal ff-helvetica">
                                M.S.,<br>
                                DNB., (SURGICAL GASTROENTEROLOGY)<br>
                                PDF., (Liver Transplantation)<br>
                                Mgr University<br>
                                2002
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header ff-degular" id="headingFour">
                            <button class="accordion-button text-mdx px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Languages
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionprofesionalBio">
                            <div class="accordion-body text-xsm pt-0 px-0 fw-normal ff-helvetica">
                                M.S.,<br>
                                DNB., (SURGICAL GASTROENTEROLOGY)<br>
                                PDF., (Liver Transplantation)<br>
                                Mgr University<br>
                                2002
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<?php include "./template-parts/testimonials-section.php"; ?>
<!-- / Testimonials Section -->


<section class="inperson-consultation bg-white mt-0 mt-md-4">
    <div class="container position-relative overflow-hidden">
        <div class="inpersion-inner py-0 py-md-5 px-5 text-center position-relative mx-auto">
            <div class="py-4 py-md-5">
                <h3 class="main-title mb-2 mb-md-4">In-Person Consultation</h3>
                <p class="srh text-md fw-semibold mb-1">Sri Ramakrishna Hospital</p>
                <p class="text-sms fw-normal mb-4">No: 395, Sarojini Naidu Road, Sidhapudur, Coimbatore, Tamil Nadu, Zip: 641044, India</p>
    
                <a href="#" class="btn text-sms fw-medium text-white bg-black rounded-1">Book an Appointment</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php require "footer.php"; ?>
<!-- / Footer -->
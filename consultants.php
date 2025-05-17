<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dental Clinic</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.css" />
    <link rel="stylesheet" href="css/bootstrap-min.css" />
    <link rel="stylesheet" href="css/custom-style.css" />
    <!-- FontAwesome CDN (add this inside your <head> tag) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">


    <style>
        @media (min-width: 992px) {
            .navbar .dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        .custom-navbar {
            background-color: #e6f7ff;
            /* soft dental blue */
        }

        .custom-navbar .nav-link {
            color: #007cc2;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .custom-navbar .nav-link:hover,
        .custom-navbar .nav-link.active {
            color: #005b9f;
        }

        .custom-navbar .dropdown-menu {
            background-color: #f1faff;
            border: 1px solid #d0e7f3;
        }

        .custom-navbar .dropdown-item {
            color: #007cc2;
            font-weight: 500;
        }

        .custom-navbar .dropdown-item:hover {
            background-color: #d0e7f3;
            color: #004e86;
        }

        .flip-card {
            width: 100%;
            max-width: 400px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .flip-card:hover {
            transform: translateY(-5px);
        }

        .flip-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }

        .flip-card-body {
            padding: 1rem;
            text-align: center;
        }

        .flip-card-body h5 {
            color: #007bff;
            margin-bottom: 0.5rem;
        }

        .flip-card-body p {
            margin: 0;
            font-size: 0.95rem;
            color: #555;
        }

        .service-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>



</head>

<body>

    <?php include 'layouts/header.php';
    include 'layouts/banner.php';
    ?>


    <!-- Doctor Panel Section
    <section id="doctors" class="doctors">
        <div class="container my-5">
            <h2 class="text-center mb-4">Our Team of Consultant Doctors</h2>
            <div class="row justify-content-center g-4">
                <p class="text-center mb-5 text-muted">
                    Meet our amazing team of consultant doctors—experts in everything from kids' dentistry to advanced
                    surgeries. They bring years of experience, a gentle touch, and a passion for making every patient
                    feel comfortable and confident. Together, they’re here to give you the best care possible, every
                    step of the way.
                </p>

                <div class="row justify-content-center g-4">
                    <div class="col-md-3">
                        <div class="flip-card">
                            <img src="images/Dr. Mukesh Purohit.jpg" alt="Dr. Mukesh Purohit" />
                            <div class="flip-card-body">
                                <h5>Dr. Mukesh Purohit</h5>
                                <p>BDS, MDS (Periodontics & Implantology)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card">
                            <img src="images/Dr. Prathamesh Nikam.jpg" alt="Dr. Prathamesh Nikam" />
                            <div class="flip-card-body">
                                <h5>Dr. Prathamesh Nikam</h5>
                                <p>BDS, MDS (Pediatric & Preventive Dentistry)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card">
                            <img src="images/Dr. Sakshi Jain.jpg" alt="Dr. Hardik Karia" />
                            <div class="flip-card-body">
                                <h5>Dr. Hardik Karia</h5>
                                <p>BDS, MDS (Oral & Maxillofacial Surgeon)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card">
                            <img src="images/Dr. Sakshi Jain.jpg" alt="Dr. ShrutikK Poojar" />
                            <div class="flip-card-body">
                                <h5>Dr. ShrutikK Poojar</h5>
                                <p>BDS, MDS (Oral & Maxillofacial Surgeon)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> -->

    <!-- Consultant Doctors Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center text-primary mb-4" style="font-family: 'Playfair Display', serif;">
                Our Team of Consultant Doctors
            </h2>
            <p class="text-center mb-5 text-muted">
                Meet our experienced panel of consultant specialists, each dedicated to delivering exceptional dental
                care across various specialties—from pediatric dentistry to advanced maxillofacial surgeries.
            </p>

            <div class="row g-4 justify-content-center">
                <!-- Consultant 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card text-center h-100">
                        <img src="images/Dr. Mukesh Purohit.jpg" class="card-img-top" alt="Dr. Mukesh Purohit">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Mukesh Purohit</h5>
                            <p class="card-text small text-muted mb-1">Consulting Implantologist & FMR Expert</p>
                            <p class="card-text small text-muted">BDS, MDS (Periodontics & Implantology)</p>
                        </div>
                    </div>
                </div>

                <!-- Consultant 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card text-center h-100">
                        <img src="images/Dr. Prathamesh Nikam.jpg" class="card-img-top" alt="Dr. Prathamesh Nikam">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Prathamesh Nikam</h5>
                            <p class="card-text small text-muted mb-1">Pediatric Dental Specialist</p>
                            <p class="card-text small text-muted">BDS, MDS (Pediatric & Preventive Dentistry)</p>
                        </div>
                    </div>
                </div>

                <!-- Consultant 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card text-center h-100">
                        <img src="images/Dr. Hardik.jpg" class="card-img-top" alt="Dr. Hardik Karia">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Hardik Karia</h5>
                            <p class="card-text small text-muted mb-1">Fellowship – Head & Neck Oncology</p>
                            <p class="card-text small text-muted">BDS, MDS (Oral & Maxillofacial Surgery)</p>
                        </div>
                    </div>
                </div>

                <!-- Consultant 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card text-center h-100">
                        <img src="images/Dr. Shrutik.jpg" class="card-img-top" alt="Dr. Shrutik Poojar">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Shrutik Poojar</h5>
                            <p class="card-text small text-muted mb-1">Maxillofacial & Cosmetic Surgeon</p>
                            <p class="card-text small text-muted">BDS, MDS (Oral & Maxillofacial Surgery)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG Wave Divider -->
    <div style="line-height: 0; background-color: #e3f2fd;">
        <svg viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,96L60,85.3C120,75,240,53,360,42.7C480,32,600,32,720,53.3C840,75,960,117,1080,122.7C1200,128,1320,96,1380,80L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
    </div>

    <section id="footer">
        <?php include 'layouts/footer.php'; ?>
    </section>

    <!-- Scripts -->
    <script src="js/script.js"></script>
    <script src="js/swiper-bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
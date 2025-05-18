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

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top custom-navbar">
        <div class="container">
            <img src="images/logo.jpg" alt="Clinic Logo" class="me-3" style="max-height: 50px;">
            <a class="navbar-brand fw-bold text-primary" href="../user/index.php">Dr. Tiwari's Absolute Dental
                Wellness</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="../user/index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#about" id="aboutDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../user/experts.php">Know Your Doctor</a></li>
                            <li><a class="dropdown-item" href="../user/consultants.php">Consultant Panel</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../user/services.php">Treatment Services</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#gallery" id="galleryDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../user/image-gallery.php">Images</a></li>
                            <li><a class="dropdown-item" href="../user/video-gallery.php">Videos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://clinicia.com/calendar/book?u=65251">Book Appointment</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="offers">
        <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background: linear-gradient(135deg, #e3f2fd, #ffffff);">
                    <div class="container py-5 text-center">
                        <h2 class="text-primary fw-bold mb-3" style="font-family: 'Playfair Display', serif;">
                            🎉 Limited Time Offer: Flat 20% OFF on Smile Designing!
                        </h2>
                        <p class="text-muted mb-3">Revamp your smile with veneers, whitening, and more – done by
                            experts.
                        </p>
                        <a href="https://clinicia.com/calendar/book?u=65251" class="btn btn-primary rounded-pill">Book
                            Now</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background: linear-gradient(135deg, #fce4ec, #fff);">
                    <div class="container py-5 text-center">
                        <h2 class="text-primary fw-bold mb-3" style="font-family: 'Playfair Display', serif;">
                            🦷 Free Dental Checkup Every Sunday!
                        </h2>
                        <p class="text-muted mb-3">Walk-in or book online. Limited slots available.</p>
                        <a href="https://clinicia.com/calendar/book?u=65251"
                            class="btn btn-outline-primary rounded-pill">Schedule Today</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background: linear-gradient(135deg, #e8f5e9, #ffffff);">
                    <div class="container py-5 text-center">
                        <h2 class="text-primary fw-bold mb-3" style="font-family: 'Playfair Display', serif;">
                            👨‍👩‍👧‍👦 Family Packages Available
                        </h2>
                        <p class="text-muted mb-3">Affordable plans for your entire family's dental care.</p>
                        <a href="#contact" class="btn btn-primary rounded-pill">Contact Us</a>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#offerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#offerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

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

        <!-- Footer Section (Dark Theme to Match Live Tracker) -->
        <footer class="pt-5 pb-4 text-white" style="background: linear-gradient(135deg, #1c1f26, #2e323a);">
            <div class="container">

                <!-- Logo and Title -->
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 d-flex align-items-center">
                        <img src="images/logo.jpg" alt="Clinic Logo" class="me-3 shadow-sm rounded"
                            style="max-height: 60px;">
                        <h5 class="fw-bold text-light mb-0">Dr. Tiwari's Absolute Dental Wellness</h5>
                    </div>
                </div>

                <!-- Contact & Hours -->
                <div class="row gy-4">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-light mb-2">Contact Us</h6>
                        <p class="mb-1"><i class="fas fa-phone-alt me-2 text-light"></i><strong>Mobile:</strong>
                            702-146-3993
                        </p>
                        <p class="mb-1"><i class="fas fa-phone me-2 text-light"></i><strong>Landline:</strong>
                            022-3173-3782
                        </p>
                        <p><i class="fas fa-map-marker-alt me-2 text-light"></i><strong>Address:</strong> Shop No. 3,
                            Radha
                            Madhav, Ideal Park, Mira Road (E) 401107</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold text-light mb-2">Working Hours</h6>
                        <p class="mb-1"><i class="far fa-clock me-2 text-light"></i><strong>Mon–Sat:</strong> 10:30 AM –
                            2:00
                            PM & 5:00 PM – 9:30 PM</p>
                        <p><i class="far fa-calendar-check me-2 text-light"></i><strong>Sunday:</strong> By Prior
                            Appointment
                        </p>
                    </div>
                </div>

                <!-- Map Section in Footer (Smaller Height) -->
                <div class="mt-5">
                    <h6 class="fw-bold text-light mb-3">Find Us Here</h6>
                    <div class="rounded shadow overflow-hidden" style="height: 250px;">
                        <iframe
                            src="https://www.google.com/maps?q=Shop+No.+3,+Radha+Madhav,+Ideal+Park,+Mira+Road+(E)+401107&output=embed"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <hr class="my-4 border-light" />

                <!-- Copyright -->
                <div class="text-center small">
                    &copy; 2025 Dr. Tiwari's Absolute Dental Wellness. All rights reserved.
                </div>
            </div>

        </footer>

    </section>

    <!-- Scripts -->
    <script src="js/script.js"></script>
    <script src="js/swiper-bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
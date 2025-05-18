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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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

        .treatment-services h6 {
            font-weight: 600;
            margin-top: 1rem;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .hero-section {
            background: url('https://images.unsplash.com/photo-1629901925121-8a141c2a42f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
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
            height: 200px;
            object-fit: cover;
        }

        .service-card .card-body {
            padding: 20px;
        }

        .section-title {
            margin-bottom: 40px;
            color: #007bff;
            font-weight: bold;
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

    <!-- Endodontics Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Endodontics</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg">
                    <div class="card service-card">
                        <img src="images/treatment-services/Root-Canal-Treatment.jpg" alt="Root Canal Treatment">
                        <div class="card-body">
                            <h5 class="card-title">Root Canal Treatment</h5>
                            <p class="card-text">Our specialized endodontists perform root canal treatments to address
                                severe tooth infections or damage. The procedure involves removing infected pulp,
                                cleaning
                                the canals, sealing them, and restoring the tooth with a crown or filling for lasting
                                strength and function.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Re-Root-Canal-Treatment.jpg" alt="Re-Root Canal Treatment">
                        <div class="card-body">
                            <h5 class="card-title">Re-Root Canal Treatment</h5>
                            <p class="card-text">For previously treated teeth where the initial root canal has failed,
                                our
                                endodontists perform repeat RCT to remove existing materials, cleanse the canals, and
                                seal
                                them with advanced techniques, preserving your natural tooth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Endodontics-mishaps.jpg" alt="Endodontic Mishaps">
                        <div class="card-body">
                            <h5 class="card-title">Management of Endodontic Mishaps</h5>
                            <p class="card-text">We address complications like instrument breakage or tooth perforation
                                during root canal procedures using advanced techniques to restore tooth health and
                                prevent
                                further damage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Teeth-Reimplantation.jpg" alt="Teeth Reimplantation">
                        <div class="card-body">
                            <h5 class="card-title">Teeth Reimplantation</h5>
                            <p class="card-text">For teeth knocked out due to injury, we carefully reimplant the tooth
                                into
                                its socket, often followed by splinting or root canal therapy to ensure stability and
                                functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prosthodontics Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Prosthodontics</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Dental-Crown&Bridge.jpg" alt="Dental Crown & Bridge">
                        <div class="card-body">
                            <h5 class="card-title">Dental Crown & Bridge</h5>
                            <p class="card-text">Crowns restore damaged teeth, while bridges replace missing ones by
                                anchoring artificial teeth to adjacent natural teeth or implants, improving function and
                                aesthetics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Dental-Implants.jpg" alt="Dental Implants">
                        <div class="card-body">
                            <h5 class="card-title">Dental Implants</h5>
                            <p class="card-text">Implants provide a permanent solution for missing teeth, surgically
                                placed into the jawbone and topped with a crown for a natural look and function.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Dentures.jpg" alt="Dentures">
                        <div class="card-body">
                            <h5 class="card-title">Dentures</h5>
                            <p class="card-text">Custom-made full or partial dentures restore your smile, improve
                                chewing, and support facial muscles for a natural, comfortable fit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Full-Mouth-Rehabilitation.jpg"
                            alt="Full Mouth Rehabilitation">
                        <div class="card-body">
                            <h5 class="card-title">Full Mouth Rehabilitation</h5>
                            <p class="card-text">Comprehensive treatment combining restorative and cosmetic procedures
                                to address worn teeth, bite issues, or missing teeth for a confident smile.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cosmetic Dentistry Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Cosmetic Dentistry</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Smile-Designing.jpg" alt="Smile Designing">
                        <div class="card-body">
                            <h5 class="card-title">Smile Designing</h5>
                            <p class="card-text">Personalized treatments like veneers, whitening, and alignment
                                correction to enhance your smile, tailored to your facial features and aesthetic goals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Laminates&Veneers.jpg" alt="Laminates & Veneers">
                        <div class="card-body">
                            <h5 class="card-title">Laminates & Veneers</h5>
                            <p class="card-text">Thin, custom shells that cover teeth to improve color, shape, or
                                alignment, offering a quick way to enhance your smile.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Braces&Clear-Aligners.jpg" alt="Braces & Clear Aligners">
                        <div class="card-body">
                            <h5 class="card-title">Braces & Clear Aligners</h5>
                            <p class="card-text">Orthodontic solutions to straighten teeth and correct bite issues, with
                                traditional braces or discreet clear aligners for all ages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Teeth-Whitening.jpg" alt="Teeth Whitening">
                        <div class="card-body">
                            <h5 class="card-title">Teeth Whitening</h5>
                            <p class="card-text">Safe, professional-grade bleaching to remove stains and brighten your
                                smile, performed in-office or at home under supervision.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maxillo-Facial Surgeries Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Maxillo-Facial Surgeries & Minor Surgical Procedures</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Tooth-Removal.jpg" alt="Wisdom Tooth Removal">
                        <div class="card-body">
                            <h5 class="card-title">Wisdom Tooth Removal</h5>
                            <p class="card-text">Safe and minimally invasive extraction of impacted or infected wisdom
                                teeth, ensuring comfort and a smooth recovery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Gum-Surgery.jpg" alt="Gum Surgery">
                        <div class="card-body">
                            <h5 class="card-title">Gum Surgery</h5>
                            <p class="card-text">Treatments for gum disease, recession, or reshaping, using precise
                                techniques to restore healthy gums and improve aesthetics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Facial-Trauma-Management.jpg"
                            alt="Facial Trauma Management">
                        <div class="card-body">
                            <h5 class="card-title">Facial Trauma Management</h5>
                            <p class="card-text">Expert care for facial and oral injuries, addressing fractures, soft
                                tissue damage, and dental trauma for optimal healing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card">
                        <img src="images/treatment-services/Oral-Cancer-Management.jpg" alt="Oral Cancer Management">
                        <div class="card-body">
                            <h5 class="card-title">Oral Cancer Management</h5>
                            <p class="card-text">Comprehensive care for oral cancers, including early detection,
                                surgery, and reconstructive treatments for functional and aesthetic restoration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- General Dentistry Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">General Dentistry</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card">
                        <img src="images/treatment-services/TeethCleaning&Polishing.jpg"
                            alt="Teeth Cleaning & Polishing">
                        <div class="card-body">
                            <h5 class="card-title">Teeth Cleaning & Polishing</h5>
                            <p class="card-text">Gentle removal of plaque, tartar, and stains to maintain healthy gums
                                and a bright smile, preventing gum disease and cavities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card">
                        <img src="images/treatment-services/Tooth-Removal.jpg" alt="Tooth Removal">
                        <div class="card-body">
                            <h5 class="card-title">Tooth Removal</h5>
                            <p class="card-text">Comfortable and painless extraction of damaged or infected teeth, with
                                a focus on safety and post-treatment care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card">
                        <img src="images/treatment-services/Dental-Filling.jpg" alt="Dental Filling">
                        <div class="card-body">
                            <h5 class="card-title">Dental Filling</h5>
                            <p class="card-text">Restoration of decayed teeth with durable materials like composite
                                resin or porcelain to prevent further decay and maintain strength.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Preventive Dentistry Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Preventive Dentistry</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="images/treatment-services/Preventive-Dentistry.jpg" alt="Preventive Dentistry">
                        <div class="card-body">
                            <h5 class="card-title">Preventive Dentistry</h5>
                            <p class="card-text">Regular check-ups, cleanings, fluoride treatments, and patient
                                education to maintain healthy teeth and gums, preventing dental issues before they
                                start.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="images/treatment-services/Pediatric-Dentistry.jpg" alt="Pediatric Dentistry">
                        <div class="card-body">
                            <h5 class="card-title">Pediatric Dentistry</h5>
                            <p class="card-text">Gentle, kid-friendly care for infants, children, and teens, including
                                check-ups, cleanings, and cavity prevention to build lifelong healthy habits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="images/treatment-services/Sports-Dentistry.jpg" alt="Sports Dentistry">
                        <div class="card-body">
                            <h5 class="card-title">Sports Dentistry</h5>
                            <p class="card-text">Custom mouthguards, emergency care for dental trauma, and management of
                                sports-related injuries to protect athletes' smiles.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>

</html>
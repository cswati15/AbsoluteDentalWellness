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

    <?php include 'layouts/header.php'; ?>
    <?php include 'layouts/banner.php'; ?>

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
        <?php include 'layouts/footer.php'; ?>
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
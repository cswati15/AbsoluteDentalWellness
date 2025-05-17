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
    </style>
</head>

<body>

    <?php include 'layouts/header.php'; ?>

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
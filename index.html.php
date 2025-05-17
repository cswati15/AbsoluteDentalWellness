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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <style>
    .flip-card {
      position: relative;
      width: 400px;
      height: 600px;
      perspective: 1000px;
    }

    .flip-toggle {
      display: none;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      transition: transform 0.8s;
    }

    /* Flip on hover (desktop) */
    @media (hover: hover) {
      .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
      }
    }

    /* Flip on tap (mobile) using checkbox */
    .flip-toggle:checked+.flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
      background: white;
      text-align: center;
      padding: 20px;
    }

    /* Front */
    .flip-card-front img {
      width: 100%;
      height: 480px;
      object-fit: cover;
      border-radius: 10px 10px 0 0;
    }

    /* Back */
    .flip-card-back {
      background-color: #f0f0f0;
      transform: rotateY(180deg);
    }

    /* Label covers the card to allow tap on mobile */
    .flip-label {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
      z-index: 3;
    }

    .card img {
      height: 500px;
      object-fit: cover;
      border-radius: 0.5rem 0.5rem 0 0;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>



</head>

<body>

  <?php include 'layouts/header.php'; ?>
  <?php include 'layouts/banner.php'; ?>

 <!-- Smile Care Overview Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8fafd, #e3f2fd);">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image Column -->
      <div class="col-lg-6 mb-4 mb-lg-0 animate__animated animate__fadeInLeft">
        <div class="shadow rounded overflow-hidden text-center">
          <img src="images/Patient-Doctor.jpg" alt="Doctor and Child Patient"
            class="img-fluid rounded" style="max-height: 650px; object-fit: cover; width: 100%;">
        </div>
      </div>

      <!-- Content Column -->
      <div class="col-lg-6 animate__animated animate__fadeInRight">
        <h2 class="mb-3 text-primary fw-bold" style="font-family: 'Playfair Display', serif;">
          Making Smiles Shine – One Giggle at a Time 😄
        </h2>
        <p class="text-muted fs-5">
          At Dr. Tiwari’s Absolute Dental Wellness, your smile isn’t just a treatment — it’s a moment of joy! 
          Whether it’s a child’s first dental visit or your own journey to a confident smile, we make every 
          step warm, welcoming, and fun.
        </p>

        <div class="row mt-4">
          <div class="col-6 mb-3">
            <div class="d-flex align-items-start">
              <i class="fas fa-magic text-primary fs-4 me-3"></i>
              <div>
                <h6 class="mb-1 text-dark">Smile Makeovers✨</h6>
                <small class="text-muted">Brighten and straighten — magic you can see!</small>
              </div>
            </div>
          </div>

          <div class="col-6 mb-3">
            <div class="d-flex align-items-start">
              <i class="fas fa-child text-success fs-4 me-3"></i>
              <div>
                <h6 class="mb-1 text-dark">Kid-Approved Care🧒</h6>
                <small class="text-muted">Gentle hands, big hearts, happy kiddos.</small>
              </div>
            </div>
          </div>

          <div class="col-6 mb-3">
            <div class="d-flex align-items-start">
              <i class="fas fa-users fas fa-family text-info fs-4 me-3"></i>
              <div>
                <h6 class="mb-1 text-dark">Family Smiles👨‍👩‍👧</h6>
                <small class="text-muted">Dental care that grows with your family.</small>
              </div>
            </div>
          </div>

          <div class="col-6 mb-3">
            <div class="d-flex align-items-start">
              <i class="fas fa-heart text-danger fs-4 me-3"></i>
              <div>
                <h6 class="mb-1 text-dark">Trusted & Loved💖 </h6>
                <small class="text-muted">Thousands of smiles, one heart-centered team.</small>
              </div>
            </div>
          </div>
        </div>

        <a href="https://clinicia.com/calendar/book?u=65251" class="btn btn-primary mt-4 px-4 py-2 rounded-pill shadow-sm">
          Book a Smile Visit Today
        </a>
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

  <!-- Our Expert Dentists Section -->
  <section id="doctors" class="py-5" style="background-color: #ffffff;">
    <div class="container">
      <h2 class="text-center mb-5 text-primary" style="font-family: 'Playfair Display', serif;">Meet Our Expert
        Dentists</h2>

      <div class="row g-4 justify-content-center">

        <!-- Doctor Card 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-lg border-0 h-100 rounded-4">
            <img src="images/Dr. Anju Sharma.jpg" class="card-img-top rounded-top-4" alt="Dr. Anju Sharma">
            <div class="card-body text-center">
              <h5 class="card-title text-primary">Dr. Anju Sharma</h5>
              <p class="text-muted">Prosthodontist & Implantologist</p>
              <hr>
              <p class="card-text small text-muted">
                Dr. Anju specializes in replacing teeth with precision-crafted crowns, bridges, and implants. Her focus
                on aesthetics and function ensures renewed smiles and confidence.
              </p>
            </div>
          </div>
        </div>

        <!-- Doctor Card 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-lg border-0 h-100 rounded-4">
            <img src="images/Dr. Vinay Tiwari.jpg" class="card-img-top rounded-top-4" alt="Dr. Vinay Tiwari">
            <div class="card-body text-center">
              <h5 class="card-title text-success">Dr. Vinay Tiwari</h5>
              <p class="text-muted">Endodontist & Restorative Dentist</p>
              <hr>
              <p class="card-text small text-muted">
                Dedicated to preserving teeth through advanced root canal techniques, Dr. Vinay ensures pain-free,
                ethical, and evidence-based treatment for every patient.
              </p>
            </div>
          </div>
        </div>

        <!-- Doctor Card 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-lg border-0 h-100 rounded-4">
            <img src="images/Dr. Vijay Tiwari.png" class="card-img-top rounded-top-4" alt="Dr. Vijay Tiwari">
            <div class="card-body text-center">
              <h5 class="card-title text-info">Dr. Vijay Tiwari</h5>
              <p class="text-muted">Oral & Maxillofacial Surgeon<br>Head & Neck Surgical Oncologist</p>
              <hr>
              <p class="card-text small text-muted">
                With unmatched expertise in surgical oncology and maxillofacial care, Dr. Vijay delivers transformative
                outcomes for both minor and complex oral surgeries.
              </p>
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

  <!-- Live Tracker Section (Dark Background, Light Cards, text-primary Theme) -->
  <section id="live-tracker" class="py-5" style="background: linear-gradient(135deg, #1c1f26, #2e323a);">
    <div class="container">
      <h2 class="text-center mb-5 text-light" style="font-family: 'Playfair Display', serif;">
        Live Tracker of Successful Treatments
      </h2>
      <div class="row text-center justify-content-center">

        <!-- Root Canal Treatments -->
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-white rounded shadow-lg h-100 border-top border-4 border-primary">
            <div class="mb-3 d-flex justify-content-center align-items-center"
              style="width: 80px; height: 80px; margin: 0 auto; background-color: rgba(13, 110, 253, 0.1); border-radius: 50%;">
              <i class="fas fa-tooth fa-2x text-primary"></i>
            </div>
            <h3 class="counter text-primary mt-3" data-target="4500">0</h3>
            <p class="fw-semibold text-muted">Root Canal Treatments</p>
          </div>
        </div>

        <!-- Repeat RCT Cases -->
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-white rounded shadow-lg h-100 border-top border-4 border-primary">
            <div class="mb-3 d-flex justify-content-center align-items-center"
              style="width: 80px; height: 80px; margin: 0 auto; background-color: rgba(13, 110, 253, 0.1); border-radius: 50%;">
              <i class="fas fa-redo fa-2x text-primary"></i>
            </div>
            <h3 class="counter text-primary mt-3" data-target="1200">0</h3>
            <p class="fw-semibold text-muted">Repeat RCT Cases</p>
          </div>
        </div>

        <!-- Mishaps Corrected -->
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-white rounded shadow-lg h-100 border-top border-4 border-primary">
            <div class="mb-3 d-flex justify-content-center align-items-center"
              style="width: 80px; height: 80px; margin: 0 auto; background-color: rgba(13, 110, 253, 0.1); border-radius: 50%;">
              <i class="fas fa-check-circle fa-2x text-primary"></i>
            </div>
            <h3 class="counter text-primary mt-3" data-target="300">0</h3>
            <p class="fw-semibold text-muted">Mishaps Corrected</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Reverse SVG Wave Divider: White over Blue -->
  <div style="line-height: 0; background-color: #ffffff;">
    <svg viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg">
      <path fill="#e3f2fd" fill-opacity="1"
        d="M0,64L60,74.7C120,85,240,107,360,117.3C480,128,600,128,720,106.7C840,85,960,43,1080,37.3C1200,32,1320,64,1380,80L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
      </path>
    </svg>
  </div>



  <!-- The Crucial Role of Dental Checkups Section -->
  <section class="py-5" style="background: linear-gradient(135deg, #f8f9fa, #e3f2fd);">
    <div class="container">
      <div class="row align-items-center">

        <!-- Text Content -->
        <div class="col-md-6 mb-4 mb-md-0">
          <h2 class="text-primary mb-4 fw-bold" style="font-family: 'Playfair Display', serif;">
            🦷 Why Regular Dental Checkups Matter
          </h2>

          <div class="mb-3 d-flex align-items-start">
            <i class="fas fa-search text-primary fs-4 me-3"></i>
            <div>
              <h6 class="mb-1 text-dark">Early Detection Saves Smiles</h6>
              <p class="text-muted mb-0">Checkups help catch cavities, gum disease, and even oral cancer before they
                become serious.</p>
            </div>
          </div>

          <div class="mb-3 d-flex align-items-start">
            <i class="fas fa-shield-alt text-success fs-4 me-3"></i>
            <div>
              <h6 class="mb-1 text-dark">Preventive & Painless</h6>
              <p class="text-muted mb-0">Gentle cleanings and expert care help avoid painful procedures later.</p>
            </div>
          </div>

          <div class="mb-3 d-flex align-items-start">
            <i class="fas fa-heartbeat text-danger fs-4 me-3"></i>
            <div>
              <h6 class="mb-1 text-dark">Oral Health = Overall Health</h6>
              <p class="text-muted mb-0">Regular dental visits support your heart, digestion, and immune health too.</p>
            </div>
          </div>

          <p class="mt-4 text-muted fs-6">
            At <strong>Dr. Tiwari’s Absolute Dental Wellness</strong>, we offer personalized guidance, complete dental
            evaluations,
            and cleanings designed to help you and your family enjoy a lifetime of happy, healthy smiles.
          </p>

        </div>

        <!-- Image -->
        <div class="col-md-6 text-center">
          <img src="images/Crucial-role.png" alt="Dental Checkup" class="img-fluid rounded shadow"
            style="max-height: 400px;">
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

  <script>
    const swiper = new Swiper('.doctor-swiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });

    const counters = document.querySelectorAll('.counter');
    const speed = 80;

    const runCounter = (counter) => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / speed;

        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 25);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };

      updateCount();
    };

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          runCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
  </script>

</body>

</html>
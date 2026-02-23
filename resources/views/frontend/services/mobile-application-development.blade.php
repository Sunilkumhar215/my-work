<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gkon Technologies â€” UI/UX & Web Development Agency</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  
  <!-- Tailwind CSS & Bootstrap Icons -->
    <script src="https://cdn.tailwindcss.com"></script> 
    <link href="https://gkontechnologies.com/customcss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    @extends('frontend.layouts.main')

  @section('main-container')

    <div class="container-fluid p-0">

    <!-- Hero Section -->
    <section class="hero-section bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-md-6 hero-left">
                    <h1 class="fw-bold display-5">Mobile App Development</h1>
                    <p class="mt-3 fs-5">
                        We design and develop high-performance Android & iOS mobile apps with modern UI/UX,
                        robust backend, and seamless user experience.
                    </p>
                    <a href="#contact" class="btn btn-primary btn-lg mt-3">Get Free Consultation</a>
                </div>

                <!-- Right Image -->
                <div class="col-md-6 text-center mt-4 mt-md-0 hero-right">
                  <img src="https://img.freepik.com/free-vector/app-development-banner_33099-1720.jpg" class="hero-img" alt="Mobile App Development">
                </div> 
            </div>
        </div>
    </section> 
</div>

<style>
/* ---------- GLOBAL RESPONSIVE HERO SECTION ---------- */
.hero-section {
    overflow: hidden;
}

/* Left Slide + Fade Animation */
.hero-left {
    opacity: 0;
    transform: translateX(-40px);
    animation: slideFadeLeft 1.2s ease-out forwards;
}

/* Right Zoom Animation */
.hero-right {
    opacity: 0;
    transform: scale(0.85);
    animation: zoomIn 1.2s ease-out forwards;
    animation-delay: 0.3s;
}

/* Keyframes */
@keyframes slideFadeLeft {
    0% {
        opacity: 0;
        transform: translateX(-40px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.85);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive Improvements */
@media (max-width: 768px) {
    .hero-left {
        text-align: center;
    }
    .hero-right {
        margin-top: 20px;
    }
}
</style>

    
        <!-- Why Choose Us -->
<section class="py-5 why-section">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Why Choose Us?</h2>

        <div class="row g-4 justify-content-center">

            <!-- CARD 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card">
                    <h4>Modern UI/UX</h4>
                    <p>We create visually stunning and user-friendly interfaces that improve engagement.</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card">
                    <h4>Fast & High Performance</h4>
                    <p>Our apps are optimized for speed, security, and reliability.</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card">
                    <h4>Custom App Solutions</h4>
                    <p>Whether startup or enterprise, we build apps tailored to your business goals.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Section Background */
.why-section {
    background: #f8f9ff;
}

/* 3D Animated Card */
.why-card {
    background: #ffffff;
    padding: 30px;
    border-radius: 18px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    transition: transform 0.5s ease, box-shadow 0.5s ease;
    transform-style: preserve-3d;
    position: relative;
}

/* 3D Auto Animation */
.why-card {
    animation: floatCard 4s ease-in-out infinite;
}

/* 3D Hover Effect */
.why-card:hover {
    transform: translateY(-12px) scale(1.03) rotateX(6deg) rotateY(-6deg);
    box-shadow: 0 20px 40px rgba(99, 102, 241, 0.25);
    border-color: #6366f1;
}

/* Headings */
.why-card h4 {
    font-weight: 700;
    font-size: 20px;
    color: #1e293b;
    margin-bottom: 12px;
}

/* Paragraph */
.why-card p {
    color: #475569;
    margin: 0;
}

/* Auto Floating Animation */
@keyframes floatCard {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-8px); }
    100% { transform: translateY(0px); }
}

/* RESPONSIVE */
@media (max-width: 576px) {
    .why-card {
        padding: 22px;
        text-align: center;
    }
    .why-card h4 {
        font-size: 18px;
    }
}
</style>
<!-- Our Services -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Our Mobile App Services</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-3 col-sm-6">
        <div class="service-box text-center p-4 shadow-sm bg-white rounded h-100 d-flex flex-column align-items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" alt="Android App Icon" class="mb-3" style="width:64px; height:64px;">
          <h5>Android App</h5>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service-box text-center p-4 shadow-sm bg-white rounded h-100 d-flex flex-column align-items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" alt="iOS App Icon" class="mb-3" style="width:64px; height:64px;">
          <h5>iOS App</h5>
        </div>
      </div>
     <div class="col-md-3 col-sm-6">
      <div class="service-box text-center p-4 shadow-sm bg-white rounded h-100 d-flex flex-column align-items-center">
        <img src="hybrid.png" alt="Hybrid App Icon" class="mb-3" style="width:64px; height:64px;">
        <h5>Hybrid App</h5>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="service-box text-center p-4 shadow-sm bg-white rounded h-100 d-flex flex-column align-items-center">
        <img src="uiux.png" alt="UI/UX Design Icon" class="mb-3" style="width:64px; height:64px;">
        <h5>UI/UX Design</h5>
      </div>
    </div> 
    </div>
  </div>
</section>

    
        <!-- Development Process -->
        <section class="py-5 bg-light position-relative">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Our Development Process</h2>
    <div class="row g-4 align-items-center position-relative">

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center service-card h-100" style="position: relative; z-index: 1;">
          <img src="https://cdn-icons-png.flaticon.com/512/2921/2921219.png" alt="Requirement Analysis" style="width:64px; height:64px;" class="mb-3 mx-auto d-block">
          <h5>Requirement Analysis</h5>
          <p class="text-muted">Understanding your app needs & planning the roadmap.</p>
        </div>
        <div class="arrow arrow-right animated-arrow"></div>
      </div>

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center service-card h-100" style="position: relative; z-index: 1;">
          <img src="https://cdn-icons-png.flaticon.com/512/2921/2921226.png" alt="UI/UX Designing" style="width:64px; height:64px;" class="mb-3 mx-auto d-block">
          <h5>UI/UX Designing</h5>
          <p class="text-muted">Crafting modern, user-friendly app designs.</p>
        </div>
        <div class="arrow arrow-right animated-arrow"></div>
      </div>

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center service-card h-100" style="position: relative; z-index: 1;">
          <img src="https://cdn-icons-png.flaticon.com/512/2921/2921233.png" alt="App Development" style="width:64px; height:64px;" class="mb-3 mx-auto d-block">
          <h5>App Development</h5>
          <p class="text-muted">Building fast & scalable applications.</p>
        </div>
        <div class="arrow arrow-right animated-arrow"></div>
      </div>

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center service-card h-100" style="position: relative; z-index: 1;">
          <img src="https://cdn-icons-png.flaticon.com/512/2921/2921246.png" alt="Testing & Deployment" style="width:64px; height:64px;" class="mb-3 mx-auto d-block">
          <h5>Testing & Deployment</h5>
          <p class="text-muted">Ensuring 100% bug free & smooth performance.</p>
        </div>
      </div>
      
    </div>
  </div>

  <style>
    .arrow {
      width: 40px;
      height: 40px;
      border-top: 4px solid #007bff;
      border-right: 4px solid #007bff;
      position: absolute;
      top: 50%;
      right: -25px;
      transform: translateY(-50%) rotate(45deg);
      z-index: 5; /* High z-index to stay in front */
    }

    .animated-arrow {
      animation: floatArrow 2s ease-in-out infinite;
    }

    @keyframes floatArrow {
      0%, 100% {
        transform: translateY(-50%) translateX(0) rotate(45deg);
        opacity: 1;
      }
      50% {
        transform: translateY(-60%) translateX(5px) rotate(45deg);
        opacity: 0.7;
      }
    }

    @media (max-width: 767.98px) {
      .arrow {
        display: none;
      }
    }
  </style>
</section>
<!-- TECHNOLOGIES WE USE -->
<section class="tech-used-section py-5">
    <div class="container">

        <h2 class="text-center fw-bold mb-5">Technologies We Use</h2>

        <div class="row g-4 justify-content-center">

            <!-- ITEM -->
            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/flutter.png">
                    <p>Flutter</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/react-native.png">
                    <p>React Native</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/swift.png">
                    <p>Swift</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/kotlin.png">
                    <p>Kotlin</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/firebase.png">
                    <p>Firebase</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/nodejs.png">
                    <p>Node.js</p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
.tech-used-section {
    background: #f8fafc;
}

/* Card Style */
.tech-card {
    background: rgba(255,255,255,0.6);
    padding: 20px 10px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    text-align: center;
    transition: 0.4s;
    backdrop-filter: blur(8px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

/* Icons */
.tech-card img {
    width: 65px;
    height: auto;
    margin-bottom: 8px;
}

/* Text */
.tech-card p {
    font-weight: 600;
    font-size: 14px;
    margin: 0;
    color: #1e293b;
}

/* Hover Effects (3D + Shadow) */
.tech-card:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 10px 25px rgba(99,102,241,0.25);
    border-color: #6366f1;
}

/* Mobile Responsiveness */
@media (max-width: 576px) {
    .tech-card img {
        width: 55px;
    }
    .tech-card {
        padding: 15px 5px;
    }
}
</style>
<!-- Portfolio Section -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Our Portfolio</h2>

    <div class="row g-4">

      <!-- Portfolio Item -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <img src="https://img.freepik.com/premium-photo/stack-books-table-with-smartphone-displaying-online-learning-platform_1156689-14682.jpg" alt="Project 1" class="portfolio-img">
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <img src="https://img.freepik.com/premium-photo/healthcare-app-showcase-portraitoriented-mockup-smartphone_1029473-533338.jpg" alt="Project 2" class="portfolio-img">
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <img src="https://img.freepik.com/free-vector/online-shopping-banner-mobile-app-templates-concept-flat-design_1150-34862.jpg" alt="Project 3" class="portfolio-img">
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .portfolio-card {
    border-radius: 15px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    cursor: pointer;
  }

  .portfolio-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 20px 30px rgba(0,0,0,0.2);
  }

  .portfolio-img {
    width: 100%;
    height: 250px;
    object-fit: cover; /* Ensures image fits perfectly */
    transition: transform 0.5s ease;
  }

  .portfolio-card:hover .portfolio-img {
    transform: scale(1.1);
  }
</style>

    <!-- Contact CTA -->
<section id="contact" class="cta-section py-5">
    <div class="container text-center">
        <h2 class="fw-bold display-5 text-white mb-3 cta-title">
            Ready to Build Your Mobile App?
        </h2>
        <p class="fs-5 text-white-50 mb-4 cta-subtitle">
            Let’s transform your idea into a fast, secure, and scalable mobile application.
        </p>

        <a href="tel:+917220820903" class="btn cta-btn px-5 py-3">
            Contact Now
        </a>
    </div>
</section>

<style>
/* CTA SECTION */
.cta-section {
    background: linear-gradient(135deg, #005eff, #002b80);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

/* Floating Gradient Circles (Decoration) */
.cta-section::before,
.cta-section::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    animation: float 6s infinite ease-in-out;
}

.cta-section::before {
    width: 200px;
    height: 200px;
    top: -40px;
    left: -40px;
}

.cta-section::after {
    width: 150px;
    height: 150px;
    bottom: -30px;
    right: -30px;
}

/* Keyframe Animation */
@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(20px); }
    100% { transform: translateY(0px); }
}

/* Heading Animation */
.cta-title {
    animation: fadeInDown 1s ease forwards;
    opacity: 0;
}
@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.cta-subtitle {
    animation: fadeInUp 1.2s ease forwards;
    opacity: 0;
}
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* CONTACT BUTTON */
.cta-btn {
    background: #ffffff;
    color: #005eff;
    font-size: 1.2rem;
    font-weight: 600;
    border-radius: 50px;
    padding: 14px 40px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    transition: all 0.4s ease;
    border: 2px solid white;
}

/* Hover Effect */
.cta-btn:hover {
    background: transparent;
    color: #fff;
    border-color: #fff;
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(255,255,255,0.3);
}
</style>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
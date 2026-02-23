<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gkon Technologies â€” UI/UX & Web Development Agency</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 
</head>
<body>
 
  @extends('frontend.layouts.main')

  @section('main-container')
  
    <!-- Website Development Hero Section -->
<section class="hero-section bg-dark text-white py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-md-6 hero-left">
                <h1 class="fw-bold display-5">Website Development</h1>
                <p class="mt-3 fs-5">
                    We build fast, secure, SEO-friendly websites with modern UI/UX,
                    responsive layouts, and powerful backend systems tailored for your business.
                </p>
                <a href="#contact" class="btn btn-primary btn-lg mt-3">Get Free Consultation</a>
            </div>

            <!-- Right Image -->
            <div class="col-md-6 text-center mt-4 mt-md-0 hero-right">
                <img src="https://img.freepik.com/free-photo/website-development-links-seo-webinar-cyberspace-concept_53876-120953.jpg"
                     class="hero-img" alt="Website Development">
            </div> 
        </div>
    </div>
</section>

<style>
.hero-section { overflow: hidden; }

.hero-left {
    opacity: 0;
    transform: translateX(-40px);
    animation: slideFadeLeft 1.2s ease-out forwards;
}

.hero-right {
    opacity: 0;
    transform: scale(0.85);
    animation: zoomIn 1.2s ease-out forwards;
    animation-delay: .3s;
}

.hero-img {
    width: 100%;
    max-width: 450px;
}

@keyframes slideFadeLeft {
    0% { opacity: 0; transform: translateX(-40px); }
    100% { opacity: 1; transform: translateX(0); }
}

@keyframes zoomIn {
    0% { opacity: 0; transform: scale(0.85); }
    100% { opacity: 1; transform: scale(1); }
}

@media (max-width: 768px) {
    .hero-left { text-align: center; }
    .hero-right { margin-top: 20px; }
}
</style>
<!-- Why Choose Us -->
<section class="py-5 why-section">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Why Choose Us?</h2>

        <div class="row g-4 justify-content-center">

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card">
                    <h4>Custom Website Solutions</h4>
                    <p>We build websites designed exactly for your business goals.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card">
                    <h4>SEO & Speed Optimized</h4>
                    <p>Every website is optimized for Google ranking & loading speed.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="why-card">
                    <h4>Responsive on All Devices</h4>
                    <p>Your website will look perfect on mobile, tablet, and desktop.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.why-section { background: #f8f9ff; }

.why-card {
    background: #ffffff;
    padding: 30px;
    border-radius: 18px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    transition: .5s;
    animation: floatCard 4s infinite ease-in-out;
}

.why-card:hover {
    transform: translateY(-12px) scale(1.03) rotateX(6deg) rotateY(-6deg);
    box-shadow: 0 20px 40px rgba(99,102,241,0.25);
    border-color: #6366f1;
}

@keyframes floatCard {
    0% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
    100% { transform: translateY(0); }
}
</style>
<!-- Our Website Services -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Our Website Development Services</h2>
    <div class="row g-4 justify-content-center">

      <div class="col-md-3 col-sm-6">
        <div class="service-box text-center p-4 shadow-sm bg-white rounded">
          <img src="https://cdn-icons-png.flaticon.com/512/1006/1006363.png"
               style="width:64px;">
          <h5 class="mt-3">Business Website</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="service-box text-center p-4 shadow-sm bg-white rounded">
          <img src="https://cdn-icons-png.flaticon.com/512/3597/3597015.png"
               style="width:64px;">
          <h5 class="mt-3">E-Commerce Website</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="service-box text-center p-4 shadow-sm bg-white rounded">
          <img src="https://cdn-icons-png.flaticon.com/512/4003/4003006.png"
               style="width:64px;">
          <h5 class="mt-3">Custom Web Application</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="service-box text-center p-4 shadow-sm bg-white rounded">
          <img src="https://cdn-icons-png.flaticon.com/512/1197/1197460.png"
               style="width:64px;">
          <h5 class="mt-3">UI/UX Website Design</h5>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Development Process (Website Version) -->
<section class="py-5 bg-light position-relative">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Our Development Process</h2>
    <div class="row g-4 align-items-center position-relative">

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center h-100">
          <img src="https://cdn-icons-png.flaticon.com/512/3605/3605535.png"
               style="width:64px;">
          <h5>Planning</h5>
          <p class="text-muted">Project understanding & structure planning.</p>
        </div>
        <div class="arrow arrow-right animated-arrow"></div>
      </div>

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center h-100">
          <img src="https://cdn-icons-png.flaticon.com/512/2921/2921226.png"
               style="width:64px;">
          <h5>Designing</h5>
          <p class="text-muted">UI/UX layout & design implementation.</p>
        </div>
        <div class="arrow arrow-right animated-arrow"></div>
      </div>

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center h-100">
          <img src="https://cdn-icons-png.flaticon.com/512/907/907717.png"
               style="width:64px;">
          <h5>Development</h5>
          <p class="text-muted">Frontend & backend development.</p>
        </div>
        <div class="arrow arrow-right animated-arrow"></div>
      </div>

      <div class="col-md-3 col-sm-6 position-relative">
        <div class="p-4 shadow rounded bg-white text-center h-100">
          <img src="https://cdn-icons-png.flaticon.com/512/2921/2921246.png"
               style="width:64px;">
          <h5>Testing & Launch</h5>
          <p class="text-muted">Bug-free deployment & live support.</p>
        </div>
      </div>

    </div>
  </div>

<style>
.arrow{
  width:40px;height:40px;
  border-top:4px solid #007bff;
  border-right:4px solid #007bff;
  position:absolute;top:50%;right:-25px;
  transform:translateY(-50%) rotate(45deg);
}
.animated-arrow { animation: floatArrow 2s infinite; }
@keyframes floatArrow {
  0%,100%{transform:translateY(-50%) rotate(45deg);}
  50%{transform:translateY(-60%) rotate(45deg);}
}
@media(max-width:767px){ .arrow{display:none;} }
</style>
</section>
<!-- TECHNOLOGIES WE USE (WEB DEVELOPMENT VERSION) -->
<section class="tech-used-section py-5">
    <div class="container">

        <h2 class="text-center fw-bold mb-5">Technologies We Use</h2>

        <div class="row g-4 justify-content-center">

            <!-- ITEM -->
            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/html-5.png">
                    <p>HTML5</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/css3.png">
                    <p>CSS3</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/javascript.png">
                    <p>JavaScript</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/react-native.png">
                    <p>React</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/fluency/96/php.png">
                    <p>PHP</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/fluency/96/laravel.png">
                    <p>Laravel</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/nodejs.png">
                    <p>Node.js</p>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
                <div class="tech-card">
                    <img src="https://img.icons8.com/color/96/mysql-logo.png">
                    <p>MySQL</p>
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
    border-radius: 14px;
    border: 1px solid #e2e8f0;
    text-align: center;
    transition: 0.4s;
    backdrop-filter: blur(8px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    animation: techFade 1s ease forwards;
    opacity: 0;
}

@keyframes techFade {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}

.tech-card:nth-child(odd) { animation-delay: .2s; }
.tech-card:nth-child(even) { animation-delay: .4s; }

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

/* Hover Effects */
.tech-card:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 12px 30px rgba(56,116,255,0.25);
    border-color: #2563eb;
}

/* Mobile */
@media (max-width: 576px) {
    .tech-card img { width: 55px; }
    .tech-card { padding: 15px 5px; }
}
</style>
<!-- PORTFOLIO SECTION (WEB VERSION) -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Our Web Projects</h2>

    <div class="row g-4">

      <!-- Portfolio Item -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <img src="https://img.freepik.com/free-vector/web-template-online-shopping_52683-80351.jpg" 
          alt="E-Commerce Website" class="portfolio-img">
          <div class="portfolio-label">E-Commerce Website</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <img src="https://img.freepik.com/premium-photo/dashboard-ui-ux-admin-panel-website-mockup_1156689-10282.jpg"
          alt="Business Website" class="portfolio-img">
          <div class="portfolio-label">Business Website</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <img src="https://img.freepik.com/free-vector/saas-landing-page-template_23-2148825094.jpg"
          alt="Landing Page" class="portfolio-img">
          <div class="portfolio-label">Landing Page</div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.portfolio-card {
    border-radius: 15px;
    overflow: hidden;
    position: relative;
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: .4s ease;
    cursor: pointer;
}

.portfolio-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: .5s ease;
}

/* Label */
.portfolio-label {
    position: absolute;
    bottom: 12px;
    left: 12px;
    background: rgba(0,0,0,0.6);
    color: #fff;
    padding: 6px 14px;
    border-radius: 8px;
    font-size: 14px;
}

/* Hover Effect */
.portfolio-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 25px 35px rgba(0,0,0,0.25);
}

.portfolio-card:hover .portfolio-img {
    transform: scale(1.1);
}
</style>
<!-- CONTACT CTA (WEB DEVELOPMENT VERSION) -->
<section id="contact" class="cta-section py-5">
    <div class="container text-center">
        <h2 class="fw-bold display-5 text-white mb-3 cta-title">
            Ready to Build Your Website?
        </h2>
        <p class="fs-5 text-white-50 mb-4 cta-subtitle">
            Let’s create a fast, secure & modern website that grows your business.
        </p>

        <a href="tel:+917220820903" class="btn cta-btn px-5 py-3">
            Contact Now
        </a>
    </div>
</section>

<style>
/* CTA SECTION */
.cta-section {
    background: linear-gradient(135deg, #2563eb, #1e3a8a);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

/* Floating Circles */
.cta-section::before,
.cta-section::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    animation: float 6s infinite ease-in-out;
}

.cta-section::before {
    width: 200px; height: 200px;
    top: -40px; left: -40px;
}
.cta-section::after {
    width: 150px; height: 150px;
    bottom: -30px; right: -30px;
}

/* Animations */
@keyframes float {
    0% { transform: translateY(0); }
    50% { transform: translateY(20px); }
    100% { transform: translateY(0); }
}

.cta-title { animation: fadeIn 1s ease forwards; opacity: 0; }
.cta-subtitle { animation: fadeInUp 1.2s ease forwards; opacity: 0; }

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Button */
.cta-btn {
    background: #fff;
    color: #1e3a8a;
    font-size: 1.2rem;
    font-weight: 600;
    border-radius: 50px;
    padding: 14px 40px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.25);
    transition: .4s;
}

.cta-btn:hover {
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
    transform: translateY(-5px);
}
</style>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
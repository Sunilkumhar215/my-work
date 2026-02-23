<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gkon Technologies — UI/UX & Web Development Agency</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --neon: #00eaff;
      --dark: #0d1117;
      --card-bg: rgba(255,255,255,0.08);
      --glass-border: rgba(255,255,255,0.15);
    }

    /* GLOBAL */
    body {
        background: var(--dark);
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    /* HERO */
    .hero-section {
        background: url('https://images.unsplash.com/photo-1518770660439-4636190af475') center/cover no-repeat;
        height: 92vh;
        display: flex;
        align-items: center;
        position: relative;
    }
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(3px);
    }
    .hero-content {
        position: relative;
        z-index: 2;
    }
    .hero-content h1 span {
        color: var(--neon);
        text-shadow: 0 0 20px var(--neon);
    }
    .hero-btn {
        background: var(--neon);
        border: none;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 8px;
        transition: 0.3s;
    }
    .hero-btn:hover {
        letter-spacing: 1px;
        box-shadow: 0 0 18px var(--neon);
    }

    /* SERVICES */
    .service-box {
        background: var(--card-bg);
        backdrop-filter: blur(10px);
        padding: 20px;
        border-radius: 14px;
        border: 1px solid var(--glass-border);
        transition: 0.4s ease;
        transform-style: preserve-3d;
        cursor: pointer;
        color: #fff;
    }
    .service-box:hover {
        transform: rotateY(12deg) rotateX(12deg) scale(1.08);
        box-shadow: 0 20px 40px rgba(0,0,0,0.45);
        border-color: var(--neon);
    }

    /* BLUE SECTION (Company Message) */
    .blue-section {
        background: linear-gradient(135deg, #003b70, #001d38);
        color: #fff;
        padding: 70px 0;
        text-align: center;
        border-top: 1px solid #0d6efd30;
        border-bottom: 1px solid #0d6efd30;
    }

    /* TECH BOXES */
    .tech-section {
        background: #0a0f16;
        padding: 90px 0;
        text-align: center;
    }
    .tech-tabs .nav-link {
        color: #a9bcd8;
        font-size: 20px;
        font-weight: 600;
        padding: 10px 30px;
        transition: .3s;
    }
    .tech-tabs .nav-link.active {
        color: var(--neon);
        border-bottom: 3px solid var(--neon);
        transform: translateY(-3px);
    }
    .tech-box {
        background: var(--card-bg);
        padding: 22px;
        border-radius: 14px;
        border: 1px solid var(--glass-border);
        transition: 0.4s ease;
        box-shadow: 0 0 15px rgba(0,0,0,0.3);
        cursor: pointer;
    }
    .tech-box:hover {
        transform: scale(1.07);
        border-color: var(--neon);
        box-shadow: 0 25px 45px rgba(0,0,0,0.45);
    }

    /* PORTFOLIO */
    .portfolio-section {
        background: linear-gradient(135deg, #0e1621, #17202a);
        padding: 90px 0;
    }
    .portfolio-card {
        background: var(--card-bg);
        padding: 35px 25px;
        border-radius: 18px;
        border: 1px solid var(--glass-border);
        transition: 0.5s ease;
        transform-style: preserve-3d;
    }
    .portfolio-card:hover {
        transform: rotateX(12deg) rotateY(12deg) scale(1.05);
        box-shadow: 0 25px 45px rgba(0,0,0,0.5);
        border-color: var(--neon);
    }
    .btn-view {
        color: var(--neon);
        text-decoration: none;
        font-weight: 600;
        border-bottom: 2px solid transparent;
        padding-bottom: 2px;
        transition: .3s;
    }
    .btn-view:hover {
        border-color: var(--neon);
        letter-spacing: 1px;
    }

    /* BLOG SECTION */
    .blog-area {
        background: linear-gradient(135deg, #0d1117, #1b2430);
        padding: 80px 0;
    }
    .blog-card-3d {
        background: var(--card-bg);
        padding: 30px 25px;
        border-radius: 20px;
        border: 1px solid var(--glass-border);
        transition: 0.5s ease;
        transform-style: preserve-3d;
        cursor: pointer;
    }
    .blog-card-3d:hover {
        transform: rotateX(10deg) rotateY(10deg) scale(1.05);
        box-shadow: 0 25px 45px rgba(0,0,0,0.45);
        border-color: var(--neon);
    }
    .blog-btn {
        text-decoration: none;
        font-weight: 600;
        color: var(--neon);
        transition: 0.3s;
    }
    .blog-btn:hover {
        letter-spacing: 1px;
    }
  </style>
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
  
    <!-- HERO -->
    <section class="hero-section">
      <div class="hero-overlay"></div>
      <div class="container text-center hero-content">
          <h1 class="display-4 fw-bold">We Build <span>Intelligent Digital Products</span></h1>
          <h4 class="mt-3">Gkon Technologies — Where Innovation Meets Execution</h4>
          <button class="hero-btn mt-4">Start Your Project</button>
      </div>
    </section>
    
    <!-- SERVICES -->
    <section class="py-5">
      <div class="container text-center">
        <h2 class="fw-bold">What We Create at Gkon</h2>
        <p class="mb-5 text-secondary">Pixel-perfect UI · High-Performance Web Apps · Intelligent Mobile Solutions</p>
    
        <div class="row g-4 justify-content-center">
          <div class="col-lg-2 col-md-4 col-6"><div class="service-box">Web Development</div></div>
          <div class="col-lg-2 col-md-4 col-6"><div class="service-box">Mobile App UI/UX</div></div>
          <div class="col-lg-2 col-md-4 col-6"><div class="service-box">Brand Identity</div></div>
          <div class="col-lg-2 col-md-4 col-6"><div class="service-box">AI-Driven Solutions</div></div>
          <div class="col-lg-2 col-md-4 col-6"><div class="service-box">Product Design</div></div>
          <div class="col-lg-2 col-md-4 col-6"><div class="service-box">Digital Strategy</div></div>
        </div>
    
        <button class="btn btn-outline-light mt-4 px-4">Talk to Our Experts</button>
      </div>
    </section>
    
    <!-- BRAND MESSAGE -->
    <section class="blue-section">
      <div class="container">
        <h2 class="fw-bold">Human-Centered Design, Business-Focused Development</h2>
        <p class="mt-3">We create future-ready experiences for startups, enterprises & global brands.</p>
      </div>
    </section>
     
    <!-- TECH SECTION -->
    <section class="tech-section py-5">
      <div class="container">
    
        <!-- UI SECTION -->
        <h3 class="fw-bold mb-4 text-white text-center">UI Design Tools</h3>
    
        <div class="row g-4 justify-content-center">
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/figma.png">
              <p>Figma</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/adobe-xd.png">
              <p>Adobe XD</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/adobe-photoshop.png">
              <p>Photoshop</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/adobe-illustrator.png">
              <p>Illustrator</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="tech-box">
              <img src="sketch.webp">
              <p>Sketch</p>
            </div>
          </div>
    
        </div>
    
        <!-- UX SECTION -->
        <h3 class="fw-bold mt-5 mb-4 text-white text-center">UX Development Technologies</h3>
    
        <div class="row g-4 justify-content-center">
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/html-5.png">
              <p>HTML5</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/css3.png">
              <p>CSS3</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/javascript.png">
              <p>JavaScript</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="300">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/sass.png">
              <p>SASS</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="400">
            <div class="tech-box">
              <img src="less.webp">
              <p>LESS</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="500">
            <div class="tech-box">
              <img src="https://img.icons8.com/color/96/bootstrap.png">
              <p>Bootstrap</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="600">
            <div class="tech-box">
              <img src="foundation.webp">
              <p>Foundation</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="700">
            <div class="tech-box">
              <img src="jquerymobile.webp">
              <p>jQuery Mobile</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="800">
            <div class="tech-box">
              <img src="ionic.webp">
              <p>IONIC</p>
            </div>
          </div>
    
          <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="900">
            <div class="tech-box">
              <img src="dw.webp">
              <p>Dreamweaver</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style>
    .tech-section {
      background: #0f172a;
    }
    .tech-box {
      background: rgba(255,255,255,0.07);
      padding: 18px 10px;
      text-align: center;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.15);
      transition: 0.4s ease;
      backdrop-filter: blur(10px);
    }
    .tech-box img {
      width: 70px;
      height: auto;
      margin-bottom: 10px;
    }
    .tech-box p {
      color: #fff;
      font-weight: 600;
      font-size: 14px;
      margin: 0;
    }
    .tech-box:hover {
      transform: translateY(-10px) scale(1.05);
      border-color: #6366f1;
      box-shadow: 0 10px 25px rgba(99,102,241,0.4);
    }
    @media (max-width: 576px) {
      .tech-box img { width: 55px; }
      .tech-box { padding: 15px 5px; }
    }
    </style>
    <script>
    AOS.init();
    </script>
<!-- PORTFOLIO -->
    <section class="portfolio-section">
      <div class="container text-center">
          <h2 class="fw-bold mb-5">Recent Work by Gkon Technologies</h2>
          <div class="row g-4 justify-content-center">
              <div class="col-lg-4 col-md-6">
                  <div class="portfolio-card">
                      <h4>INSURANCE APP</h4>
                      <p>An application to automate insurance processes</p>
                      <a href="#" class="btn-view">View Case Study →</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="portfolio-card">
                      <h4>MARN</h4>
                      <p>Job Portal Design System</p>
                      <a href="#" class="btn-view">View Case Study →</a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="portfolio-card">
                      <h4>Driver Monitor</h4>
                      <p>Fleet Management Dashboard</p>
                      <a href="#" class="btn-view">View Case Study →</a>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- BLOG SECTION -->
    <section class="blog-area">
      <div class="container">
          <h2 class="text-center mb-5 fw-bold">Tech Stories from Gkon</h2>
          <div class="row g-4">
              <div class="col-md-4">
                  <div class="blog-card-3d">
                      <h4>Top UI/UX Trends 2025</h4>
                      <p>Future visual language, motion UI & intelligent experiences.</p>
                      <a href="#" class="blog-btn">Read More →</a>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="blog-card-3d">
                      <h4>Web Development in AI Era</h4>
                      <p>How AI is transforming the way we build the web.</p>
                      <a href="#" class="blog-btn">Read More →</a>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="blog-card-3d">
                      <h4>Why Outsourcing Works</h4>
                      <p>The advantage of working with expert offshore teams.</p>
                      <a href="#" class="blog-btn">Read More →</a>
                  </div>
              </div>
          </div>
      </div>
    </section> 
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us — Gkon Technologies</title>
  
    <!-- Tailwind CSS & Bootstrap Icons -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/alpinejs" defer></script>
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background-color: #f9fbff;
      }

      /* ---------- HERO SECTION ---------- */
      .hero {
        background: linear-gradient(
            rgba(0, 36, 80, 0.75),
            rgba(0, 60, 150, 0.7)
          ),
          url("about-banner.webp")
            center/cover no-repeat;
        color: white;
        text-align: center;
        padding: 120px 20px;
        position: relative;
        overflow: hidden;
      }

      .hero h1 {
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
        animation: fadeInDown 1.5s ease;
      }

      .hero p {
        opacity: 0.9;
        animation: fadeInUp 1.8s ease;
      }

      .hero::after {
        content: "";
        position: absolute;
        bottom: -50px;
        left: 0;
        right: 0;
        height: 100px;
        background: white;
        clip-path: ellipse(70% 100% at 50% 100%);
      }

      /* ---------- ICON CARDS ---------- */
      .icon-circle {
        width: 90px;
        height: 90px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        border-radius: 50%;
        font-size: 34px;
        box-shadow: 0 6px 15px rgba(13, 110, 253, 0.3);
        margin: 0 auto 15px;
        transition: transform 0.3s, box-shadow 0.3s;
      }
      .icon-circle:hover {
        transform: translateY(-6px) scale(1.05);
        box-shadow: 0 10px 25px rgba(13, 110, 253, 0.4);
      }

      /* ---------- SECTION STYLES ---------- */
      section {
        position: relative;
      }

      .feature-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s;
        transform-style: preserve-3d;
      }

      .feature-card:hover {
        transform: translateY(-10px) rotateX(5deg);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      }

      .stats {
        background: linear-gradient(120deg, #004aad, #007bff);
        color: white;
      }

      /* ---------- TEAM ---------- */
      .team img {
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
      }

      .team img:hover {
        transform: scale(1.05) rotateY(5deg);
      }

      /* ---------- FOOTER ---------- */
      .footer {
        background: linear-gradient(to right, #00142e, #012a58);
        color: #d5d8e2;
        padding: 50px 0;
      }

      .footer a {
        color: #4da3ff;
        text-decoration: none;
      }

      .footer a:hover {
        text-decoration: underline;
      }

      /* ---------- ANIMATIONS ---------- */
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes fadeInDown {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>
  </head> 
  <body>
  @extends('frontend.layouts.main')

  @section('main-container')
  
    <!-- HERO SECTION -->
    <section class="hero">
      <h1 class="display-5 fw-bold mb-3">
        We Don’t Just Build IT Solutions — We Build Possibilities for You
      </h1>
      <p class="lead mb-4">
        Empowering businesses through technology, creativity, and innovation.
      </p>
      <a href="#contact" class="btn btn-light px-4 py-2 shadow">
        Let's Get Started
      </a>
    </section>

    <!-- MISSION -->
    <section class="py-5 text-center container">
      <h2 class="fw-bold mb-3">Our Mission</h2>
      <p class="lead">
        <b>Gkon Technologies</b> is committed to pioneering and delivering cutting-edge technologies across web, mobile, eCommerce, mCommerce, IoT, wearables, AR/VR, cloud integration, cross-platform, on-demand solutions, and enterprise mobility. We transform these innovations into tangible value for our clients and their customers by providing expert, best-in-class services. Our mission is to empower businesses worldwide to fully harness their potential and drive their digital transformation forward efficiently and effectively.
      </p>
    </section>

    <!-- FEATURES -->
    <section class="py-5 bg-light text-center">
      <div class="container">
        <h3 class="fw-bold mb-5">Innovation. Excellence. Functionality.</h3>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-card p-4 h-100">
              <div class="icon-circle bg-primary">
                <i class="bi bi-lightbulb"></i>
              </div>
              <h5>Creative</h5>
              <p>
                We merge imagination with logic to deliver creative solutions
                that inspire and engage.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card p-4 h-100">
              <div class="icon-circle bg-success">
                <i class="bi bi-gear"></i>
              </div>
              <h5>Innovative</h5>
              <p>
                We constantly push the boundaries of technology to keep our
                clients ahead of the competition.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card p-4 h-100">
              <div class="icon-circle bg-warning">
                <i class="bi bi-rocket"></i>
              </div>
              <h5>Functional</h5>
              <p>
                Our solutions are user-friendly, scalable, and designed for
                performance and reliability.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Vision Section -->
   <section class="py-5 text-center text-white position-relative overflow-hidden" style="background: url('about-banner.webp') center/cover no-repeat;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6); z-index: 1;" ></div>
  <div class="container position-relative" style="z-index:2;">
    <h2 class="fw-bold mb-3">Vision</h2>
    <blockquote class="blockquote fs-4 mb-4 fw-light fst-italic">
      “To become the most trusted technology partner, empowering organizations globally through innovation, intelligence, and impact.”
    </blockquote>
    <a
      href="#contact"
      class="btn btn-primary px-4 py-2 shadow-lg rounded-pill"
      style="z-index:3;position:relative;"
    >
      Connect With Us
    </a>
  </div>
</section> 
    <!-- Animation CSS -->
    <style>
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .animate-fadein {
        animation: fadeInUp 1.2s ease-in-out forwards;
      }
    </style> 
    <!-- TEAM --> 
<section class="position-relative d-flex flex-column flex-lg-row align-items-stretch text-white m-3" style="min-height: 60vh; border-radius: 1.5rem; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.2);">
    
    <div class="flex-shrink-0 d-flex flex-column justify-content-center px-5 py-5 position-relative" style="flex:1.2; min-width:320px; background: linear-gradient(135deg, #1A237E 0%, #303F9F 100%);">
        
        <div class="position-relative z-2">
            <div class="mb-2 text-uppercase fw-semibold small opacity-85 text-info" style="color: #BBDEFB !important;">Global Expertise. Local Impact</div>
            <h2 class="display-5 fw-bolder mb-3 text-white">Meet Our Experts</h2>
            <p class="fs-5 mb-2 fw-light">
                At GKON Technologies, we are powered by a collective of seasoned professionals, united by a commitment to delivering excellence.
            </p>
            <p class="mb-4 fs-6 lh-base opacity-90">
                Our core strength lies in blending diverse expertise across development, strategic design, rigorous quality analysis, and meticulous project management. This synergy allows us to convert complex business challenges into successful, impactful digital solutions.
            </p>

            <a href="#team" class="btn btn-lg rounded-pill px-5 mt-3 fw-bold" style="background-color: #FF9800; border: 0; color: #1A237E; transition: all 0.3s ease;">
                Explore Team Profiles <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>

    <div class="flex-grow-1 d-flex align-items-center justify-content-center py-4 px-lg-4 px-3 bg-light" style="z-index:2; flex:1;">
        <div class="d-grid gap-3 w-100" style="grid-template-columns:repeat(auto-fit, minmax(140px, 1fr)); max-width:650px;">
            
            <div class="card team-card overflow-hidden border-0 rounded-4 shadow-lg">
                <img 
                    src="{{ url('frontend/img/t1.jpg') }}" 
                    alt="Team Member Profile 1" 
                    class="img-fluid object-fit-cover w-100 h-100" 
                    style="min-height:220px; aspect-ratio: 1/1.2;"
                >
            </div>
            
            <div class="card team-card overflow-hidden border-0 rounded-4 shadow-lg">
                <img 
                    src="{{ url('frontend/img/t3.png') }}" 
                    alt="Team Member Profile 2" 
                    class="img-fluid object-fit-cover w-100 h-100" 
                    style="min-height:220px; aspect-ratio: 1/1.2;"
                >
            </div> 
        </div>
    </div>
</section> 
<style>
/* Base image styling */
.team-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.team-card img {
    transition: transform 0.5s ease;
}

/* Hover effect */
.team-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
}
.team-card:hover img {
    transform: scale(1.05);
}

/* Responsive Grid Adjustments (Making the grid look good on different sizes) */
@media (max-width: 575.98px) {
    /* Extra Small devices: Stack them vertically */
    .d-grid {
        grid-template-columns: 1fr !important;
    }
    .d-sm-block {
        /* Hide T3, T4 on very small screens for cleaner look */
        display: none !important; 
    }
}
@media (min-width: 576px) and (max-width: 991.98px) {
    /* Small to Medium devices: Two columns */
    .d-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
@media (min-width: 992px) {
    /* Large devices and up: Three/Four columns in the grid area */
    .d-grid {
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)) !important;
    }
}
</style> 
    <!-- Stats Section -->
    <section
      class="stats py-5 text-center text-white position-relative"
      style="background: linear-gradient(90deg, #007bff, #6610f2, #17a2b8)"
    >
      <div
        class="position-absolute top-0 start-0 w-100 h-100"
        style="background: rgba(0, 0, 0, 0.3); z-index: 0"
      ></div>

      <div class="container position-relative z-1">
        <div class="row">
          <div class="col-md-3 mb-4">
            <h2 class="fw-bold display-5 counter" data-target="6">0+</h2>
            <p class="text-light">Years of Experience</p>
          </div>
          <div class="col-md-3 mb-4">
            <h2 class="fw-bold display-5 counter" data-target="500">0+</h2>
            <p class="text-light">Satisfied Clients</p>
          </div>
          <div class="col-md-3 mb-4">
            <h2 class="fw-bold display-5 counter" data-target="10">0</h2>
            <p class="text-light">Expert Team Members</p>
          </div>
          <div class="col-md-3 mb-4">
            <h2 class="fw-bold display-5 counter" data-target="5.0">0</h2>
            <p class="text-light">Client Rating</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Counter Animation Script -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".counter");
        const speed = 100; // lower = faster

        const animateCounters = () => {
          counters.forEach((counter) => {
            const updateCount = () => {
              const target = +counter.getAttribute("data-target");
              const count = +counter.innerText;
              const increment = target / speed;

              if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 30);
              } else {
                counter.innerText = target + (target < 100 ? "+" : "+");
              }
            };

            updateCount();
          });
        };

        // Trigger when in viewport
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect(); // Run once
              }
            });
          },
          { threshold: 0.4 }
        );

        observer.observe(document.querySelector(".stats"));
      });
    </script>

    <!-- AWARDS -->
    <section class="py-5 text-center">
      <div class="container">
        <h3 class="fw-bold mb-4">Global Recognition</h3>
        <p class="lead mb-4">
          Our consistent excellence and innovation have earned us top
          international rankings.
        </p>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="feature-card p-4">
              <i class="bi bi-trophy display-5 text-warning mb-3"></i>
              <h6>Top Mobile App Developer</h6>
              <p class="small text-muted">By Clutch - 2025</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card p-4">
              <i class="bi bi-award display-5 text-primary mb-3"></i>
              <h6>Best IT Service Provider</h6>
              <p class="small text-muted">By DesignRush - 2025</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-card p-4">
              <i class="bi bi-lightning-charge display-5 text-success mb-3"></i>
              <h6>Innovation Award Winner</h6>
              <p class="small text-muted">By TechWorld - 2024</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
@endsection
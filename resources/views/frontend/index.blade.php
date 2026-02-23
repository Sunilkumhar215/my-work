<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Web Application & Mobile App Development Company | Gkon Technologies</title>
  <!-- Primary Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <!-- For high-resolution devices -->
  <link rel="icon" href="/favicon.png" type="image/png" sizes="32x32">
  <!-- For Apple devices -->
  <link rel="apple-touch-icon" href="/favicon.png">
  <!-- Primary SCO Meta Tags -->
  <meta name="description" content="Gkon Technologies: Expert web application & mobile app development company offering custom software, IT solutions, and full stack services for startups, SMEs, and enterprises." />
  <meta name="keywords" content="Gkon Technologies, Web Development, Mobile App Development, IT Services, Full Stack Development, Jaipur, India" />
  <meta name="author" content="Gkon Technologies" />

  <!-- Open Graph Meta Tags (For Social Sharing) -->
  <meta property="og:title" content="Web Application & Mobile App Development Company | Gkon Technologies" />
  <meta property="og:description" content="Top-rated software company for custom web and mobile app solutions. Build your business with Gkon Technologies." />
  <meta property="og:image" content="logo4.png" />
  <meta property="og:url" content="https://www.gkontechnologies.com" />
  <meta property="og:type" content="website" />
  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Web Application & Mobile App Development Company | Gkon Technologies" />
  <meta name="twitter:description" content="Custom web and mobile development, IT solutions, expert teams. Start your project with Gkon Technologies." />
  <meta name="twitter:image" content="logo4.png" />
  <meta name="theme-color" content="#0b132b">
  <meta name="msapplication-TileImage" content="/favicon.ico">
  <meta name="msapplication-TileColor" content="#0b132b">
  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.gkontechnologies.com/" />
  <!-- Tailwind CSS & Bootstrap Icons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://gkontechnologies.com/customcss.css" rel="stylesheet">
</head>

<body class="bg-white font-sans text-gray-800">


  @extends('frontend.layouts.main')
  @if(session('success'))
  <script>
    Swal.fire({
      title: 'Success!',
      text: "{{ session('success') }}",
      icon: 'success',
      confirmButtonText: 'Cool',
      confirmButtonColor: '#6366f1', // Aapki theme ka primary color
      timer: 3000, // 3 seconds baad apne aap band ho jayega
      timerProgressBar: true,
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      },
      customClass: {
        popup: 'rounded-4' // Modern rounded corners
      }
    });
  </script>
  @endif
  @section('main-container')


  <!-- MAIN CONTENT -->
  <main class="mt-16 text-gray-900">
    <!-- banner Section -->
    <section class="bg-white pt-16 pb-24 px-6 overflow-hidden relative">
      <!-- Background gradient for depth -->
      <div
        class="absolute inset-0 bg-gradient-to-br from-sky-50 via-white to-sky-100 opacity-70 -z-10"></div>

      <div
        class="container mx-auto max-w-screen-xl grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
        <!-- LEFT CONTENT -->
        <div
          class="md:col-span-6 animate-slideInLeft perspective-1000"
          style="transform-style: preserve-3d">
          <h1
            class="text-4xl sm:text-5xl font-extrabold leading-tight mb-6 text-gray-900"
            style="transform: translateZ(30px)">
            Grow Your Business With <br />
            <span class="text-sky-600 drop-shadow-lg">GKON Technologies</span>
          </h1>

          <p
            class="text-gray-700 mb-8 max-w-xl"
            style="transform: translateZ(20px)">
            At <b>GKON Technologies</b>, we build powerful, user-friendly and
            scalable
            <span class="text-sky-600 font-semibold">mobile and web applications</span>
            designed to help your business thrive in the digital era. From
            concept to launch, we craft solutions that bring ideas to life
            with innovation and precision.
          </p>

          <div class="flex flex-wrap gap-4">
            <a
              href="#contact-form"
              class="inline-block bg-sky-600 text-white px-6 py-3 rounded-md font-semibold shadow transform transition-all duration-300 hover:scale-110 hover:rotate-1 hover:bg-sky-700">
              Get a Free Quote
            </a>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#demoModal">
              Schedule a Demo
            </button>
          </div>

          <!-- Trusted logos -->
          <div
            class="mt-16 flex flex-wrap items-center gap-6 opacity-70 max-w-xl"
            style="transform: translateZ(40px)">
            <img
              src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a5bfa597-d3c2-45a6-9ebb-3846ba16341b.png"
              alt="Clutch logo"
              class="h-10 object-contain hover:scale-110 hover:rotate-y-12 transition-transform duration-300" />
            <img
              src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4477de28-1670-4311-8c3a-9b59bcff2bfd.png"
              alt="Business of Apps"
              class="h-10 object-contain hover:scale-110 hover:rotate-y-12 transition-transform duration-300" />
            <img
              src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2e8d8b04-0a58-45b3-8d51-f0276343a198.png"
              alt="Bloomberg"
              class="h-10 object-contain hover:scale-110 hover:rotate-y-12 transition-transform duration-300" />
            <img
              src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0078b3f2-3f84-49c3-917c-3161ebbf9a28.png"
              alt="BBC"
              class="h-10 object-contain hover:scale-110 hover:rotate-y-12 transition-transform duration-300" />
            <img
              src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1f230b65-affe-4d4e-abb3-de101609ffc2.png"
              alt="Tech Radar"
              class="h-10 object-contain hover:scale-110 hover:rotate-y-12 transition-transform duration-300" />
          </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div
          class="md:col-span-6 flex justify-center perspective-1000"
          style="transform-style: preserve-3d">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/396edd03-d302-481d-9e43-efdef62fecde.png"
            alt="App development illustration"
            class="w-full max-w-lg drop-shadow-2xl animate-float"
            style="transform: rotateY(-15deg) translateZ(60px)" />
        </div>
      </div>
    </section>

    <!-- Recognizing Excellence Section -->
    <section
      class="container mx-auto max-w-screen-xl px-6 py-10 overflow-hidden relative">
      <h2
        class="text-center text-2xl md:text-3xl font-extrabold mb-8 text-sky-700 tracking-wide relative">
        Recognizing Our Excellence
        <span
          class="block w-20 h-1 bg-sky-400 mx-auto mt-2 rounded-full animate-slidein"></span>
      </h2>

      <!-- Auto Scroll Wrapper -->
      <div class="relative">
        <div
          id="scrollContainer"
          class="flex space-x-6 overflow-hidden snap-x snap-mandatory scroll-smooth">
          <!-- Duplicate Content for Loop -->
          <div class="flex space-x-6" id="scrollContent">
            <!-- CARD 1 -->
            <div
              class="snap-center min-w-[250px] sm:min-w-[280px] bg-white border border-sky-200 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-in-out flex flex-col items-center justify-center p-6">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/51485d67-21c6-4fe8-b6f9-a2fd47fa0f68.png"
                alt="Clutch"
                class="w-20 h-20 object-contain mb-3 animate-float" />
              <h3 class="font-bold text-lg text-gray-800 mb-1">Clutch</h3>
              <div class="flex text-yellow-400 mb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <p class="text-gray-600 text-sm text-center">
                Rated 4.8/5 by clients for innovation and delivery.
              </p>
            </div>

            <!-- CARD 2 -->
            <div
              class="snap-center min-w-[250px] sm:min-w-[280px] bg-white border border-sky-200 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-in-out flex flex-col items-center justify-center p-6">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f091db05-06f4-479a-be7b-757b764f45dd.png"
                alt="Business Of Apps"
                class="w-20 h-20 object-contain mb-3 animate-float" />
              <h3 class="font-bold text-lg text-gray-800 mb-1">
                Business Of Apps
              </h3>
              <div class="flex text-yellow-400 mb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="text-gray-600 text-sm text-center">
                Featured as trusted app developers worldwide.
              </p>
            </div>

            <!-- CARD 3 -->
            <div
              class="snap-center min-w-[250px] sm:min-w-[280px] bg-white border border-sky-200 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-in-out flex flex-col items-center justify-center p-6">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1a330ceb-1834-4dbf-8384-2669d0055743.png"
                alt="GoodFirms"
                class="w-20 h-20 object-contain mb-3 animate-float" />
              <h3 class="font-bold text-lg text-gray-800 mb-1">GoodFirms</h3>
              <div class="flex text-yellow-400 mb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="text-gray-600 text-sm text-center">
                Rated highly for reliability and customer satisfaction.
              </p>
            </div>

            <!-- CARD 4 -->
            <div
              class="snap-center min-w-[250px] sm:min-w-[280px] bg-white border border-sky-200 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-500 ease-in-out flex flex-col items-center justify-center p-6">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b04db362-feaf-4979-abf2-64ebf99ac5cf.png"
                alt="TopDevelopers"
                class="w-20 h-20 object-contain mb-3 animate-float" />
              <h3 class="font-bold text-lg text-gray-800 mb-1">
                TopDevelopers
              </h3>
              <div class="flex text-yellow-400 mb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p class="text-gray-600 text-sm text-center">
                Recognized for top-tier technology and innovation.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style>
      @keyframes float {
        0% {
          transform: translateY(0);
        }

        50% {
          transform: translateY(-6px);
        }

        100% {
          transform: translateY(0);
        }
      }

      .animate-float {
        animation: float 3s ease-in-out infinite;
      }

      @keyframes slidein {
        from {
          width: 0;
          opacity: 0;
        }

        to {
          width: 5rem;
          opacity: 1;
        }
      }

      .animate-slidein {
        animation: slidein 1s ease forwards;
      }

      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }

      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("scrollContainer");
        const content = document.getElementById("scrollContent");
        const clone = content.cloneNode(true);
        container.appendChild(clone);

        let scrollAmount = 0;

        function autoScroll() {
          scrollAmount += 0.7; // Adjust speed here
          container.scrollLeft = scrollAmount;

          if (scrollAmount >= content.scrollWidth) {
            scrollAmount = 0;
          }

          requestAnimationFrame(autoScroll);
        }

        autoScroll();
      });
    </script>

    <!-- Softkingo Technologies Section -->

    <section
      class="relative overflow-hidden py-20 bg-gradient-to-br from-sky-50 via-white to-sky-100">
      <div
        class="container mx-auto max-w-screen-xl px-6 text-center"
        data-aos="fade-up">
        <!-- Animated Title -->
        <h2
          class="text-4xl md:text-5xl font-extrabold mb-6 text-sky-700 drop-shadow-lg animate-float">
          GKON Technologies
        </h2>

        <p
          class="max-w-4xl mx-auto text-gray-700 mb-16 text-lg leading-relaxed"
          data-aos="fade-up"
          data-aos-delay="200">
          GKON Technologies is a leading technologies and mobile app
          development company specializing in building user-focused, scalable,
          and high-performance digital solutions. We combine modern design,
          smart technology, and agile processes to transform your ideas into
          powerful business tools — serving industries like education,
          healthcare, retail, finance, and logistics.
        </p>

        <!-- Stats Grid -->
        <div
          class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 max-w-6xl mx-auto">
          <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
            <div class="stat-number">6+</div>
            <div class="stat-label">Years Experience</div>
          </div>

          <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
            <div class="stat-number">450+</div>
            <div class="stat-label">Projects Completed</div>
          </div>

          <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
            <div class="stat-number">50+</div>
            <div class="stat-label">Dedicated Team</div>
          </div>

          <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
            <div class="stat-number">500+</div>
            <div class="stat-label">Satisfied Clients</div>
          </div>

          <div class="stat-card" data-aos="zoom-in" data-aos-delay="500">
            <div class="stat-number">10</div>
            <div class="stat-label">Industry Experts</div>
          </div>

          <div class="stat-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="stat-number text-yellow-400">★ 5.0</div>
            <div class="stat-label">Client Rating</div>
          </div>
        </div>

        <!-- Button -->
        <div class="mt-16" data-aos="fade-up" data-aos-delay="700">
          <a
            href="#"
            class="inline-block bg-sky-600 text-white px-10 py-4 font-semibold rounded-full shadow-lg hover:shadow-sky-400/60 hover:scale-105 transform transition duration-500">
            Get a Quote
          </a>
        </div>
      </div>

      <!-- Decorative background shapes -->
      <div
        class="absolute top-0 left-0 w-64 h-64 bg-sky-300 opacity-30 blur-3xl rounded-full -z-10 animate-pulse"></div>
      <div
        class="absolute bottom-0 right-0 w-72 h-72 bg-sky-500 opacity-20 blur-3xl rounded-full -z-10 animate-pulse-slow"></div>
    </section>

    <style>
      .stat-card {
        background: white;
        border-radius: 1rem;
        padding: 2rem 1rem;
        box-shadow: 0 8px 25px rgba(0, 140, 255, 0.15);
        border: 1px solid rgba(56, 189, 248, 0.2);
        text-align: center;
        transition: all 0.4s ease;
        transform-style: preserve-3d;
      }

      .stat-card:hover {
        transform: translateY(-10px) rotateX(6deg) rotateY(-6deg) scale(1.05);
        box-shadow: 0 15px 40px rgba(2, 132, 199, 0.3);
      }

      .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: #0369a1;
        text-shadow: 0 2px 10px rgba(3, 105, 161, 0.2);
        margin-bottom: 0.5rem;
      }

      .stat-label {
        color: #334155;
        font-weight: 600;
        font-size: 1rem;
      }

      .animate-float {
        animation: float 3.5s ease-in-out infinite;
      }

      @keyframes float {

        0%,
        100% {
          transform: translateY(0);
        }

        50% {
          transform: translateY(-10px);
        }
      }

      .animate-pulse-slow {
        animation: pulse-slow 6s ease-in-out infinite;
      }

      @keyframes pulse-slow {

        0%,
        100% {
          opacity: 0.2;
          transform: scale(1);
        }

        50% {
          opacity: 0.4;
          transform: scale(1.2);
        }
      }
    </style>

    <script>
      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>

    <!-- Services Section -->
    <!-- Include AOS (for scroll animations) -->

    <section
      class="relative bg-gradient-to-br from-sky-50 via-white to-sky-100 py-20 overflow-hidden">
      <div class="container mx-auto max-w-screen-xl px-6 text-center">
        <h2
          class="text-4xl md:text-5xl font-extrabold mb-12 text-sky-700 drop-shadow-sm"
          data-aos="fade-up">
          Services in Which We Excel
        </h2>

        <p
          class="max-w-3xl mx-auto text-gray-700 mb-16 text-lg leading-relaxed"
          data-aos="fade-up"
          data-aos-delay="200">
          At <span class="font-bold text-sky-700">GKON Technologies</span>, we
          deliver world-class technology solutions that empower businesses to
          grow and innovate — from mobile apps and websites to AI-driven
          digital platforms.
        </p>

        <div
          class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
          <!-- Service Cards Same as Previous -->
          <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-wrapper">
              <i class="bi bi-phone"></i>
            </div>
            <h3>Mobile App Development</h3>
            <p>
              Tailored iOS and Android applications with seamless UI and
              robust performance using modern tech frameworks.
            </p>
            <a href="#" class="learn-link">Learn More →</a>
          </div>

          <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-wrapper">
              <i class="bi bi-globe2"></i>
            </div>
            <h3>Web App Development</h3>
            <p>
              Modern, secure, and scalable web applications built with
              Laravel, React, and Node.js for high-performance solutions.
            </p>
            <a href="#" class="learn-link">Learn More →</a>
          </div>

          <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-wrapper">
              <i class="bi bi-palette"></i>
            </div>
            <h3>UI/UX Design</h3>
            <p>
              Clean, intuitive, and interactive user experiences designed to
              engage users and elevate brand presence.
            </p>
            <a href="#" class="learn-link">Learn More →</a>
          </div>

          <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-wrapper">
              <i class="bi bi-bar-chart-line"></i>
            </div>
            <h3>Digital Marketing</h3>
            <p>
              SEO, SEM, and growth-focused marketing strategies that enhance
              your online presence and customer reach.
            </p>
            <a href="#" class="learn-link">Learn More →</a>
          </div>

          <div class="service-card" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-wrapper">
              <i class="bi bi-cpu"></i>
            </div>
            <h3>AI & ML Solutions</h3>
            <p>
              Integrate Artificial Intelligence and Machine Learning to
              automate operations and gain actionable insights.
            </p>
            <a href="#" class="learn-link">Learn More →</a>
          </div>

          <div class="service-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="icon-wrapper">
              <i class="bi bi-cloud-arrow-up"></i>
            </div>
            <h3>Cloud Computing</h3>
            <p>
              Reliable, scalable, and secure cloud infrastructure to modernize
              your business operations with confidence.
            </p>
            <a href="#" class="learn-link">Learn More →</a>
          </div>
        </div>

        <!-- Explore More Button -->
        <div class="mt-14" data-aos="fade-up" data-aos-delay="700">
          <a
            href="#"
            class="inline-block bg-sky-600 text-white px-10 py-4 rounded-full text-lg font-bold shadow-lg transform transition duration-300 hover:scale-110 hover:shadow-2xl hover:-translate-y-2">
            Explore More
          </a>
        </div>
      </div>

      <!-- Floating Background Circles -->
      <div
        class="absolute -top-10 -left-10 w-60 h-60 bg-sky-300 opacity-30 blur-3xl rounded-full animate-pulse"></div>
      <div
        class="absolute bottom-0 right-0 w-80 h-80 bg-sky-400 opacity-20 blur-3xl rounded-full animate-pulse-slow"></div>
    </section>

    <style>
      .service-card {
        background: #fff;
        border-radius: 1.25rem;
        padding: 2.5rem 1.5rem;
        text-align: left;
        box-shadow: 0 8px 25px rgba(2, 132, 199, 0.1);
        border: 1px solid rgba(2, 132, 199, 0.1);
        transition: all 0.4s ease;
        transform-style: preserve-3d;
      }

      .service-card:hover {
        transform: translateY(-10px) rotateX(6deg) rotateY(-6deg) scale(1.03);
        box-shadow: 0 20px 40px rgba(2, 132, 199, 0.25);
      }

      .icon-wrapper {
        background: linear-gradient(135deg, #0284c7, #38bdf8);
        color: white;
        width: 70px;
        height: 70px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 10px 25px rgba(2, 132, 199, 0.4);
      }

      .service-card h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0c4a6e;
        margin-bottom: 0.75rem;
      }

      .service-card p {
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1.25rem;
      }

      .learn-link {
        color: #0284c7;
        font-weight: 600;
        transition: color 0.3s ease;
      }

      .learn-link:hover {
        color: #0369a1;
        text-decoration: underline;
      }

      .animate-pulse-slow {
        animation: pulse-slow 6s ease-in-out infinite;
      }

      @keyframes pulse-slow {

        0%,
        100% {
          opacity: 0.2;
          transform: scale(1);
        }

        50% {
          opacity: 0.4;
          transform: scale(1.2);
        }
      }
    </style>
    <script>
      AOS.init({
        duration: 900,
        once: true,
      });
    </script>
    <!-- GKON Technologies Projects Section -->
    <section
      class="relative bg-gradient-to-br from-sky-50 to-white py-16 overflow-hidden">
      <div class="container mx-auto max-w-screen-xl px-6">
        <h2 class="text-center text-4xl font-extrabold mb-8 text-sky-700">
          Selected Projects
        </h2>
        <p class="text-center text-gray-600 mb-8 max-w-3xl mx-auto">
          Real work by GKON Technologies — scalable apps, enterprise systems,
          and intuitive UIs.
        </p>

        <!-- Carousel -->
        <div class="relative">
          <!-- Left Control -->
          <button
            id="carouselPrev"
            class="absolute left-3 top-1/2 -translate-y-1/2 z-20 bg-white/90 rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:scale-110 transition">
            <i class="bi bi-chevron-left text-sky-600 text-2xl"></i>
          </button>

          <!-- Right Control -->
          <button
            id="carouselNext"
            class="absolute right-3 top-1/2 -translate-y-1/2 z-20 bg-white/90 rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:scale-110 transition">
            <i class="bi bi-chevron-right text-sky-600 text-2xl"></i>
          </button>

          <!-- Viewport -->
          <div id="carouselViewport" class="overflow-hidden">
            <div id="carouselTrack" class="flex gap-6">
              <!-- Project Cards -->
              <div
                class="project-card min-w-[280px] md:min-w-[340px] lg:min-w-[380px] bg-white rounded-2xl shadow-xl p-4 transform-gpu transition hover:scale-105 hover:shadow-2xl">
                <img
                  src="https://noetic-labs.com/noetic_blog/uploads/erp-software-packages-500x500.jpg"
                  class="rounded-lg h-48 w-full object-cover"
                  alt="ERP Project" />
                <h3 class="text-lg font-semibold text-sky-600 mt-3">
                  Smart ERP
                </h3>
                <p class="text-sm text-gray-600">
                  ERP / Dashboard — React + Node.js
                </p>
              </div>

              <div
                class="project-card min-w-[280px] md:min-w-[340px] lg:min-w-[380px] bg-white rounded-2xl shadow-xl p-4 transform-gpu transition hover:scale-105 hover:shadow-2xl">
                <img
                  src="https://webandcrafts.com/_next/image?url=https%3A%2F%2Fadmin.wac.co%2Fuploads%2FWhat_is_E_commerce_and_What_are_its_Applications_2_d2eb0d4402.jpg&w=1080&q=90"
                  class="rounded-lg h-48 w-full object-cover"
                  alt="Ecommerce" />
                <h3 class="text-lg font-semibold text-sky-600 mt-3">
                  E-Commerce B2B
                </h3>
                <p class="text-sm text-gray-600">React Native + Node.js</p>
              </div>

              <div
                class="project-card min-w-[280px] md:min-w-[340px] lg:min-w-[380px] bg-white rounded-2xl shadow-xl p-4 transform-gpu transition hover:scale-105 hover:shadow-2xl">
                <img
                  src="https://docpulse.com/wp-content/uploads/2024/02/slider-small-1.jpg"
                  class="rounded-lg h-48 w-full object-cover"
                  alt="Hospital" />
                <h3 class="text-lg font-semibold text-sky-600 mt-3">
                  Hospital Management Software (HMS)
                </h3>
                <p class="text-sm text-gray-600">HealthTech — Flutter + Laravel</p>
              </div>

              <div
                class="project-card min-w-[280px] md:min-w-[340px] lg:min-w-[380px] bg-white rounded-2xl shadow-xl p-4 transform-gpu transition hover:scale-105 hover:shadow-2xl">
                <img
                  src="https://cdn.digitalindiacorporation.in/wp-content/uploads/2024/02/Learning-Management-System.png"
                  class="rounded-lg h-48 w-full object-cover"
                  alt="LMS" />
                <h3 class="text-lg font-semibold text-sky-600 mt-3">
                  LMS Portal
                </h3>
                <p class="text-sm text-gray-600">Education — React + Node.js</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const viewport = document.getElementById("carouselViewport");
        const track = document.getElementById("carouselTrack");
        const next = document.getElementById("carouselNext");
        const prev = document.getElementById("carouselPrev");

        // Clone cards for smooth infinite loop
        const cards = Array.from(track.children);
        cards.forEach((card) => track.appendChild(card.cloneNode(true)));

        let scrollSpeed = 0.6; // px per frame
        let isPaused = false;
        let raf;

        // Smooth continuous scroll
        function loop() {
          if (!isPaused) {
            viewport.scrollLeft += scrollSpeed;
            if (viewport.scrollLeft >= track.scrollWidth / 2) {
              viewport.scrollLeft = 0;
            }
          }
          raf = requestAnimationFrame(loop);
        }
        loop();

        // Pause on hover
        viewport.addEventListener("mouseenter", () => (isPaused = true));
        viewport.addEventListener("mouseleave", () => (isPaused = false));

        // Buttons
        const cardWidth = cards[0].offsetWidth + 24; // 24 = gap
        next.addEventListener("click", () => {
          isPaused = true;
          viewport.scrollBy({
            left: cardWidth,
            behavior: "smooth"
          });
          setTimeout(() => (isPaused = false), 800);
        });
        prev.addEventListener("click", () => {
          isPaused = true;
          viewport.scrollBy({
            left: -cardWidth,
            behavior: "smooth"
          });
          setTimeout(() => (isPaused = false), 800);
        });

        // Speed adjustment for screen sizes
        function updateSpeed() {
          const w = window.innerWidth;
          if (w < 640) scrollSpeed = 0.8;
          else if (w < 1024) scrollSpeed = 0.6;
          else scrollSpeed = 0.5;
        }
        updateSpeed();
        window.addEventListener("resize", updateSpeed);
      });
    </script>

    <!-- Our Strength Features Section -->
    <!-- Include AOS CSS and JS (for animations) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <section
      class="bg-gradient-to-br from-sky-50 to-sky-100 py-16 relative overflow-hidden">
      <div class="container mx-auto px-6 text-gray-800 max-w-6xl">
        <h2
          class="text-3xl md:text-4xl font-extrabold text-center mb-12 text-sky-800">
          Our Strength Features
        </h2>

        <div class="relative">
          <!-- Arrow Direction Line -->
          <div
            class="hidden md:block absolute top-1/2 left-0 right-0 h-1 bg-sky-300 transform -translate-y-1/2 rounded-full z-0"></div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-10 relative z-10">
            <!-- 1 -->
            <div class="feature-card" data-aos="fade-right">
              <div class="step-number bg-sky-600 text-white">1</div>
              <h3>Client Centric Development</h3>
              <p>
                We focus entirely on client needs, ensuring satisfaction and
                minimizing iterations.
              </p>
            </div>

            <!-- 2 -->
            <div class="feature-card" data-aos="fade-up">
              <div class="step-number bg-sky-600 text-white">2</div>
              <h3>Data Security</h3>
              <p>
                Robust security measures to protect client and user
                information.
              </p>
            </div>

            <!-- 3 -->
            <div class="feature-card" data-aos="fade-left">
              <div class="step-number bg-sky-600 text-white">3</div>
              <h3>Dedicated Development Team</h3>
              <p>
                Our expert team works passionately to deliver innovative and
                quality-driven solutions.
              </p>
            </div>
          </div>

          <!-- Arrows Between -->
          <div
            class="hidden md:flex justify-between items-center absolute top-1/2 left-0 right-0 px-8 z-0">
            <i
              class="bi bi-arrow-right-circle text-sky-600 text-3xl animate-pulse"></i>
            <i
              class="bi bi-arrow-right-circle text-sky-600 text-3xl animate-pulse"></i>
          </div>
        </div>

        <!-- Second Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mt-16">
          <div class="feature-card" data-aos="fade-right">
            <div class="step-number bg-sky-600 text-white">4</div>
            <h3>Clean Presentation</h3>
            <p>Visually appealing design for project reports and updates.</p>
          </div>

          <div class="feature-card" data-aos="fade-up">
            <div class="step-number bg-sky-600 text-white">5</div>
            <h3>Smart Support</h3>
            <p>24/7 expert assistance for all your post-launch needs.</p>
          </div>

          <div class="feature-card" data-aos="fade-up">
            <div class="step-number bg-sky-600 text-white">6</div>
            <h3>Quality Control</h3>
            <p>Stringent QA and testing ensure flawless performance.</p>
          </div>

          <div class="feature-card" data-aos="fade-left">
            <div class="step-number bg-sky-600 text-white">7</div>
            <h3>Continuous Improvement</h3>
            <p>Regular updates based on user feedback and evolving needs.</p>
          </div>
        </div>

        <!-- <div class="text-center mt-12">
            <button
              class="px-8 py-3 bg-sky-600 hover:bg-sky-700 text-white font-semibold rounded-full shadow-lg transform hover:scale-105 transition-all duration-300"
            >
              Explore More →
            </button>
          </div> -->
      </div>
    </section>

    <script>
      AOS.init({
        duration: 1200,
        once: false,
      });
    </script>

    <!-- Custom Styles -->
    <style>
      .feature-card {
        background: white;
        padding: 2rem 1.5rem;
        border-radius: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        position: relative;
        text-align: center;
        transform-style: preserve-3d;
      }

      .feature-card:hover {
        transform: translateY(-10px) rotateY(5deg);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
      }

      .feature-card .step-number {
        width: 50px;
        height: 50px;
        line-height: 50px;
        margin: 0 auto 1rem;
        border-radius: 50%;
        font-weight: bold;
        font-size: 1.2rem;
        position: relative;
        z-index: 2;
      }

      .feature-card h3 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0c4a6e;
        margin-bottom: 0.5rem;
      }

      .feature-card p {
        color: #555;
        font-size: 0.95rem;
      }
    </style>


    <!-- Development Process Section -->

    <!-- Our Development Process Section -->
    <section class="bg-gradient-to-br from-sky-50 to-sky-100 py-20">
      <div class="container mx-auto max-w-screen-xl px-6">
        <h2 class="text-center text-3xl md:text-4xl font-extrabold mb-16 text-sky-800">
          Our Development Process
        </h2>

        <div class="relative">
          <!-- Connector line for desktop -->
          <div
            class="hidden md:block absolute top-1/2 left-0 right-0 h-1 bg-sky-200 transform -translate-y-1/2 z-0"></div>

          <!-- Steps -->
          <div
            class="flex flex-col md:flex-row items-center justify-between relative z-10 space-y-10 md:space-y-0 md:space-x-6">
            <!-- Step 1 -->
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
              <div class="step-circle">01</div>
              <h4>Discovery & Strategy</h4>
              <p>
                We understand goals, research the market, and define the roadmap for success.
              </p>
            </div>

            <!-- Arrow -->
            <div class="hidden md:flex text-sky-500 text-3xl animate-bounce">
              <i class="bi bi-arrow-right-circle"></i>
            </div>

            <!-- Step 2 -->
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
              <div class="step-circle">02</div>
              <h4>Design & Development</h4>
              <p>
                We create prototypes and begin agile development with client feedback loops.
              </p>
            </div>

            <div class="hidden md:flex text-sky-500 text-3xl animate-bounce">
              <i class="bi bi-arrow-right-circle"></i>
            </div>

            <!-- Step 3 -->
            <div class="process-step" data-aos="fade-up" data-aos-delay="700">
              <div class="step-circle">03</div>
              <h4>Testing & Quality Assurance</h4>
              <p>
                Rigorous QA ensures performance, usability, and security excellence.
              </p>
            </div>

            <div class="hidden md:flex text-sky-500 text-3xl animate-bounce">
              <i class="bi bi-arrow-right-circle"></i>
            </div>

            <!-- Step 4 -->
            <div class="process-step" data-aos="fade-up" data-aos-delay="1000">
              <div class="step-circle">04</div>
              <h4>Launch & Deployment</h4>
              <p>
                We deploy applications and monitor them for real-time user feedback.
              </p>
            </div>

            <div class="hidden md:flex text-sky-500 text-3xl animate-bounce">
              <i class="bi bi-arrow-right-circle"></i>
            </div>

            <!-- Step 5 -->
            <div class="process-step" data-aos="fade-up" data-aos-delay="1300">
              <div class="step-circle">05</div>
              <h4>Continuous Support & Maintenance</h4>
              <p>
                We provide updates, enhancements, and ensure product security over time.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ✅ Process Step Styling -->
    <style>
      .process-step {
        text-align: center;
        max-width: 220px;
      }

      .step-circle {
        width: 70px;
        height: 70px;
        background: #0284c7;
        color: white;
        font-weight: 700;
        font-size: 1.25rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem auto;
        box-shadow: 0 8px 20px rgba(2, 132, 199, 0.25);
      }

      .process-step h4 {
        font-weight: 700;
        color: #075985;
        margin-bottom: 0.5rem;
      }

      .process-step p {
        color: #374151;
        font-size: 0.95rem;
        line-height: 1.5;
      }
    </style>

    <!-- ✅ AOS Initialization (Safe even if AOS missing) -->
    <script>
      if (typeof AOS !== "undefined") {
        AOS.init({
          duration: 1000,
          once: false,
        });
      } else {
        console.warn("⚠️ AOS not found — animations skipped.");
      }
    </script>




    <section
      class="relative bg-gradient-to-b from-sky-50 to-white py-20 overflow-hidden">
      <div class="container mx-auto max-w-screen-xl px-6 relative z-10">
        <h2
          class="text-center text-3xl md:text-4xl font-extrabold mb-16 text-sky-800">
          Industries & Domains We Serve
        </h2>
        <div
          class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 max-w-7xl mx-auto">
          <!-- Repeat for every domain -->
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/16bbf9a6-676a-485f-aa64-3b7e5f7cd29a.png"
                alt="E-Commerce"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              E-Commerce
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="50">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30c28f86-8ad0-4133-bb20-493201234591.png"
                alt="Food Delivery"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Food Delivery
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="100">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/00cacf17-43dd-4a6e-86e5-5c7756ed573c.png"
                alt="Healthcare"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Healthcare & Hospitals
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="150">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7aa15783-e3f6-4175-84b3-084e602f81da.png"
                alt="Travel"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Travel & Tourism
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="200">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/aed37f62-3d82-45f3-a3e6-75fa409f4248.png"
                alt="Finance"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Finance & Banking
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="250">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/75d55c1f-fe19-4969-ab58-ffb7cef89572.png"
                alt="Education"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Education & E-Learning
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="300">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9c5bc70f-7316-4445-b623-a218d9d81203.png"
                alt="Logistics"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Logistics & Supply Chain
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="350">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/44185031-9b6c-4dc8-bed5-2d9d3ef4906e.png"
                alt="Real Estate"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Real Estate & Property
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="400">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7c13a401-b3d3-4ae4-acc4-8d14cac763bc.png"
                alt="Sports"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Sports & Fitness
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="450">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/945d4222-5739-473e-a24b-62d5f85252e0.png"
                alt="Automobile"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Automobile & Vehicle Tech
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="500">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/29fd7c9b-ada4-45fd-ad4b-ad2e65290458.png"
                alt="Media"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Media & Entertainment
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="550">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2ad3dd71-7197-4ef7-9d71-947535b2d8a0.png"
                alt="Gaming"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Gaming & eSports
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="600">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://img.icons8.com/ios-filled/50/0c4a6e/factory.png"
                alt="Manufacturing"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Manufacturing & Industry 4.0
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="650">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://img.icons8.com/ios-filled/50/0c4a6e/ai.png"
                alt="AI & ML"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              AI, ML & Data Science
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="700">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://img.icons8.com/ios-filled/50/0c4a6e/cloud.png"
                alt="Cloud"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Cloud & SaaS
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="750">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <img
                src="https://img.icons8.com/ios-filled/50/0c4a6e/blockchain.png"
                alt="Blockchain"
                class="object-contain w-12 h-12" />
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Blockchain & Crypto
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="800">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-12 h-12 text-sky-700"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                  d="M21 6h-2V4a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H3v2h1v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8h1V6zm-5 0H8V5h8v1zm4 2v10H6V8h14z" />
              </svg>
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Retail & eCommerce Solutions
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="850">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-12 h-12 text-sky-700"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                  d="M12 2l2.39 6.97H21l-5.6 4.07L17.78 21 12 16.56 6.22 21l2.38-7.96L3 8.97h6.61z" />
              </svg>
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Government & Public Sector
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="900">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-12 h-12 text-sky-700"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M3 6h18v2H3V6zm0 5h12v2H3v-2zm0 5h6v2H3v-2z" />
              </svg>
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Marketing & Advertising
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="950">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-12 h-12 text-sky-700"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                  d="M4 4h16v16H4V4zm8 2a6 6 0 1 0 0 12 6 6 0 0 0 0-12z" />
              </svg>
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Telecom & Networking
            </h4>
          </div>
          <div
            class="card3d flex flex-col items-center justify-center bg-white rounded-xl shadow-xl hover:shadow-2xl p-6 w-full h-52 min-h-[13rem] text-center relative overflow-visible"
            data-aos="zoom-in-up"
            data-aos-delay="1000">
            <span
              class="flex items-center justify-center w-16 h-16 mb-3 rounded-2xl bg-sky-100 shadow-lg">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-12 h-12 text-sky-700"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-2.83.48-5.43-.97-7.07-3.44l1.46-1.46c1.2 1.73 3.25 2.84 5.61 2.84 2.36 0 4.41-1.11 5.61-2.84l1.46 1.46c-1.64 2.47-4.24 3.92-7.07 3.44zM12 4c1.66 0 3.14.69 4.22 1.78l-1.42 1.42A5.985 5.985 0 0 0 12 6c-1.66 0-3.14.69-4.22 1.78L6.36 6.36C7.46 5.27 9.04 4 12 4z" />
              </svg>
            </span>
            <h4 class="font-semibold text-sky-800 text-sm mt-2 tracking-wide">
              Agriculture & AgriTech
            </h4>
          </div>
        </div>
      </div>
      <!-- Decorative Gradient Circles -->
      <div
        class="absolute top-10 left-10 w-48 h-48 bg-sky-200 opacity-30 rounded-full blur-3xl"></div>
      <div
        class="absolute bottom-10 right-10 w-56 h-56 bg-sky-300 opacity-30 rounded-full blur-3xl"></div>
    </section>

    <!-- Technology Stack Section -->

    <style>
      .sectionss {
        background: #eef4fb;
        border-radius: 18px;
        margin-bottom: 30px;
        padding: 18px;
      }

      .main-title {
        font-size: 2.2rem;
        font-weight: 700;
        letter-spacing: -1px;
        margin-bottom: 14px;
      }

      .tech-card img {
        width: 40px;
        height: 40px;
      }

      .tech-card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 4px 18px rgba(50, 50, 93, 0.03);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 16px 8px 12px 8px;
        min-height: 100px;
        margin-bottom: 12px;
        transition: box-shadow 0.2s;
      }

      .tech-card:hover {
        box-shadow: 0 6px 25px rgba(79, 140, 255, 0.15);
      }

      .section-title {
        font-weight: 600;
        font-size: 1.13rem;
        margin-bottom: 18px;
      }
    </style>
    <div class="container py-4">
      <div class="main-title text-center">Technologies</div>
      <div class="subtitle text-center mb-4">Advanced Technologies Powering Innovative, Sleek, and Responsive UI/UX Designs at Gkon Technologies.</div>
      <!-- Frontend Development Section -->
      <div class="sectionss">
        <div class="section-title">Frontend Development</div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
          <div class="col">
            <div class="tech-card">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
              <span>HTML5</span>
            </div>
          </div>
          <div class="col">
            <div class="tech-card">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3">
              <span>CSS3</span>
            </div>
          </div>
          <div class="col">
            <div class="tech-card">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-plain.svg" alt="JavaScript">
              <span>JavaScript</span>
            </div>
          </div>
          <div class="col">
            <div class="tech-card">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React">
              <span>React</span>
            </div>
          </div>
          <div class="col">
            <div class="tech-card">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-plain.svg" alt="Bootstrap">
              <span>Bootstrap</span>
            </div>
          </div>
          <div class="col">
            <div class="tech-card">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js">
              <span>Vue.js</span>
            </div>
          </div>
          <div class="col">
            <div class="tech-card">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" alt="Angular">
              <span>Angular</span>
            </div>
          </div>
        </div>
      </div>
      <!-- iOS App Development Section -->
      <div class="sectionss">
        <div class="section-title">iOS App Development</div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-7 g-3">
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" alt="Swift"><span>Swift</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" alt="SwiftUI"><span>SwiftUI</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/objectivec/objectivec-plain.svg" alt="Objective C"><span>Objective C</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="{{ url('frontend/img/oddo.webp') }}" alt="Oddo"><span>Oddo</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="{{ url('frontend/img/rx-swift.webp') }}" alt="RX Swift"><span>RX Swift</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ionic/ionic-original.svg" alt="Ionic"><span>Ionic</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="{{ url('frontend/img/cocoapods.webp') }}" alt="Cocoapods"><span>Cocoapods</span></div>
          </div>
        </div>
      </div>
      <!-- Cross-Platform Development Section -->
      <div class="sectionss">
        <div class="section-title">Cross-Platform Development</div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-3">
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Native"><span>React Native</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-plain.svg" alt="Javascript"><span>Javascript</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-plain.svg" alt="TypeScript"><span>TypeScript</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter"><span>Flutter</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/xamarin/xamarin-original.svg" alt="Xamarin"><span>Xamarin</span></div>
          </div>
        </div>
      </div>
      <!-- Android App Development Section -->
      <div class="sectionss">
        <div class="section-title">Android App Development</div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java"><span>Java</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" alt="Kotlin"><span>Kotlin</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="{{ url('frontend/img/fastlane.webp') }}" alt="Fastlane"><span>Fastlane</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="{{ url('frontend/img/gredle.webp') }}" alt="Gradle"><span>Gradle</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="{{ url('frontend/img/dagger.webp') }}" alt="Dagger"><span>Dagger</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://developer.android.com/images/jetpack/jetpack-hero.svg" alt="Jetpack"><span>Jetpack</span></div>
          </div>
        </div>
      </div>
      <!-- Backend Development Section -->
      <div class="sectionss">
        <div class="section-title">Backend Development</div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4 g-3">
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node Js"><span>Node Js</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/rails/rails-plain.svg" alt="Rails"><span>Rails</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python"><span>Python</span></div>
          </div>
          <div class="col">
            <div class="tech-card"><img src="https://www.vectorlogo.zone/logos/firebase/firebase-icon.svg" alt="Firebase"><span>Firebase</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Top Blogs Section -->
    <section class="bg-white py-20 relative">
      <div class="container mx-auto max-w-screen-xl px-6">
        <h2 class="text-center text-3xl font-extrabold mb-12">
          Our Top Blogs
        </h2>

        <!-- Carousel wrapper -->
        <div class="relative">
          <!-- Left button -->
          <button
            id="prevBtn"
            class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-sky-100 z-10">
            &#8592;
          </button>
          <!-- Right button -->
          <button
            id="nextBtn"
            class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-sky-100 z-10">
            &#8594;
          </button>

          <!-- Auto-scroll container -->
          <div class="blog-scroll overflow-hidden">
            <div class="blog-cards flex gap-6">
              <!-- Blog 1 -->
              <article
                class="min-w-[300px] md:min-w-[400px] flex-shrink-0 group border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img
                  src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2245e6fd-d4de-4e88-ac34-560394ed0c81.png"
                  class="w-full object-cover h-48 md:h-56" />
                <div class="p-6">
                  <a
                    href="#"
                    class="text-xs font-semibold text-sky-600 uppercase tracking-wide mb-2 inline-block">#healthcare</a>
                  <h3
                    class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-sky-600 transition">
                    Pharmacy App Development
                  </h3>
                  <p class="text-gray-600 text-sm mb-4">
                    Learn how to develop a pharmacy app that streamlines
                    pharmaceutical delivery.
                  </p>
                  <a
                    href="#"
                    class="font-semibold text-sky-600 group-hover:underline inline-flex items-center">Read More &rarr;</a>
                </div>
              </article>

              <!-- Blog 2 -->
              <article
                class="min-w-[300px] md:min-w-[400px] flex-shrink-0 group border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img
                  src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e77e32d2-d8e8-4625-8aff-603859e9db69.png"
                  class="w-full object-cover h-48 md:h-56" />
                <div class="p-6">
                  <a
                    href="#"
                    class="text-xs font-semibold text-sky-600 uppercase tracking-wide mb-2 inline-block">#mobility</a>
                  <h3
                    class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-sky-600 transition">
                    Travel Tracking Technologies
                  </h3>
                  <p class="text-gray-600 text-sm mb-4">
                    Discover travel tracking technologies features that
                    improve client journeys.
                  </p>
                  <a
                    href="#"
                    class="font-semibold text-sky-600 group-hover:underline inline-flex items-center">Read More &rarr;</a>
                </div>
              </article>

              <!-- Duplicate cards for seamless scroll -->
              <article
                class="min-w-[300px] md:min-w-[400px] flex-shrink-0 group border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img
                  src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2245e6fd-d4de-4e88-ac34-560394ed0c81.png"
                  class="w-full object-cover h-48 md:h-56" />
                <div class="p-6">
                  <a
                    href="#"
                    class="text-xs font-semibold text-sky-600 uppercase tracking-wide mb-2 inline-block">#healthcare</a>
                  <h3
                    class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-sky-600 transition">
                    Pharmacy App Development
                  </h3>
                  <p class="text-gray-600 text-sm mb-4">
                    Learn how to develop a pharmacy app that streamlines
                    pharmaceutical delivery.
                  </p>
                  <a
                    href="#"
                    class="font-semibold text-sky-600 group-hover:underline inline-flex items-center">Read More &rarr;</a>
                </div>
              </article>

              <article
                class="min-w-[300px] md:min-w-[400px] flex-shrink-0 group border border-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img
                  src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e77e32d2-d8e8-4625-8aff-603859e9db69.png"
                  class="w-full object-cover h-48 md:h-56" />
                <div class="p-6">
                  <a
                    href="#"
                    class="text-xs font-semibold text-sky-600 uppercase tracking-wide mb-2 inline-block">#mobility</a>
                  <h3
                    class="text-xl font-semibold mb-2 text-gray-900 group-hover:text-sky-600 transition">
                    Travel Tracking Technologies
                  </h3>
                  <p class="text-gray-600 text-sm mb-4">
                    Discover travel tracking technologies features that
                    improve client journeys.
                  </p>
                  <a
                    href="#"
                    class="font-semibold text-sky-600 group-hover:underline inline-flex items-center">Read More &rarr;</a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      .blog-scroll {
        overflow-x: hidden;
        cursor: grab;
      }

      .blog-scroll:active {
        cursor: grabbing;
      }

      .blog-cards {
        display: flex;
        gap: 1.5rem;
      }
    </style>

    <script>
      // Auto-scroll with pause on hover
      const container = document.querySelector(".blog-scroll");
      const cards = document.querySelector(".blog-cards");
      let scrollPos = 0;
      const speed = 1; // px per frame
      let isPaused = false;

      // Auto scroll function
      function scrollLoop() {
        if (!isPaused) {
          scrollPos += speed;
          if (scrollPos >= cards.scrollWidth / 2) scrollPos = 0;
          container.scrollLeft = scrollPos;
        }
        requestAnimationFrame(scrollLoop);
      }
      scrollLoop();

      // Pause on hover
      container.addEventListener("mouseenter", () => (isPaused = true));
      container.addEventListener("mouseleave", () => (isPaused = false));

      // Left/Right buttons
      document.getElementById("prevBtn").addEventListener("click", () => {
        scrollPos -= 300; // scroll left
      });
      document.getElementById("nextBtn").addEventListener("click", () => {
        scrollPos += 300; // scroll right
      });
    </script>


    <section class="w-full bg-gray-50 py-12">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold text-gray-800">What Our Clients Say</h2>
          <div class="flex gap-2">
            <button id="test-prev" class="p-2 bg-white border rounded-full shadow hover:bg-gray-100">
              ‹
            </button>
            <button id="test-next" class="p-2 bg-white border rounded-full shadow hover:bg-gray-100">
              ›
            </button>
          </div>
        </div>

        <!-- ✅ Scrollable Testimonial Wrapper -->
        <div id="testimonial-slider" class="flex gap-6 overflow-x-auto scroll-smooth no-scrollbar cursor-grab">
          <!-- CARD 1 -->
          <article class="flex-shrink-0 max-w-xs bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
            <div class="flex items-center mb-4">
              <img src="{{ url('frontend/img/istockphoto-1300845620-612x612.jpg') }}" alt="Rama Eye Hospital" class="w-14 h-14 rounded-full object-cover mr-4 shadow-sm" />
              <div>
                <h3 class="text-lg font-semibold text-gray-900">Rama Eye Hospital and Screening Center</h3>
                <p class="text-yellow-400 mt-1">★★★★★</p>
              </div>
            </div>
            <p class="text-gray-700 text-sm leading-relaxed">
              “We engaged Gkon Technologies to develop a custom software solution for Rama Eye Hospital and Screening Center.
              The software works flawlessly and efficiently meets all our operational needs. The team was responsive and professional,
              delivering a user-friendly, reliable product that has streamlined our hospital management processes.”
            </p>
          </article>

          <!-- CARD 2 -->
          <article class="flex-shrink-0 max-w-xs bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
            <div class="flex items-center mb-4">
              <img src="{{ url('frontend/img/istockphoto-1300845620-612x612.jpg') }}" alt="Dr Sunita Hospital" class="w-14 h-14 rounded-full object-cover mr-4 shadow-sm" />
              <div>
                <h3 class="text-lg font-semibold text-gray-900">Dr Sunita Hospital</h3>
                <p class="text-yellow-400 mt-1">★★★★★</p>
              </div>
            </div>
            <p class="text-gray-700 text-sm leading-relaxed">
              “Dr. Sunita Hospital collaborated with Gkon Technologies to implement a customized hospital management software tailored
              to our specific needs. The solution has significantly enhanced the efficiency and accuracy of our hospital workflows.
              The team’s professionalism and support made the integration seamless.”
            </p>
          </article>

          <!-- CARD 3 -->
          <article class="flex-shrink-0 max-w-xs bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
            <div class="flex items-center mb-4">
              <img src="{{ url('frontend/img/istockphoto-1300845620-612x612.jpg') }}" alt="Lara Clinic" class="w-14 h-14 rounded-full object-cover mr-4 shadow-sm" />
              <div>
                <h3 class="text-lg font-semibold text-gray-900">Lara Clinic</h3>
                <p class="text-yellow-400 mt-1">★★★★★</p>
              </div>
            </div>
            <p class="text-gray-700 text-sm leading-relaxed">
              “The experience with Gkon Technologies has been exceptional. Their hospital management software improved our record management
              and patient handling tremendously. Highly recommended!”
            </p>
          </article>
        </div>
      </div>
    </section>

    <!-- ✅ No-scrollbar style -->
    <style>
      .no-scrollbar::-webkit-scrollbar {
        display: none;
      }

      .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>

    <!-- ✅ Auto Scroll + Button Control Script -->
    <script>
      (function() {
        const slider = document.getElementById("testimonial-slider");
        const prevBtn = document.getElementById("test-prev");
        const nextBtn = document.getElementById("test-next");

        let isPaused = false;
        let scrollSpeed = 0.5; // Adjust for auto-scroll speed
        let scrollPosition = 0;

        // Auto-scroll loop
        function autoScroll() {
          if (!isPaused) {
            scrollPosition += scrollSpeed;
            if (scrollPosition >= slider.scrollWidth - slider.clientWidth - 1) {
              scrollPosition = 0; // loop back to start
            }
            slider.scrollLeft = scrollPosition;
          }
          requestAnimationFrame(autoScroll);
        }
        autoScroll();

        // Pause on hover
        slider.addEventListener("mouseenter", () => (isPaused = true));
        slider.addEventListener("mouseleave", () => (isPaused = false));

        // Button scroll
        function scrollByAmount(direction) {
          const amount = slider.clientWidth * 0.8;
          if (direction === "left") {
            scrollPosition = Math.max(scrollPosition - amount, 0);
          } else {
            scrollPosition += amount;
            if (scrollPosition >= slider.scrollWidth - slider.clientWidth - 1) {
              scrollPosition = 0;
            }
          }
          slider.scrollTo({
            left: scrollPosition,
            behavior: "smooth"
          });
        }

        prevBtn.addEventListener("click", () => scrollByAmount("left"));
        nextBtn.addEventListener("click", () => scrollByAmount("right"));

        // Drag scroll (optional, smooth user interaction)
        let isDown = false,
          startX, startScroll;
        slider.addEventListener("mousedown", (e) => {
          isDown = true;
          startX = e.pageX - slider.offsetLeft;
          startScroll = slider.scrollLeft;
          slider.style.cursor = "grabbing";
        });
        slider.addEventListener("mouseleave", () => (isDown = false));
        slider.addEventListener("mouseup", () => (isDown = false));
        slider.addEventListener("mousemove", (e) => {
          if (!isDown) return;
          e.preventDefault();
          const x = e.pageX - slider.offsetLeft;
          const walk = (x - startX) * 2;
          slider.scrollLeft = startScroll - walk;
        });
      })();
    </script>

    <!-- Ready to Expand Section -->
    <section
      class="bg-gradient-to-r from-sky-600 to-sky-500 text-white py-20">
      <div
        class="container mx-auto max-w-screen-xl px-6 flex flex-col md:flex-row md:space-x-12">
        <!-- Left Info -->
        <div
          class="md:w-1/3 mb-10 md:mb-0 flex flex-col justify-center animate-fadeInLeft">
          <h3 class="text-2xl md:text-3xl font-extrabold mb-4">
            For Project Inquiries
          </h3>
          <p class="mb-6 max-w-sm text-sky-100">
            We appreciate your interest in Gkon Technologies. Fill out the
            form and we will reach you in less than 24 hours.
          </p>
        </div>

        <!-- Contact Form -->
        <form
          class="md:w-2/3 bg-white p-10 rounded-xl shadow-2xl max-w-4xl animate-fadeInRight"
          id="contact-form"
          action="{{ route('inquiry.store') }}"
          method="POST"
          enctype="multipart/form-data">

          <!-- Name -->
          <div class="mb-6">
            <label class="block mb-2 text-sm font-semibold text-gray-700">
              Full Name <sup class="text-red-600">*</sup>
            </label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Your full name"
              required
              class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 transition duration-300 shadow-sm hover:shadow-md" />
          </div>

          <!-- Phone + Country Code -->
          <div class="mb-6 grid grid-cols-3 gap-4 items-center">
            <div class="col-span-1">
              <select
                name="countryCode"
                class="w-full rounded-lg px-3 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md">
                <option value="+91">🇮🇳 +91</option>
                <option value="+1">🇺🇸 +1</option>
                <option value="+44">🇬🇧 +44</option>
                <option value="+971">🇦🇪 +971</option>
                <option value="+1">🇨🇦 +1</option>
              </select>
            </div>
            <div class="col-span-2">
              <input
                type="tel"
                name="phone"
                id="phone"
                placeholder="Mobile Number"
                required
                pattern="[0-9]{7,15}"
                class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md" />
            </div>
          </div>

          <!-- Email + Budget -->
          <div class="mb-6 grid grid-cols-2 gap-4">
            <div>
              <label class="block mb-2 text-sm font-semibold text-gray-700">
                Email Address <sup class="text-red-600">*</sup>
              </label>
              <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="you@example.com"
                class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md" />
            </div>

            <div>
              <label class="block mb-2 text-sm font-semibold text-gray-700">
                Budget (In USD)
              </label>
              <select
                id="budget"
                name="budget"
                class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md">
                <option value="">Select Budget</option>
                <option>$500 - $1000</option>
                <option>$1000 - $5000</option>
                <option>$5000 - $10,000</option>
                <option>$10,000+</option>
              </select>
            </div>
          </div>

          <!-- File Upload -->
          <div class="mb-6 max-w-md mx-auto">
            <label class="block mb-3 text-sm font-semibold text-gray-700">
              Attach Any File!
            </label>

            <label
              for="file-upload"
              class="cursor-pointer border-2 border-dashed border-gray-300 rounded-lg p-8 flex flex-col items-center justify-center text-center hover:bg-gray-50 transition duration-300">
              <input type="file" name="file" id="file-upload" class="sr-only" />
              <span class="mt-3 text-gray-600 text-sm">Browse or Drag and Drop File Here</span>
            </label>
          </div>

          <!-- Message -->
          <div class="mb-6">
            <label class="block mb-2 text-sm font-semibold text-gray-700">Message</label>
            <textarea
              id="message"
              name="message"
              rows="4"
              placeholder="Write your project details here..."
              required
              class="w-full rounded-lg px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm hover:shadow-md"></textarea>
          </div>

          <!-- Submit -->
          <button
            type="submit"
            class="bg-sky-600 hover:bg-sky-700 transition duration-300 w-36 h-16 rounded-full font-bold text-white text-lg shadow-lg hover:shadow-xl transform hover:scale-105 float-right">
            SEND INQUIRY
          </button>
          @csrf
        </form>


      </div>
    </section>

    <!-- Animations -->
    <style>
      @keyframes fadeInLeft {
        0% {
          opacity: 0;
          transform: translateX(-40px);
        }

        100% {
          opacity: 1;
          transform: translateX(0);
        }
      }

      @keyframes fadeInRight {
        0% {
          opacity: 0;
          transform: translateX(40px);
        }

        100% {
          opacity: 1;
          transform: translateX(0);
        }
      }

      .animate-fadeInLeft {
        animation: fadeInLeft 1s ease forwards;
      }

      .animate-fadeInRight {
        animation: fadeInRight 1s ease forwards;
      }
    </style>
  </main>


  <script>
    document.addEventListener("contextmenu", function(e) {
      e.preventDefault();
    });
  </script>
  <div class="contact-buttons">
    <!-- Call -->
    <a href="tel:+917220820903" class="btn-icon call" title="Call Us">
      <i class="fa-solid fa-phone"></i>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/917220820903" class="btn-icon whatsapp" title="WhatsApp Us" target="_blank">
      <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Email -->
    <a href="mailto:sales@gkontechnologies.com" class="btn-icon email" title="Email Us">
      <i class="fa-solid fa-envelope"></i>
    </a>
  </div>
  <div class="modal fade" id="demoModal" tabindex="-1" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">

        <div class="modal-header border-0 pb-0 justify-content-between p-4">
          <h4 class="fw-bold mb-0" id="demoModalLabel">Schedule a Live Demo</h4>
          <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body p-4">
          <form action="{{ route('Schedule.store') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label class="form-label small fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">Full Name</label>
              <input type="text" name="name" class="form-control p-2 border-light-subtle shadow-sm" placeholder="Enter your name" required style="border-radius: 10px; background-color: #f8fafc;">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label small fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">Phone</label>
                <input type="tel" name="phone" class="form-control p-2 border-light-subtle shadow-sm" placeholder="+91..." required style="border-radius: 10px; background-color: #f8fafc;">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label small fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">Email</label>
                <input type="email" name="email" class="form-control p-2 border-light-subtle shadow-sm" placeholder="email@example.com" required style="border-radius: 10px; background-color: #f8fafc;">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label small fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">Preferred Date</label>
                <input type="date" name="demo_date" class="form-control p-2 border-light-subtle shadow-sm" required style="border-radius: 10px; background-color: #f8fafc;">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label small fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">Preferred Time</label>
                <input type="time" name="demo_time" class="form-control p-2 border-light-subtle shadow-sm" required style="border-radius: 10px; background-color: #f8fafc;">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label small fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">Select Project</label>
              <select name="project" class="form-select p-2 border-light-subtle shadow-sm" required style="border-radius: 10px; background-color: #f8fafc;">
                <option value="" selected disabled>Choose your project type...</option>
                <option value="CRM System">CRM System</option>
                <option value="E-Commerce">E-Commerce Website</option>
                <option value="Mobile App">Mobile App Development</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label small fw-bold text-muted text-uppercase" style="letter-spacing: 0.5px;">Brief Description</label>
              <textarea name="description" class="form-control p-2 border-light-subtle shadow-sm" rows="3" placeholder="How can we help you?" style="border-radius: 10px; background-color: #f8fafc;"></textarea>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm" style="border-radius: 12px; background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); border: none;">
                Book My Slot <i class="bi bi-calendar-check-fill ms-2"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <style>
    /* Modal Backdrop Blur */
    .modal-backdrop {
      backdrop-filter: blur(5px);
      background-color: rgba(0, 0, 0, 0.4);
    }

    /* Input Focus Styling */
    .form-control:focus,
    .form-select:focus {
      border-color: #6366f1;
      box-shadow: 0 0 0 0.25rem rgba(99, 102, 241, 0.15);
    }
  </style>

  <script>
    // Responsive Menu Toggle
    const menuToggle = document.getElementById("menu-toggle");
    const mobileNav = document.getElementById("mobile-nav");

    menuToggle.addEventListener("click", function() {
      if (mobileNav.style.display === "block") {
        mobileNav.style.display = "none";
      } else {
        mobileNav.style.display = "block";
      }
    });

    // Close mobile menu when clicking outside
    window.addEventListener("click", function(e) {
      if (!mobileNav.contains(e.target) && !menuToggle.contains(e.target)) {
        mobileNav.style.display = "none";
      }
    });
  </script>
  <!-- JS VALIDATION -->
  <script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
      let name = document.getElementById('name').value.trim();
      let phone = document.getElementById('phone').value.trim();
      let email = document.getElementById('email').value.trim();
      let message = document.getElementById('message').value.trim();

      if (name === "" || phone === "" || email === "" || message === "") {
        alert("Please fill all required fields.");
        e.preventDefault();
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

@endsection
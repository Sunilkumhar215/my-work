   <header>
      <!-- 🔹 Top Contact Bar -->  
        <div class="top-bar py-2 bg-dark text-white d-none d-md-block">
          <div
            class="container d-flex justify-content-between align-items-center flex-wrap"
          >
            <p class="mb-0 small text-light">Your Vision, Our Innovation</p>
            <div class="contacts d-flex align-items-center flex-wrap gap-3">
              <a
                href="tel:+917220820903"
                class="text-light text-decoration-none small"
              >
                <i class="bi bi-telephone"></i> +91-7220820903
              </a>

            <a href="mailto:sales@gkontechnologies.com" class="email" title="Email Us">
                <i class="fa-solid fa-envelope"></i> sales@gkontechnologies.com
              </a>
              <span class="d-flex align-items-center gap-2 small">
                Follow Us:
                <a href="https://www.linkedin.com/in/gkon-technologies-pvt-ltd-015445390/" 
                   class="text-light" target="_blank">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://twitter.com/gkontech" 
                   class="text-light" target="_blank">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://www.instagram.com/gkontechnologies/" 
                   class="text-light" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
              </span>
            </div>
          </div>
        </div>

      <!-- 🔹 Main Header -->
      <div class="main-header bg-white shadow-sm sticky-top">
        <div
          class="container d-flex justify-content-between align-items-center py-3"
        >
              <!--<div class="logo fw-bold fs-4 text-primary"><a href="https://gkontechnologies.com">Gkon Technologies</a></div>-->
              <div class="logo fw-bold fs-4 text-primary">
                  <!--<a href="https://gkontechnologies.com"><img src="logo3.png" alt="logo"> </a>-->
                  <a href="/">
                    <img src="{{ url('frontend/img/logo4.png') }}" alt="Gkon Technologies Logo" style="height:60px; width:auto;">
                  </a>
              </div>
          <!-- 🔹 Desktop Menu -->
          <nav class="nav d-none d-lg-flex align-items-center">
            <ul
              class="nav-list d-flex gap-4 mb-0 list-unstyled align-items-center"
            >
              <!-- Who We Are -->
              <!--<li class="nav-item dropdown position-static">-->
              <!--  <a href="#" class="nav-link dropdown-toggle with-arrow">-->
              <!--    Who We Are <i class="bi bi-chevron-down ms-1"></i>-->
              <!--  </a>-->
              <!--  <div class="dropdown-menu mega-menu p-4 shadow rounded">-->
              <!--    <div class="row">-->
              <!--      <div class="col-md-6 col-lg-4 mb-3">-->
              <!--        <h6>Company</h6>-->
              <!--        <a href="https://gkontechnologies.com/about.html" class="dropdown-item">About Us</a>-->
              <!--        <a href="#" class="dropdown-item">Our Vision</a>-->
              <!--        <a href="#" class="dropdown-item">Team</a>-->
              <!--      </div>-->
              <!--      <div class="col-md-6 col-lg-4 mb-3">-->
              <!--        <h6>Why Choose Us</h6>-->
              <!--        <a href="#" class="dropdown-item">Client Reviews</a>-->
              <!--        <a href="#" class="dropdown-item">Our Client</a>-->
              <!--        <a href="#" class="dropdown-item">Our Partners</a>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</li>-->
            <li><a href="/" class="nav-link">Home</a></li>
            <li><a href="/about" class="nav-link">About Us</a></li>
              <!-- Services -->
              <li class="nav-item dropdown position-static">
                <a href="#" class="nav-link dropdown-toggle with-arrow">
                  Services <i class="bi bi-chevron-down ms-1"></i>
                </a>
                <div class="dropdown-menu mega-menu p-4 shadow rounded">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <h6>Our Services</h6>
                      <a href="/ui-ux-design-services" class="dropdown-item">UI/UX Designing</a>
                      <a href="/mobile-application-development" class="dropdown-item"
                        >Mobile App Development</a
                      >
                      <a href="/web-development" class="dropdown-item">Website Development</a>
                      <a href="/ecommerce-web-development" class="dropdown-item"
                        >Ecommerce Development</a
                      >
                      <a href="/saas-development-company" class="dropdown-item">SaaS Development</a>
                      <a href="/crm-development-company" class="dropdown-item">CRM Development</a>
                      <a href="/custom-software-development-services" class="dropdown-item">Software Development</a>
                    </div>
                    <div class="col-md-4 mb-3">
                      <h6>Digital Services</h6>
                      <a href="/seo-services-company" class="dropdown-item">SEO</a>
                      <a href="/ppc-services-company" class="dropdown-item">PPC</a>
                      <a href="/social-media-marketing-services-company" class="dropdown-item"
                        >Social Media Marketing</a
                      >
                    </div>
                    <!--<div class="col-md-4 mb-3">-->
                    <!--  <h6>Hire Developers</h6>-->
                    <!--  <a href="#" class="dropdown-item">iOS Developer</a>-->
                    <!--  <a href="#" class="dropdown-item">Android Developer</a>-->
                    <!--  <a href="#" class="dropdown-item">PHP Developer</a>-->
                    <!--</div>-->
                  </div>
                </div>
              </li>

              <!--<li><a href="#" class="nav-link">Industries</a></li>-->
              <li><a href="/career" class="nav-link">Careers</a></li>
              <li><a href="/blogs" class="nav-link">Blogs</a></li>
            </ul>
          </nav>

          <!-- 🔹 Desktop Button -->
          <div class="d-none d-lg-flex">
            <a href="/contact" class="btn btn-primary px-3 py-1">Contact Us &#8594;</a>
          </div>

          <!-- 🔹 Mobile Hamburger -->
          <button
            class="hamburger d-lg-none border-0 bg-transparent fs-3"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileNav"
            aria-controls="mobileNav"
            aria-label="Toggle navigation"
          >
            &#9776;
          </button>
        </div>
      </div>

      <!-- 🔹 Mobile Offcanvas Menu -->
      <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="mobileNav"
        aria-labelledby="mobileNavLabel"
      >
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="mobileNavLabel">Menu</h5>
          <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <ul class="list-unstyled">
            <!--<li>-->
            <!--  <a-->
            <!--    class="d-flex justify-content-between align-items-center"-->
            <!--    data-bs-toggle="collapse"-->
            <!--    href="#whoWeAreMobile"-->
            <!--  >-->
            <!--    Who We Are <i class="bi bi-chevron-down"></i>-->
            <!--  </a>-->
            <!--  <div class="collapse" id="whoWeAreMobile">-->
            <!--    <ul class="list-unstyled ps-3 mt-2">-->
            <!--      <li><a href="https://gkontechnologies.com/about.html">About Us</a></li>-->
            <!--      <li><a href="#">Our Vision</a></li>-->
            <!--      <li><a href="#">Team</a></li>-->
            <!--      <li><a href="#">Client Reviews</a></li>-->
            <!--      <li><a href="#">Our Client</a></li>-->
            <!--      <li><a href="#">Our Partners</a></li>-->
            <!--    </ul>-->
            <!--  </div>-->
            <!--</li>-->
            <li><a href="https://gkontechnologies.com">Home</a></li>
            <li><a href="https://gkontechnologies.com/about.html">About Us</a></li>
            <li>
              <a
                class="d-flex justify-content-between align-items-center"
                data-bs-toggle="collapse"
                href="#servicesMobile"
              >
                Services <i class="bi bi-chevron-down"></i>
              </a>
              <div class="collapse" id="servicesMobile">
                <ul class="list-unstyled ps-3 mt-2">
                  <li><strong>Our Services</strong></li>
                  <li><a href="#">UI/UX Designing</a></li>
                  <li><a href="#">Mobile App Development</a></li>
                  <li><a href="#">Website Development</a></li>
                  <li><a href="#">Ecommerce Development</a></li>
                  <li><a href="#">SaaS Development</a></li>
                  <li><a href="#">CRM Development</a></li>
                  <li><a href="#">Software Development</a></li>
                  <li class="mt-2"><strong>Digital Services</strong></li>
                  <li><a href="#">SEO</a></li>
                  <li><a href="#">PPC</a></li>
                  <li><a href="#">Social Media Marketing</a></li>
                  <!--<li class="mt-2"><strong>Hire Developers</strong></li>-->
                  <!--<li><a href="#">iOS Developer</a></li>-->
                  <!--<li><a href="#">Android Developer</a></li>-->
                  <!--<li><a href="#">PHP Developer</a></li>-->
                </ul>
              </div>
            </li>

            <!--<li><a href="#">Industries</a></li>-->
            <li><a href="/career.html">Careers</a></li>
            <li><a href="#">Blogs</a></li>
            <li class="mt-3">
              <a href="#" class="btn btn-primary w-100">Contact Us &#8594;</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
     <style>
      header {
        width: 100%;
        position: sticky;
        top: 0;
        z-index: 999;
      }
      .collapse {
        display: none;
      }
      .collapse.show {
        display: block;
      }
      .collapse {
        visibility: unset;
      }
      /* ---------- NAV LINKS ---------- */
      .nav-link {
        position: relative;
        color: #333;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 0;
        height: 2px;
        background: #0d6efd;
        transition: width 0.3s ease;
      }

      .nav-link:hover,
      .nav-link.active {
        color: #0d6efd;
      }

      .nav-link:hover::after,
      .nav-link.active::after {
        width: 100%;
      }

      .with-arrow i {
        transition: transform 0.3s ease;
      }

      .dropdown:hover .with-arrow i {
        transform: rotate(180deg);
      }

      /* ---------- MEGA MENU ---------- */
      .mega-menu {
        left: 0;
        right: 0;
        margin: auto;
        width: 80vw;
        max-width: 950px;
        min-width: 320px;
        display: none;
        position: absolute;
        top: 75%;
        background: #fff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        z-index: 10;
        padding: 30px 20px;
      }

      .nav-item.dropdown:hover .mega-menu {
        display: block;
      }

      .mega-menu h6 {
        color: #0d6efd;
        font-weight: 600;
        margin-bottom: 8px;
      }

      .mega-menu a {
        display: block;
        color: #333;
        text-decoration: none;
        padding: 4px 0;
        transition: color 0.3s;
      }

      .mega-menu a:hover {
        color: #0d6efd;
      }

      /* ---------- RESPONSIVE ---------- */
      @media (max-width: 1200px) {
        .mega-menu {
          width: 95vw;
          padding: 20px;
        }
      }

      @media (max-width: 991px) {
        .nav,
        .d-lg-flex {
          display: none !important;
        }

        .hamburger {
          display: block !important;
        }
      }

      .offcanvas-body a {
        display: block;
        padding: 8px 0;
        color: #333;
        text-decoration: none;
      }

      .offcanvas-body a:hover {
        color: #0d6efd;
      }
    </style>
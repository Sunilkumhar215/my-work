<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Development Services - Gkon Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <style>
        a {
            color: inherit;
            text-decoration: inherit;
        }
        /* Custom styles to match the provided UI image */
        :root {
            --dark-purple: #6f42c1;
            --light-purple: #8a2be2;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --dark-text: #212529;
            --light-bg-gray: #f8f9fa;
            --card-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            --card-hover-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: Arial, sans-serif; /* Adjusted to match generic font feel of the image */
        }

        .btn-custom-purple {
            background-color: white;
            color: var(--dark-purple);
            border-color: white;
            font-weight: 700;
            padding: 12px 30px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-custom-purple:hover {
            background-color: rgba(255, 255, 255, 0.9);
            color: var(--dark-purple);
            border-color: rgba(255, 255, 255, 0.9);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(45deg, var(--dark-purple), var(--light-purple));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
            border-bottom-left-radius: 80px; /* Rounded corners as in image */
            border-bottom-right-radius: 80px;
            margin-bottom: 50px; /* Space before next section */
            box-shadow: 0 10px 30px rgba(0,0,0,0.3); /* Shadow for hero */
        }
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://image.pollinations.ai/prompt/purple%20city%20skyline%20abstract%20digital%20ecommerce%20background?width=1920&height=1080&seed=123') no-repeat center center/cover;
            opacity: 0.15;
            z-index: 0;
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero-section h1 {
            font-size: 3.2rem; /* Adjusted font size */
            font-weight: 800; /* Extra bold */
            letter-spacing: -0.5px;
        }
        .hero-section p.lead {
            font-size: 1.25rem;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 3rem auto;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Services Section */
        .services-section {
            padding: 50px 0;
            background-color: white;
        }
        .services-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 60px;
        }
        .service-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border: none;
            border-radius: 15px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            padding: 25px; /* Adjusted padding */
            text-align: center;
            height: 100%; /* Ensure cards are same height */
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--card-hover-shadow);
        }
        .service-card .card-icon {
            font-size: 3rem;
            color: var(--dark-purple); /* Icon color matches hero */
            margin-bottom: 15px;
            display: block; /* Ensure icon is block level */
        }
        .service-card .card-title {
            color: var(--dark-text);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .service-card .card-text {
            color: #6c757d;
            font-size: 0.95rem;
        }

        /* Mobile Shopping Section */
        .mobile-shopping-section {
            padding: 80px 0;
            background-color: #f0f2f5; /* Light grey background as in image */
            border-radius: 20px;
            margin: 50px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .mobile-shopping-section .img-fluid {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        .mobile-shopping-section h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark-purple);
            margin-bottom: 30px;
        }
        .mobile-shopping-section .lead {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 40px;
        }
        .feature-item {
            display: flex;
            align-items: flex-start; /* Align icon and text at top */
            margin-bottom: 20px;
        }
        .feature-item i {
            font-size: 1.8rem; /* Smaller icon size for list */
            color: var(--orange); /* Orange color as in image */
            margin-right: 15px;
            flex-shrink: 0;
            padding-top: 5px; /* Adjust icon vertical alignment */
        }
        .feature-item h4 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 5px;
        }
        .feature-item p {
            font-size: 0.95rem;
            color: #6c757d;
            line-height: 1.5;
        }
        .mobile-image-col {
            order: 2; /* Image on right on desktop */
        }
        @media (max-width: 991.98px) {
            .mobile-image-col {
                order: 1; /* Image on top on mobile */
                margin-bottom: 30px;
            }
        }

        /* Development Journey Section */
        .process-section {
            padding: 80px 0;
            background-color: white; /* White background as in image */
        }
        .process-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 60px;
        }
        .process-step-container {
            display: flex;
            flex-wrap: wrap; /* Allows wrapping on smaller screens */
            justify-content: center; /* Center align on smaller screens */
            gap: 20px; /* Gap between steps */
        }
        .process-step-wrapper {
            flex: 1;
            min-width: 200px; /* Minimum width for each step */
            max-width: 250px; /* Max width to keep it tidy */
            position: relative;
        }
        .process-step {
            text-align: center;
            padding: 30px 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08); /* Slightly less shadow */
            height: 100%; /* Ensure same height */
            position: relative;
            z-index: 1; /* Keep content above line */
        }
        .process-step .step-number {
            font-size: 2.2rem; /* Adjusted size */
            font-weight: 800;
            color: rgba(var(--dark-purple), 0.15); /* Lighter opacity */
            position: absolute;
            top: 15px; /* Positioned top */
            left: 20px; /* Positioned left */
            z-index: 0;
        }
        .process-step .step-content {
            position: relative;
            z-index: 1;
            padding-top: 15px; /* Space for number */
        }
        .process-step i {
            font-size: 2.2rem; /* Icon size */
            color: var(--dark-purple);
            margin-bottom: 10px;
            display: block;
        }
        .process-step h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 8px;
        }
        .process-step p {
            font-size: 0.9rem;
            color: #6c757d;
            line-height: 1.4;
        }

        /* Process arrow styling for desktop */
        @media (min-width: 768px) {
            .process-step-container {
                justify-content: space-between; /* Spread evenly */
            }
            .process-step-wrapper {
                flex: 0 0 calc(25% - 15px); /* Ensure 4 in a row with gap */
            }
            .process-step-wrapper:not(:last-child)::after {
                content: '';
                position: absolute;
                top: 50%;
                left: 100%;
                width: 40px; /* Arrow length */
                height: 3px;
                background-color: var(--orange); /* Orange line */
                z-index: 0;
                transform: translateY(-50%);
                pointer-events: none; /* Do not interfere with clicks */
            }
            .process-step-wrapper:nth-child(2)::after { /* Adjust arrow position between card 2 and 3 */
                width: 60px; /* Longer arrow */
            }
            .process-step-wrapper:nth-child(3)::after { /* Adjust arrow position between card 3 and 4 */
                width: 40px; /* Shorter arrow */
            }
        }
        @media (min-width: 992px) {
            .process-step-wrapper:not(:last-child)::after {
                width: 70px; /* Longer arrow for larger screens */
            }
            .process-step-wrapper:nth-child(2)::after {
                width: 80px;
            }
        }


        /* Why Choose Us Section (Right side in image) */
        .why-choose-us-section {
            padding: 80px 0;
            background-color: var(--light-bg-gray); /* Light grey background */
            margin-top: 50px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .why-choose-us-section h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark-purple);
            margin-bottom: 30px;
        }
        .why-choose-us-section .img-fluid {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        .why-choose-us-section .list-unstyled {
            list-style-type: none;
            padding-left: 0;
        }
        .why-choose-us-section .feature-item i {
            color: var(--orange); /* Orange color as in image */
        }
        .why-choose-us-section .feature-item h4 {
            color: var(--dark-text);
        }

        /* Call to Action (Contact) Section */
        .call-to-action-section {
            background: linear-gradient(90deg, var(--orange), var(--yellow));
            color: white;
            padding: 80px 0;
            text-align: center;
            border-radius: 80px; /* Rounded corners as in image */
            margin: 50px auto; /* Centered with margin */
            max-width: 1200px; /* Max width to match image appearance */
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        }
        .call-to-action-section h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 25px;
        }
        .call-to-action-section p.lead {
            font-size: 1.15rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            color: rgba(255, 255, 255, 0.9);
        }
        .contact-form .form-control {
            border-radius: 10px; /* Slightly more rounded */
            border: 1px solid rgba(255, 255, 255, 0.4);
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 12px 20px; /* Larger padding */
            font-size: 1rem;
        }
        .contact-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .contact-form .form-control:focus {
            background-color: rgba(255, 255, 255, 0.3);
            border-color: white;
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }
        .btn-submit-contact {
            background-color: white;
            color: var(--orange);
            font-weight: 700;
            padding: 15px 30px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-submit-contact:hover {
            background-color: rgba(255, 255, 255, 0.9);
            color: var(--orange);
        }
    </style>
</head>
<body>
   @extends('frontend.layouts.main')

  @section('main-container')
  
    <section class="hero-section text-center">
        <div class="container hero-content">
            <h1 class="mb-4">Elevate Your Business with Cutting-Edge E-commerce Solutions</h1>
            <p class="lead mb-5">At Gkon Technologies, we craft powerful, secure, and user-friendly online stores that drive sales and accelerate your growth.</p>
            <a href="#contact" class="btn btn-custom-purple px-5 py-3 shadow">Get a Free E-commerce Quote <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <h2 class="text-center mb-5">Our Comprehensive E-commerce Services</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                
                <div class="col">
                    <div class="card service-card">
                        <i class="bi bi-cart-check card-icon"></i>
                        <h3 class="card-title">Custom E-commerce Store Development</h3>
                        <p class="card-text">Bespoke online stores built for your unique brand identity and business model. From concept to launch, we deliver tailor-made solutions on platforms like Shopify, WooCommerce, Magento, and custom frameworks.</p>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card service-card">
                        <i class="bi bi-phone card-icon"></i>
                        <h3 class="card-title">Mobile Commerce (M-commerce) Optimization</h3>
                        <p class="card-text">Ensure your store looks stunning and performs flawlessly on every device. We prioritize responsive design, mobile-first indexing, and a seamless mobile shopping experience for maximum conversions.</p>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card service-card">
                        <i class="bi bi-arrow-repeat card-icon"></i>
                        <h3 class="card-title">Integrations & Platform Migration</h3>
                        <p class="card-text">Connect with leading payment gateways, CRM, ERP, and shipping solutions. Seamlessly migrate your existing store data to a more powerful and scalable platform without downtime.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mobile-shopping-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mobile-image-col text-center">
                    <img src="https://image.pollinations.ai/prompt/mobile%20ecommerce%20app%20on%20smartphone?width=800&height=600&seed=456" class="img-fluid" alt="Mobile e-commerce app on smartphone">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Unlocking the Power of Mobile Shopping</h2>
                    <p class="lead mb-4">With the majority of online shopping now happening on mobile devices, having a perfectly optimized mobile e-commerce presence is crucial for success.</p>
                    <div class="feature-item">
                        <i class="bi bi-speedometer2"></i>
                        <div>
                            <h4>Blazing Fast Performance</h4>
                            <p class="mb-0">Optimized loading times for quick and frustration-free browsing.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-ui-checks"></i>
                        <div>
                            <h4>Intuitive User Interface</h4>
                            <p class="mb-0">Easy navigation and checkout process designed for small screens.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-lock"></i>
                        <div>
                            <h4>Secure Mobile Transactions</h4>
                            <p class="mb-0">Ensuring complete safety for all payment methods on mobile.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section">
        <div class="container">
            <h2 class="text-center mb-5">Our Streamlined Development Journey</h2>
            <div class="row process-step-container">
                
                <div class="process-step-wrapper">
                    <div class="process-step">
                        <span class="step-number">01</span>
                        <div class="step-content">
                            <i class="bi bi-lightbulb"></i>
                            <h4>Discovery & Strategy</h4>
                            <p class="mb-0">We begin by understanding your business, goals, and target audience to craft a winning strategy.</p>
                        </div>
                    </div>
                </div>
                
                <div class="process-step-wrapper">
                    <div class="process-step">
                        <span class="step-number">02</span>
                        <div class="step-content">
                            <i class="bi bi-palette"></i>
                            <h4>Design & User Experience</h4>
                            <p class="mb-0">Creating visually appealing and highly intuitive designs for an optimal shopping experience.</p>
                        </div>
                    </div>
                </div>
                
                <div class="process-step-wrapper">
                    <div class="process-step">
                        <span class="step-number">03</span>
                        <div class="step-content">
                            <i class="bi bi-code-slash"></i>
                            <h4>Development & Quality Assurance</h4>
                            <p class="mb-0">Bringing your store to life with clean code and rigorous testing to ensure perfection.</p>
                        </div>
                    </div>
                </div>
                
                <div class="process-step-wrapper">
                    <div class="process-step">
                        <span class="step-number">04</span>
                        <div class="step-content">
                            <i class="bi bi-rocket-takeoff"></i>
                            <h4>Launch & Ongoing Support</h4>
                            <p class="mb-0">Deploying your store with precision and providing continuous support and maintenance.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="why-choose-us-section">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                    <img src="https://image.pollinations.ai/prompt/online%20store%20dashboard%20modern?width=800&height=600&seed=789" class="img-fluid" alt="E-commerce dashboard">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Why Partner with Gkon Technologies?</h2>
                    <ul class="list-unstyled">
                        <li class="feature-item">
                            <i class="bi bi-stars"></i>
                            <div>
                                <h4>Expertise & Innovation</h4>
                                <p class="mb-0">Leveraging the latest technologies and best practices to build future-proof solutions.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <i class="bi bi-wallet-fill"></i>
                            <div>
                                <h4>Cost-Effective Solutions</h4>
                                <p class="mb-0">High-quality services delivered within your budget, ensuring great ROI.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <i class="bi bi-headset"></i>
                            <div>
                                <h4>Dedicated Support</h4>
                                <p class="mb-0">From concept to post-launch, our team is here to support your success.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="call-to-action-section">
        <div class="container">
            <h2 class="mb-3">Ready to Build Your Online Empire?</h2>
            <p class="lead mb-5">Let's discuss your vision and turn it into a successful e-commerce reality. Fill out the form below for a free consultation.</p>
            <form class="mx-auto contact-form" style="max-width: 700px;">
                <div class="row g-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name" aria-label="Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Your Email" aria-label="Email" required>
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Company Name (Optional)" aria-label="Company">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Tell us about your project..." rows="5" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-submit-contact w-100 shadow-sm">Get a Free Consultation Today <i class="bi bi-send-fill"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
 
<style>
    .hover-white:hover {
        color: white !important;
    }
    .border-primary {
        /* Matching the sky-700 color with a suitable Bootstrap equivalent or custom color */
        border-color: #0d6efd !important; /* Bootstrap Primary Blue */
    }
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
@endsection
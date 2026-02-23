<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gkon Technologies - Custom SaaS Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        a {
            color: inherit;
            text-decoration: inherit;
        }
        /* --- General Variables and Reset (Matching E-commerce Page) --- */
        :root {
            --dark-purple: #6f42c1;
            --light-purple: #8a2be2;
            --dark-orange: #fd7e14;
            --light-orange: #ffc107;
            --dark-text: #2c2c2c;
            --light-text: #5f5f5f;
            --card-bg-light: #ffffff;
            --section-bg-light: #f5f5f5;
            --card-radius: 20px;
            --section-radius: 80px;
        }

        body {
            background-color: var(--section-bg-light);
            font-family: Arial, sans-serif;
            color: var(--dark-text);
        }

        h2 {
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 40px;
        }
        
        /* --- 1. Hero Section (Purple Gradient) --- */
        .hero-section {
            background: linear-gradient(45deg, var(--dark-purple), var(--light-purple));
            color: white;
            padding: 80px 15px 120px 15px;
            position: relative;
            overflow: hidden;
            border-bottom-left-radius: var(--section-radius);
            border-bottom-right-radius: var(--section-radius);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            margin-bottom: -50px;
        }
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* SaaS focused abstract background image */
            background: url('https://image.pollinations.ai/prompt/abstract%20digital%20cloud%20computing%20background%20purple%20blue?width=1920&height=1080&seed=456') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 1000px;
            margin: auto;
        }
        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 800;
        }
        @media (min-width: 768px) {
            .hero-section h1 {
                font-size: 3.5rem;
            }
        }
        .hero-btn {
            background-color: white;
            color: var(--dark-purple);
            border: none;
            font-weight: 700;
            padding: 12px 30px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 100%;
        }
        @media (min-width: 576px) {
             .hero-btn {
                width: auto;
            }
        }

        /* --- 2. Key Benefits Section --- */
        .benefits-section {
            padding: 80px 15px 60px 15px;
            background-color: white;
            border-radius: var(--card-radius);
            /*margin: 0 15px;*/
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
        }
        @media (min-width: 992px) {
            .benefits-section {
                /*margin: 0 50px;*/
                padding: 80px 0 60px 0;
            }
        }

        .benefit-card {
            background-color: var(--section-bg-light);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .benefit-icon {
            font-size: 2.5rem;
            color: var(--dark-purple);
            margin-bottom: 15px;
        }

        /* --- 3. Process Section (Using Orange/Primary color for steps) --- */
        .process-section {
            padding: 80px 15px;
            background-color: var(--section-bg-light);
        }
        .process-step {
            background-color: var(--card-bg-light);
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            position: relative;
        }
        .step-number-ring {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 48px;
            border-radius: 50%;
            background-color: var(--dark-orange);
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .process-step h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-purple);
        }

        /* --- 4. Feature Highlights Section --- */
        .feature-highlight-section {
            padding: 60px 15px;
            background-color: white;
        }
        .highlight-box {
            background-color: #f9f4ff; /* Lighter purple background */
            border-radius: var(--card-radius);
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }
        .highlight-box h2 {
            color: var(--dark-purple);
            font-size: 2rem;
        }
        .highlight-list {
            list-style: none;
            padding-left: 0;
            margin-top: 20px;
        }
        .highlight-list li {
            font-size: 1rem;
            color: var(--dark-text);
            margin-bottom: 15px;
        }
        .highlight-list li i {
            color: var(--dark-orange);
            font-size: 1.2rem;
            margin-right: 10px;
        }
        .feature-image {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        /* --- 5. Call to Action Section (Matching E-commerce Page) --- */
        .cta-section {
            background: linear-gradient(90deg, #e47c7c, #f5a770);
            color: white;
            padding: 60px 15px;
            text-align: center;
            border-radius: 40px;
            margin: 50px 15px;
            max-width: 100%;
        }
        @media (min-width: 768px) {
            .cta-section {
                border-radius: var(--section-radius);
                margin: 50px auto;
                max-width: 90%;
            }
        }
        .cta-section h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
        }
        .cta-form .form-control {
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 15px;
        }
        .cta-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .cta-submit-btn {
            background-color: white;
            color: var(--dark-orange);
            font-weight: 700;
            padding: 12px 30px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
   @extends('frontend.layouts.main')

  @section('main-container')
    
    <section class="hero-section text-center">
        <div class="container hero-content">
            <span class="badge text-dark-purple mb-3">SCALABLE | SECURE | SUBSCRIPTION-READY</span>
            <h1 class="mb-4">Build Your Next Unicorn: Custom SaaS Development</h1>
            <p class="lead mb-4">
                Gkon Technologies specializes in architecting and building highly scalable, multi-tenant software platforms designed for recurring revenue.
            </p>
            <a href="#contact" class="btn hero-btn shadow">Start Your SaaS Journey Today <i class="bi bi-cloud-arrow-up-fill"></i></a>
        </div>
    </section>

    <section class="benefits-section container-fluid">
        <h2 class="text-center">The Power of Custom SaaS Solutions</h2>
        <div class="row g-4 justify-content-center">
            
            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card text-center">
                    <i class="bi bi-graph-up-arrow benefit-icon"></i>
                    <h4>Infinite Scalability</h4>
                    <p class="text-secondary">Designed with microservices and cloud-native architecture to handle rapid user growth effortlessly.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card text-center">
                    <i class="bi bi-people-fill benefit-icon"></i>
                    <h4>True Multi-Tenancy</h4>
                    <p class="text-secondary">Efficiently serve thousands of clients from a single codebase, drastically lowering maintenance costs.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card text-center">
                    <i class="bi bi-wallet2 benefit-icon"></i>
                    <h4>Predictable Revenue</h4>
                    <p class="text-secondary">Integrate flexible subscription models (MRR/ARR) right into the platform for stable, continuous income.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section">
        <div class="container">
            <h2 class="text-center">Our 4-Step SaaS Development Workflow</h2>
            <div class="row g-4">
                
                <div class="col-sm-6 col-lg-3">
                    <div class="process-step">
                        <span class="step-number-ring">1</span>
                        <h4>MVP Strategy & UX Design</h4>
                        <p class="text-secondary small">Define your Minimum Viable Product (MVP) and map out the user journey to ensure rapid market entry.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="process-step">
                        <span class="step-number-ring">2</span>
                        <h4>Cloud Architecture Setup</h4>
                        <p class="text-secondary small">Set up a secure, scalable cloud environment (AWS, Azure, GCP) ready for high-traffic and global reach.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="process-step">
                        <span class="step-number-ring">3</span>
                        <h4>Agile Development & Testing</h4>
                        <p class="text-secondary small">Develop the core features using an Agile methodology, with continuous integration and deployment (CI/CD).</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="process-step">
                        <span class="step-number-ring">4</span>
                        <h4>Launch, Monitoring & Growth</h4>
                        <p class="text-secondary small">Launch the product, provide 24/7 monitoring, and plan feature roadmaps for continuous growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-highlight-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="highlight-box">
                        <h2 class="mb-4">Key Features We Integrate</h2>
                        <ul class="highlight-list">
                            <li><i class="bi bi-shield-lock-fill"></i> **Enterprise-Grade Security:** Data encryption, role-based access control, and compliance.</li>
                            <li><i class="bi bi-bar-chart-fill"></i> **Advanced Analytics:** In-app metrics and reporting dashboards for data-driven decisions.</li>
                            <li><i class="bi bi-repeat"></i> **Seamless Updates:** Zero-downtime deployment for continuous product improvement.</li>
                            <li><i class="bi bi-plug-fill"></i> **Third-Party Integrations:** API design for easy connection with other business tools.</li>
                            <li><i class="bi bi-gear-fill"></i> **Customizable Dashboards:** Allow each tenant to tailor the UI/UX to their specific needs.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img
                        src="https://image.pollinations.ai/prompt/custom%20saas%20application%20dashboard%20with%20charts?width=600&height=400&seed=789"
                        alt="Custom SaaS Dashboard"
                        class="feature-image"
                    />
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="cta-section">
        <div class="container">
            <h2 class="mb-3">Ready to Monetize Your Software Idea?</h2>
            <p class="lead mb-5">Talk to our SaaS specialists to define your vision and build a powerful platform that generates recurring revenue.</p>
            <form class="mx-auto cta-form" style="max-width: 700px;">
                <div class="row g-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name" aria-label="Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Your Email" aria-label="Email" required>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Tell us about your SaaS idea..." rows="5" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn cta-submit-btn w-100 shadow-sm">Get a Free SaaS Consultation <i class="bi bi-send-fill"></i></button>
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
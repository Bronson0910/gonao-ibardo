<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us - The WJ Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="welcome.css" rel="stylesheet" />
    <style>
        :root {
            --color-text-neutral: #6b7280;
            --font-heading: 'Poppins', sans-serif;
            --font-body: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            --transition-speed: 0.3s;
        }

        body {
            background: url('image/bghotel2.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            color: #333;
            margin: 0;
            padding-top: 70px;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgb(0 0 0 / 0.05);
            font-family: var(--font-heading);
            font-weight: 600;
            transition: background-color var(--transition-speed);
            padding: 0.8rem 1.5rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            letter-spacing: 0.05em;
            color: #111827;
            user-select: none;
            cursor: default;
        }

        .nav-link {
            color: #374151;
            font-weight: 600;
            transition: color var(--transition-speed), transform var(--transition-speed);
            position: relative;
            white-space: nowrap;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: #000;
            text-decoration: none;
            transform: scale(1.05);
        }

        .nav-item .active {
            color: #111827;
            font-weight: 700;
            border-bottom: 2px solid #111827;
            padding-bottom: 0.3rem;
        }

        main.container {
            max-width: 1200px;
            margin-top: 3rem;
            margin-bottom: 5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .btn-submit {
            font-weight: 600;
            background-color: #111827;
            border: none;
            transition: background-color var(--transition-speed), transform var(--transition-speed);
            border-radius: 0.5rem;
            padding: 0.6rem 1.2rem;
            color: #ffffff;
            text-decoration: none;
            display: inline-block;
        }

        .btn-submit:hover,
        .btn-submit:focus {
            background-color: #000;
            transform: scale(1.03);
            box-shadow: 0 6px 12px rgb(0 0 0 / 0.15);
            color: #ffffff;
            text-decoration: none;
        }

        footer {
            background-color: #f9fafb;
            text-align: center;
            padding: 1.5rem 1rem;
            font-size: 0.9rem;
            color: var(--color-text-neutral);
            box-shadow: inset 0 1px 0 #e5e7eb;
            user-select: none;
            font-family: var(--font-body);
        }

        .card.horizontal-card {
            max-width: 1000px;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            overflow: hidden;
            transition: transform 0.2s;
        }

        .card.horizontal-card:hover {
            transform: scale(1.01);
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .card.horizontal-card img {
            width: 500px;
            height: 350px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .card.horizontal-card .card-body {
            padding-left: 20px;
            flex-grow: 1;
        }

        .card-title a {
            text-decoration: none;
            color: inherit;
        }

        .card-title a:hover {
            text-decoration: underline;
        }

        .hero-section {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 0.75rem;
            padding: 4rem 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 15px 30px rgb(0 0 0 / 0.05);
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .glass-card {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 0.75rem;
            box-shadow: 0 15px 30px rgb(0 0 0 / 0.05);
            transition: all var(--transition-speed);
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgb(0 0 0 / 0.1);
        }

        .gradient-text {
            color: #111827;
            font-family: var(--font-heading);
            font-weight: 700;
        }

        .icon-feature {
            width: 80px;
            height: 80px;
            background-color: #111827;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
            transition: transform var(--transition-speed);
        }

        .icon-feature:hover {
            transform: scale(1.1) rotate(5deg);
            background-color: #000;
        }

        .stats-counter {
            font-size: 3rem;
            font-weight: 700;
            color: #111827;
            font-family: var(--font-heading);
            display: block;
            margin-bottom: 0.5rem;
        }

        .timeline-item {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #111827;
            box-shadow: 0 0 0 4px rgba(17, 24, 39, 0.1);
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: 9px;
            top: 20px;
            width: 2px;
            height: calc(100% + 1rem);
            background-color: #111827;
        }

        .timeline-item:last-child::after {
            display: none;
        }

        .hotel-tier {
            margin-bottom: 2rem;
        }

        .tier-header {
            margin-bottom: 1rem;
        }

        .tier-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.9rem;
            font-weight: 600;
            font-family: var(--font-heading);
            margin-bottom: 1rem;
        }

        .tier-badge.luxury {
            background-color: #111827;
            color: white;
            box-shadow: 0 4px 12px rgba(17, 24, 39, 0.3);
        }

        .tier-badge.premium {
            background-color: #374151;
            color: white;
            box-shadow: 0 4px 12px rgba(55, 65, 81, 0.3);
        }

        .tier-badge.classic {
            background-color: #6b7280;
            color: white;
            box-shadow: 0 4px 12px rgba(107, 114, 128, 0.3);
        }

        .hotel-showcase {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .hotel-premium-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 0.75rem;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all var(--transition-speed);
            box-shadow: 0 2px 10px rgb(0 0 0 / 0.05);
            min-width: 180px;
            flex: 1;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hotel-premium-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgb(0 0 0 / 0.15);
        }

        .hotel-premium-card.featured {
            background-color: rgba(17, 24, 39, 0.05);
            border: 2px solid #111827;
            box-shadow: 0 4px 20px rgb(0 0 0 / 0.1);
        }

        .hotel-premium-card.featured:hover {
            background-color: rgba(17, 24, 39, 0.1);
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgb(0 0 0 / 0.2);
        }

        .hotel-icon {
            font-size: 1.5rem;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(17, 24, 39, 0.1);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .hotel-info {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .hotel-info h6 {
            margin: 0;
            font-size: 0.9rem;
            font-weight: 600;
            color: #111827;
            font-family: var(--font-heading);
        }

        .hotel-rating {
            font-size: 0.75rem;
            color: var(--color-text-neutral);
        }

        .pulse-btn {
            animation: pulse 2s infinite;
            font-weight: 600;
            background-color: #111827;
            border: none;
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            display: inline-block;
            transition: all var(--transition-speed);
        }

        .pulse-btn:hover {
            transform: scale(1.05);
            background-color: #000;
            color: white;
            text-decoration: none;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(17, 24, 39, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(17, 24, 39, 0); }
            100% { box-shadow: 0 0 0 0 rgba(17, 24, 39, 0); }
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .section-divider {
            height: 2px;
            background-color: #111827;
            margin: 3rem 0;
            opacity: 0.2;
        }

        .number-counter {
            font-size: 4rem;
            font-weight: 900;
            color: #111827;
            font-family: var(--font-heading);
            line-height: 1;
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .rotate-on-hover {
            transition: transform var(--transition-speed);
        }

        .rotate-on-hover:hover {
            transform: rotate(360deg);
        }

        /* Styles for owner images */
        .owner-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid #007bff; /* Optional border */
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 2rem 1rem;
            }
            
            .glass-card {
                padding: 1.5rem;
            }
            
            .number-counter {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">WJ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="About.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="WhatWeOffer.php">What We Offer</a></li>
                    <li class="nav-item"><a class="nav-link" href="Account.php">Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="Reserved.php">Reserve</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5 pt-5">
    
        <div class="hero-section text-center floating-element">
            <h1 class="display-2 fw-bold gradient-text mb-4">Welcome to WJ Hotels</h1>
            <p class="lead fs-4 text-dark mb-4">Where Luxury Meets Exceptional Service</p>
            <div class="d-flex justify-content-center gap-4 mb-4">
                <div class="text-center">
                    <span class="number-counter">8</span>
                    <p class="fw-bold">Premium Hotels</p>
                </div>
                <div class="text-center">
                    <span class="number-counter">100+</span>
                    <p class="fw-bold">Guests</p>
                </div>
                <div class="text-center">
                    <span class="number-counter">5★</span>
                    <p class="fw-bold">Service Rating</p>
                </div>
            </div>
        </div>

        
        <div class="row justify-content-center mb-5">
            <div class="col-12 mb-4">
                <div class="glass-card shadow mx-auto p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="gradient-text mb-3">Our Story</h3>
                            <p class="mb-3">WJ Hotels was founded with a bold vision: to redefine hotel booking in the Philippines. Today, we are the trusted choice for travelers who seek only the finest accommodations. Our handpicked selection of premium hotels reflects our commitment to luxury, comfort, and exceptional service—ensuring every stay is an experience worth remembering.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="icon-feature rotate-on-hover">
                                🏆
                            </div>
                            <h5 class="gradient-text">Excellence Since Day One</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-divider"></div>


        <div class="row justify-content-center mb-5">
            <div class="col-12 mb-4">
                <div class="glass-card shadow mx-auto p-4">
                    <h3 class="gradient-text mb-4 text-center">What We Offer</h3>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="d-flex align-items-center mb-4">
                                Premium Hotels
                            </h5>
                            
                        
                            <div class="hotel-tier mb-4">
                                <div class="tier-header">
                                    <span class="tier-badge luxury">Luxury Collection</span>
                                </div>
                                <div class="hotel-showcase">
                                    <div class="hotel-premium-card featured">
                                        <div class="hotel-info">
                                            <h6>Okada Manila</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                    <div class="hotel-premium-card featured">
                                        <div class="hotel-info">
                                            <h6>Conrad Manila</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    
                            <div class="hotel-tier mb-4">
                                <div class="tier-header">
                                    <span class="tier-badge premium">Premium Selection</span>
                                </div>
                                <div class="hotel-showcase">
                                    <div class="hotel-premium-card">
                                        <div class="hotel-info">
                                            <h6>Hilton California</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                    <div class="hotel-premium-card">
                                        <div class="hotel-info">
                                            <h6>Hyatt Regency</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                    <div class="hotel-premium-card">
                                        <div class="hotel-info">
                                            <h6>Shangri-La the Fort</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hotel-tier">
                                <div class="tier-header">
                                    <span class="tier-badge classic">Classic Hotels</span>
                                </div>
                                <div class="hotel-showcase">
                                    <div class="hotel-premium-card">
                                        <div class="hotel-info">
                                            <h6>Lanson Place</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                    <div class="hotel-premium-card">
                                        <div class="hotel-info">
                                            <h6>The Manila Hotel</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                    <div class="hotel-premium-card">
                                        <div class="hotel-info">
                                            <h6>The Bayleaf Hotel</h6>
                                            <span class="hotel-rating">⭐⭐⭐⭐</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h5 class="d-flex align-items-center mb-3">
                                Room Categories
                            </h5>
                            <div class="timeline-item">
                                <h6>Regular Rooms</h6>
                                <p class="text-muted">Comfortable accommodations for every traveler</p>
                            </div>
                            <div class="timeline-item">
                                <h6>Standard Rooms</h6>
                                <p class="text-muted">Enhanced comfort with modern amenities</p>
                            </div>
                            <div class="timeline-item">
                                <h6>Deluxe Suites</h6>
                                <p class="text-muted">Spacious luxury with premium features</p>
                            </div>
                            <div class="timeline-item">
                                <h6>Executive Floors</h6>
                                <p class="text-muted">Exclusive access and personalized service</p>
                            </div>
                            <div class="timeline-item">
                                <h6>Luxury Accommodations</h6>
                                <p class="text-muted">The pinnacle of hospitality excellence</p>
                            </div>
                            
                            <div class="mt-4 p-3 glass-card">
                                <h5 class="gradient-text">Price Range</h5>
                                <p class="display-6 fw-bold text-center">₱15,000 - ₱50,000 <small class="text-muted">per night</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="glass-card shadow h-100 p-4">
                    <h3 class="gradient-text text-center mb-3">Our Mission</h3>
                    <p class="text-center">To provide travelers with seamless access to premium hotel accommodations while ensuring exceptional service, competitive pricing, and unforgettable experiences that create lasting memories.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="glass-card shadow h-100 p-4">
                    <h3 class="gradient-text text-center mb-3">Our Vision</h3>
                    <p class="text-center">To become the Philippines' leading hotel booking platform, known for our curated selection of luxury accommodations and commitment to excellence in customer service.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center mb-5">
            <div class="col-12 mb-4">
                <div class="glass-card shadow mx-auto p-4">
                    <h3 class="gradient-text mb-4 text-center">Why Choose WJ Hotels</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3 text-center">
                            <h5 class="gradient-text">Premium Selection</h5>
                            <p>We partner only with the finest hotels to ensure your stay exceeds expectations.</p>
                        </div>
                        <div class="col-md-4 mb-3 text-center">
                            <h5 class="gradient-text">Best Prices</h5>
                            <p>Competitive rates across all room categories with transparent pricing.</p>
                        </div>
                        <div class="col-md-4 mb-3 text-center">
                            <h5 class="gradient-text">Secure Booking</h5>
                            <p>Your reservations are protected with our secure booking system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company Owners Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <div class="glass-card shadow mx-auto p-4 text-center">
                    <h3 class="gradient-text mb-4">Meet Our Founders</h3>
                    <div class="row justify-content-center">
                        <!-- Owner 1 -->
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="image/gonao.jpg" alt="Company Owner 1" class="img-fluid rounded-circle mb-3 owner-image">
                            <h5 class="gradient-text mb-2">Bronson Gonao</h5>
                            <p class="text-muted px-4">"Our vision is to create unforgettable experiences for every guest. We believe in luxury, comfort, and service that goes beyond expectations. We are dedicated to providing a seamless and enjoyable booking journey for all."</p>
                        </div>
                        <!-- Owner 2 -->
                        <div class="col-md-6">
                            <img src="image/ibardo.jpg" alt="Company Owner 2" class="img-fluid rounded-circle mb-3 owner-image">
                            <h5 class="gradient-text mb-2">Joanna Ibardo</h5>
                            <p class="text-muted px-4">"We are committed to continuous innovation, ensuring our platform offers the best selection and the most intuitive booking process. Our goal is to make luxury travel accessible and effortless for everyone."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-5">
            <div class="glass-card shadow mx-auto p-5" style="max-width: 600px;">
                <h3 class="gradient-text mb-3">Ready to Experience Luxury?</h3>
                <p class="mb-4 fs-5">Discover our collection of premium hotels and book your next unforgettable stay.</p>
                <a href="WhatWeOffer.php" class="pulse-btn">View Our Hotels</a>
            </div>
        </div>
    </main>

    <footer class="text-center py-4">
        <p class="mb-0">&copy; 2025 WJ Hotels. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    
        document.addEventListener('DOMContentLoaded', function() {
    
            const numbers = document.querySelectorAll('.number-counter');
            
            const animateNumber = (element, target) => {
                let current = 0;
                const increment = target / 100;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    element.textContent = target.toString().includes('+') ? Math.floor(current) + '+' : 
                                        target.toString().includes('★') ? Math.floor(current) + '★' : 
                                        Math.floor(current);
                }, 20);
            };
            
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        
                    
                        if (entry.target.classList.contains('number-counter')) {
                            const target = entry.target.textContent.includes('+') ? 100 :
                                        entry.target.textContent.includes('★') ? 5 :
                                        parseInt(entry.target.textContent);
                            animateNumber(entry.target, target);
                        }
                    }
                });
            });
            
        
            document.querySelectorAll('.glass-card, .number-counter').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.6s ease';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>

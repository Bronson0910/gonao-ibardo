<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The WG Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="welcome.css" rel="stylesheet">
   <link href="hotel.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: skyblue;">WJ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="WhatWeOffer.php">What We Offer</a></li>
          <li class="nav-item"><a class="nav-link" href="Account.php">Account</a></li>
          <li class="nav-item"><a class="nav-link" href="Reserved.php">Reserved</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-5 pt-5">

  </main>
  <body>
      <main class="container mt-5 pt-5">
    <div class="hotel-header">
      <h1>Shangri-La the Fort</h1>
      <p>Discover comfort and elegance in the heart of Manila. Our modern hotel combines contemporary design with warm Filipino hospitality for an exceptional stay experience.</p>
      
      <div class="d-flex justify-content-center align-items-center mb-3 flex-wrap gap-3">
        <div class="d-flex align-items-center">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <span class="ms-2 fw-bold">4.8 (1,850 reviews)</span>
        </div>
        <div class="d-flex align-items-center">
          <i class="fas fa-map-marker-alt me-2"></i>
          <span>Makati Business District, Manila, Philippines</span>
        </div>
      </div>

      <div class="hotel-stats">
        <div class="stat-item">
          <div class="stat-number">250</div>
          <div class="stat-label">Modern Rooms</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">4.8</div>
          <div class="stat-label">Guest Rating</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">24/7</div>
          <div class="stat-label">Guest Services</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">15+</div>
          <div class="stat-label">Hotel Amenities</div>
        </div>
      </div>
    </div>

    <div class="rooms-section">
      <h2 class="section-title">Accommodation Options</h2>
      <p class="section-subtitle">Choose from our thoughtfully designed rooms and suites, each crafted to provide comfort and style for every type of traveler.</p>

      <div class="row g-4">
        <div class="col-lg-6 col-md-12">
          <div class="room-card position-relative">
            <div class="price-badge">₱15,000/night</div>
            <img src="https://sitecore-cd-imgr.shangri-la.com/MediaFiles/6/2/A/{62A6D2D1-FD4B-4213-9E2A-A8AA6E3A24C2}060822_SLFM_Deluxe King.jpg" alt="Regular Room" class="room-image">
            <div class="room-card-body">
              <h4 class="room-title">Regular Room</h4>
              <p class="room-description">Deluxe Rooms are well-appointed and spacious, with elegant contemporary décor in light hues, coupled with panoramic views of the city.</p>
              <div class="room-amenities">
                <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 Queen Bed</span></div>
                <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>2 Guests</span></div>
                <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>25 sqm</span></div>
                <div class="amenity-item"><i class="fas fa-wifi amenity-icon"></i><span>Complimentary WiFi</span></div>
              </div>
             
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="room-card position-relative">
            <div class="price-badge">₱25,000/night</div>
            <img src="https://sitecore-cd-imgr.shangri-la.com/MediaFiles/7/A/D/{7ADE98F8-E06B-4115-A8B1-E79F20FF7038}73f511e590a6489eb442d80a48b24c73.jpg" alt="Standard Room" class="room-image">
            <div class="room-card-body">
              <h4 class="room-title">Standard Room</h4>
              <p class="room-description">Each one-bedroom unit features a living room and kitchen, coupled with outstanding city views from the north, east or west.</p>
              <div class="room-amenities">
                <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King Bed</span></div>
                <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>2 Guests</span></div>
                <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>35 sqm</span></div>
                <div class="amenity-item"><i class="fas fa-coffee amenity-icon"></i><span>Coffee Station</span></div>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="room-card position-relative">
            <div class="price-badge">₱35,000/night</div>
            <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Deluxe Room" class="room-image">
            <div class="room-card-body">
              <h4 class="room-title">Deluxe Room</h4>
              <p class="room-description">Spacious accommodation with separate living area and premium furnishings. Features panoramic city views and luxury bathroom amenities.</p>
              <div class="room-amenities">
                <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King Bed</span></div>
                <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>3 Guests</span></div>
                <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>45 sqm</span></div>
                <div class="amenity-item"><i class="fas fa-bath amenity-icon"></i><span>Luxury Bathroom</span></div>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="room-card position-relative">
            <div class="price-badge">₱45,000/night</div>
            <img src="https://www.theartofbusinesstravel.com/wp-content/uploads/2016/07/SLFM-Premier-Suite.jpg" alt="Executive Room" class="room-image">
            <div class="room-card-body">
              <h4 class="room-title">Executive Room</h4>
              <p class="room-description">Premium accommodation with executive lounge access and personalized service. Ideal for business executives and discerning travelers.</p>
              <div class="room-amenities">
                <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King Bed</span></div>
                <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>3 Guests</span></div>
                <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>55 sqm</span></div>
                <div class="amenity-item"><i class="fas fa-concierge-bell amenity-icon"></i><span>Concierge Service</span></div>
              </div>
             
            </div>
          </div>
        </div>


        <div class="col-lg-12">
          <div class="room-card position-relative">
            <div class="price-badge">₱50,000/night</div>
            <div class="row g-0">
              <div class="col-md-6">
                <img src="https://sitecore-cd-imgr.shangri-la.com/MediaFiles/0/C/F/{0CF5A339-FDA4-42C1-A302-3644FA336D8A}200901_SLFM_Shangri_La_Suite_1.jpg"alt="Luxury Suite" class="room-image" style="height: 100%; min-height: 400px;">
              </div>
              <div class="col-md-6">
                <div class="room-card-body h-100 d-flex flex-column">
                  <h4 class="room-title">Luxury Suite</h4>
                  <p class="room-description">The Shangri-La Suite offers an outstanding level of luxury and elegance featuring a separate living room, dining area, an office space, guest washroom, and kitchenette.</p>
                  <div class="room-amenities flex-grow-1">
                    <div class="row">
                      <div class="col-6">
                        <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King + Sofa Bed</span></div>
                        <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>4 Guests</span></div>
                        <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>80 sqm</span></div>
                      </div>
                      <div class="col-6">
                        <div class="amenity-item"><i class="fas fa-glass-cheers amenity-icon"></i><span>Minibar</span></div>
                        <div class="amenity-item"><i class="fas fa-hot-tub amenity-icon"></i><span>Spa Bath</span></div>
                        <div class="amenity-item"><i class="fas fa-city amenity-icon"></i><span>Skyline View</span></div>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="amenities-section">
      <h2 class="section-title">Hotel Amenities</h2>
      <p class="section-subtitle">Experience our comprehensive range of amenities designed to enhance your stay and provide everything you need for business and leisure.</p>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-swimming-pool fa-3x"></i>
            <h5>Swimming Pool</h5>
            <p>Outdoor pool deck with city views, perfect for relaxation and recreation</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-dumbbell fa-3x"></i>
            <h5>Fitness Center</h5>
            <p>Modern gym with latest equipment, available 24 hours for your convenience</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-utensils fa-3x"></i>
            <h5>Restaurant & Bar</h5>
            <p>All-day dining with international and local cuisine, plus cocktail lounge</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-wifi fa-3x"></i>
            <h5>Free WiFi</h5>
            <p>High-speed internet access throughout the hotel for all guests</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-car fa-3x"></i>
            <h5>Parking</h5>
            <p>Secure parking facilities with valet service available</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-briefcase fa-3x"></i>
            <h5>Business Services</h5>
            <p>Meeting rooms and business center with printing and conference facilities</p>
          </div>
        </div>
      </div>
    </div>
  </main>

   <footer class="text-center mt-5 py-3 bg-light">
    &copy; 2025 WG Hotels. All rights reserved.
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

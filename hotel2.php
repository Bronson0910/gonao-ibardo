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
     <main class="container">
    <div class="hotel-header">
      <h1>Hyatt Regency</h1>
      <p>Experience unparalleled luxury and sophistication in the heart of the city. Our premier hotel offers world-class amenities and exceptional service for an unforgettable stay.</p>
      
      <div class="d-flex justify-content-center align-items-center mb-3 flex-wrap gap-3">
        <div class="d-flex align-items-center">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <span class="ms-2 fw-bold">5.0 (2,150 reviews)</span>
        </div>
        <div class="d-flex align-items-center">
          <i class="fas fa-map-marker-alt me-2"></i>
          <span>Downtown Metro Manila, Philippines</span>
        </div>
      </div>

      <div class="hotel-stats">
        <div class="stat-item">
          <div class="stat-number">300</div>
          <div class="stat-label">Luxury Rooms</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">5</div>
          <div class="stat-label">Star Rating</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">24/7</div>
          <div class="stat-label">Concierge Service</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">20+</div>
          <div class="stat-label">Premium Amenities</div>
        </div>
      </div>
    </div>

<div class="rooms-section">
  <h2 class="section-title">Accommodation Options</h2>
  <p class="section-subtitle">Explore our signature Hyatt rooms, designed to deliver unmatched comfort, elegance, and hospitality.</p>

  <div class="row g-4">


    <div class="col-lg-6 col-md-12">
      <div class="room-card position-relative">
        <div class="price-badge">₱15,000/night</div>
        <img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2018/08/16/1126/Hyatt-City-of-Dreams-Manila-P052-One-King-Deluxe.jpg/Hyatt-City-of-Dreams-Manila-P052-One-King-Deluxe.16x9.jpg?imwidth=1920"  alt="Hyatt Deluxe Room" class="img-fluid room-image" style="max-width: 800px; height: auto; border-radius: 0.5rem;">

        <div class="room-card-body">
          <h4 class="room-title">Regular Room</h4>
          <p class="room-description">A serene retreat that blends simplicity and comfort. Ideal for solo travelers or couples, with Hyatt’s signature bedding and smart amenities.</p>
          <div class="room-amenities">
            <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 Queen Bed</span></div>
            <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>2 Guests</span></div>
            <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>28 sqm</span></div>
            <div class="amenity-item"><i class="fas fa-wifi amenity-icon"></i><span>Free WiFi</span></div>
          </div>
         
        </div>
      </div>
    </div>

 
<div class="col-lg-6 col-md-12">
  <div class="room-card position-relative">
    <div class="price-badge">₱25,000/night</div>

    <img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2015/02/18/1435/Hyatt-City-of-Dreams-Manila-P008-Hyatt-Twin.jpg/Hyatt-City-of-Dreams-Manila-P008-Hyatt-Twin.16x9.jpg?imwidth=1920" alt="Hyatt Deluxe Room" class="img-fluid room-image" style="max-width: 800px; height: auto; border-radius: 0.5rem;">

    <div class="room-card-body">
      <h4 class="room-title">Standard Room</h4>
      <p class="room-description">Relax in style with added space, a king-size bed, and refined interiors. This room is perfect for business and leisure travelers alike.</p>
      
      <div class="room-amenities">
        <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King Bed</span></div>
        <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>2 Guests</span></div>
        <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>38 sqm</span></div>
        <div class="amenity-item"><i class="fas fa-coffee amenity-icon"></i><span>Nespresso Machine</span></div>
      </div>

      
    </div>
  </div>
</div>



    <div class="col-lg-6 col-md-12">
      <div class="room-card position-relative">
        <div class="price-badge">₱35,000/night</div>
         <img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2015/02/26/1157/Hyatt-City-of-Dreams-Manila-P017-Aqua-Suite.jpg/Hyatt-City-of-Dreams-Manila-P017-Aqua-Suite.16x9.jpg?imwidth=1920" alt="Hyatt Deluxe Room" class="img-fluid room-image" style="max-width: 800px; height: auto; border-radius: 0.5rem;">
        <div class="room-card-body">
          <h4 class="room-title">Deluxe Room</h4>
          <p class="room-description">Enjoy a spacious room with modern elegance, a separate seating area, and a luxurious marble bathroom for ultimate relaxation.</p>
          <div class="room-amenities">
            <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King Bed</span></div>
            <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>3 Guests</span></div>
            <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>48 sqm</span></div>
            <div class="amenity-item"><i class="fas fa-bath amenity-icon"></i><span>Marble Bathtub</span></div>
          </div>
         
        </div>
      </div>
    </div>


    <div class="col-lg-6 col-md-12">
      <div class="room-card position-relative">
        <div class="price-badge">₱45,000/night</div>
         <img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2018/01/18/1520/Hyatt-City-of-Dreams-Manila-P051-Hyatt-Pool-Villa-Bedroom.jpg/Hyatt-City-of-Dreams-Manila-P051-Hyatt-Pool-Villa-Bedroom.16x9.jpg?imwidth=1920" alt="Hyatt Deluxe Room" class="img-fluid room-image" style="max-width: 800px; height: auto; border-radius: 0.5rem;">
          <h4 class="room-title">Executive Room</h4>
          <p class="room-description">Perfect for VIPs, the Executive Room includes exclusive Regency Club access and elevated business-class amenities.</p>
          <div class="room-amenities">
            <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King Bed</span></div>
            <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>3 Guests</span></div>
            <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>58 sqm</span></div>
            <div class="amenity-item"><i class="fas fa-concierge-bell amenity-icon"></i><span>Personal Concierge</span></div>
          </div>
          
        </div>
      </div>
    </div>


    <div class="col-lg-12">
      <div class="room-card position-relative">
        <div class="price-badge">₱50,000/night</div>
        <div class="row g-0">
          <div class="col-md-6">
            <img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2022/07/25/0217/MNLHY-P0080-Suite-Guestroom-Bed-Seating.jpg/MNLHY-P0080-Suite-Guestroom-Bed-Seating.16x9.jpg?imwidth=1920"alt="Luxury Suite" class="room-image" style="height: 100%; min-height: 400px;">
          </div>
          <div class="col-md-6">
            <div class="room-card-body h-100 d-flex flex-column">
              <h4 class="room-title">Luxury Suite</h4>
              <p class="room-description">Step into Hyatt’s most refined experience — expansive living, panoramic skyline views, and elite amenities in a grand suite like no other.</p>
              <div class="room-amenities flex-grow-1">
                <div class="row">
                  <div class="col-6">
                    <div class="amenity-item"><i class="fas fa-bed amenity-icon"></i><span>1 King + Sofa Bed</span></div>
                    <div class="amenity-item"><i class="fas fa-users amenity-icon"></i><span>4 Guests</span></div>
                    <div class="amenity-item"><i class="fas fa-ruler-combined amenity-icon"></i><span>85 sqm</span></div>
                  </div>
                  <div class="col-6">
                    <div class="amenity-item"><i class="fas fa-glass-cheers amenity-icon"></i><span>Premium Mini Bar</span></div>
                    <div class="amenity-item"><i class="fas fa-hot-tub amenity-icon"></i><span>Private Jacuzzi</span></div>
                    <div class="amenity-item"><i class="fas fa-city amenity-icon"></i><span>Panoramic View</span></div>
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
      <p class="section-subtitle">Indulge in our exceptional facilities and services designed for your comfort and convenience</p>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-swimming-pool fa-3x"></i>
            <h5>Infinity Pool</h5>
            <p>Rooftop infinity pool with stunning city skyline views</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-dumbbell fa-3x"></i>
            <h5>Fitness Center</h5>
            <p>State-of-the-art 24/7 fitness facility with personal trainers</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-utensils fa-3x"></i>
            <h5>Fine Dining</h5>
            <p>Award-winning restaurants featuring international cuisine</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-spa fa-3x"></i>
            <h5>Regency Spa</h5>
            <p>Full-service luxury spa with traditional and modern treatments</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-car fa-3x"></i>
            <h5>Luxury Transport</h5>
            <p>Premium valet parking and luxury car service</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="amenity-card">
            <i class="fas fa-briefcase fa-3x"></i>
            <h5>Business Center</h5>
            <p>Modern meeting rooms and comprehensive business facilities</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="modal fade" id="reservationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Reserve Your Stay at Hyatt Regency</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="reservationForm">
            <div class="mb-3">
              <label class="form-label">Selected Room Type:</label>
              <input type="text" class="form-control" id="selectedRoom" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label">Price per Night:</label>
              <input type="text" class="form-control" id="selectedPrice" readonly>
            </div>
            <div class="mb-3">
              <label class="form-label">Check-in Date:</label>
              <input type="date" class="form-control" id="checkInDate" min="2025-06-28" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Check-out Date:</label>
              <input type="date" class="form-control" id="checkOutDate" min="2025-06-29" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Check-in Time:</label>
              <input type="time" class="form-control" id="checkInTime" value="15:00" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Number of Guests:</label>
              <select class="form-select" id="guests" required>
                <option value="1">1 Guest</option>
                <option value="2">2 Guests</option>
                <option value="3">3 Guests</option>
                <option value="4">4 Guests</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-confirm" onclick="confirmReservation()">Confirm Reservation</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 py-3 bg-light">
    &copy; 2025 WG Hotels. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

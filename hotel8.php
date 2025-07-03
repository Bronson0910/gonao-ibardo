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
            <h1> The Bayleaf Hotel</h1>
            <p>Experience luxury and comfort in the heart of California. Our premium hotel offers world-class amenities and exceptional service for an unforgettable stay.</p>
            
            <div class="d-flex justify-content-center align-items-center mb-3 flex-wrap gap-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <span class="ms-2 fw-bold">5.0 (1,250 reviews)</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    <span> Imperial Crest Hotel</span>
                </div>
            </div>

            <div class="hotel-stats">
                <div class="stat-item">
                    <div class="stat-number">250</div>
                    <div class="stat-label">Luxury Rooms</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Star Rating</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Room Service</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Premium Amenities</div>
                </div>
            </div>
        </div>

    
        <div class="rooms-section">
            <h2 class="section-title">Accommodation Options</h2>
            <p class="section-subtitle">Choose from our carefully curated selection of rooms, each designed for comfort and luxury</p>

            <div class="row g-4">
                <div class="col-lg-6 col-md-12">
                    <div class="room-card position-relative">
                        <div class="price-badge">₱15,000/night</div>
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Regular Room" class="room-image">
                        <div class="room-card-body">
                            <h4 class="room-title">Regular Room</h4>
                            <p class="room-description">Perfect for budget-conscious travelers who don't want to compromise on comfort. Features essential amenities for a pleasant stay.</p>
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-bed amenity-icon"></i>
                                    <span>1 Queen Bed</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-users amenity-icon"></i>
                                    <span>2 Guests</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-ruler-combined amenity-icon"></i>
                                    <span>25 sqm</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-wifi amenity-icon"></i>
                                    <span>Free WiFi</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="room-card position-relative">
                        <div class="price-badge">₱25,000/night</div>
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Standard Room" class="room-image">
                        <div class="room-card-body">
                            <h4 class="room-title">Standard Room</h4>
                            <p class="room-description">Enhanced comfort with additional space and amenities. Ideal for business travelers and couples seeking a comfortable stay.</p>
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-bed amenity-icon"></i>
                                    <span>1 King Bed</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-users amenity-icon"></i>
                                    <span>2 Guests</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-ruler-combined amenity-icon"></i>
                                    <span>35 sqm</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-coffee amenity-icon"></i>
                                    <span>Coffee Maker</span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="room-card position-relative">
                        <div class="price-badge">₱35,000/night</div>
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deluxe Room" class="room-image">
                        <div class="room-card-body">
                            <h4 class="room-title">Deluxe Room</h4>
                            <p class="room-description">Spacious and elegantly designed with premium amenities. Features a separate seating area and enhanced bathroom facilities.</p>
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-bed amenity-icon"></i>
                                    <span>1 King Bed</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-users amenity-icon"></i>
                                    <span>3 Guests</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-ruler-combined amenity-icon"></i>
                                    <span>45 sqm</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath amenity-icon"></i>
                                    <span>Bathtub</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="room-card position-relative">
                        <div class="price-badge">₱45,000/night</div>
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Executive Room" class="room-image">
                        <div class="room-card-body">
                            <h4 class="room-title">Executive Room</h4>
                            <p class="room-description">Premium business-class accommodation with executive lounge access. Perfect for business executives and VIP guests.</p>
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-bed amenity-icon"></i>
                                    <span>1 King Bed</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-users amenity-icon"></i>
                                    <span>3 Guests</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-ruler-combined amenity-icon"></i>
                                    <span>55 sqm</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-concierge-bell amenity-icon"></i>
                                    <span>Butler Service</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="room-card position-relative">
                        <div class="price-badge">₱50,000/night</div>
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="https://wallpapers.com/images/hd/hotel-pictures-k9f9gw6jgjq25t2a" alt="Luxury Suite" class="room-image img-fluid" style="max-width: 800px; height: auto;">

                            </div>
                            <div class="col-md-6">
                                <div class="room-card-body h-100 d-flex flex-column">
                                    <h4 class="room-title">Luxury Suite</h4>
                                    <p class="room-description">Our most prestigious accommodation featuring separate living and dining areas, premium furnishings, and unparalleled luxury amenities.</p>
                                    <div class="room-amenities flex-grow-1">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="amenity-item">
                                                    <i class="fas fa-bed amenity-icon"></i>
                                                    <span>1 King + Sofa Bed</span>
                                                </div>
                                                <div class="amenity-item">
                                                    <i class="fas fa-users amenity-icon"></i>
                                                    <span>4 Guests</span>
                                                </div>
                                                <div class="amenity-item">
                                                    <i class="fas fa-ruler-combined amenity-icon"></i>
                                                    <span>75 sqm</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="amenity-item">
                                                    <i class="fas fa-glass-cheers amenity-icon"></i>
                                                    <span>Mini Bar</span>
                                                </div>
                                                <div class="amenity-item">
                                                    <i class="fas fa-hot-tub amenity-icon"></i>
                                                    <span>Jacuzzi</span>
                                                </div>
                                                <div class="amenity-item">
                                                    <i class="fas fa-city amenity-icon"></i>
                                                    <span>City View</span>
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
        </div>

        <div class="amenities-section">
            <h2 class="section-title">Hotel Amenities</h2>
            <p class="section-subtitle">Enjoy world-class facilities during your stay</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fas fa-swimming-pool fa-3x"></i>
                        <h5>Swimming Pool</h5>
                        <p>Outdoor infinity pool with city views</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fas fa-dumbbell fa-3x"></i>
                        <h5>Fitness Center</h5>
                        <p>24/7 fully equipped gym facility</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fas fa-utensils fa-3x"></i>
                        <h5>Fine Dining</h5>
                        <p>Michelin-starred restaurant on-site</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fas fa-spa fa-3x"></i>
                        <h5>Luxury Spa</h5>
                        <p>Full-service spa and wellness center</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fas fa-car fa-3x"></i>
                        <h5>Valet Parking</h5>
                        <p>Complimentary valet parking service</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fas fa-briefcase fa-3x"></i>
                        <h5>Business Center</h5>
                        <p>Modern meeting rooms and facilities</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="reservationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reserve Your Room</h5>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function selectRoom(roomType, price) {
            document.getElementById('selectedRoom').value = roomType;
            document.getElementById('selectedPrice').value = '₱' + price.toLocaleString() + '/night';
            
            const modal = new bootstrap.Modal(document.getElementById('reservationModal'));
            modal.show();
        }

        function confirmReservation() {
            const form = document.getElementById('reservationForm');
            if (form)
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

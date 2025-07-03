<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The WJ Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet">
  <style>
    /* Custom styles for demonstration */
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: skyblue;">WJ</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container" style="margin-top: 100px;">
    <section class="intro-section mb-5 mb-lg-0">
      <h1 class="wintro-message text-dark">WG Hotels</h1>
      <p class="intro-subtext text-dark">
        A great introduction is the first step in building trust and connection. 
        It opens the door to new opportunities and meaningful relationships.
      </p>
    </section>

    <!-- Rooms and Suites Section -->
    <section class="photo-gallery my-5">
      <h2 class="text-center mb-4 text-white">Our Rooms and Suites</h2>
      <div class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
     
        <div class="col">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Deluxe Room">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Standard Room</h5>
              <p class="card-text">Spacious and comfortable, perfect for a relaxing stay.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100 reserve-btn">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Executive Suite">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Deluxe Room</h5>
              <p class="card-text">Luxurious suite with a separate living area and premium amenities.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100 reserve-btn">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Family Room -->
        <div class="col">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Family Room">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Executive Room</h5>
              <p class="card-text">Ideal for families, offering ample space and multiple beds.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100 reserve-btn">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Standard Twin Room -->
        <div class="col">
          <div class="card h-100">
            <img src="https://wallpapers.com/images/hd/hotel-pictures-k9f9gw6jgjq25t2a" class="card-img-top" alt="Standard Twin Room">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Luxury Suite</h5>
              <p class="card-text">Comfortable room with two single beds, perfect for friends or colleagues.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100 reserve-btn">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- King Suite -->
        <div class="col">
          <div class="card h-100">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/355256267.jpg?k=76b856d6612f1715dd351a32d6e3e035aaab665d156c51c9ba8a02c24216fc2e&amp;o=" class="card-img-top" alt="King Suite">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">King Suite</h5>
              <p class="card-text">An opulent suite featuring a king-size bed and sophisticated decor.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100 reserve-btn">Reserve Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How to Reserve Section -->
    <section class="how-to-reserve my-5">
      <h2 class="text-center mb-4 text-white">How to Reserve a Room</h2>
      <div class="card p-4">
        <ol>
          <li><strong>Browse our Rooms:</strong> Take a look at the photos and descriptions above to find the perfect room or suite for your stay.</li>
          <li><strong>Click "Reserve Now":</strong> Each room type has a "Reserve Now" button. Clicking this button will typically take you to a booking form or a dedicated reservation page (you'll need to link this to your actual booking system).</li>
          <li><strong>Fill out the Booking Form:</strong> On the reservation page, you'll be asked to provide your check-in and check-out dates, the number of guests, and your contact information.</li>
          <li><strong>Select Your Preferences:</strong> You might have options for bed type, special requests, or additional services.</li>
          <li><strong>Review and Confirm:</strong> Double-check all your details before confirming your reservation. You'll usually receive a confirmation email shortly after.</li>
          <li><strong>Contact Us Directly (Optional):</strong> If you prefer to book over the phone or have specific inquiries, please feel free to call our reservations team at [Your Phone Number] or email us at [Your Email Address].</li>
        </ol>
        <p class="mt-3 text-center">We look forward to welcoming you to WJ Hotels!</p>
      </div>
    </section>
  </main>

  <footer class="text-center mt-5 py-3 bg-light">
    &copy; 2025 WG Hotels. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://fonts.googleapis.com/icon?family=Material+Icons"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all elements with the class 'reserve-btn'
      const reserveButtons = document.querySelectorAll('.reserve-btn');

      // Loop through each button and add an event listener
      reserveButtons.forEach(button => {
        button.addEventListener('click', function(event) {
          event.preventDefault(); // Prevent the default link behavior
          alert('Please login first to reserve a room. If you don\'t have an account, please register.');
        });
      });
    });
  </script>
</body>
</html>

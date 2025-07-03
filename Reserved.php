<?php
session_start();
require_once 'db.php';

$is_post_request = ($_SERVER["REQUEST_METHOD"] == "POST");
$last_reservation = [];
$confirmed_message = '';
$error_message = '';

// Insert new reservation
if ($is_post_request && isset($_POST['hotel_name'])) {
    $last_reservation = [
        'hotel_name' => htmlspecialchars($_POST['hotel_name']),
        'price' => htmlspecialchars($_POST['price']),
        'room_type' => htmlspecialchars($_POST['room_type']),
        'date' => htmlspecialchars($_POST['date']),
        'time' => htmlspecialchars($_POST['time']),
        'quantity' => htmlspecialchars($_POST['quantity'])
    ];

    $stmt = $conn->prepare("INSERT INTO reservations (hotel_name, price, room_type, date, time, quantity, status)
                            VALUES (:hotel_name, :price, :room_type, :date, :time, :quantity, 'pending')");
    $stmt->execute($last_reservation);
}

// Confirm booking
if (isset($_POST['confirm_booking'])) {
    $full_name = $_POST['full_name'] ?? '';
    $address = $_POST['address'] ?? '';

    if (!empty($full_name) && !empty($address)) {
        $stmt = $conn->prepare("UPDATE reservations 
                                SET full_name = :full_name, address = :address, status = 'confirmed'
                                WHERE id = (
                                    SELECT id FROM (
                                        SELECT id FROM reservations WHERE status = 'pending' ORDER BY created_at DESC LIMIT 1
                                    ) AS latest
                                )");
        $stmt->execute([
            ':full_name' => $full_name,
            ':address' => $address
        ]);
        $confirmed_message = "Your booking has been confirmed!";
    } else {
        $error_message = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="welcome.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 5rem;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-back {
            background-color: #6c757d;
            color: white;
        }
        .btn-back:hover {
            background-color: #5a6268;
            color: white;
        }
        #reservationsContainer .list-group-item {
            border: 1px solid #e0e0e0;
            margin-bottom: 10px;
            border-radius: 8px;
            padding: 15px;
            background-color: #fff;
        }
        #noReservationsMessage {
            font-style: italic;
            color: #6c757d;
            text-align: center;
            margin-top: 20px;
        }
        #bookingConfirmationForm {
            border: 1px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: #e6f3ff; /* Light blue background for the form */
            display: none; /* Hidden by default, shown by JS */
        }
        #bookingConfirmationForm h4 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-confirm {
            background-color: #28a745; /* Green for confirm */
            border-color: #28a745;
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-confirm:hover {
            background-color: #218838;
            transform: translateY(-1px);
        }
        /* Removed .btn-cancel styles as the button is removed */
    </style>
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
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Your Reservations</h2>
                    </div>
                    <div class="card-body">
                        <div id="latestReservationStatus">
                            <?php if ($is_post_request && !empty($last_reservation['hotel_name'])): ?>
                                <div class='alert alert-info text-center' role='alert'>
                                    You have a pending reservation for <strong><?php echo $last_reservation['hotel_name']; ?></strong>. Please confirm your details below.
                                </div>
                            <?php endif; ?>
                        </div>

                        <h4 class="mt-4">Confirmed Reservations:</h4>
                        <ul id="reservationsContainer" class="list-group">
                            <!-- Confirmed Reservations will be loaded here by JavaScript -->
                        </ul>
                        <p id="noReservationsMessage" style="display: none;">You have no confirmed reservations yet.</p>

                        <!-- Booking Confirmation Form (moved to align with other buttons) -->
                        <div id="bookingConfirmationForm">
                            <h4 class="text-center">Confirm Your Booking Details</h4>
                            <form id="confirmationForm">
                                <div class="form-group">
                                    <label for="fullName">Full Name:</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-confirm">Confirm Booking</button>
                                </div>
                            </form>
                        </div>

                        <div class="text-center mt-4">
                            <a href="WhatWeOffer.php" class="btn btn-back me-2">Make another reservation</a>
                            <button id="clearAllReservationsBtn" class="btn btn-danger">Clear All Reservations</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // PHP variables passed to JavaScript
        const lastReservation = {
            hotel_name: "<?php echo $last_reservation['hotel_name']; ?>",
            price: "<?php echo $last_reservation['price']; ?>",
            room_type: "<?php echo $last_reservation['room_type']; ?>",
            date: "<?php echo $last_reservation['date']; ?>",
            time: "<?php echo $last_reservation['time']; ?>",
            quantity: "<?php echo $last_reservation['quantity']; ?>"
        };
        const isPostRequest = <?php echo json_encode($is_post_request); ?>;

        const STORAGE_KEY = 'hotelReservations';
        const reservationsContainer = document.getElementById('reservationsContainer');
        const noReservationsMessage = document.getElementById('noReservationsMessage');
        const clearAllReservationsBtn = document.getElementById('clearAllReservationsBtn');
        const bookingConfirmationFormDiv = document.getElementById('bookingConfirmationForm');
        const confirmationForm = document.getElementById('confirmationForm');
        const fullNameInput = document.getElementById('fullName');
        const addressInput = document.getElementById('address');
        // const cancelBookingBtn = document.getElementById('cancelBookingBtn'); // Removed
        const latestReservationStatusDiv = document.getElementById('latestReservationStatus');

        /**
         * Loads reservations from localStorage.
         * @returns {Array} An array of reservation objects.
         */
        function loadReservations() {
            const storedReservations = localStorage.getItem(STORAGE_KEY);
            return storedReservations ? JSON.parse(storedReservations) : [];
        }

        /**
         * Saves the current list of reservations to localStorage.
         * @param {Array} reservations - The array of reservation objects to save.
         */
        function saveReservations(reservations) {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(reservations));
        }

        /**
         * Displays the list of confirmed reservations in the UI.
         * @param {Array<object>} allReservations - An array of all reservation objects (pending and confirmed).
         */
        function displayReservations(allReservations) {
            reservationsContainer.innerHTML = ''; // Clear previous list
            const confirmedReservations = allReservations.filter(res => res.status === 'confirmed');

            if (confirmedReservations.length === 0) {
                noReservationsMessage.style.display = 'block';
            } else {
                noReservationsMessage.style.display = 'none';
                // Display confirmed reservations, newest first
                confirmedReservations.sort((a, b) => b.timestamp - a.timestamp);

                confirmedReservations.forEach((res, index) => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item mb-2';
                    listItem.innerHTML = `
                        <h5>Reservation #${confirmedReservations.length - index}</h5>
                        <p><strong>Hotel:</strong> ${res.hotel_name}</p>
                        <p><strong>Price:</strong> ${res.price}</p>
                        <p><strong>Room Type:</strong> ${res.room_type}</p>
                        <p><strong>Date:</strong> ${res.date}</p>
                        <p><strong>Time:</strong> ${res.time}</p>
                        <p><strong>Quantity:</strong> ${res.quantity}</p>
                        <p><strong>Full Name:</strong> ${res.full_name || 'N/A'}</p>
                        <p><strong>Address:</strong> ${res.address || 'N/A'}</p>
                    `;
                    reservationsContainer.appendChild(listItem);
                });
            }
        }

        /**
         * Checks for a pending reservation and shows the confirmation form if found.
         */
        function checkAndShowConfirmationForm() {
            const allReservations = loadReservations();
            // Find the most recent pending reservation
            const pendingReservationIndex = allReservations.findIndex(res => res.status === 'pending');

            if (pendingReservationIndex !== -1) {
                bookingConfirmationFormDiv.style.display = 'block';
                // Optionally pre-fill name/address if user has confirmed before
                const lastConfirmed = allReservations.find(res => res.status === 'confirmed');
                if (lastConfirmed) {
                    fullNameInput.value = lastConfirmed.full_name || '';
                    addressInput.value = lastConfirmed.address || '';
                }
            } else {
                bookingConfirmationFormDiv.style.display = 'none';
            }
        }

        /**
         * Handles the initial page load: adds new pending reservation if applicable,
         * then displays all confirmed reservations and checks for pending ones.
         */
        function initializePage() {
            let allReservations = loadReservations();

            // If this is a POST request with new reservation data
            if (isPostRequest && lastReservation.hotel_name) {
                // Add a timestamp for sorting and set status to 'pending'
                lastReservation.timestamp = Date.now();
                lastReservation.status = 'pending';
                allReservations.push(lastReservation);
                saveReservations(allReservations);
                // The PHP alert for pending status is already shown.
            } else {
                // If not a POST request, hide the initial status message
                latestReservationStatusDiv.style.display = 'none';
            }

            displayReservations(allReservations);
            checkAndShowConfirmationForm();
        }

        // Event listener for confirming the booking
        confirmationForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent default form submission

            const fullName = fullNameInput.value.trim();
            const address = addressInput.value.trim();

            if (!fullName || !address) {
                alert("Please enter both your Full Name and Address to confirm."); // Using alert as per instruction, but modal is preferred
                return;
            }

            let allReservations = loadReservations();
            // Find the most recent pending reservation
            const pendingReservationIndex = allReservations.findIndex(res => res.status === 'pending');

            if (pendingReservationIndex !== -1) {
                allReservations[pendingReservationIndex].full_name = fullName;
                allReservations[pendingReservationIndex].address = address;
                allReservations[pendingReservationIndex].status = 'confirmed'; // Mark as confirmed
                saveReservations(allReservations);
                alert("Booking confirmed successfully!"); // Using alert as per instruction, but modal is preferred
                bookingConfirmationFormDiv.style.display = 'none'; // Hide the form
                displayReservations(allReservations); // Refresh the list
                latestReservationStatusDiv.innerHTML = `
                    <div class='alert alert-success text-center' role='alert'>
                        Your booking for <strong>${allReservations[pendingReservationIndex].hotel_name}</strong> has been confirmed!
                    </div>
                `;
                latestReservationStatusDiv.style.display = 'block';
            } else {
                alert("No pending reservation found to confirm."); // Using alert as per instruction, but modal is preferred
            }
        });

        // Event listener for clearing ALL reservations from localStorage
        clearAllReservationsBtn.addEventListener('click', () => {
            localStorage.removeItem(STORAGE_KEY);
            displayReservations([]); // Clear display
            bookingConfirmationFormDiv.style.display = 'none'; // Hide form if visible
            latestReservationStatusDiv.innerHTML = `
                <div class='alert alert-danger text-center' role='alert'>
                    All reservations cleared!
                </div>
            `;
            latestReservationStatusDiv.style.display = 'block';
        });

        // Initialize display and check for pending reservations on page load
        document.addEventListener('DOMContentLoaded', initializePage);
    </script>
</body>
</html>
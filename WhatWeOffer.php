<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotel_name = $_POST['hotel_name'];
    $price = str_replace(['₱', ','], '', $_POST['price']); // Remove ₱ and commas
    $room_type = $_POST['room_type'];
    $reservation_date = $_POST['date'];
    $reservation_time = $_POST['time'];
    $quantity = $_POST['quantity'];

    try {
        $stmt = $conn->prepare("INSERT INTO reservations (hotel_name, room_type, price, reservation_date, reservation_time, quantity) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$hotel_name, $room_type, $price, $reservation_date, $reservation_time, $quantity]);
        echo "<script>alert('Reservation successful!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The WG Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="whatweoffer.css" rel="stylesheet"> <style>
        /* Inline styles for quick reference, can be moved to whatweoffer.css if preferred */
        body {
            font-family: 'Inter', sans-serif; /* Using Inter font */
        }
        .navbar-brand {
            font-weight: bold;
        }
        .card.horizontal-card {
            max-width: 1000px;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            overflow: hidden;
            transition: transform 0.2s;
            border-radius: 10px; /* Rounded corners */
        }

        .card.horizontal-card:hover {
            transform: scale(1.01);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        .card.horizontal-card img {
            width: 500px;
            height: 350px;
            object-fit: cover;
            flex-shrink: 0;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .card.horizontal-card .card-body {
            padding: 20px;
            flex-grow: 1;
        }

        .card-title a {
            text-decoration: none;
            color: inherit;
            font-weight: 600;
        }

        .card-title a:hover {
            text-decoration: underline;
            color: #007bff;
        }
        .sort-container {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-outline-info {
            border-radius: 5px;
            font-size: 0.9rem;
        }
        .btn-primary {
            border-radius: 8px;
            font-size: 1rem;
            padding: 10px 20px;
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
        }
        .form-select, .form-control {
            border-radius: 5px;
        }
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
        <div class="sort-container">
            <label for="sortSelect" class="form-label mb-0 text-dark">Sort By:</label>
            <select class="form-select w-auto" id="sortSelect">
                <option value="all">All Hotels</option>
                <option value="popular">Popular</option>
                <option value="regular">Regular</option>
                <option value="unpopular">Unpopular</option>
                <option value="recommended">Recommended</option>
            </select>
        </div>
        <div class="row justify-content-center" id="hotelList">
            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel1.jpg" alt="Hilton California">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel1.php" class="hotel-name">Hilton California</a></h5>
                        <a href="hotel1.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Hilton California">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel2.jpg" alt="Hyatt Regency">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel2.php" class="hotel-name">Hyatt Regency</a></h5>
                        <a href="hotel2.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Hyatt Regency">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel3.jpg" alt="Shangri-La the Fort">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel3.php" class="hotel-name">Shangri-La the Fort</a></h5>
                        <a href="hotel3.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Shangri-La the Fort">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel4.jpg" alt="Okada Manila">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel4.php" class="hotel-name">Okada Manila</a></h5>
                        <a href="hotel4.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Okada Manila">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel5.jpg" alt="Conrad Manila">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel5.php" class="hotel-name">Conrad Manila</a></h5>
                        <a href="hotel5.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Conrad Manila">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel6.jpg" alt="Lanson Place">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel6.php" class="hotel-name">Lanson Place</a></h5>
                        <a href="hotel6.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Lanson Place">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel7.jpg" alt="The Manila Hotel">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel7.php" class="hotel-name">The Manila Hotel</a></h5>
                        <a href="hotel7.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="The Manila Hotel">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel8.jpg" alt="The Bayleaf Hotel">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel8.php" class="hotel-name">The Bayleaf Hotel</a></h5>
                        <a href="hotel8.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="The Bayleaf Hotel">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel9.jpg" alt="Azure Grand Hotel">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel9.php" class="hotel-name">Azure Grand Hotel</a></h5>
                        <a href="hotel9.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Azure Grand Hotel">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="popular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel10.jpg" alt="Celestia Royale">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel10.php" class="hotel-name">Celestia Royale</a></h5>
                        <a href="hotel10.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Celestia Royale">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="regular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel11.jpg" alt="Imperial Palace">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel11.php" class="hotel-name">Imperial Palace</a></h5>
                        <a href="hotel11.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Imperial Palace">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="regular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel12.jpg" alt="Lumière Palace">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel12.php" class="hotel-name">Lumière Palace</a></h5>
                        <a href="hotel12.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Lumière Palace">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="regular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel13.jpg" alt="Sapphire Crown">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel13.php" class="hotel-name">Sapphire Crown</a></h5>
                        <a href="hotel13.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Sapphire Crown">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="regular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel14.jpg" alt="Elysian Heights">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel14.php" class="hotel-name">Elysian Heights</a></h5>
                        <a href="hotel14.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Elysian Heights">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 hotel-card" data-category="regular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel15.jpg" alt="Aurelia Suite">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel15.php" class="hotel-name">Aurelia Suite</a></h5>
                        <a href="hotel15.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Aurelia Suite">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-12 mb-4 hotel-card" data-category="regular">
                <div class="card horizontal-card shadow mx-auto">
                    <img src="hotel16.jpg" alt="Grand Hyatt Manila">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><a href="hotel16.php" class="hotel-name">Grand Hyatt Manila</a></h5>
                        <a href="hotel16.php" class="btn btn-outline-info mb-3">For More Information</a><br>
                        <form action="Reserved.php" method="POST">
                            <input type="hidden" name="hotel_name" value="Grand Hyatt Manila">
                            <label class="form-label">Select Price:</label>
                            <select class="form-select mb-2 price-select" name="price">
                                <option>₱15,000</option><option>₱25,000</option><option>₱35,000</option><option>₱45,000</option><option>₱50,000</option>
                            </select>
                            <label class="form-label">Select Room Type:</label>
                            <select class="form-select mb-2 room-type-select" name="room_type">
                                <option>Regular</option><option>Standard</option><option>Deluxe</option><option>Executive</option><option>Luxury</option>
                            </select>
                            <label class="form-label">Select Date:</label>
                            <input type="date" class="form-control mb-2 date-input" name="date" min="2025-07-01">
                            <label class="form-label">Select Time:</label>
                            <input type="time" class="form-control time-input" name="time">
                            <label class="form-label mt-2">Select Quantity:</label>
                            <input type="number" class="form-control quantity-input" name="quantity" min="1" max="10" value="1">
                            <button type="submit" class="btn btn-primary mt-2 reserve-btn">Reserve</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sortSelect').addEventListener('change', function() {
            const selectedCategory = this.value;
            const hotelCards = document.querySelectorAll('.hotel-card');

            hotelCards.forEach(card => {
                const category = card.dataset.category;
                if (selectedCategory === 'all' || category === selectedCategory) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Set min date for all date inputs to today's date
        document.addEventListener('DOMContentLoaded', (event) => {
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
            const dd = String(today.getDate()).padStart(2, '0');
            const minDate = `${yyyy}-${mm}-${dd}`;

            document.querySelectorAll('.date-input').forEach(input => {
                input.min = minDate;
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventBook - Your Gateway to Unforgettable Experiences</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <div class="logo-icon">📅</div>
                <span>EventBook</span>
            </div>
            <ul class="nav-links">
                <li><a href="#events">Events</a></li>
                <li><a href="/EventBook/bookings.php">My Bookings</a></li>
            </ul>
            <div class="user-icon">👤</div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-badge">
             Your Gateway to Unforgettable Experiences
        </div>
        <h1>Discover & Book Amazing Events</h1>
        <p>From concerts and sports to workshops and festivals - find the perfect event for every occasion. Book tickets instantly and get exclusive access to the best experiences in your city.</p>
        <div class="hero-buttons">
            <button class="btn-primary" onclick="scrollToEvents()">Explore Events</button>
        </div>
        
        <!-- Stats -->
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Events Listed</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50K+</div>
                <div class="stat-label">Tickets Sold</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100+</div>
                <div class="stat-label">Organizers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">Cities</div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="events-section" id="events">
        <!-- Search and Filters -->
        <div class="search-filters">
            <div class="search-box">
                <span class="search-icon">🔍</span>
                <input type="searchbar" placeholder="Search events, locations...">
            </div>
        </div>

        <!-- Category Pills -->
        <div class="category-pills">
            <button class="category-pill active" data-category="All">All</button>
            <button class="category-pill" data-category="Concert">Concert</button>
            <button class="category-pill" data-category="Sports">Sports</button>
            <button class="category-pill" data-category="Workshop">Workshop</button>
            <button class="category-pill" data-category="Comedy">Comedy</button>
            <button class="category-pill" data-category="Food">Food</button>
           <button class="category-pill" data-category="Art">Art</button>
        </div>

        <!-- Featured Events -->
        <div class="section-header">
            <span class="star-icon">⭐</span>
            <h2>All Events</h2>
        </div>

        <div class="events-grid">
            <!-- Event Card 1 -->
            <div class="event-card" data-category="Concert" onclick="openBookingModal('Summer Music Festival 2025')">
                <div style="position: relative;">
                    <img src="assets/images/concert.jpeg" alt="Concert" class="event-image" style="display: block;">
                    <div class="event-badges">
                        <span class="category-badge">Concert</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Summer Music Festival 2025</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="detail-icon">📅</span>
                            <span>Tue, Jul 15, 2025</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🕐</span>
                            <span>18:00</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">📍</span>
                            <span>Vabodara</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🎫</span>
                            <span>250 tickets available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="event-card" data-category="Workshop" onclick="openBookingModal('Tech Innovation Summit')">
                <div style="position: relative;">
                    <img src="assets/images/workshop.jpeg" alt="Workshop" class="event-image" style="display: block;">
                    <div class="event-badges">
                        <span class="category-badge">Workshop</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Tech Innovation Summit</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="detail-icon">📅</span>
                            <span>Wed, Aug 20, 2025</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🕐</span>
                            <span>09:00</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">📍</span>
                            <span>San Francisco, CA</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🎫</span>
                            <span>600 tickets available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="event-card" data-category="Sports" onclick="openBookingModal('Championship Finals 2025')">
                <div style="position: relative;">
                    <img src="assets/images/sport.jpeg" alt="Sports" class="event-image" style="display: block;">
                    <div class="event-badges">
                        <span class="category-badge">Sports</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Championship Finals 2025</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="detail-icon">📅</span>
                            <span>Wed, Sep 10, 2025</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🕐</span>
                            <span>19:30</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">📍</span>
                            <span>National Park</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🎫</span>
                            <span>620 tickets available</span>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Event Card 4 -->
            <div class="event-card" data-category="Comedy" onclick="openBookingModal('Comedy Open Mic Night')">
                <div style="position: relative;">
                    <img src="assets/images/comedy.jpeg" alt="Comedy" class="event-image" style="display: block;">
                    <div class="event-badges">
                        <span class="category-badge">Comedy</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Comedy Open Mic Night</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="detail-icon">📅</span>
                            <span>Monday, July 28, 2025</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🕐</span>
                            <span>09:00</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">📍</span>
                            <span>Underground Comedy Bar</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🎫</span>
                            <span>200 tickets available</span>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Event Card 2 -->
            <div class="event-card" data-category="Food" onclick="openBookingModal('Food & Wine Festival')">
                <div style="position: relative;">
                    <img src="assets/images/food.jpeg" alt="Food" class="event-image" style="display: block;">
                    <div class="event-badges">
                        <span class="category-badge">Food</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Food & Wine Festival</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="detail-icon">📅</span>
                            <span>Friday, August 15, 2025</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🕐</span>
                            <span>12:00</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">📍</span>
                            <span>Riverside Park</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🎫</span>
                            <span>600 tickets available</span>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Event Card 2 -->
            <div class="event-card" data-category="Art" onclick="openBookingModal('Art Exhibition: Modern Perspectives')">
                <div style="position: relative;">
                    <img src="assets/images/art.jpeg" alt="Art" class="event-image" style="display: block;">
                    <div class="event-badges">
                        <span class="category-badge">Art</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Art Exhibition: Modern Perspectives</h3>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="detail-icon">📅</span>
                            <span>Wed, Aug 20, 2025</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🕐</span>
                            <span>11:00</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">📍</span>
                            <span>Modern Art Gallery</span>
                        </div>
                        <div class="event-detail">
                            <span class="detail-icon">🎫</span>
                            <span>250 tickets available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Book Your Tickets</h2>
                <button class="close-btn" onclick="closeBookingModal()">×</button>
            </div>
<form action="book_ticket.php" method="POST">
    <div class="form-group">
        <label>Event Name</label>
        <input type="text" name="event_name" id="eventName" readonly>
    </div>
    <div class="form-group">
        <label>Full Name *</label>
        <input type="text" name="full_name" required placeholder="Enter your full name">
    </div>
    <div class="form-group">
        <label>Email Address *</label>
        <input type="email" name="email" required placeholder="your@email.com">
    </div>
    <div class="form-group">
        <label>Phone Number *</label>
        <input type="tel" name="phone" required placeholder="+1 (555) 000-0000">
    </div>
    <div class="form-group">
        <label>Number of Tickets *</label>
        <select name="tickets" required>
            <option value="">Select number of tickets</option>
            <option value="1">1 Ticket</option>
            <option value="2">2 Tickets</option>
            <option value="3">3 Tickets</option>
            <option value="4">4 Tickets</option>
            <option value="5">5 Tickets</option>
        </select>
    </div>
    <button type="submit" class="submit-btn">Confirm Booking</button>
</form>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
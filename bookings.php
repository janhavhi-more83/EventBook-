<?php
include 'db_connect.php';

$result = $conn->query("
    SELECT 
        b.booking_id,
        u.full_name,
        u.email,
        u.phone,
        e.event_name,
        e.location,
        b.tickets,
        b.created_at
    FROM bookings b
    JOIN users u ON b.user_id = u.user_id
    JOIN events e ON b.event_id = e.event_id
    ORDER BY b.created_at DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings - EventBook</title>
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
                <li><a href="/EventBook/index.php">Events</a></li>
                <li><a href="/EventBook/bookings.php">My Bookings</a></li>
            </ul>
            <div class="user-icon">👤</div>
        </nav>
    </header>

    <div class="container">
            <h2>Book Your Tickets</h2>
        <?php if ($result->num_rows > 0): ?>
            <div class="booking-grid">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="booking-card">
                        <h3><?php echo htmlspecialchars($row['event_name']); ?></h3>
                        <p><strong>Name:</strong> <?php echo htmlspecialchars($row['full_name']); ?></p>
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
                        <p><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
                        <p><strong>Tickets:</strong> <?php echo $row['tickets']; ?></p>
                        <p><strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                        <small>Booked on <?php echo $row['created_at']; ?></small>

                        <div class="booking-actions">
                            <a class="delete-btn" href="delete_booking.php?id=<?php echo $row['booking_id']; ?>" 
                               onclick="return confirm('Are you sure you want to delete this booking?');">Delete</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p style="text-align:center; color:#9ca3af;">No bookings found!</p>
        <?php endif; ?>
    </div>
    </div>
</body>
</html>

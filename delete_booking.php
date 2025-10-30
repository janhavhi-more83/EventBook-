<?php
include 'db_connect.php'; // Database connection

if (isset($_GET['id'])) {
    $booking_id = intval($_GET['id']); // Sanitize input as integer

    // Prepare the DELETE statement
    $stmt = $conn->prepare("DELETE FROM bookings WHERE booking_id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $booking_id);

        if ($stmt->execute()) {
            $stmt->close();
            // Redirect back to bookings.php with success message
            header("Location: bookings.php?msg=deleted");
            exit;
        } else {
            $error = "Failed to delete booking. Please try again.";
        }
    } else {
        $error = "Database error: " . $conn->error;
    }
} else {
    $error = "Booking ID is missing!";
}

// If deletion failed, show error page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Booking - EventBook</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: #1a2332;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message-box {
            background: rgba(255,255,255,0.05);
            border: 1px solid #444;
            padding: 30px 40px;
            border-radius: 12px;
            text-align: center;
        }
        a {
            color: #6366f1;
            text-decoration: none;
            margin-top: 15px;
            display: inline-block;
        }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="message-box">
        <h2>Error</h2>
        <p><?php echo htmlspecialchars($error); ?></p>
        <a href="bookings.php">Back to Bookings</a>
    </div>
</body>
</html>

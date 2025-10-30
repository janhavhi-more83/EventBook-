<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_name = $_POST['event_name'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tickets = $_POST['tickets'];

    // Step 1: Get user_id, insert if new
    $stmt = $conn->prepare("SELECT user_id FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();

    if (!$user_id) {
        $stmt = $conn->prepare("INSERT INTO users (full_name, email, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $full_name, $email, $phone);
        $stmt->execute();
        $user_id = $stmt->insert_id;
        $stmt->close();
    }

    // Step 2: Get event_id
    $stmt = $conn->prepare("SELECT event_id FROM events WHERE event_name=?");
    $stmt->bind_param("s", $event_name);
    $stmt->execute();
    $stmt->bind_result($event_id);
    $stmt->fetch();
    $stmt->close();

    // Step 3: Insert booking
    $stmt = $conn->prepare("INSERT INTO bookings (event_id, user_id, tickets, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("iii", $event_id, $user_id, $tickets);
    if ($stmt->execute()) {
        header("Location: bookings.php");
        exit();
    } else {
        echo "Error inserting booking: " . $stmt->error;
    }
}
?>

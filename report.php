<?php
include 'db_connect.php';
$sql = "
SELECT e.event_name, SUM(b.tickets) AS total_tickets_sold
FROM bookings b
JOIN events e ON b.event_id = e.event_id
GROUP BY e.event_name
ORDER BY total_tickets_sold DESC;
";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Event Reports</title>
<style>
body { background:#0f172a; color:white; font-family:Poppins; }
table { width:70%; margin:50px auto; border-collapse:collapse; }
th, td { padding:10px 20px; border:1px solid #334155; text-align:center; }
th { background:#1e293b; color:#a5b4fc; }
tr:nth-child(even) { background:#1e293b; }
</style>
</head>
<body>
<h1 style="text-align:center;">📊 Event Booking Summary</h1>
<table>
<tr><th>Event</th><th>Total Tickets Sold</th></tr>
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['event_name']; ?></td>
    <td><?php echo $row['total_tickets_sold']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
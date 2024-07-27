<?php
include 'db.php';

$sql = "SELECT * FROM tickets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Ticket Number</th><th>Visitor Name</th><th>Visit Date</th><th>Amount</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['ticket_number']}</td><td>{$row['visitor_name']}</td><td>{$row['visit_date']}</td><td>{$row['amount']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No tickets found.";
}
?>

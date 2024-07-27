<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("Access denied. Please log in.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket_number = $_POST['ticket_number'];
    $visitor_name = $_POST['visitor_name'];
    $visit_date = $_POST['visit_date'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO tickets (ticket_number, visitor_name, visit_date, amount) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $ticket_number, $visitor_name, $visit_date, $amount);

    if ($stmt->execute()) {
        echo "Ticket added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<form method="post" action="">
    Ticket Number: <input type="text" name="ticket_number" required><br>
    Visitor Name: <input type="text" name="visitor_name" required><br>
    Visit Date: <input type="date" name="visit_date" required><br>
    Amount: <input type="number" step="0.01" name="amount" required><br>
    <input type="submit" value="Add Ticket">
</form>

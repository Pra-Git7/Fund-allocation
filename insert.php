<?php
include "connection.php";

// Collecting form data
$ref = $_POST['ref'] ?? null;
$date = $_POST['date'] ?? null;
$client = $_POST['client'] ?? null;
$site_name = $_POST['site_name'] ?? null;
$gst = $_POST['gst'] ?? null;
$invoice_date = $_POST['invoice_date'] ?? null;

// Prepare statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO `project`(`ref`, `date`, `client`, `site_name`, `gst`, `invoice_date`) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $ref, $date, $client, $site_name, $gst, $invoice_date);

if ($stmt->execute()) {
    echo "Data Added Successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
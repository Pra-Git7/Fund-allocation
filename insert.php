<?php
include "connection.php";


$ref = $_POST['ref'] ?? null;
$date = $_POST['date'] ?? null;
$client = $_POST['client'] ?? null;
$site_name = $_POST['site_name'] ?? null;
$gst = $_POST['gst'] ?? null;
$invoice_date = $_POST['invoice_date'] ?? null;

$insert_query = mysqli_query($conn,
"INSERT INTO `project`(`ref`, `date`, `client`, `site_name`, `gst`,invoice date) 
VALUES ('$ref','$date','$client','$site_name','$gst',$invoice_date') ");

if($insert_query)
{
    echo "Data Added Successfully";
}




?>



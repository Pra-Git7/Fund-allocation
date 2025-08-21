<!DOCTYPE html>
<html>  
    <head>
        <title>Displaying Data</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ref</th>
                <th>date</th>
                <th>client</th>
                <th>site_name</th>
                <th>gst</th>
                <th>invoice_date</th>
            </tr>
            <?php
            include "connection.php";

            $query = mysqli_query($conn, "SELECT fund.ref, fund.date, fund.client, fund.site_name ,fund.gst, fund.invoice_date FROM `fund`)");
            while ($top = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $top['ref']; ?></td>
                <td><?php echo $top['date']; ?></td>
                <td><?php echo $top['client']; ?></td>
                <td><?php echo $top['site_name']; ?></td>
                <td><?php echo $top['gst']; ?></td>
                <td><?php echo $top['invoice_date']; ?></td>
            </tr>
            <?php } ?>
        </table>
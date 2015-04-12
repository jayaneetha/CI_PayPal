<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thank You</title>
    </head>
    <body>
        <p>Thank You for your payment</p>
        <label>Invoice Id: <?php echo $invoice; ?></label></br>
        <label>Payment Date: <?php echo $payment_date; ?></label></br>
        <label>Transaction Id: <?php echo $txn_id; ?></label></br>
        <label>First Name: <?php echo first_name; ?></label></br>
        <label>Last Name: <?php echo $last_name; ?></label></br>
    </body>
</html>

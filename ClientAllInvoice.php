<?php include("_ClientNavbar.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>All Invoices</title>
</head>
<body>

<!-- make a table that shows all your last invoces and when pressed show the InvoiceReceipt.php with the data of that date -->

<h1 style="text-align: center;">Previous Invoices</h1>


<table class="table table-bordered">

<thead>
    <tr>
        <th>Invoice ID#</th>
        <th>Date of Invoice</th>
        <th>Total Rent Amount</th>
        <th>See My Invoice</th>
    </tr>
</thead>

<tbody>
    <tr>
        <th>#100</th>
        <th>12/22/2023</th>
        <th class="text-success">$500</th>
        <th><a href="InvoiceReceipt.php">Invoice Receipt</a></th>
    </tr>

    <tr>
        <th>#200</th>
        <th>12/22/2023</th>
        <th class="text-danger">$500 + $45 (Interest)</th>
        <th><a href="InvoiceReceipt.php">Invoice Receipt</a></th>
    </tr>


</tbody>
</table>



</body>
</html>
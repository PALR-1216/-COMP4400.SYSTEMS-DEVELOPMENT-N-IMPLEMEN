<?php include('_AllTenantNavbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <title>Document</title> -->
</head>
<body>
    
    <a style="padding: 10px; " href="AddTenant.php" class="bi bi-plus-circle">Add Tenant</a>
    <button style="margin:5px" class="btn btn-primary" onclick="window.print()"> <span style="padding-left:5px;" class="bi bi-printer-fill"></span> Tenant Report</button>


    <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> -->

<table class="table table-bordered">
    <thead>
        <th>ID</th>
        <th>Apartment Number</th>
        <th>Rent Status</th>
        <th>Name</th>
        <th>Date</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>4 Last SSN</th>
        <th>Edit</th>
        <th>Delete</th>

    </thead>

    <tbody>
        <tr class="table-success">
            <th>1</th>
            <th>100</th>
            <th>Paid</th>
            <th>Pedro</th>
            <th>12/16/2021</th>
            <th>939-414-1159</th>
            <th>palr12162000@gmail.com</th>
            <th>4444</th>
            <th style=""> <a href="editTenant.php" class="bi bi-pencil-square" style="text-align: center; font-size: 25px;"></a></th>
            <th style=""><a href="#" class="bi bi-trash" style="color:red; font-size:25px;"></a></th>
        </tr>

        <tr class="table-danger">
            <th>2</th>
            <th>110</th>
            <th>Due Amount(200)</th>
            <th>Alejandro</th>
            <th>1/20/2020</th>
            <th>939-414-1159</th>
            <th>palr12162000@gmail.com</th>
            <th>4444</th>
            <th style=""> <a href="editTenant.php" class="bi bi-pencil-square" style="text-align: center; font-size: 25px;"></a></th>
            <th style=""><a href="#" class="bi bi-trash" style="color:red; font-size:25px;"></a></th>
        </tr>


        
       
    </tbody>


</table>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>

    
</style>
</body>
</html>
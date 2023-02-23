<?php include ("_navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Complaints!</title>
</head>
<body>
    <button style="margin:5px" class="btn btn-primary" onclick="window.print()"> <span style="padding-left:5px;" class="bi bi-printer-fill"></span> Complaint Report</button>
<table class="table table-bordered">

<thead>
    <tr>
        <th>Complaint ID</th>
        <th>User ID</th>
        <th>Apartment Number</th>
        <th>Name</th>
        <th>Description</th>
        <th>Date Issued</th>
        <th>Status</th>
        <th>Edit</th>
        <!-- <th>Delete</th> -->
    </tr>
</thead>

<tbody>

<tr>
    <th>1</th>
    <th>10</th>
    <th>120</th>
    <th>Pedro</th>
    <th>Door Does not work</th>
    <th>2/21/2023</th>
    <th class="table-warning">Pending</th>
    <!-- <th>
    <select class="form-select" aria-label="Default select example">
  <option selected>Pending</option>
  <option value="1">Solved</option>
</select>
    </th> -->
    <th style=""> <a href="EditComplaints.php" class="bi bi-pencil-square" style="text-align: center; font-size: 25px;"></a></th>
    <!-- <th style=""><a href="#" class="bi bi-trash" style="color:red; font-size:25px;"></a></th> -->
</tr>

<tr>
    <th>2</th>
    <th>12</th>
    <th>200</th>
    <th>Alejandro</th>
    <th>Water comes out Cold</th>
    <th>2/22/2023</th>
    <th class="table-success"> <span class="bi bi-check2-circle"></span>Solved</th>

    <th style=""> <a href="editTenant.php" class="bi bi-pencil-square" style="text-align: center; font-size: 25px;"></a></th>
    <!-- <th style=""><a href="#" class="bi bi-trash" style="color:red; font-size:25px;"></a></th> -->

</tr>

</tbody>



</table>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
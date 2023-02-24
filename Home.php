<?php include('_navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Condominio</title>
</head>
<body>
<div class="row">
  <!-- <h1>Total tenants 24 <span class="bi bi-person-circle"></span></h1> -->

     

      <div class="row">
     

      <div class="col" style="background-color: #f6f6f6; margin:5px; border-radius:8px; overflow-y: scroll;">

      <h1>Total tenants 24 <span class="bi bi-house-door-fill"></span></h1>
      <h1>Total people Due 19 <span style="color: Red;" class="bi bi-credit-card-2-back-fill"></span></h1>
      <h1>Total People Paid 5 <span style="color: green;" class="bi bi-credit-card-2-back-fill"></span></h1>

      </div>


      <div class="col" style="background-color: #f6f6f6; margin:5px; border-radius:8px; overflow-y: scroll;">
      <h2>Total Complaints reported 2 <span class="bi bi-receipt"></span></h2>

      <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Apartment Number</th>
        <th scope="col">Name</th>
        <th scope="col">Rent</th>
        <th scope="col">Complaint</th>
      </tr>
    </thead>
    <!-- if any complaints more than 3 or 4 just send those 4 in the complaints are there you will see all the complaints -->

    <?php include('DashboardComplaints.php')?>
    
  </table>
      </div>

      </div>


<div class="row">
  <div class="col" style="background-color: #f6f6f6; margin:5px; border-radius:8px;">
  <div class="totalIncome" style="text-align: center;">

  <h1 style="padding-bottom:30px; font-weight:bold;">Total Monthly Income</h1>
    <h3>Total Rent: <strong>14,400</strong></h3>
    <h3>Total Mintenance: <strong>1,920</strong></h3>
    <h3>Total Insurance: <strong>65</strong></h3>

  </div>
 
  </div>

<!-- <div class="col"> -->
    
    <!-- if complain is  == 0 then do not show table -->
    <div class="container">
    <?php include("DashBoardChart.php");?>

    </div>
    
    <!-- </div> -->




<div class="col">
    
    <!-- if complain is  == 0 then do not show table -->

    </div>


</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
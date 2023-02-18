<?php include('_navbar.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Tenant</title>
</head>
<body>

<div class="container">

<h1 style="text-align: center;">Add Tenant</h1>
<form>
  <div class="mb-3">
    <label for="Name" class="form-label">Name of Tenant</label>
    <input type="Name" class="form-control" id="Name">

  </div>
  <div class="mb-3">
    <label for="Apa_Number" class="form-label">Apartment Number</label>
    <input type="Number" class="form-control" id="Apa_Number" name="Apa_Number">
  </div>

  <div class="mb-3">
    <label for="Phone_Number" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="Phone_Number">
  </div>


  
  <div class="input-group mb-3">
  <span class="input-group-text">Deposit</span>
  <input type="Number" class="form-control" id="Deposit" name="Deposit">

</div>
  
  <button type="submit" class="btn btn-primary">Add Tenant</button>
</form>

</div>


</body>
</html>
<?php include ('_navbar.php'); ?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit!</title>
  </head>
  <body>

  <div class="container">
    <h1 style="text-align: center;">Edit Tenant <strong>Pedro</strong></h1>

  <form>
  <div class="mb-3">
    <label class="form-label">Name of Tenant</label>
    <input type="Text" class="form-control" id="Name" placeholder="" value="Pedro">
    
  </div>

  <div class="mb-3">
    <label class="form-label">Username </label>
    <input type="Text" class="form-control" id="Name" placeholder="" value="Pedro 110">
    
  </div>

  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="Email" class="form-control" id="Email" value="palr12162000@gmail.com">
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="Text" class="form-control" id="Name" placeholder="" value="Alejandro12345">
    
    
  </div>

  <div class="mb-3">
  <label class="form-label">Apartment Number</label>
    <input type="Number" class="form-control" id="Apartment_Number" placeholder="enter Apartment Number" value="110">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  </div>

 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
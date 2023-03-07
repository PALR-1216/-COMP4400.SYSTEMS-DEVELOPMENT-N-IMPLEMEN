<?php include('_navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Condo Info</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center;">Add Condo Info </h1>

    <form>
        <div class="mb-3">
            <label class="form-label">Condo Name</label>
            <input class="form-control" type="text" placeholder="Name of the Condo here"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Owner Name</label>
            <input class="form-control" type="text" placeholder="Name of Owner Here"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Owner Phone Number or Condo Phone Number</label>
            <input class="form-control" type="number" placeholder="Phone Number Here"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Condo Email or Owner's Email</label>
            <input class="form-control" type="email" placeholder="Email Here"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Logo here</label>
            <input class="form-control" type="file" name="logo"/>
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Add Condo Info Bio</label>
        </div>
    </form>
</div>



   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
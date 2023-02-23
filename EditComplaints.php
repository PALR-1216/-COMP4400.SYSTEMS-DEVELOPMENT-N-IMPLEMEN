<?php include ("_navbar.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Complaints!</title>
  </head>
  <body>
    <div class="container">
       
        <div class="row">   

            <div class="col" style="background-color: #f6f6f6; margin:20px; padding:20px; border-radius:5px;">
            <h1 style="text-align:center;">Complaint Made by <strong>Pedro #110</strong></h1>
            <h3>Current Status: Pending</h3>

            <form method="POST" action="Complaints.php">
                <div class="mb-3" >

                <select class="form-select mb-3">
                        <option>Pending</option>
                        <option value="1">Solved</option>
                </select>

                <div class="input-group">
                    <span class="input-group-text">Send message to Tenant</span>
                    <textarea id="Message" name="Message" class="form-control"></textarea>
                </div>

                <button style="margin: 5px;" type="submit" class="btn btn-primary">Update Complaint</button>
                </div>

            </form>

            </div>
        </div>
   
    </div>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
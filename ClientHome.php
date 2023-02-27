<?php include('_ClientNavbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome User</title>
</head>
<body>

<h3><span class="bi bi-person"></span> Welcome User <strong>Pedro!</strong></h3>
    <div class="container">
    

    <!-- if has complaint show a container my complaint  -->
    <div class="row">

    <!-- <div class="col" style="background-color: #f6f6f6; margin:5px; border-radius:5px">
   

    </div> -->

    

        <div class="col" style="background-color: #f6f6f6; margin:5px; border-radius:5px; text-align:center;">
        <h2 style="text-align: center;">Your Balance</h2>
        <h5 class="text-success" style="font-weight: bold;">Amount: $500.00</h5>
        <h5 class="text-danger">Interest: $45</h5>
        <h4 class="text-danger">Past Due: <strong>3/24/2023</strong></h4>
        <a class="btn btn-danger" href="ClientPay.php">Pay Now</a>

        </div>

        <div class="col" style="background-color: #f6f6f6; margin:5px; border-radius:5px">
    <?php include("ClientCalendar.php"); ?>
    <br>
    
    </div>


        <div class="col" style="background-color: #f6f6f6; margin:5px; border-radius:5px">
        <h2 style="text-align: center;">Complaints</h2>
        <!-- if has complaint show if no then show nothing -->
        <table class="table table-bordered table-responsive">
            <thead class="table-dark">
                <tr>
                    <th>Complaint Status</th>
                    <th>Complaint</th>
                    <th>Complaint Response</th>
                </tr>
            </thead>

            <tbody>
                <tr class="table-success">
                    <th class="bi bi-check2-circle">Solved</th>
                    <th>The Water comes out Cold</th>
                    <th>I will get that fixed by Tomorrow</th>
                </tr>
            </tbody>
        </table>
        </div>


  
   

    <div class="row">
        <div class="col">
     
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
</body>
</html>
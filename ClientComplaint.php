<?php include('_ClientNavbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Make Complaint</title>
</head>
<body>

<h1 style="text-align:center;">Make a Complaint</h1>

<div class="container" style="background-color: #f6f6f6; border-radius:5px; padding:20px">
<form>
    <div class="mb-3">
        <label class="form-label">Enter Your Complaint</label>
        <input type="text" class="form-control" placeholder="Enter Message Here..." name="ClientComplaint" />

        <button style="margin-top:10px" type="submit" class="btn btn-primary">Submit Complaint</button>
    </div>
</form>

<table class="table table-bordered table  table-responsive">
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
                    <th>I will get that fix by Tomorrow</th>
                </tr>
            </tbody>
        </table>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
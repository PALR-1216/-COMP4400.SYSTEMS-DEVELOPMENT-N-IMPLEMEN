<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Expenses</title>
</head>
<body>

<h1 style="text-align:center;">Edit Expense <strong>Eletricity Bill</strong></h1>

<div class="container" style="background-color: #f6f6f6; padding:30px; border-radius:5px" >

<form method="POST" action="Expenses.php">
    <div class="mb-3">
        <label class="form-label">Edit Expense Name</label>
        <input class="form-control" required type="text" placeholder="Enter Expense Name" name="Expense_Name" value="Eletricity Bill"/>
    </div>

    <div class="mb-3">
        <label class="form-label">Edit Expense Amount</label>
        <input type="number" required class="form-control" placeholder="Enter Expense Amount $" name="Expense_Amount" value="200"/>
    </div>

    <button type="submit" class="btn btn-primary">Update Expense</button>


</form>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
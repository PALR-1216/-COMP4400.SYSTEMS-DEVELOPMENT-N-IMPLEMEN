<?php include("_navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Expenses</title>
</head>
<body>

        <a class="btn btn-primary" style="" href="AddExpense.php"> <span class="bi bi-currency-dollar"></span>Add Expense</a>
        <button style="margin:5px" class="btn btn-primary" onclick="window.print()"> <span style="padding-left:5px;" class="bi bi-printer-fill"></span> Expenses Report</button>




<h1 style="text-align:center;">Total Expenses: <strong>$4,000</strong></h1>


<?php
 
 $dataPoints = array(
	array("label"=> "Eletricity Bill", "y"=> 1000),
	array("label"=> "Water", "y"=> 400),
	array("label"=> "Maintenance ", "y"=> 2000),
	array("label"=> "Staff", "y"=> 172),
	array("label"=> "Insurance", "y"=> 500)
);
 
?>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	
	
	data: [{
		type: "column",
        showInLegend: "false",
		yValueFormatString: "$#,##0",
        legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<div class="container">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>


<table class="table" style="margin-top:30px">
    <thead>
        <tr>
            <th>Expense Amount</th>
            <th>Expense Name</th>
            <th>Date Expense Added</th>
            <th>Edit Expense</th>
            <th>Delete Expense</th>
        </tr>
    </thead>

<tbody>
    <tr>
        <th>1000</th>
        <th>Eletricity Bill</th>
        <th>2/24/2023</th>
        <th style=""> <a href="EditExpenses.php" class="bi bi-pencil-square" style="text-align: center; font-size: 25px;"></a></th>
        <th style=""><a href="#" class="bi bi-trash" style="color:red; font-size:25px;"></a></th>

    </tr>

    <tr>
        <th>400</th>
        <th>Water Bill</th>
        <th>2/24/2023</th>
        <th style=""> <a href="EditExpenses.php" class="bi bi-pencil-square" style="text-align: center; font-size: 25px;"></a></th>
        <th style=""><a href="#" class="bi bi-trash" style="color:red; font-size:25px;"></a></th>

    </tr>

    <tr>
        <th>2000</th>
        <th>Maintenance Bill</th>
        <th>2/24/2023</th>
        <th style=""> <a href="editTenant.php" class="bi bi-pencil-square" style="text-align: center; font-size: 25px;"></a></th>
        <th style=""><a href="#" class="bi bi-trash" style="color:red; font-size:25px;"></a></th>

    </tr>


    
</tbody>
</table>

</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>






    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




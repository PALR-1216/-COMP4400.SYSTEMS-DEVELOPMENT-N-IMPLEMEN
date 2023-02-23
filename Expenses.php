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

<a style="padding: 10px; " href="AddExpense.php" class="bi bi-plus-circle">Add Expense</a>

<h1 style="text-align:center;">Total Expenses: <strong>$2500</strong></h1>


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
		yValueFormatString: "#,##0.## Dollars",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<div class="container">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>


</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>






    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




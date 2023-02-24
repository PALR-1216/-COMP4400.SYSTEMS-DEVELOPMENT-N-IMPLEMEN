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


        <button style="margin:5px" class="btn btn-primary" onclick="window.print()"> <span style="padding-left:5px;" class="bi bi-printer-fill"></span> Income Report</button>




<h1 style="text-align:center;">Total Monthly Income</h1>

<form>
    <div class="mb-3" style="padding:20px">
        <label class="form-label">Enter Month to show in graph</label>
        <input type="date" required class="form-control" name="MonthDate" placeholder="Enter Date"/>
        <button type="submit" class="btn btn-primary">Search Date</button>
    </div>
</form>


<?php
 
 $dataPoints = array(
	array("label"=> "Maintenance ", "y"=> 2000),
    array("label" => "Rent" , "y" => 14400),
	array("label"=> "Insurance", "y"=> 800)
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

<h2></h2>

<table class="table" style="margin-top:30px">
    <thead>
        <tr>
            <th>Rent Total Amount</th>
            <th>Maintenance Total</th>
            <th>Insurance Total</th>
            <th>Monthly Date</th>
        </tr>
    </thead>

<tbody>
    <tr>
        <th>14,920</th>
        <th>2,000</th>
        <th>800</th>
        <th>2/30/2023</th>
        

    </tr>

    <tr>
        <th>15,000</th>
        <th>1,000</th>
        <th>600</th>
        <th>3/31/2023</th>
        

    </tr>

  


    
</tbody>
</table>

</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>






    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




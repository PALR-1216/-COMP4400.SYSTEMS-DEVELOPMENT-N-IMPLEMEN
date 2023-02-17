<?php
 
$dataPoints = array(
	array("label"=> "Eletricity Bill", "y"=> 1000),
	array("label"=> "Water", "y"=> 400),
	array("label"=> "Maintenance ", "y"=> 2000),
	array("label"=> "Staff", "y"=> 172),
	array("label"=> "Insurance", "y"=> 500)
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Expenses"
	},
	
	data: [{
		type: "pie",
		showInLegend: "false",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "$#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 
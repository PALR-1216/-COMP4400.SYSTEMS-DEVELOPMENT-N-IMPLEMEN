<?php include("_ClientNavbar.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<script>
<?php
     
 $dataPoints = array(
	array("label"=> "Total Rent", "y"=> 5000),
	array("label"=> "Total Maintenance ", "y"=> 2000),
	array("label"=> "Total Insurance", "y"=> 500)
);

?>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {       
	animationEnabled: true,
	
	
	data: [{
		type: "column",
        showInLegend: "false",
		yValueFormatString: "$#,##0",
        legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var xSnapDistance = chart.axisX[0].convertPixelToValue(chart.get("dataPointWidth")) / 2;
var ySnapDistance = 3;

var xValue, yValue;

var mouseDown = false;
var selected = null;
var changeCursor = false;

var timerId = null;

function getPosition(e) {
	var parentOffset = $("#chartContainer > .canvasjs-chart-container").offset();          	
	var relX = e.pageX - parentOffset.left;
	var relY = e.pageY - parentOffset.top;
	xValue = Math.round(chart.axisX[0].convertPixelToValue(relX));
	yValue = Math.round(chart.axisY[0].convertPixelToValue(relY));
}

function searchDataPoint() {
	var dps = chart.data[0].dataPoints;
	for(var i = 0; i < dps.length; i++ ) {
		if( (xValue >= dps[i].x - xSnapDistance && xValue <= dps[i].x + xSnapDistance) && (yValue >= dps[i].y - ySnapDistance && yValue <= dps[i].y + ySnapDistance) ) 
		{
			if(mouseDown) {
				selected = i;
				break;
			} else {
				changeCursor = true;
				break; 
			}
		} else {
			selected = null;
			changeCursor = false;
		}
	}
}

jQuery("#chartContainer > .canvasjs-chart-container").on({
	mousedown: function(e) {
		mouseDown = true;
		getPosition(e);  
		searchDataPoint();
	},
	mousemove: function(e) {
		getPosition(e);
		if(mouseDown) {
			clearTimeout(timerId);
			timerId = setTimeout(function(){
				if(selected != null) {
					chart.data[0].dataPoints[selected].y = yValue;
					chart.render();
				}   
			}, 0);
		}
		else {
			searchDataPoint();
			if(changeCursor) {
				chart.data[0].set("cursor", "n-resize");
			} else {
				chart.data[0].set("cursor", "default");
			}
		}
	},
	mouseup: function(e) {
		if(selected != null) {
			chart.data[0].dataPoints[selected].y = yValue;
			chart.render();
			mouseDown = false;
		}
	}
});

}
</script>
</head>
<body>    
<div id="chartContainer" style="height: 300px; width: 100%;"></div>  
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
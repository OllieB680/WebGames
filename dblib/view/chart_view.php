<h3>Sensor Charts</h3>
<div id="SChart_div" style="width: 0 auto; margin:auto" ></div>

<div>
	<button class="w3-bar-item w3-button w3-blue" onclick="openChartArea('OKANDNOKCHART', 'type')">% of OK + NOK</button>
	<button class="w3-bar-item w3-button w3-blue" onclick="openChartArea('OKCHART', 'type')">OK</button>
	<button class="w3-bar-item w3-button w3-blue" onclick="openChartArea('NOKCHART', 'type')">NOK</button>
</div>	

<div id="OKANDNOKCHART" class="w3-container type" style="display:none">
	<div id="schart"></div>
</div>

<div id="OKCHART" class="w3-container type" style="display:none">

</div>

<div id="NOKCHART" class="w3-container type" style="display:none">

</div>

</br>
</br>

<script type="text/javascript">    
	function openChartArea(descName, descType) {
		var i;
		var x = document.getElementsByClassName(descType);
		for (i = 0; i < x.length; i++) {
		   x[i].style.display = "none";  
		}
		document.getElementById(descName).style.display = "block"; 	
	}
</script>

<script type="text/javascript">
		// Load the Visualization API and the piechart package.
	google.load('visualization', '1', {'packages':['corechart']});      
	// Set a callback to run when the Google Visualization API is loaded.
	google.setOnLoadCallback(drawCharts);
	// draws an individual google chart using the API
	// passed in JSON data from controller
	
	function do_chart(mbpair, title, divVal, chartType, width, height)
	{		
		var data = new google.visualization.DataTable(mbpair); 		  
		 // Set chart options
		var options = {'title' : title, hAxis: {title: 'dd'},vAxis: {title: 'ee'},'width':width,'height':height, legend: { position: 'bottom' }};
		  // Instantiate and draw our chart, passing in some options.
		if (chartType == "BarChart")
			var chart = new google.visualization.BarChart(document.getElementById(divVal));
		else if (chartType == "PieChart")
			var chart = new google.visualization.PieChart(document.getElementById(divVal));
		else if (chartType == "LineChart")
			var chart = new google.visualization.LineChart(document.getElementById(divVal));
		chart.draw(data, options);
	}
	
	function drawCharts() 
	{
		var cwidth = window.innerWidth * 0.50;
		var cheight = window.innerHeight * 0.50;
		 // To draw the data charts     
		 // Create data table out of JSON data loaded from sensor_controller.php
			 
		var mbpair = <?=$cdata?>;
		 do_chart(mbpair, 'sensors', 'schart','PieChart', cwidth, cheight);
	}
</script>
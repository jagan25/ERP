<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
<div style="float:right";><a href="charts.php">CHOOSE ANOTHER GRAPH</a></div><br/>
<div style="float:right";><a href="account.php">My Homepage</a></div><br/>

<?php
	//include the library
	include "libchart/libchart/classes/libchart.php";

	//new pie chart instance
	$chart = new HorizontalBarChart(600, 170);
	//data set instance
	$dataSet = new XYDataSet();
	
	//actual data
	//get data from the database
	
	//include database connection
	include 'db.php';

	//query all records from the database
	$query = "select * from stock";

	//execute the query
	$result = mysql_query( $query );

	//get number of rows returned
	$num_results = mysql_num_rows($result);

	if( $num_results > 0){
	
		while( $row = mysql_fetch_assoc($result)){
			extract($row);
			$dataSet->addPoint(new Point("$prod_name, $quantity", $quantity));
		}
	
		//finalize dataset
		$chart->setDataSet($dataSet);
		
	$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 140));
		

		//set chart title
		$chart->setTitle("GRAPHS");
		
		//render as an image and store under "generated" folder
		$chart->render("generated/2.png");
	
		//pull the generated chart where it was stored
		echo "<img alt='Pie chart'  src='generated/2.png' style='border: 1px solid gray;'/>";
	
	}else{
		echo "No programming languages found in the database.";
	}
?>
</body>
</html>

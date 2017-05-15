<?php
include "libchart/classes/libchart.php";

    $chart = new LineChart();

	$serie1 = new XYDataSet();
	$serie1->addPoint(new Point("06-01", 273));
	$serie1->addPoint(new Point("06-02", 421));
	$serie1->addPoint(new Point("06-03", 642));
	$serie1->addPoint(new Point("06-04", 799));
	$serie1->addPoint(new Point("06-05", 1009));
	$serie1->addPoint(new Point("06-06", 1106));

	$serie2 = new XYDataSet();
	$serie2->addPoint(new Point("06-01", 280));
	$serie2->addPoint(new Point("06-02", 300));
	$serie2->addPoint(new Point("06-03", 212));
	$serie2->addPoint(new Point("06-04", 542));
	$serie2->addPoint(new Point("06-05", 600));
	$serie2->addPoint(new Point("06-06", 850));

	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("Product 1", $serie1);
	$dataSet->addSerie("Product 2", $serie2);
	$chart->setDataSet($dataSet);

	$chart->setTitle("6月份销售趋势图");
	$chart->render("demo.png");
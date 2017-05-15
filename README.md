# libchart
libchart for php bar/line/pie chart.support chinese

##step1  
composer require purelightme/libchart

##step2

include "libchart/classes/libchart.php";  
$chart = new VerticalBarChart(500, 250);  

$dataSet = new XYDataSet();  
$dataSet->addPoint(new Point("蓄电池",878));  
$dataSet->addPoint(new Point("空气滤清器",560));  
$dataSet->addPoint(new Point("前减震器",429));  
$dataSet->addPoint(new Point("后制片器",72));  
$dataSet->addPoint(new Point("前制动盘",1));  
$dataSet->addPoint(new Point("雨刷器",1));  
$dataSet->addPoint(new Point("后减震器",1));  

$chart->setDataSet($dataSet);$chart->setTitle("配件统计信息");  
$chart->render("v_bar.png");  

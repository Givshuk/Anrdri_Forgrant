<?php

use App\FusionCharts;

if (!empty($arrChartConfig)) {
    $jsonEncodedData = json_encode($arrChartConfig);
    $Chart = new FusionCharts("column2d", "MyFirstChart", "700", "400", "chart-container", "json", $jsonEncodedData);
    $Chart->render();
}
?>

<center>
    <div id="chart-container">Chart will render here!</div>
</center>
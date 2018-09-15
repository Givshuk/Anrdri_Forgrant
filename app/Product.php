<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function schedule_config($records)
    {
        $arrChartConfig = array(
            "chart" => array(
                "caption" => "",
                "subCaption" => "Графику цена на одежду",
                "xAxisName" => "Дата",
                "yAxisName" => "Цена",
                "numberSuffix" => "",
                "theme" => "gammel"
            )
        );
        foreach ($records as $key => $value) {
            static $i = 0;
            $arrChartData[$i] = [$key, $value];
            $i++;
        }
        if(empty($arrChartData))
        {
            return [] ;
        }
        $arrLabelValueData = array();
        for ($i = 0; $i < count($arrChartData); $i++) {
            array_push($arrLabelValueData, array(
                "label" => $arrChartData[$i][0], "value" => $arrChartData[$i][1]
            ));
        }
        $arrChartConfig["data"] = $arrLabelValueData;
        return $arrChartConfig;
    }

    public function intervalPrice()
    {
        return $this->hasMany(IntervalPrice::class);
    }

}

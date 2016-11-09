<?php
  //  echo
    //file_get_contents("http://www.weather-forecast.com/locations/Paris/forecasts/latest#forecast-part-0");// displays the whole weather page


  /*  $contents=file_get_contents("http://www.weather-forecast.com/locations/Paris/forecasts/latest");

    preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
    print_r($matches);// gives result of two arrays by matching the text*/


        $city=$_GET['city']; // to get diffent cities
        //$town=$_GET[''];
        $city=str_replace(" ","", $city );  // removing spaces on names of the cities eg.New York

        $contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

        preg_match('/3 Day Weather Forecast Summary:<\/b><span class="phrase">(.*?)</s', $contents, $matches);
        echo $matches[1]; // requests only number 1 array from the above results.

//$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city.$town."/forecasts/latest");
 ?>

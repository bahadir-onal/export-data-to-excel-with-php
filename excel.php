<?php

function excelcek($filename='ExportExcel',$baslik=array(),$veri=array()){

    header("Content-Encoding: UTF-8");
    header('Content-Type: text/plain; charset=utf-8');
    header('Content-disposition: attachment; filename='.$filename.'.xls');
    echo "\xEF\xBB\xBF";

    echo "<table border='1'> <th style='background: black' colspan='2'>
          <font style='color: #8b8b8b'>Arabalar</font></th><tr>";


    foreach ($baslik as $v){

        echo "<th style='background: #FFA500'>$v</th>";
    }
    echo "</tr>";

    $basliksayi=count($baslik);

    foreach ($veri as $val) {
        echo "<tr>";

        for ($i=0; $i<$basliksayi; $i++) {

            echo '<td>'.$val[$i].'</td>';
        }
        echo "</tr>";

    }
    echo '</table>';

}

?>
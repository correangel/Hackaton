<?php

    $link = mysql_pconnect("localhost", "root", "") or die("Unable To Connect To Database Server");

    mysql_select_db("prueba") or die("Unable To Connect To Northwind");

    $arr = array();

    $rs = mysql_query("SELECT colonia,count(estatus) as estado FROM per_extraviada where estatus='NoEncontrado' GROUP BY colonia");

    while($obj = mysql_fetch_object($rs)) {

        $arr[] = $obj;

    }

    // add the header line to specify that the content type is JSON
    header("Content-type: application/json");

    echo "{\"data\":" .json_encode($arr). "}";

?>
 

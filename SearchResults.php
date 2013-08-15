<?php
echo json_encode(getData());

   function getData()
   {
     $json = array();
     $json['sEcho'] = 1;
     $json['iTotalRecords'] = "150";
     $json['iTotalDisplayRecords'] = "150";

     $file = fopen('storelist.csv', 'r');
     while (($line = fgetcsv($file)) !== FALSE)
     {
        //$line is an array of the csv elements
       $json["aaData"][] = $line;
     }
     fclose($file);
     return $json;
}
?>

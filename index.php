<?php
 
$method = $_SERVER['REQUEST_METHOD']; 
 
switch ($method) {
  case 'GET':
    echo "Thanks ".htmlspecialchars($_GET["name"])."! IoT Request is cached";
 
        $Author = htmlspecialchars($_GET['name']);
        $Temprature = htmlspecialchars($_GET['t']);
        $Humidity = htmlspecialchars($_GET['h']);
        $Created_at = date("Y/m/d");
        
        if(!isset($error))
        {
            $filename = "log.csv";
        
            $column_headings = "Author, Temmprature, Humudity, Date\n";
        
            if (!file_exists($filename)) {
                file_put_contents($filename, $column_headings);
            }
        
            $Content = "$Author, $Temprature, $Humidity, $Created_at\n";
        
            file_put_contents($filename, $Content, FILE_APPEND);
        
        }
}
 

 


       


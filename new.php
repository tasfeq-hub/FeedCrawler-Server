<?php
    
    $xml = simplexml_load_file('https://rss.nytimes.com/services/xml/rss/nyt/Technology.xml');
    //print_r($xml);
    //$xml = simplexml_load_string($xml_string);
    $json = json_encode($xml);
    //$array = json_decode($json,TRUE);
    print_r($json);
    
?>

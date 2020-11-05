<?php
if(isset($_POST['begin'])) {


echo('<script src="js/script.js"></script>');


    $XMLFile = "http://thecatapi.com/api/images/get?format=xml&results_per_page=1";

    $jsonFile = file_get_contents("http://catfacts-api.appspot.com/api/facts?number=1");
    file_put_contents("catfacts.txt", $jsonFile);


    $doc = new DOMDocument();
    $data = simplexml_load_file($XMLFile);
    $data->asXML("cats.xml");


    $searchMatch = $data->xpath('//response/data/images/image');

     foreach($searchMatch as $match) {

         $condition1 = "{$match->url}";
         $condition2 = "{$match->source_url}";
          
        return;  
}

}
?>
    

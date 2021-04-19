
 



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



<div class="container">
  
<div class=ourContainer>

<div class=ourContainermain>

<?php 
$myName="abdulla";
echo "<h1> $myName </h1>";
$myAge=32;
$myJob="developer";

// echo "h1 my is".$myName."and i am ".$myAge." , and i work as a ".$myJob;
echo "h1 my is $myName and i am  $myAge, and i work as a $myJob <br/>";



$students = array ("Mark","John","Georg","Lisa");

echo $students[2]."<br/>";


$entertainment=array(

    "cartoon"=>"mickey mouse",
    "anime"=>"super mario",
    "game"=>"pokemon"
);

echo $entertainment["game"]."<br/>";

$multiEntertainment=array(
  "cartoon"=> array("name" => "mickey", "age" => 50, "publishYear" => "1920"),
  "anime"=> array("name" => "mario", "age" => 40, "publishYear" => "1980"),
  "game"=> array("name" => "pokemon", "age" => 10, "publishYear" => "1995")
);

echo "Age: ".$multiEntertainment["anime"]["age"]."<br/>";
echo "Cartoon - Name is: ".$multiEntertainment["cartoon"]["name"]." and the age is ".$multiEntertainment["cartoon"]["age"]." and the publish year is ".$multiEntertainment["cartoon"]["publishYear"].".<br/>";


?> 
</div>


</div>


</div>

    <link  rel='stylesheet' type='text/css'   href='style.css'>
  </body>
</html>
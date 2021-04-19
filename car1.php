
 



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
 $cars = array(
     array(
        "make"=>"BMW",
        "Model" => "Series 5",
        "Price" => 120,
        "Place" => "Vienna",
        "Availability" => "Available",
        "Img" => "https://images.unsplash.com/photo-1523983388277-336a66bf9bcd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
    ) ,
     array(
        "make"=>"Mercedes",
        "Model" => "Class S",
        "Price" => 125,
        "Place" => "Salzburg",
        "Availability" => "Not Available",
        "Img" => "https://images.unsplash.com/photo-1608216601876-f3623092e9ea?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2702&q=80"
    ) , 
     array (
        "make"=>"Audi",
        "Model" => "S5",
        "Price" => 140,
        "Place" => "Berlin",
        "Availability" => "Not Available",
        "Img" => "https://images.unsplash.com/photo-1612956946912-b2d8e5fd65a8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1353&q=80"
    ) ,
        array (
        "make"=>"VW",
        "Model" => "Arteon",
        "Price" => 135,
        "Place" => "Munich",
        "Availability" => "Available",
        "Img" => "https://images.unsplash.com/photo-1550955283-942921634b0d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1526&q=80"
    ) ,
   array (
        "make"=>"Tesla",
        "Model" => "Model S Plaid",
        "Price" => 145,
        "Place" => "Berlin",
        "Availability" => "Available",
        "Img" => "https://images.unsplash.com/photo-1536700503339-1e4b06520771?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
    ) ,
    array (
        "make"=>"Porsche",
        "Model" => "Panamera",
        "Price" => 145,
        "Place" => "Frankfurt",
        "Availability" => "Available",
        "Img" => "https://images.unsplash.com/photo-1611859266720-147cc87658f1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80"
    ) ,
     array (
        "make"=>"Ford",
        "Model" => "Mustang GT",
        "Price" => 130,
        "Place" => "Melbourne",
        "Availability" => "Not Available",
        "Img" => "https://images.unsplash.com/photo-1566008885218-90abf9200ddb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80"
    ) ,
    
    array (
         "make"=>"Lexus",
        "Model" => "RC-350F",
        "Price" => 135,
        "Place" => "New York",
        "Availability" => "Available",
        "Img" => "https://images.unsplash.com/photo-1598551292182-1df7b0c7504c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
    )
);
foreach ($cars as $key => $x_value) {
    // echo "$key : $value <br>";

    echo '
    <div class="card-group">
    <div class="card" >
    <img class="card-img-top w-50 m-auto" src="'.$x_value['Img'].'">
        <div class="card-body">
            <h5 class="card-title">' . $x_value['make'] . ' - ' . $x_value["Model"] . ' </h5>
            <p class="card-text">Location: ' . $x_value['Place'] . '</p>
            <p class="card-text">Daily rent: ' . $x_value['Price'] . '</p>
             <p class="card-text">car Availablity: ' . $x_value['Availability'] . '</p>
            <a href="#" class="btn btn-dark">See details</a>
        </div>
    </div>
    </div>

';



}


echo "<pre>";
print_r ( $cars);
echo"</pre>";



echo "<hr>\n"; 

echo "Copyright ".date("Y.m.d | H:i:s T");

?> 
</div>


</div>


</div>

   
  </body>
</html>
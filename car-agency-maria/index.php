<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Agency</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link  rel='stylesheet' type='text/css'   href='style.css'>
</head>
<body>
    <div class="container">
        <h1>Car Rental Agency</h1>


        

        <?php
            $cars = array(
                array ("make" => "Fiat", "model" => "500L", "availability" => true, "location" => "Wien", "pricPerDay" => 90.00, "image" => "https://images.pexels.com/photos/1009873/pexels-photo-1009873.jpeg?cs=srgb&dl=pexels-mike-1009873.jpg&fm=jpg"),
                array ("make" => "Fiat", "model" => "500X", "availability" => true, "location" => "Wien", "pricPerDay" => 120.00, "image" => "https://images.pexels.com/photos/1009873/pexels-photo-1009873.jpeg?cs=srgb&dl=pexels-mike-1009873.jpg&fm=jpg"),
                array ("make" => "Fiat", "model" => "124 Spider", "availability" => true, "location" => "Graz", "pricPerDay" => 110.00, "image" => "https://images.pexels.com/photos/1009873/pexels-photo-1009873.jpeg?cs=srgb&dl=pexels-mike-1009873.jpg&fm=jpg"),
                array ("make" => "Ford", "model" => "B5", "availability" => true, "location" => "Graz", "pricPerDay" => 120.00, "image" => "https://images.pexels.com/photos/1007410/pexels-photo-1007410.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
                array ("make" => "BMW", "model" => "2er Gran Tourer", "availability" => false, "location" => "Wien", "pricPerDay" => 120.00, "image" => "https://images.pexels.com/photos/892522/pexels-photo-892522.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
                array ("make" => "BMW", "model" => "i8", "availability" => true, "location" => "Wien", "pricPerDay" => 99.00, "image" => "https://images.pexels.com/photos/892522/pexels-photo-892522.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
                array ("make" => "Audi", "model" => "A3", "availability" => true, "location" => "Wien", "pricPerDay" => 120.00, "image" => "https://images.pexels.com/photos/1035108/pexels-photo-1035108.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
                array ("make" => "Audi", "model" => "R8", "availability" => true, "location" => "Wien", "pricPerDay" => 190.00, "image" => "https://images.pexels.com/photos/1035108/pexels-photo-1035108.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
            );
        ?>

<div class='row row-cols-1 row-cols-md-3 g-4'>


        
            <?php

                $size = count($cars);
                for($i = 0; $i < $size; $i++)
                {
                    // echo "<div class='card text-white bg-secondary mb-4' style='width: 18rem;'>
                    // <img src='".$cars[$i]["image"]."' class='card-img-top' alt='". $cars[$i]["make"]."'>
                    // <div class='card-body'>
                    //     <h5 class='card-title'>". $cars[$i]["make"]." ".$cars[$i]["model"]."</h5>
                    //     <p class='card-text'>Location: ".$cars[$i]["location"]."<br/>"."Price per day: €".$cars[$i]["pricPerDay"].".00</p>
                    //     <a href='#' class='btn btn-warning'>Rent this car</a>
                    // </div>
                    // </div>";
                   
                    

                    echo "
                        <div class='col'>
                            <div class='card h-100 border-0 rounded'>
                                <img src='".$cars[$i]["image"]."' class='card-img-top' alt='". $cars[$i]["make"]."'>
                                <div class='card-body'>
                                    <h5 class='card-title'>". $cars[$i]["make"]." ".$cars[$i]["model"]."</h5>
                                    <p class='card-text'>Location: ".$cars[$i]["location"]."<br/>"."Price per day: €".$cars[$i]["pricPerDay"].".00</p>
                                </div>    
                                <div class='card-footer'>
                                    <small class='text-muted'><a href='#' class='btn btn-warning'>Rent this car</a></small>
                                </div>
                            </div>
                        </div>";   
                }
                   
            ?>
        </div>
        
        

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
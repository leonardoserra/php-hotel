<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel Research</title>
    </head>
    <body>
        <?php

            $hotels = [

                [
                    'name' => 'Hotel Belvedere',
                    'description' => 'Hotel Belvedere Descrizione',
                    'parking' => true,
                    'vote' => 4,
                    'distance_to_center' => 10.4
                ],
                [
                    'name' => 'Hotel Futuro',
                    'description' => 'Hotel Futuro Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 2
                ],
                [
                    'name' => 'Hotel Rivamare',
                    'description' => 'Hotel Rivamare Descrizione',
                    'parking' => false,
                    'vote' => 1,
                    'distance_to_center' => 1
                ],
                [
                    'name' => 'Hotel Bellavista',
                    'description' => 'Hotel Bellavista Descrizione',
                    'parking' => false,
                    'vote' => 5,
                    'distance_to_center' => 5.5
                ],
                [
                    'name' => 'Hotel Milano',
                    'description' => 'Hotel Milano Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 50
                ],

            ];
            echo "<pre>";

            echo "<h1>Hotel Search</h1>";

            

            foreach($hotels as $index => $hotel){
                foreach($hotel as $hotelInfo){
                    echo $hotelInfo . "<br>";
                }
            }

            echo "</pre>";

            echo "<hr/>";
            echo "<div>debug</div>";
            var_dump($hotels);


        ?>
    </body>
</html>
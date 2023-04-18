<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel Research</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>

        <header>
        <h1 class="text-center">Hotel Search</h1>
        <form action="index.php" method="GET">
            <div class="d-flex justify-content-between flex-wrap my-2">
                <label for="vote" class="form-label">Cerca per Voto</label>
                <input type="number" id="vote" class="form-control my-2" name="vote" placeholder="Filtra per numero stelle" min="1" max="5"/>
                <select class="form-select my-2" name="parking">
                    <option selected value="all">-tutti-</option>
                    <option value="yes">Con Parcheggio</option>
                    <option value="no">Senza Parcheggio</option>
                </select>
            </div>
            <button class="btn btn-primary my-2" type="submit">Filtra</button>
            <button class="btn btn-warning my-2" type="reset">Reimposta</button>
        </form>
        </header>

        <!-- blocco php -->
        <?php

            $vote = $_GET['vote'];
            $parking = $_GET['parking'];
            

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

            //inizio codice
            echo "<table class='table table-striped'>
                        <thead >
                            <tr >
                                <th class='col-2'>Nome</th>
                                <th class='col-2'>Descrizione</th>
                                <th class='col-2'>Parcheggio</th>
                                <th class='col-2'>Voto</th>
                                <th class='col-2'>Distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody>";
                        foreach($hotels as $key1 => $hotel){ 
                            // foreach($hotel as $key => $hotelInfo){
                                if($parking === 'all' || $parking == null){
                                    // echo 'all';
                                }
                            echo "<tr>
                                    <td class='col-2'>".$hotel['name']."</td>
                                    <td class='col-2'>".$hotel['description']."</td>
                                    <td class='col-2'>".$hotel['parking']."</td>
                                    <td class='col-2'>".$hotel['vote']."</td>
                                    <td class='col-2'>".$hotel['distance_to_center']."</td>
                                </tr>";
                            // }
                        }
                        "</tbody>
                    </table>";
                            

            //ciclo l'array
                //ciclo ogni elemento di ogni hotel
                //             <tr>";
                //             foreach($hotel as $key => $hotelInfo){
                //                 echo    "<th>" .$key."</th>";
                //                 }
                //             "</tr>
                echo"<table class='table table-striped'>
                        <thead >
                            <tr >
                                <th class='col-2'>Nome</th>
                                <th class='col-2'>Descrizione</th>
                                <th class='col-2'>Parcheggio</th>
                                <th class='col-2'>Voto</th>
                                <th class='col-2'>Distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody>";
            foreach($hotels as $key1 => $hotel){
                echo"<table class='table table-striped'>
                        <thead >
                            <tr >
                                <th class='col-2'>Nome</th>
                                <th class='col-2'>Descrizione</th>
                                <th class='col-2'>Parcheggio</th>
                                <th class='col-2'>Voto</th>
                                <th class='col-2'>Distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>";
                            foreach($hotel as $key => $hotelInfo){

                                if($parking === 'all' || $parking == null){
                                    // echo 'all';
                                    echo "<td class='col-2'>" .$hotelInfo."</td>";
                                }elseif($parking == 'yes'){
                                    // echo 'true';
                                    if($hotel['parking'] === true){
                                        echo "<td class='col-2'>" .$hotelInfo."</td>";
                                    }
                                }elseif($parking === 'no'){
                                    // echo 'false';

                                    if($hotel['parking'] === false){
                                        echo "<td class='col-2'>" .$hotelInfo."</td>";
                                    }
                                }

                                
                            }
                echo        "</tr>
                        </tbody>
                    </table>";
            }


            
            
            
            
            //debug
            echo "<hr/>";
            echo "<div>debug</div>";
            var_dump($hotels);


        ?>
    </body>
</html>
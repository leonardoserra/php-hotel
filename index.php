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
        <form class="d-flex justify-content-between flex-wrap">
            <input type="number" class="form-control" name="vote" placeholder="Filtra per numero stelle" min="1" max="5"/>
            <select class="form-select" name="parking">
                <option selected value="all">-tutti-</option>
                <option value="true">Con Parcheggio</option>
                <option value="false">Senza Parcheggio</option>
            </select>
            <button type="submit">Filtra</button>
            <button type="reset">Reimposta</button>
        </form>
    </header>    

        <!-- blocco php -->

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

            //inizio codice
            
            

            //ciclo l'array
            foreach($hotels as $key1 => $hotel){
                //ciclo ogni elemento di ogni hotel
                //             <tr>";
                //             foreach($hotel as $key => $hotelInfo){
                //                 echo    "<th>" .$key."</th>";
                //                 }
                //             "</tr>

            echo    "<table class='table table-striped'>
                        <thead >
                            <tr >
                                <th class='col-1'>".$key1 + 1 ."</th>
                                <th class='col-2'>Nome</th>
                                <th class='col-2'>Descrizione</th>
                                <th class='col-2'>Parcheggio</th>
                                <th class='col-2'>Voto</th>
                                <th class='col-2'>Distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                            <th class='col-1'> </td>";
                            foreach($hotel as $key => $hotelInfo){
                            echo    "<td class='col-2'>" .$hotelInfo."</td>";
                            }
            echo            "</tr>
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
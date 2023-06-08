<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
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
?>  

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro</th>
        </tr>
    </thead>
    <tbody>
    <?php
    
    // filtro per "parking" == 1
    $fileredHotels = [];

    if (isset($_GET['parking']) && $_GET['parking'] == 1) {
        foreach ($hotels as $hotel) {
            if ($hotel['parking']) {
                $fileredHotels[] = $hotel;
            }
        }
    } else {
        $fileredHotels = $hotels;
    }

    // stampare hotel in pagina
    foreach ($fileredHotels as $hotel) {
        echo "<tr>";
        echo "<td>" . $hotel['name'] . "</td>";
        echo "<td>" . $hotel['description'] . "</td>";
        echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
        echo "<td>" . $hotel['vote'] . "</td>";
        echo "<td>" . $hotel['distance_to_center'] . "</td>";
        echo "</tr>";
    }
    
    ?>
    </tbody>
</table>
</body>
</html>
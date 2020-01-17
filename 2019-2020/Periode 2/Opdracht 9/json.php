<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$jsonData = '{
    "concerten": [{
            "id": 1,
            "artist": "Lana Del Rey",
            "locatie": "Ziggo Dome",
            "stad": "Amsterdam, The Netherlands",
            "datum": "11-01-2020",
            "tijd": "20:00 tot 01:00",
            "status": "Uitverkocht"
        },
        {
            "id": 2,
            "artist": "Lana Del Rey",
            "locatie": "AccorHotels Arena",
            "stad": "Paris, France",
            "datum": "14-01-2020",
            "tijd": "22:00 tot 02:00",
            "status": "Uitverkocht"
        },
        {
            "id": 3,
            "artist": "Lana Del Rey",
            "locatie": "Mercedes-Benz Arena",
            "stad": "Berlin, Deutschland",
            "datum": "25-01-2020",
            "tijd": "19:30 tot 23:00",
            "status": "Kaarten beschikbaar"
        }
    ]
}';

echo $jsonData;
?>

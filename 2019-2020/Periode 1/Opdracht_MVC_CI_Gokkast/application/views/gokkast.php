<html>
    <head>
        <title>Gokkast</title>
        <style>
        * { 
            font-family: Arial; 
            font-size: 60px;
        }

        .btn, #win, #verlies {
            color: white;
            background-color: black;
            font-size: 80px;
            text-decoration: none;
            border: 1px solid black;
        }

        #win {
            font-size: 80px;
            color: white;
            background-color: green;
        }

        #verlies {
            font-size: 80px;
            color: white;
            background-color: red;
        }

        img {
            max-width:300px;
            max-height:300px;
            width: auto;
            height: auto;
        }
        </style>
    </head>
    <body>
        <h1>Bastiaan's Super AWS Gokkast</h1>
        <p>Gooi nu &euro;1,- in deze gokkast en maak kans op &euro;0,50</p>
        <a class="btn" href="/gokkast">Draaien</a><span id="<?php echo $winID; ?>"><?php echo $win; ?></span><br><br>
        <div id="rollen">
            <img src="http://127.0.0.1/pics/<?php echo $rollen["rol0"]; ?>.png">
            <img src="http://127.0.0.1/pics/<?php echo $rollen["rol1"]; ?>.png">
            <img src="http://127.0.0.1/pics/<?php echo $rollen["rol2"]; ?>.png">
        </div>
        
    </body>
</html>
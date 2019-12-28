<?php
/*    
     **** THEORIE
     Als in een GET-request het volgende staat:
     GET http://www.slagerijtimmermans.nl/index.php?hoofdstuk=2&pagina=5 HTTP/1.1
     
     Dan is de querystring het gedeelte na het vraagteken, hier dus:
     hoofdstuk=2&pagina=5
     'hoofdstuk' en 'pagina' zijn variabelen 
     '2' en '5' de values die daarbij horen.
	*/

/* 
	**** OPDRACHT
	Schrijf hier de php-code die de de gegevens laat zien die met een GET-request zijn verstuurd.
	Met de ingebouwde php-functie var_dump() is het mogelijk om de inhoud van een array te tonen.
	*/

//
echo var_dump($_GET);

/*    
     **** THEORIE
     Als in een POST-request het volgende staat:
     POST http://www.slagerijtimmermans.nl/index.php HTTP/1.1
     hoofdstuk=2&pagina=5
     
     Dan staan in de body van het request de opgestuurde gegevens, hier dus:
     hoofdstuk=2&pagina=5
     'hoofdstuk' en 'pagina' zijn variabelen
     '2' en '5' de values die daarbij horen.
	*/

/* 
	**** OPDRACHT
	Schrijf hier de php-code die de gegevens laat zien die met een POST-request zijn verstuurd.
	*/

echo var_dump($_POST);

/*    
    **** THEORIE
    Wanneer gegevens versturen via een GET- of een POST-request?
    GET: om een pagina op te vragen. Variabelen en de values stuur je mee om specifieker aan te geven welke data je wilt hebben.
    POST: om variabelen en values op te sturen naar de server en daar op te slaan.*/

?>

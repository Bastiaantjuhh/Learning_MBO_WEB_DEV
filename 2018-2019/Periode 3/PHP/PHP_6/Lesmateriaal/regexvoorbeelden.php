<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!doctype html>
<html>
  	<head>
    	<meta charset="utf-8" />
	</head>
	<body>
		<p>
			<?php
   // Zoek naar een string in een string
   echo preg_match("/allemaal/", "Hallo allemaal") . "<br />";
   echo preg_match("/o a/", "Hallo allemaal") . "<br />";

   //Gereserveerde characters {}[]()^$|*+?\  moet je escapen
   echo preg_match("/2\+2/", "2+2=4") . "<br />";

   //Character factorypattern
   $string = "Als de kat van huis is, dansen de muizen op tafel.";
   echo preg_match('/kat/', $string) . "<br />"; // 'cat'
   echo preg_match('/ka[^$rtn] van [bh]uis/', $string) . "<br />"; // 'nat, 'rat', 'kat' => ?at
   echo preg_match('/item[01234]/', $string) . "<br />"; // 'item0' t/m 'item4 => item?

   //Anchors aan het begin of juist einde
   echo preg_match("/^houdster/", "huishoudster") . "<br />";
   echo preg_match("/houdster$/", "huishoudster") . "<br />";
   echo preg_match("/houdster$/", "huishoudster\n") . "<br />";
   echo preg_match("/^[\$€]35/", "$35,-") . "<br />"; // '€35 of $35'

   //				// Verkort schrijven
   //				// [0123456789] → [0-9]
   echo preg_match("/^[123456789]0$/", "10") . "<br />";
   echo preg_match("/[1-9]0/", "20") . "<br />";
   // [abcdefghijklmnopqrstuvwxyz] → [a-z]
   echo preg_match("/letter [abcdefghijklmnopqrstuvwxyz]/", "letter d") .
       "<br />";
   echo preg_match("/letter [a-z]/", "letter e") . "<br />";

   //				// Pattern modifiers
   echo preg_match("/kat/", "KAT") . "<br />";
   echo preg_match("/kat/i", "KAT") . "<br />";

   //				//Alternation character of..of..of etc.
   echo preg_match("/(kat|hond|vogel)/", "katten en honden"); // kat

   //				//Afkortingen
   //				//		\d  (digit) is een nummer, en staat voor [0-9]
   //				//		\s  (space) is een whitespace (spatie, enter, carriage return, tab) teken en staat voor [\ \t\r\n\f]
   //				//		\w  (word) is een woord teken en staat voor [0-9a-zA-Z_]
   //				//		\D  geen cijfer [^0-9]
   //				//		\S  NOT \s [^\ \t\r\n\f]
   //				//		\W  NOT \w [^0-9a-zA-Z_], het '.' teken zal elk teken matchen behalve '\n'
   //
   //Grouperen
   preg_match("/(19|20)\d\d/", "2030"); // /d betekent digit, dus hier twee digits

   // Repeterende matches
   // a? = match 'a' 0 of 1 keer
   // a* = match 'a' 0 of meer keer
   // a+ = match 'a' 1 of meer keer
   // a{n,m} = match a op zijn minst n keer, maar niet meer dan m keer
   // a{n,} = match a op zijn minst n keer
   // a{n} = match a precies n keer
   echo preg_match("/[1-9]+\s?[a-z]{2}/", "5261 bz") . "<br />"; // een lowercase woord met op zijn minst een spatie en meerdere nummers

   //				// Wat matched onderstaande ? \s staat voor space \D staat voor geen nummer ([^0-9])
   echo preg_match("/\d{4}\s\D{2}/", "???????") . "<br />";
   echo preg_match("/<{1}\w+>{1}/", "twee <b>is</b> > dan een") . "<br />";
   echo preg_match("/^\d{4}\s*[A-Z]{2}$/i", "1234   AA");
   echo preg_match(
       "/(<script>){1}.*(<\/script>){1}/",
       "<script>twee <b>is</b> > dan een</script>"
   ) . "<br />";
   echo preg_match(
       "/(<script){1}.*/",
       "<script>twee <b>is</b> > dan een</script>"
   ) . "<br />";

//                // De laatste twee zijn niet goed genoeg om <script> te voorkomen!
//                // < script (met een spatie wordt bijvoorbeeld nog niet voorkomen.
//
//                // Bij het tonen van gegevens die ooit door een gebruiker zijn ingevoerd ALTIJD (om bv. <script> te voorkomen):
//                echo filter_var("<script>twee <b>is</b> > ' dan één</script>", FILTER_SANITIZE_SPECIAL_CHARS);
//                // of
//                echo '<br>';
//                echo htmlentities("<script>twee <b>is</b> > ' dan één</script>"); // converteert ook bv. é naar ampersand code (noemen ze entities in documentatie)
//                // of (DIT IS DE BESTE OPTIE)
//                echo '<br>';
//                echo htmlspecialchars("<script>twee <b>is</b> > ' dan één</script>"); // converteert alleen " & < >
?>
		</p> 
	</body>
</html>
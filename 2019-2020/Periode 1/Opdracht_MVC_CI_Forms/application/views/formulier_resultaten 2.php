<html>
<head>
    <title>Formulier</title>
    <style>
    * {
        font-family: Arial;
    }
    </style>
</head>
<body>
<h1>Resulaten</h1>
<table>
<tr>
    <th>Naam</th>
    <th>Email</th>
    <th>Antwoord</th>
</tr>
<?php
//var_dump($data);
//var_dump($data);
?>foreach ($data as $item) {
    echo "<tr>";
    echo "<th>" . $item->naam . "</th>";
    echo "<th>" . $item->email . "</th>";
    echo "<th>" . $item->bericht . "</th>";
    echo "</tr>";
} ?>
</table>
</body>
</html>

<!--
    <table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
-->
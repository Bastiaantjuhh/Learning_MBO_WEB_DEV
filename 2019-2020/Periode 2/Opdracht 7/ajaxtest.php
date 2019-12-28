<?php
if (isset($_GET["data"]) && !empty($_GET["data"])) {
    $data = $_GET["data"];
    $sql = new mysqli("mysql", "root", "root", "school");
    $query = $sql->query(
        "SELECT naam,woonplaats FROM namen WHERE naam LIKE '{$data}%';"
    );

    while ($row = $query->fetch_assoc()) {
        echo "<h3>";
        echo $row["naam"];
        echo ", ";
        echo $row["woonplaats"];
        echo "</h3>";
    }
}
?>

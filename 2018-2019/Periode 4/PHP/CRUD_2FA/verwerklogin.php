<?php
require "sql_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $wachtwoord = hash("sha1", $_POST["password"]);
    $twofa = $_POST["2fa_code"];

    $queryLogin = $sql->query(
        "SELECT * FROM medewerkers WHERE gebruikersnaam = '" .
            $username .
            "' AND wachtwoord = '" .
            $wachtwoord .
            "'"
    );

    if ($queryLogin->num_rows > 0) {
        while ($x = mysqli_fetch_assoc($queryLogin)) {
            $twofaCheck = $tfa->verifyCode($x["straat"], $twofa);
        }

        if ($twofaCheck === true) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $_POST["username"];

            header("location: medewerker_tonen.php");
        } else {
            echo "<p>2FA token incorrect</p>";
        }
    } else {
        echo "<p>Login onjuist</p>";
    }

    // $result = $tfa->verifyCode($_SESSION['secret'], $_POST['verification']);
} else {
    header("location: login.php");
}
?>


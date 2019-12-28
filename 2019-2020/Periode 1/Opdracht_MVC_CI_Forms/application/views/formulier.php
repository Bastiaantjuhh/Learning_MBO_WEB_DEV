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
    <?php echo validation_errors(); ?>
    <?php echo form_open('/formulier/post'); ?>
        <input type="text" name="naam" value="" placeholder="Voor- & achternaam"/>
        <input type="text" name="email" value="" placeholder="E-mail address"/>

        <p>Vindt je het leuk hier?</p>
        <p>Ja <input type="radio" name="mening" value="ja"></p>
        <p>Nee <input type="radio" name="mening" value="nee"></p>

        <input type="submit" value="Submit" />

        <a href="/formulier/resultaten">Resultaten</a>
    </form>
</body>
</html>
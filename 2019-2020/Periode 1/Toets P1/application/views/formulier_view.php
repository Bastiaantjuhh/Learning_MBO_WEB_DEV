<html>
<head>
    <title>Formulier</title>
</head>
<body>
<?php echo form_open('/formulier/post'); ?>
<p>Van: 
    <select name="van">
        <?php foreach ($data as $item) {
        	echo '<option value="' .
        		$item->iduser .
        		'">' .
        		$item->user_name .
        		'</option>';
        } ?>
    </select>
</p>
<p>Aan: 
    <select name="aan">
        <?php foreach ($data as $item) {
        	echo '<option value="' .
        		$item->iduser .
        		'">' .
        		$item->user_name .
        		'</option>';
        } ?>
    </select>
</p>
<textarea name="bericht"></textarea>
<input type="submit" value="OK">
</form>
</body>
</html>
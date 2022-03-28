<!DOCTYPE HTML>
<html xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
        
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/login.php" method="post" class="pure-form pure-form-stacked">
	
		<label for="id_login"> Login:</label>
                <input type="text" id="id_login" name="login" /><br><br>

		<label for="id_haslo">Hasło: </label>
                <input id="id_haslo" type="password" name="haslo" /><br><br>

	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>

</body>
</html>
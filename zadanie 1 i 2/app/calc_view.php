<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body style="background-color:white">
 

<div style="position:absolute; left:30%; top: 10%; border: 2px solid powderblue; padding: 20px; font-family:courier">
<h3 style="color:pink; text-align:center; font-size:200%;"> Kalkulator pierwszoklasisty </h3><br>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">

<label style="text-align:center" for="id_x"><b> Liczba pierwsza </b></label>
<input type="text" id="id_x" style="margin:0 auto; border: 2px solid powderblue; float:center " name="x" value="<?php if(isset($_REQUEST['x'])) print($_REQUEST['x']); ?>"/><br><br>

<select name="operacja" style="margin: 0 auto">
<option value="plus">Dodawanie</option>
<option value="minus">Odejmowanie</option>
<option value="razy">Mnożenie</option>
<option value="przez">Dzielenie</option>
</select><br><br>

<label style="text-align:center" for="id_y"><b> Liczba druga </b></label>
<input type="text" id="id_y" style="margin:0 auto; border: 2px solid powderblue" name="y" value="<?php if(isset($_REQUEST['y'])) print($_REQUEST['y']); ?>"/><br><br>

<button type="submit" style="background-color: powderblue; margin-left:180px">Wyślij</button>
<a href='/Próbny/login.php'>Wyloguj</a>
</form>
<?php if (isset($wynik)){ ?>
<br><div style="border-radius: 5px; background-color: white; width:300px; padding: 10px; text-align:center; margin-left: 100px; color:darkviolet"><b><?php
echo 'Wynik: '.$wynik; ?>
</b></div>

 <?php } ?>

</div>



</body>
</html>

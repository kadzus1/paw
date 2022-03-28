
<?php //góra strony z szablonu 
include 'C:\xampp\htdocs\PhpProject1\templates\top.php';
?>

			
			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Najpierw zaloguj się </h2>
						</header>
						<form method="post" action="<?php print(_APP_URL);?>/app/calc.php" class="cta">
							<div class="row gtr-uniform gtr-50">
                                                            <div class="col-8 col-12-xsmall"><input type="text" name="id_x" id="id_x" placeholder="Podaj pierwszą liczbę" value="<?php if(isset($_REQUEST['x'])) print($_REQUEST['x']); ?>"/></div><br>
                                                                            <select name="operacja">
                                                                                <br><option value="plus">Dodawanie</option>
                                                                            <option value="minus">Odejmowanie</option>
                                                                            <option value="razy">Mnożenie</option>
                                                                            <option value="przez">Dzielenie</option>
                                                                            </select><br><br>
                                                                <div class="col-8 col-12-xsmall"><input type="text" name="id_x" id="id_y" placeholder="Podaj drugą liczbę" value="<?php if(isset($_REQUEST['y'])) print($_REQUEST['y']); ?>"/></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Policz" class="fit primary" /></div>
                          
							</div>
						</form>
					</div>
				</section>
  
<?php if (isset($wynik)){ ?>
<br><div style="border-radius: 5px; background-color: white; width:300px; padding: 10px; text-align:center; margin-left: 100px; color:darkviolet"><b><?php
echo 'Wynik: '.$wynik; ?>
</b></div>

 <?php } ?>

</div>
 <?php //góra strony z szablonu 
include 'C:\xampp\htdocs\PhpProject1\templates/bottom.php';
?> 
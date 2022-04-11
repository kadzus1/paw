{extends file= "main.tpl"}

{block name=content}

			<div class="wrapper style2 special fade">
	<a href="{$conf->_ACTION_URL}logout" class="col-4 col-12-xsmall">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>
			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
<section id="five" class="wrapper style2 special fade">
					<div class="container">
                                            <form method="post" action="{$conf->_ACTION_URL}calcCompute" class="cta">
							<div class="row gtr-uniform gtr-50">
                                                            <div class="col-8 col-12-xsmall"><input type="text" name="x" id="id_x" placeholder="Podaj pierwszą liczbę" /></div><br>
                                                                            <div class="col-8 col-12-xsmall"><select name="operacja">
                                                                            <option value="kwadrat">Kwadrat</option>
                                                                            <option value="prostokat">Prostokąt</option>
                                                                            <option value="trojkat">Trójkąt</option>
                                                                            </select><br>
                                                                            <div class="col-8 col-12-xsmall"><input type="text" name="y" id="id_y" placeholder="Podaj drugą liczbę" "/></div>
                                                                            <br><div class="col-4 col-12-xsmall"><input type="submit" value="Policz" class="fit primary" /></div>
                                                                {if (isset($wynik))}
                                                                <br><div class="button default"><b>
                                                                           {$wynik}
                                                                 </b></div>
                                                                {/if}
                          
							</div>
						</form>
					</div>
				</section>
  

</div>>
{include file='messages.tpl'}

{/block}

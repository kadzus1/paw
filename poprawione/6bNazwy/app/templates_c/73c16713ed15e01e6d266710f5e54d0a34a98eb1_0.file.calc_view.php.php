<?php
/* Smarty version 4.1.0, created on 2022-03-30 19:44:16
  from 'C:\xampp\htdocs\PoprawionyProjekt\app\calc_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624496f0d364d6_52948714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73c16713ed15e01e6d266710f5e54d0a34a98eb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PoprawionyProjekt\\app\\calc_view.php',
      1 => 1648662255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624496f0d364d6_52948714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377464291624496f0d27185_72621696', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1307302390624496f0d28060_06854312', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_377464291624496f0d27185_72621696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_377464291624496f0d27185_72621696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1307302390624496f0d28060_06854312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1307302390624496f0d28060_06854312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			
			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_APP_URL']->value;?>
/app/calc.php" class="cta">
							<div class="row gtr-uniform gtr-50">
                                                            <div class="col-8 col-12-xsmall"><input type="text" name="x" id="id_x" placeholder="Podaj pierwszą liczbę" value="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
"/></div><br>
                                                                            <select name="operacja">
                                                                                <br><option value="plus">Dodawanie</option>
                                                                            <option value="minus">Odejmowanie</option>
                                                                            <option value="razy">Mnożenie</option>
                                                                            <option value="przez">Dzielenie</option>
                                                                            </select><br><br>
                                                                <div class="col-8 col-12-xsmall"><input type="text" name="y" id="id_y" placeholder="Podaj drugą liczbę" value="<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
"/></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Policz" class="fit primary" /></div>
                                                                <?php if (((isset($_smarty_tpl->tpl_vars['wynik']->value)))) {?>
                                                                <br><div ><b>
                                                                           <?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>

                                                                 </b></div>
                                                                <?php }?>
                          
							</div>
						</form>
					</div>
				</section>
  


</div>
<?php
}
}
/* {/block 'content'} */
}

<?php
/* Smarty version 4.1.0, created on 2022-04-04 15:07:00
  from 'C:\xampp\htdocs\FrontController\app\calc\calc_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624aed746adc37_27439618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e24f71487039a62e5c567870f5cb8253f0b55c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FrontController\\app\\calc\\calc_view.php',
      1 => 1649077579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624aed746adc37_27439618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590213925624aed74698364_07124646', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1206727193624aed7469a536_11763154', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->_ROOT_PATH).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_590213925624aed74698364_07124646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_590213925624aed74698364_07124646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1206727193624aed7469a536_11763154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1206727193624aed7469a536_11763154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			
			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
<section id="five" class="wrapper style2 special fade">
					<div class="container">
                                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_ACTION_ROOT;?>
calcCompute" class="cta">
							<div class="row gtr-uniform gtr-50">
                                                            <div class="col-8 col-12-xsmall"><input type="text" name="x" id="id_x" placeholder="Podaj pierwszą liczbę" /></div><br>
                                                                            <div class="col-8 col-12-xsmall"><select name="operacja">
                                                                            <option value="kwadrat">kwadrat</option>
                                                                            <option value="prostokat">Prostokąt</option>
                                                                            <option value="trojkat">Trójąt</option>
                                                                            </select><br>
                                                                            <div class="col-8 col-12-xsmall"><input type="text" name="y" id="id_y" placeholder="Podaj drugą liczbę" "/></div>
                                                                            <br><div class="col-4 col-12-xsmall"><input type="submit" value="Policz" class="fit primary" /></div>
                                                                <?php if (((isset($_smarty_tpl->tpl_vars['wynik']->value)))) {?>
                                                                <br><div class="button default"><b>
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

<?php
/* Smarty version 4.1.0, created on 2022-04-04 20:07:24
  from 'C:\xampp\htdocs\6bNazwy\app\widok\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b33dcb19011_04671441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff611360fc55c1b0f3323fda7bc3c98af0d58b3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6bNazwy\\app\\widok\\calc_view.tpl',
      1 => 1649090350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b33dcb19011_04671441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1371210999624b33dcb05252_76492419', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1244759822624b33dcb09525_53048155', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1371210999624b33dcb05252_76492419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1371210999624b33dcb05252_76492419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1244759822624b33dcb09525_53048155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1244759822624b33dcb09525_53048155',
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
                                                                            <option value="kwadrat">Kwadrat</option>
                                                                            <option value="prostokat">Prostokąt</option>
                                                                            <option value="trojkat">Trójkąt</option>
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

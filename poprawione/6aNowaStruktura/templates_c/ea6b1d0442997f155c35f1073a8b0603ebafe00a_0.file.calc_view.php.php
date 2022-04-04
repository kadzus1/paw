<?php
/* Smarty version 4.1.0, created on 2022-03-31 13:21:43
  from 'C:\xampp\htdocs\Obiekt\app\calc_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62458ec794bf77_72666140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea6b1d0442997f155c35f1073a8b0603ebafe00a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Obiekt\\app\\calc_view.php',
      1 => 1648725700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62458ec794bf77_72666140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109211918062458ec7939ad2_63522201', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159078227562458ec793bdc7_15998529', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_109211918062458ec7939ad2_63522201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_109211918062458ec7939ad2_63522201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_159078227562458ec793bdc7_15998529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_159078227562458ec793bdc7_15998529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			
			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
<section id="five" class="wrapper style2 special fade">
					<div class="container">
                                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/index.php#form" class="cta">
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

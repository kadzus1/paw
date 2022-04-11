<?php
/* Smarty version 4.1.0, created on 2022-04-11 12:40:33
  from 'C:\xampp\htdocs\7Routing\app\widok\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625405a1bcdba5_07116977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2c690150d7cad88bc98c09c63e541438770af6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\7Routing\\app\\widok\\calc_view.tpl',
      1 => 1649673477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_625405a1bcdba5_07116977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1284516858625405a1bc0e50_90334440', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1284516858625405a1bc0e50_90334440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1284516858625405a1bc0e50_90334440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<div class="wrapper style2 special fade">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_ACTION_URL;?>
logout" class="col-4 col-12-xsmall">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>
			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
<section id="five" class="wrapper style2 special fade">
					<div class="container">
                                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_ACTION_URL;?>
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
  

</div>>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}

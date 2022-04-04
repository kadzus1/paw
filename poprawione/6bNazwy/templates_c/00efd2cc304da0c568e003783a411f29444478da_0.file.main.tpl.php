<?php
/* Smarty version 4.1.0, created on 2022-04-04 20:07:24
  from 'C:\xampp\htdocs\6bNazwy\app\widok\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b33dcc252d9_99789112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00efd2cc304da0c568e003783a411f29444478da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6bNazwy\\app\\widok\\templates\\main.tpl',
      1 => 1649090343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b33dcc252d9_99789112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
	<head>
		<title>Kalkulator pól figur</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/css/main.css" />
                <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/index.php"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</a></h1>
					<nav id="nav">
						
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2><?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>
</h2>
                                                        <p>Kaja Nowicka PAW1 <br> Uniwersytet Śląski w Katowicach</p>
						</header>
						<span class="image"><img src="images/smile.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			
    <div id="app_content" class="content">
<section id="form">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1339862098624b33dcc1ee99_77606587', 'content');
?>

</section>



    </div>
			<!-- Footer -->
				<footer id="footer">
					
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1493475332624b33dcc1f7a0_88625741', 'footer');
?>

				</footer>

		</div>

		<!-- Scripts -->
                        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->_APP_URL;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_1339862098624b33dcc1ee99_77606587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1339862098624b33dcc1ee99_77606587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1493475332624b33dcc1f7a0_88625741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1493475332624b33dcc1f7a0_88625741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Stopka <?php
}
}
/* {/block 'footer'} */
}

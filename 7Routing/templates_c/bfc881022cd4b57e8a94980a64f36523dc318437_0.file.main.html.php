<?php
/* Smarty version 4.1.0, created on 2022-04-04 17:59:54
  from 'C:\xampp\htdocs\6aNowaStruktura\app\widok\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b15fad90146_28613124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfc881022cd4b57e8a94980a64f36523dc318437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6aNowaStruktura\\app\\widok\\templates\\main.html',
      1 => 1649080225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b15fad90146_28613124 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96531754624b15fad7cd80_44405711', 'content');
?>

</section>



    </div>
			<!-- Footer -->
				<footer id="footer">
					
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1030239392624b15fad7e080_36496310', 'footer');
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
</html><?php }
/* {block 'content'} */
class Block_96531754624b15fad7cd80_44405711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96531754624b15fad7cd80_44405711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1030239392624b15fad7e080_36496310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1030239392624b15fad7e080_36496310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Stopka <?php
}
}
/* {/block 'footer'} */
}

<?php /* Smarty version Smarty-3.1.19, created on 2019-04-23 16:45:28
         compiled from "C:\wamp64\www\workspace\www\site-export\adminshop\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137145cbf2508571351-28588583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209bebdd5b4ccd5299ad78e844eed81db4ed09ab' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\adminshop\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1504176551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137145cbf2508571351-28588583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cbf2508596ca7_22471038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbf2508596ca7_22471038')) {function content_5cbf2508596ca7_22471038($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>

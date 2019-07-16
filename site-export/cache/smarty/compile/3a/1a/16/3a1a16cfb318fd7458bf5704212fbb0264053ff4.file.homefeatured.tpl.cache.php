<?php /* Smarty version Smarty-3.1.19, created on 2018-10-18 12:17:37
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196235bc85dc124fdd7-21923872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a1a16cfb318fd7458bf5704212fbb0264053ff4' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1512560723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196235bc85dc124fdd7-21923872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc85dc1277778_07847718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc85dc1277778_07847718')) {function content_5bc85dc1277778_07847718($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>

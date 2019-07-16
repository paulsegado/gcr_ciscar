<?php /* Smarty version Smarty-3.1.19, created on 2018-10-18 12:17:38
         compiled from "C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\views\templates\hook\blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319975bc85dc259b8b4-92272086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e151bd14fd0eb97b06794faf614b9d149929e4b3' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\modules\\blockbestsellers\\views\\templates\\hook\\blockbestsellers-home.tpl',
      1 => 1512548630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319975bc85dc259b8b4-92272086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc85dc25cfb07_87575261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc85dc25cfb07_87575261')) {function content_5bc85dc25cfb07_87575261($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>

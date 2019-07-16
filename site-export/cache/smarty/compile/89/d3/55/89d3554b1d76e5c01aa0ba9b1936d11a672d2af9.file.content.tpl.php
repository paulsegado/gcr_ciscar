<?php /* Smarty version Smarty-3.1.19, created on 2018-10-11 16:47:53
         compiled from "C:\wamp64\www\workspace\www\site-export\adminshop\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84825bbf629955e040-78261063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d3554b1d76e5c01aa0ba9b1936d11a672d2af9' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\adminshop\\themes\\default\\template\\content.tpl',
      1 => 1504176548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84825bbf629955e040-78261063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bbf629956f700_03656673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbf629956f700_03656673')) {function content_5bbf629956f700_03656673($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

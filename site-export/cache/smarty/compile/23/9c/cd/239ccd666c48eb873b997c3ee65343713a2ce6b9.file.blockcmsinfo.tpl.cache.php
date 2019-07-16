<?php /* Smarty version Smarty-3.1.19, created on 2018-10-18 12:17:36
         compiled from "C:\wamp64\www\workspace\www\site-export\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221845bc85dc0c904c0-24587020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '239ccd666c48eb873b997c3ee65343713a2ce6b9' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1504177028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221845bc85dc0c904c0-24587020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc85dc0cba4f2_58318145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc85dc0cba4f2_58318145')) {function content_5bc85dc0cba4f2_58318145($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>

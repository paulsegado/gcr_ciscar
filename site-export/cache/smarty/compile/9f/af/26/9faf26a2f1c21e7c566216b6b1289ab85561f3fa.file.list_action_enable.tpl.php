<?php /* Smarty version Smarty-3.1.19, created on 2019-04-23 16:45:27
         compiled from "C:\wamp64\www\workspace\www\site-export\adminshop\themes\default\template\helpers\list\list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120385cbf2507aa2de7-29262747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9faf26a2f1c21e7c566216b6b1289ab85561f3fa' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\adminshop\\themes\\default\\template\\helpers\\list\\list_action_enable.tpl',
      1 => 1504176604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120385cbf2507aa2de7-29262747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cbf2507af4150_02573023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbf2507af4150_02573023')) {function content_5cbf2507af4150_02573023($_smarty_tpl) {?>
<a class="list-action-enable<?php if (isset($_smarty_tpl->tpl_vars['ajax']->value)&&$_smarty_tpl->tpl_vars['ajax']->value) {?> ajax_table_link<?php }?><?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
</a>
<?php }} ?>

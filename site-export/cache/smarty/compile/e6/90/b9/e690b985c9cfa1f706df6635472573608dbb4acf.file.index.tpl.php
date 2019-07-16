<?php /* Smarty version Smarty-3.1.19, created on 2018-10-18 12:17:38
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322425bc85dc27d7df7-36773590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e690b985c9cfa1f706df6635472573608dbb4acf' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\index.tpl',
      1 => 1504177073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322425bc85dc27d7df7-36773590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc85dc282acb5_29162772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc85dc282acb5_29162772')) {function content_5bc85dc282acb5_29162772($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?><?php }} ?>

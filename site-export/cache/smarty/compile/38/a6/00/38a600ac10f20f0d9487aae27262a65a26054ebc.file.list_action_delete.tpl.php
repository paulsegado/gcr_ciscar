<?php /* Smarty version Smarty-3.1.19, created on 2019-04-23 16:45:27
         compiled from "C:\wamp64\www\workspace\www\site-export\adminshop\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137935cbf2507a53a06-85897256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a600ac10f20f0d9487aae27262a65a26054ebc' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\adminshop\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1504176604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137935cbf2507a53a06-85897256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cbf2507a8ca75_47539406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbf2507a8ca75_47539406')) {function content_5cbf2507a8ca75_47539406($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2019-04-23 16:45:27
         compiled from "C:\wamp64\www\workspace\www\site-export\adminshop\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295125cbf2507a21236-91632798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '879d1484a51e6b0fabdb567f17e592e20a25c125' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\adminshop\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1504176604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295125cbf2507a21236-91632798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cbf2507a3e4c1_21828057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbf2507a3e4c1_21828057')) {function content_5cbf2507a3e4c1_21828057($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2019-04-23 16:45:27
         compiled from "C:\wamp64\www\workspace\www\site-export\adminshop\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148275cbf25079ec939-46497651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338945bde9fbee115a9561d200d4d5f7f8ef6dab' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\adminshop\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1504176604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148275cbf25079ec939-46497651',
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
  'unifunc' => 'content_5cbf2507a09891_95309170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbf2507a09891_95309170')) {function content_5cbf2507a09891_95309170($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

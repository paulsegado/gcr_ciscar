<?php /* Smarty version Smarty-3.1.19, created on 2018-10-15 12:26:21
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251775bc46b4df21991-61661348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '106bcb9e74b962596adf1350dab03ba25eb05727' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\modules\\blockcontact\\nav.tpl',
      1 => 1504177087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251775bc46b4df21991-61661348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc46b4e027a06_57472281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc46b4e027a06_57472281')) {function content_5bc46b4e027a06_57472281($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>
<?php }} ?>

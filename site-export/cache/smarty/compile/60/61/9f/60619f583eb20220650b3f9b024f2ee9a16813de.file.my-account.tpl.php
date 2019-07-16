<?php /* Smarty version Smarty-3.1.19, created on 2019-07-09 14:35:11
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214585ca4e1b3151d98-23380001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60619f583eb20220650b3f9b024f2ee9a16813de' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\my-account.tpl',
      1 => 1562668441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214585ca4e1b3151d98-23380001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ca4e1b3295554_56306617',
  'variables' => 
  array (
    'account_created' => 0,
    'has_customer_an_address' => 0,
    'link' => 0,
    'returnAllowed' => 0,
    'lang' => 0,
    'voucherAllowed' => 0,
    'HOOK_CUSTOMER_ACCOUNT' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca4e1b3295554_56306617')) {function content_5ca4e1b3295554_56306617($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['account_created']->value)) {?>
	<p class="alert alert-success">
		<?php echo smartyTranslate(array('s'=>'Your account has been created.'),$_smarty_tpl);?>

	</p>
<?php }?>
<!-- CISCAR on supprime la presentation duu texte d'accueil -->
<p style="display:none;" class="info-account"><?php echo smartyTranslate(array('s'=>'Welcome to your account. Here you can manage all of your personal information and orders.'),$_smarty_tpl);?>
</p>
<div class="row addresses-lists" >
	<div class="col-xs-12 col-sm-6 col-lg-4">
<!-- CISCAR on supprime la presentation par defaut pour ne garder que l historique des commandes -->	
		<ul class="myaccount-link-list">
            <?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value) {?>
            <li style="display:none;"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
"><i class="icon-building"></i><span><?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
</span></a></li>
            <?php }?>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><i class="icon-list-ol"></i><span><?php echo smartyTranslate(array('s'=>'Order history and details'),$_smarty_tpl);?>
</span></a></li>
            <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
                <li style="display:none;"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><i class="icon-refresh"></i><span><?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>
</span></a></li>
            <?php }?>
            <li style="display:none;"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
"><i class="icon-file-o"></i><span><?php echo smartyTranslate(array('s'=>'My credit slips'),$_smarty_tpl);?>
</span></a></li>
            <li style="display:none;"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><i class="icon-building"></i><span><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</span></a></li>
            <li style="display:none;"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><i class="icon-user"></i><span><?php echo smartyTranslate(array('s'=>'My personal information'),$_smarty_tpl);?>
</span></a></li>
 <!-- CISCAR RGPD on propose la modification du mot de passe -->	
            <li><a href="//ciscar.vm/prestashop.php?action=mdplost&lang=<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"  title="<?php echo smartyTranslate(array('s'=>'Mot de passe perdu'),$_smarty_tpl);?>
"><i class="icon-user"></i><span><?php echo smartyTranslate(array('s'=>'Mot de passe perdu'),$_smarty_tpl);?>
</span></a></li>
        </ul>
        
	</div>
<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value||isset($_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value)&&$_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value!='') {?>
	<div class="col-xs-12 col-sm-6 col-lg-4">
        <ul class="myaccount-link-list">
            <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                <li style="display:none;><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><i class="icon-barcode"></i><span><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
</span></a></li>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value;?>

        </ul>
    </div>
<?php }?>
</div>
<ul class="footer_links clearfix">
<li><a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><span><i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</span></a></li>
</ul>
<?php }} ?>

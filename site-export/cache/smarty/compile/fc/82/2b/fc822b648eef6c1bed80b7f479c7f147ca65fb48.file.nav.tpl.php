<?php /* Smarty version Smarty-3.1.19, created on 2018-10-15 12:26:21
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173155bc46b4dd1baf8-21428932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc822b648eef6c1bed80b7f479c7f147ca65fb48' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\modules\\blockuserinfo\\nav.tpl',
      1 => 1518711779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173155bc46b4dd1baf8-21428932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'lang_iso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc46b4ddd3230_37457016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc46b4ddd3230_37457016')) {function content_5bc46b4ddd3230_37457016($_smarty_tpl) {?><!-- Block user information module NAV  -->
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<div class="header_user_info">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	</div>
<?php }?>
<!-- CISCAR lien caché pour redirection sur la page de connexion par défaut -->
<div class="header_user_info" style="border-right-width:0px;border-left-width:0px;">
	<?php if (!$_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<a class="login" style="color:#333;" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				x
			</a>
	<?php }?>
</div>
<div class="header_user_info">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
	<!-- 
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
	-->
<!-- CISCAR redirection sur le site CISCAR BELGE  / on en tient pas compte pour le moment, d'ou "XX" à la place de "BE" -->
		<?php if (isset($_COOKIE['from_url'])&&$_COOKIE['from_url']=='XX') {?>
			<a class="login" href="http://ciscar.be/<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
/index.php?action=q" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		<?php } else { ?>
			<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		<?php }?>
	<?php }?>
</div>

<!-- /Block usmodule NAV -->
<?php }} ?>

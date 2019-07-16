<?php /* Smarty version Smarty-3.1.19, created on 2019-01-16 16:50:19
         compiled from "C:\wamp64\www\workspace\www\site-export\modules\eicaptcha\views\templates\hook\hookDisplayCustomerAccountForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297715c3f52bb2c9469-05218141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '443693d87451695240f883eefb1b318dc9fb6d50' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\modules\\eicaptcha\\views\\templates\\hook\\hookDisplayCustomerAccountForm.tpl',
      1 => 1519116434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297715c3f52bb2c9469-05218141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prestashopVersion' => 0,
    'publicKey' => 0,
    'waiting_message' => 0,
    'checkCaptchaUrl' => 0,
    'errorSelector' => 0,
    'formSelector' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c3f52bb3d79c5_51468971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3f52bb3d79c5_51468971')) {function content_5c3f52bb3d79c5_51468971($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['prestashopVersion']->value==15) {?>
	<fieldset class="account_creation account_eicaptcha">
<?php }?>

<label><?php echo smartyTranslate(array('s'=>'Captcha','mod'=>'eicaptcha'),$_smarty_tpl);?>
</label>

<div class="g-recaptcha<?php if (htmlspecialchars($_smarty_tpl->tpl_vars['prestashopVersion']->value, ENT_QUOTES, 'UTF-8', true)==16) {?> row <?php }?>" data-sitekey="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['publicKey']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="captcha-box"></div>

<?php if (htmlspecialchars($_smarty_tpl->tpl_vars['prestashopVersion']->value, ENT_QUOTES, 'UTF-8', true)==15) {?>
	</fieldset>	
<?php }?>


<script type="text/javascript">
 waiting_message = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['waiting_message']->value, ENT_QUOTES, 'UTF-8', true);?>
';
 checkCaptchaUrl = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkCaptchaUrl']->value, ENT_QUOTES, 'UTF-8', true);?>
';
 errorSelector = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errorSelector']->value, ENT_QUOTES, 'UTF-8', true);?>
';
 formSelector = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formSelector']->value, ENT_QUOTES, 'UTF-8', true);?>
';
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php }} ?>

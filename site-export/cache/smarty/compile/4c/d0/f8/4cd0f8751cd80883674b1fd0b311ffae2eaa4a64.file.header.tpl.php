<?php /* Smarty version Smarty-3.1.19, created on 2018-10-18 12:17:36
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\modules\homeslider\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37875bc85dc090f498-28705561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cd0f8751cd80883674b1fd0b311ffae2eaa4a64' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\modules\\homeslider\\header.tpl',
      1 => 1504177086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37875bc85dc090f498-28705561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc85dc09c1c53_65949901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc85dc09c1c53_65949901')) {function content_5bc85dc09c1c53_65949901($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>

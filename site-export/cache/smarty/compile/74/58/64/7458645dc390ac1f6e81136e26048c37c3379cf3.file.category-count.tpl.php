<?php /* Smarty version Smarty-3.1.19, created on 2019-02-05 17:16:58
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77215c59b6fa72c3a4-09746361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7458645dc390ac1f6e81136e26048c37c3379cf3' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1504177073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77215c59b6fa72c3a4-09746361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c59b6fa7a8605_22338428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c59b6fa7a8605_22338428')) {function content_5c59b6fa7a8605_22338428($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>

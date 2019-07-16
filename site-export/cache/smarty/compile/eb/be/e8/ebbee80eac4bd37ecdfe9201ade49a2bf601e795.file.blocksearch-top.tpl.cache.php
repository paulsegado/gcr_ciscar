<?php /* Smarty version Smarty-3.1.19, created on 2018-10-15 12:26:20
         compiled from "C:\wamp64\www\workspace\www\site-export\themes\default-bootstrap\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:276635bc46b4cef8d29-61162505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebbee80eac4bd37ecdfe9201ade49a2bf601e795' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1518711524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276635bc46b4cef8d29-61162505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
    'lang_iso' => 0,
    'visiteur' => 0,
    'base_dir' => 0,
    'id_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc46b4d047463_89835724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc46b4d047463_89835724')) {function content_5bc46b4d047463_89835724($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- CISCAR ajout d'un lien de connexion si on est en mode visiteur -->	
<!-- et retour sur le site appelant determiné dans coookie -->
<!-- <a href="http://ciscar.be/<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
/index.php?action=q"> -->							
	<?php if (isset($_smarty_tpl->tpl_vars['visiteur']->value)&&!$_smarty_tpl->tpl_vars['visiteur']->value) {?>
		<div style="margin-bottom:-15px;">
		<?php if (isset($_COOKIE['from_url'])&&$_COOKIE['from_url']=='BE') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?controller=my-account"> 
		<?php } else { ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?controller=my-account">
		<?php }?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
img/navigation_mode_visiteur_<?php echo $_smarty_tpl->tpl_vars['id_language']->value;?>
.png">
		</a>
		</div>
	<?php }?>

<!-- /Block search module TOP --><?php }} ?>

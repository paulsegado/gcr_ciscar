<?php /* Smarty version Smarty-3.1.19, created on 2018-10-11 16:47:53
         compiled from "C:\wamp64\www\workspace\www\site-export\adminshop\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85605bbf6299886bd6-88274967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '331979244323f9b8ca6eebd6791d567155703adb' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\adminshop\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1504176605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85605bbf6299886bd6-88274967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bbf629988d202_78583799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbf629988d202_78583799')) {function content_5bbf629988d202_78583799($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>

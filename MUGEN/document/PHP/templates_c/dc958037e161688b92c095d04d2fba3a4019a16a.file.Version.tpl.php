<?php /* Smarty version Smarty-3.1.12, created on 2017-08-11 12:28:03
         compiled from "D:\Dropbox\Public\www\mugen.github.io\MUGEN\document\Template\Trigger\content\Version.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3027398975985635a527b46-19205423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc958037e161688b92c095d04d2fba3a4019a16a' => 
    array (
      0 => 'D:\\Dropbox\\Public\\www\\mugen.github.io\\MUGEN\\document\\Template\\Trigger\\content\\Version.tpl',
      1 => 1502447260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3027398975985635a527b46-19205423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5985635a540042_76336982',
  'variables' => 
  array (
    'content' => 0,
    'array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5985635a540042_76336982')) {function content_5985635a540042_76336982($_smarty_tpl) {?>	<?php if ($_smarty_tpl->tpl_vars['content']->value['version']){?>
	<section id="Version"><div class="section">
		<h2>仕様・バグ・エラー・変更点</h2>
		<table class="version">

		<tbody>
			<?php  $_smarty_tpl->tpl_vars['array'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['array']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['version']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['array']->key => $_smarty_tpl->tpl_vars['array']->value){
$_smarty_tpl->tpl_vars['array']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['array']->value['no'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['array']->value['content'];?>
</td>
				</tr>
			<?php } ?>
		</tbody>
		</table>
	</div></section>
	<?php }?><?php }} ?>
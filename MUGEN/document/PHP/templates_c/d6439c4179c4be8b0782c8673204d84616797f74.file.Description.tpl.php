<?php /* Smarty version Smarty-3.1.12, created on 2016-01-16 20:22:28
         compiled from "F:\bluesura\Dropbox\Public\www\MUGEN\document\Template\Trigger\content\Description.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4036552964f914e851-14375027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6439c4179c4be8b0782c8673204d84616797f74' => 
    array (
      0 => 'F:\\bluesura\\Dropbox\\Public\\www\\MUGEN\\document\\Template\\Trigger\\content\\Description.tpl',
      1 => 1452975743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4036552964f914e851-14375027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_552964f922bf84_07247509',
  'variables' => 
  array (
    'content' => 0,
    'code' => 0,
    'associated_state' => 0,
    'associated_trigger' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552964f922bf84_07247509')) {function content_552964f922bf84_07247509($_smarty_tpl) {?>﻿	<section id="summary"><div class="summary section">
		<h2>概要</h2>
		<?php echo $_smarty_tpl->tpl_vars['content']->value['summary'];?>

	</div></section>

	<section id="syntax"><div class="syntax section">
		<h2>構文</h2>
		<div class="code"><code><ul>
		<?php  $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['syntax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['code']->key => $_smarty_tpl->tpl_vars['code']->value){
$_smarty_tpl->tpl_vars['code']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</li>
		<?php } ?>
		</ul></code></div>
	</div></section>

	<?php if ($_smarty_tpl->tpl_vars['content']->value['description']!=null){?>
	<section id="description"><div class="description section">
		<h2>詳細</h2>
		<div>
			<?php echo $_smarty_tpl->tpl_vars['content']->value['description'];?>

		</div>

		<?php if (isset($_smarty_tpl->tpl_vars['content']->value['associated_state'])){?><div class="associated-trigger">関連するステートコントローラー： <?php  $_smarty_tpl->tpl_vars['associated_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['associated_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['associated_state']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['associated_state']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['associated_state']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['associated_state']->key => $_smarty_tpl->tpl_vars['associated_state']->value){
$_smarty_tpl->tpl_vars['associated_state']->_loop = true;
 $_smarty_tpl->tpl_vars['associated_state']->iteration++;
 $_smarty_tpl->tpl_vars['associated_state']->last = $_smarty_tpl->tpl_vars['associated_state']->iteration === $_smarty_tpl->tpl_vars['associated_state']->total;
?><a href="./../State/<?php echo $_smarty_tpl->tpl_vars['associated_state']->value;?>
.html"><code><?php echo $_smarty_tpl->tpl_vars['associated_state']->value;?>
</code></a><?php if ($_smarty_tpl->tpl_vars['associated_state']->last!=true){?>, <?php }?><?php } ?></div><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value['associated_trigger'])){?><div class="associated-trigger">関連するトリガー： <?php  $_smarty_tpl->tpl_vars['associated_trigger'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['associated_trigger']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['associated_trigger']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['associated_trigger']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['associated_trigger']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['associated_trigger']->key => $_smarty_tpl->tpl_vars['associated_trigger']->value){
$_smarty_tpl->tpl_vars['associated_trigger']->_loop = true;
 $_smarty_tpl->tpl_vars['associated_trigger']->iteration++;
 $_smarty_tpl->tpl_vars['associated_trigger']->last = $_smarty_tpl->tpl_vars['associated_trigger']->iteration === $_smarty_tpl->tpl_vars['associated_trigger']->total;
?><a href="./../Trigger/<?php echo $_smarty_tpl->tpl_vars['associated_trigger']->value;?>
.html"><code><?php echo $_smarty_tpl->tpl_vars['associated_trigger']->value;?>
</code></a><?php if ($_smarty_tpl->tpl_vars['associated_trigger']->last!=true){?>, <?php }?><?php } ?></div><?php }?>
	</div></section>
	<?php }?><?php }} ?>
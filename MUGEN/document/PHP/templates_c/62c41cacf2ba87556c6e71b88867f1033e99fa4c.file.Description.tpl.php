<?php /* Smarty version Smarty-3.1.12, created on 2016-01-16 20:21:02
         compiled from "F:\bluesura\Dropbox\Public\www\MUGEN\document\Template\content\Description.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403754a1eb21980909-62515528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c41cacf2ba87556c6e71b88867f1033e99fa4c' => 
    array (
      0 => 'F:\\bluesura\\Dropbox\\Public\\www\\MUGEN\\document\\Template\\content\\Description.tpl',
      1 => 1452975653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403754a1eb21980909-62515528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_54a1eb21ac7b96_35403684',
  'variables' => 
  array (
    'content' => 0,
    'associated_state' => 0,
    'associated_trigger' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1eb21ac7b96_35403684')) {function content_54a1eb21ac7b96_35403684($_smarty_tpl) {?>﻿	<div class="description">
<div><?php echo $_smarty_tpl->tpl_vars['content']->value['description'];?>
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

	</div><?php }} ?>
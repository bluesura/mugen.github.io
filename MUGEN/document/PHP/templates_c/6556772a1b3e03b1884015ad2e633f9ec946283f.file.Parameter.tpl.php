<?php /* Smarty version Smarty-3.1.12, created on 2017-05-08 13:42:58
         compiled from "F:\bluesura\Dropbox\Public\www\mugen.github.io\MUGEN\document\Template\content\Parameter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:334557944e157af781-06661810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6556772a1b3e03b1884015ad2e633f9ec946283f' => 
    array (
      0 => 'F:\\bluesura\\Dropbox\\Public\\www\\mugen.github.io\\MUGEN\\document\\Template\\content\\Parameter.tpl',
      1 => 1492850213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334557944e157af781-06661810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57944e159bd5b1_60289925',
  'variables' => 
  array (
    'content' => 0,
    'array' => 0,
    'value' => 0,
    'type' => 0,
    'i' => 0,
    'possible_value' => 0,
    'min_value' => 0,
    'max_value' => 0,
    'default_value' => 0,
    'associated_trigger' => 0,
    'youtube' => 0,
    'video' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57944e159bd5b1_60289925')) {function content_57944e159bd5b1_60289925($_smarty_tpl) {?>﻿  <section id="Parameter"><div class="section">
    <h2>パラメーター</h2>
    <?php if ($_smarty_tpl->tpl_vars['content']->value['parameter']==array()){?>
    <div>なし</div>
    <?php }else{ ?>
    <?php  $_smarty_tpl->tpl_vars['array'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['array']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['parameter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['array']->key => $_smarty_tpl->tpl_vars['array']->value){
$_smarty_tpl->tpl_vars['array']->_loop = true;
?>
    <dl class="parameter">
      <dt class="main" id="<?php echo $_smarty_tpl->tpl_vars['array']->value['parameter'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['array']->value['main']==''){?>
          <?php echo $_smarty_tpl->tpl_vars['array']->value['parameter'];?>
 = <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php if ($_smarty_tpl->tpl_vars['value']->last!=true){?>, <?php }?><?php } ?>
        <?php }else{ ?>
          <?php echo $_smarty_tpl->tpl_vars['array']->value['main'];?>

        <?php }?>
        (<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['type']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['type']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->iteration++;
 $_smarty_tpl->tpl_vars['type']->last = $_smarty_tpl->tpl_vars['type']->iteration === $_smarty_tpl->tpl_vars['type']->total;
?><?php if ($_smarty_tpl->tpl_vars['type']->value=="boolean"){?>0か1<?php }?><?php if ($_smarty_tpl->tpl_vars['type']->value=="int"){?>整数<?php }?><?php if ($_smarty_tpl->tpl_vars['type']->value=="float"){?>浮動小数点数<?php }?><?php if ($_smarty_tpl->tpl_vars['type']->value=="string"){?>文字列<?php }?><?php if ($_smarty_tpl->tpl_vars['type']->last!=true){?>, <?php }?><?php } ?>)
      </dt>
      <dd>
        <div class="description"><?php echo $_smarty_tpl->tpl_vars['array']->value['description'];?>
</div>

        <div class="option-value">

          <?php if ($_smarty_tpl->tpl_vars['array']->value['possible_value']!=''){?><div class="possible-value">
          <?php if (is_array($_smarty_tpl->tpl_vars['array']->value['possible_value'][0])){?>
          <div>
          <table>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['array']->value['possible_value'][0][0];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['array']->value['possible_value'][0][1];?>
</th>
            </tr>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['array']->value['possible_value'])-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['array']->value['possible_value'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><tr>
              <td><?php echo $_smarty_tpl->tpl_vars['array']->value['possible_value'][$_smarty_tpl->tpl_vars['i']->value][0];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['array']->value['possible_value'][$_smarty_tpl->tpl_vars['i']->value][1];?>
</td>
            </tr><?php }} ?>
          </table>
          </div>
            <?php }else{ ?><div>
              選択可能な文字列: <?php  $_smarty_tpl->tpl_vars['possible_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['possible_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['possible_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['possible_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['possible_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['possible_value']->key => $_smarty_tpl->tpl_vars['possible_value']->value){
$_smarty_tpl->tpl_vars['possible_value']->_loop = true;
 $_smarty_tpl->tpl_vars['possible_value']->iteration++;
 $_smarty_tpl->tpl_vars['possible_value']->last = $_smarty_tpl->tpl_vars['possible_value']->iteration === $_smarty_tpl->tpl_vars['possible_value']->total;
?><?php echo $_smarty_tpl->tpl_vars['possible_value']->value;?>
<?php if ($_smarty_tpl->tpl_vars['possible_value']->last!=true){?>, <?php }?><?php } ?>
            </div><?php }?>
          </div><?php }?>

          <?php if ($_smarty_tpl->tpl_vars['array']->value['min_value']!=''||$_smarty_tpl->tpl_vars['array']->value['max_value']!=''){?>
          <div class="range-value">
            <?php if ($_smarty_tpl->tpl_vars['array']->value['min_value']!=array('')){?>
            <span class="min-value">最小値: <?php  $_smarty_tpl->tpl_vars['min_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['min_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['min_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['min_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['min_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['min_value']->key => $_smarty_tpl->tpl_vars['min_value']->value){
$_smarty_tpl->tpl_vars['min_value']->_loop = true;
 $_smarty_tpl->tpl_vars['min_value']->iteration++;
 $_smarty_tpl->tpl_vars['min_value']->last = $_smarty_tpl->tpl_vars['min_value']->iteration === $_smarty_tpl->tpl_vars['min_value']->total;
?><?php echo $_smarty_tpl->tpl_vars['min_value']->value;?>
<?php if ($_smarty_tpl->tpl_vars['min_value']->last!=true){?>, <?php }?><?php } ?></span>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['array']->value['min_value']!=array(''))&&($_smarty_tpl->tpl_vars['array']->value['max_value']!=array(''))){?>,<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['array']->value['max_value']!=array('')){?>
            <span class="max-value">最大値: <?php  $_smarty_tpl->tpl_vars['max_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['max_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['max_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['max_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['max_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['max_value']->key => $_smarty_tpl->tpl_vars['max_value']->value){
$_smarty_tpl->tpl_vars['max_value']->_loop = true;
 $_smarty_tpl->tpl_vars['max_value']->iteration++;
 $_smarty_tpl->tpl_vars['max_value']->last = $_smarty_tpl->tpl_vars['max_value']->iteration === $_smarty_tpl->tpl_vars['max_value']->total;
?><?php echo $_smarty_tpl->tpl_vars['max_value']->value;?>
<?php if ($_smarty_tpl->tpl_vars['max_value']->last!=true){?>, <?php }?><?php } ?></span>
            <?php }?>
          </div>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['array']->value['parameter_type']=="required"){?>
          <div class="required-parameter">省略不可</div>
          <?php }elseif($_smarty_tpl->tpl_vars['array']->value['parameter_type']=="instead"){?>
          <div class="instead-parameter">代替書式</div>
          <?php }else{ ?>
          <div class="default-value">省略時のデフォルト値： <?php  $_smarty_tpl->tpl_vars['default_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['default_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['default_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['default_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['default_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['default_value']->key => $_smarty_tpl->tpl_vars['default_value']->value){
$_smarty_tpl->tpl_vars['default_value']->_loop = true;
 $_smarty_tpl->tpl_vars['default_value']->iteration++;
 $_smarty_tpl->tpl_vars['default_value']->last = $_smarty_tpl->tpl_vars['default_value']->iteration === $_smarty_tpl->tpl_vars['default_value']->total;
?><?php echo $_smarty_tpl->tpl_vars['default_value']->value;?>
<?php if ($_smarty_tpl->tpl_vars['default_value']->last!=true){?>, <?php }?><?php } ?></div>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['array']->value['associated_trigger'])){?><div class="associated-trigger">関連するトリガー： <?php  $_smarty_tpl->tpl_vars['associated_trigger'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['associated_trigger']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['associated_trigger']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['associated_trigger']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['associated_trigger']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['associated_trigger']->key => $_smarty_tpl->tpl_vars['associated_trigger']->value){
$_smarty_tpl->tpl_vars['associated_trigger']->_loop = true;
 $_smarty_tpl->tpl_vars['associated_trigger']->iteration++;
 $_smarty_tpl->tpl_vars['associated_trigger']->last = $_smarty_tpl->tpl_vars['associated_trigger']->iteration === $_smarty_tpl->tpl_vars['associated_trigger']->total;
?><code><?php echo $_smarty_tpl->tpl_vars['associated_trigger']->value;?>
</code><?php if ($_smarty_tpl->tpl_vars['associated_trigger']->last!=true){?>, <?php }?><?php } ?></div><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['array']->value['media']!=null){?>
        <div class="media">
          <?php if ($_smarty_tpl->tpl_vars['array']->value['media']['youtube']!=array()){?>
          <div class="video-group">
            <?php  $_smarty_tpl->tpl_vars['youtube'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['youtube']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['media']['youtube']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['youtube']->key => $_smarty_tpl->tpl_vars['youtube']->value){
$_smarty_tpl->tpl_vars['youtube']->_loop = true;
?>
            <h4><?php echo $_smarty_tpl->tpl_vars['youtube']->value['title'];?>
</h4>
            <div style="position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0;"><iframe style="position: absolute; top: 0;  left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['youtube']->value['file'];?>
" frameborder="0" allowfullscreen></iframe></div>
            <?php } ?>
          </div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['array']->value['media']['video']!=array()){?>
          <div class="video-group">
            <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['media']['video']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
            <div class="video image-frame">
              <div class="title"><a href="https://dl.dropboxusercontent.com/u/103321845/www/MUGEN/document/State/media/video/<?php echo $_smarty_tpl->tpl_vars['video']->value['file'];?>
.mp4"><?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
</a></div>
              <video controls="controls">
                <source src="https://dl.dropboxusercontent.com/u/103321845/www/MUGEN/document/State/media/video/<?php echo $_smarty_tpl->tpl_vars['video']->value['file'];?>
.mp4" type="video/mp4" />
              </video>
            </div>
            <?php } ?>
          </div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['array']->value['media']['image']!=array()){?>
          <div class="image-group">
            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value['media']['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
            <div class="image">
              <h4><?php echo $_smarty_tpl->tpl_vars['image']->value['title'];?>
</h4>
              <div class="image-frame"><img src="./media/img/<?php echo $_smarty_tpl->tpl_vars['image']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['title'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['image']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['image']->value['height'];?>
" /></div>
            </div>
            <?php } ?>
          </div>
          <?php }?>
        </div>
        <?php }?>

        </div>


      </dd>
    </dl>
    <?php } ?>
    <?php }?>
  </div></section><?php }} ?>
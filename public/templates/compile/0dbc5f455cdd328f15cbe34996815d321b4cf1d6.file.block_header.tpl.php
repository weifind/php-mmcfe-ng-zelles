<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:09:58
         compiled from ".\templates\mmcFE\global\block_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2964352292b66aab650-89741812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dbc5f455cdd328f15cbe34996815d321b4cf1d6' => 
    array (
      0 => '.\\templates\\mmcFE\\global\\block_header.tpl',
      1 => 1378429319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2964352292b66aab650-89741812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ALIGN' => 0,
    'BLOCK_STYLE' => 0,
    'BLOCK_HEADER' => 0,
    'BUTTONS' => 0,
    'name' => 0,
    'STYLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292b66cb5589_81423188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292b66cb5589_81423188')) {function content_52292b66cb5589_81423188($_smarty_tpl) {?><div class="block<?php if ((($tmp = @$_smarty_tpl->tpl_vars['ALIGN']->value)===null||$tmp==='' ? '' : $tmp)){?> small <?php echo $_smarty_tpl->tpl_vars['ALIGN']->value;?>
<?php }?>" style="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['BLOCK_STYLE']->value)===null||$tmp==='' ? '' : $tmp)){?><?php echo $_smarty_tpl->tpl_vars['BLOCK_STYLE']->value;?>
<?php }else{ ?>clear:none;<?php }?>">
  <div class="block_head">
    <div class="bheadl"></div>
    <div class="bheadr"></div>
    <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCK_HEADER']->value)===null||$tmp==='' ? "UNKNOWN BLOCK" : $tmp);?>
</h2>
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['BUTTONS']->value)===null||$tmp==='' ? '' : $tmp)){?>
    <ul class="tabs">
      <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BUTTONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
      <li style="font-size:9px;"><a href="#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
      <?php } ?>
    </ul>
    <?php }?>
  </div>
  <div class="block_content" style="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['STYLE']->value)===null||$tmp==='' ? '' : $tmp)){?><?php echo $_smarty_tpl->tpl_vars['STYLE']->value;?>
<?php }else{ ?>padding:10px;<?php }?>">
<?php }} ?>
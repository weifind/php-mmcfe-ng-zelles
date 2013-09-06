<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:09:57
         compiled from ".\templates\mmcFE\global\motd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1937552292b65c33772-55511924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a21dbe94c4c6f6877badff7668157f14d912926' => 
    array (
      0 => '.\\templates\\mmcFE\\global\\motd.tpl',
      1 => 1378429319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1937552292b65c33772-55511924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292b65cbbb85_97066454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292b65cbbb85_97066454')) {function content_52292b65cbbb85_97066454($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['motd'])===null||$tmp==='' ? '' : $tmp)){?>
      <div id="generic_infobox" style="margin-left:3px;">
        <font color="orange" size="1">***Message of the Day***<br></font>
        <font size="1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['motd'], ENT_QUOTES, 'UTF-8', true);?>
</font>
      </div>
<?php }?>
<?php }} ?>
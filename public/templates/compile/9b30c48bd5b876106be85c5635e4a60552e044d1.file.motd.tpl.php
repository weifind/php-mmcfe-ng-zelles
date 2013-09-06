<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 09:02:35
         compiled from ".\templates\zelles\global\motd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3270052292bbe4f69d6-94602695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b30c48bd5b876106be85c5635e4a60552e044d1' => 
    array (
      0 => '.\\templates\\zelles\\global\\motd.tpl',
      1 => 1378457077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3270052292bbe4f69d6-94602695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292bbe585d72_07777047',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292bbe585d72_07777047')) {function content_52292bbe585d72_07777047($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['motd'])===null||$tmp==='' ? '' : $tmp)){?>
   <div>
      <font color="orange" size="1">***Message of the Day***<br></font>
      <font size="1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['motd'], ENT_QUOTES, 'UTF-8', true);?>
</font>
   </div>
<?php }?>
<?php }} ?>
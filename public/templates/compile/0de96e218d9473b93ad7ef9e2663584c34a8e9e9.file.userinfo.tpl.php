<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:09:58
         compiled from ".\templates\mmcFE\global\userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2643752292b666aa209-43728460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de96e218d9473b93ad7ef9e2663584c34a8e9e9' => 
    array (
      0 => '.\\templates\\mmcFE\\global\\userinfo.tpl',
      1 => 1378429319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2643752292b666aa209-43728460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292b668c67b6_71816659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292b668c67b6_71816659')) {function content_52292b668c67b6_71816659($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)){?>
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
 <font size='1px'><b><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_anonymous']){?>Anonymous<?php }elseif($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['no_fees']){?>Promo<?php }else{ ?>Active<?php }?> Account</b>: <b><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['no_fees']){?>0<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['fees'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>%</b> Pool Fee</font> <font size='1px'><i>(You are <a href='<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=edit'>donating</a> <b></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'], ENT_QUOTES, 'UTF-8', true);?>
%</b> <i>of your earnings)</i></font></h2>
<?php }else{ ?>
            <h2>Welcome guest, <font size="1px"> please <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=register">register</a> to user this pool.</font></h2>
<?php }?>
<?php }} ?>
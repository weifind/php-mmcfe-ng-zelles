<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:25:30
         compiled from ".\templates\zelles\admin\wallet\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30525229337c9c7e47-93649073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41db895cac0cfe8d305cdf8d9fb4d87b74eb8fd8' => 
    array (
      0 => '.\\templates\\zelles\\admin\\wallet\\default.tpl',
      1 => 1378455907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30525229337c9c7e47-93649073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5229337cc5f189_71794651',
  'variables' => 
  array (
    'BALANCE' => 0,
    'LOCKED' => 0,
    'UNCONFIRMED' => 0,
    'NEWMINT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229337cc5f189_71794651')) {function content_5229337cc5f189_71794651($_smarty_tpl) {?><b>Wallet Information</b>
<blockquote>
<table width="350px">
  <tr>
    <th>Wallet Balance</th>
    <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['BALANCE']->value,"8");?>
</td>
  </tr>
  <tr>
    <th>Locked for users</th>
    <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['LOCKED']->value,"8");?>
</td>
  </tr>
  <tr>
    <th>Unconfirmed</th>
    <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['UNCONFIRMED']->value,"8");?>
</td>
  </tr>
  <tr>
    <th>Liquid Assets</th>
    <td class="right"><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value),"8");?>
</td>
  </tr>
<?php if ($_smarty_tpl->tpl_vars['NEWMINT']->value>=0){?>
  <tr>
    <th>PoS New Mint</th>
    <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['NEWMINT']->value,"8");?>
</td>
  </tr>
<?php }?>
</table>
</blockquote><?php }} ?>
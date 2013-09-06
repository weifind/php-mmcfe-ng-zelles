<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:06:15
         compiled from ".\templates\zelles\statistics\graphs\mine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619952297ee73024b3-61031264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80a4b8adf4b39103c49ddea2bb500747bb6a0492' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\graphs\\mine.tpl',
      1 => 1378429320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619952297ee73024b3-61031264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'YOURHASHRATES' => 0,
    'hour' => 0,
    'hashrate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52297ee74c9c16_01165359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297ee74c9c16_01165359')) {function content_52297ee74c9c16_01165359($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['YOURHASHRATES']->value)){?>
<div class="block_content tab_content" id="mine" style="padding-left:30px;">
  <table width="60%" class="stats" rel="area">
    <caption>Your Hashrate</caption>
    <thead>
      <tr>
        <td></td>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['YOURHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hashrate']->key => $_smarty_tpl->tpl_vars['hashrate']->value){
$_smarty_tpl->tpl_vars['hashrate']->_loop = true;
 $_smarty_tpl->tpl_vars['hour']->value = $_smarty_tpl->tpl_vars['hashrate']->key;
?>
        <th scope="col"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hour']->value)===null||$tmp==='' ? "0" : $tmp);?>
:00</th>
<?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo $_SESSION['USERDATA']['username'];?>
</th>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['YOURHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hashrate']->key => $_smarty_tpl->tpl_vars['hashrate']->value){
$_smarty_tpl->tpl_vars['hashrate']->_loop = true;
 $_smarty_tpl->tpl_vars['hour']->value = $_smarty_tpl->tpl_vars['hashrate']->key;
?>
        <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hashrate']->value)===null||$tmp==='' ? "0" : $tmp);?>
</td>
<?php } ?>
      </tr>
    </tbody>
  </table>
</div>
<?php }?>
<?php }} ?>
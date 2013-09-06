<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:06:15
         compiled from ".\templates\zelles\statistics\graphs\both.tpl" */ ?>
<?php /*%%SmartyHeaderCode:692552297ee77c4346-86114026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '975d89dc80a67e76807f8994846bb496792ea623' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\graphs\\both.tpl',
      1 => 1378429320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '692552297ee77c4346-86114026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'YOURHASHRATES' => 0,
    'POOLHASHRATES' => 0,
    'hour' => 0,
    'hashrate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52297ee7ad0948_91052462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297ee7ad0948_91052462')) {function content_52297ee7ad0948_91052462($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['YOURHASHRATES']->value)&&is_array($_smarty_tpl->tpl_vars['POOLHASHRATES']->value)){?>
<div class="block_content tab_content" id="both" style="padding-left:30px;">
  <table width="60%" class="stats" rel="area">
    <caption>Your vs Pool Hashrate</caption>
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
      <tr>
        <th scope="row">Pool</th>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['POOLHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
  <br />
</div>
<?php }?>
<?php }} ?>
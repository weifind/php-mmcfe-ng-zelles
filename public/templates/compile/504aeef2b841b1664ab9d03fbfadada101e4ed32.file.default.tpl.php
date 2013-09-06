<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:23:54
         compiled from ".\templates\zelles\admin\transactions\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341952299063b4ec57-28839295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504aeef2b841b1664ab9d03fbfadada101e4ed32' => 
    array (
      0 => '.\\templates\\zelles\\admin\\transactions\\default.tpl',
      1 => 1378455827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341952299063b4ec57-28839295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52299065042e63_38455295',
  'variables' => 
  array (
    'SUMMARY' => 0,
    'type' => 0,
    'total' => 0,
    'COUNTTRANSACTIONS' => 0,
    'LIMIT' => 0,
    'FILTERS' => 0,
    'PATH' => 0,
    'TRANSACTIONTYPES' => 0,
    'TXSTATUS' => 0,
    'TRANSACTIONS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52299065042e63_38455295')) {function content_52299065042e63_38455295($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './include/smarty/libs/plugins\\function.html_options.php';
if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins\\function.cycle.php';
?><b>Transaction Summary</b>
<blockquote>
<table>
  <thead>
    <tr>
    <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value){
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
      <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</th>
    <?php } ?>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value){
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
      <td class="right"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
    <?php } ?>
    </tr>
  </tbody>
</table>
</blockquote>

<b>Transaction Filter</b>
<blockquote>
<form action="<?php echo $_SERVER['PHP_SELF'];?>
">
  <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
" />
  <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
" />
  <table>
    <tbody>
      <tr>
        <td class="left">
<?php if ($_smarty_tpl->tpl_vars['COUNTTRANSACTIONS']->value/$_smarty_tpl->tpl_vars['LIMIT']->value>1){?>
  <?php if ((($tmp = @$_REQUEST['start'])===null||$tmp==='' ? "0" : $tmp)>0){?>
          <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&start=<?php echo (($tmp = @$_REQUEST['start'])===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)){?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/prev.png" /></a>
  <?php }else{ ?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/prev.png" />
  <?php }?>
<?php }?>
        </td>
        <td class="right">
<?php if ($_smarty_tpl->tpl_vars['COUNTTRANSACTIONS']->value/$_smarty_tpl->tpl_vars['LIMIT']->value>1){?>
  <?php if ($_smarty_tpl->tpl_vars['COUNTTRANSACTIONS']->value-(($tmp = @$_REQUEST['start'])===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value>0){?>
          <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&start=<?php echo (($tmp = @$_REQUEST['start'])===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)){?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/next.png" /></a>
  <?php }else{ ?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/next.png" />
  <?php }?>
<?php }?>
        </td>
      </tr>
        <tr>
          <td class="left">Type</td>
          <td class="right"><?php echo smarty_function_html_options(array('name'=>"filter[type]",'options'=>$_smarty_tpl->tpl_vars['TRANSACTIONTYPES']->value,'selected'=>(($tmp = @$_REQUEST['filter']['type'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
</td>
        </tr>
        <tr>
          <td class="left">Status</td>
          <td class="right"><?php echo smarty_function_html_options(array('name'=>"filter[status]",'options'=>$_smarty_tpl->tpl_vars['TXSTATUS']->value,'selected'=>(($tmp = @$_REQUEST['filter']['status'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
</td>
        </tr>
        <tr>
          <td class="left">Account</td>
          <td class="right"><input size="20" type="text" name="filter[account]" value="<?php echo (($tmp = @$_REQUEST['filter']['account'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
          <td class="left">Address</td>
          <td class="right"><input size="20" type="text" name="filter[address]" value="<?php echo (($tmp = @$_REQUEST['filter']['address'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
          <td class="center" colspan="2"><input type="submit" class="submit small" value="Filter"></td>
        </tr>
    </tbody>
  </table>
</form>
</blockquote>

<b>Transaction History</b>
<blockquote>
<div class="block_content" style="clear:;">
  <center>
    <table cellpadding="1" cellspacing="1" width="100%">
      <thead style="font-size:13px;">
        <tr>
          <th class="header" style="cursor: pointer;">TX #</th>
          <th class="header" style="cursor: pointer;">Account</th>
          <th class="header" style="cursor: pointer;">Date</th>
          <th class="header" style="cursor: pointer;">TX Type</th>
          <th class="header" style="cursor: pointer;">Status</th>
          <th class="header" style="cursor: pointer;">Payment Address</th>
          <th class="header" style="cursor: pointer;">Block #</th>
          <th class="header" style="cursor: pointer;">Amount</th>
        </tr>
      </thead>
      <tbody style="font-size:12px;">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['name'] = 'transaction';
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TRANSACTIONS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total']);
?>
        <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['username'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['timestamp'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type'];?>
</td>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Fee_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Donation_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Debit_MP'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Debit_AP'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='TXFee'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']){?><font color="green">Confirmed</font>
            <?php }elseif($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['confirmations']==-1){?><font color="red">Orphaned</font>
            <?php }else{ ?><font color="orange">Unconfirmed</font><?php }?>
            <font size="1px">(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['confirmations'])===null||$tmp==='' ? "n/a" : $tmp);?>
)</font>
          </td>
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['coin_address'];?>
</td>
          <td><?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height']==0){?>n/a<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['blockhash'];?>
"><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height'];?>
<?php }?><?php }?></td>
          <td><font color="<?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Bonus'){?>green<?php }else{ ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['amount'],"8");?>
</td>
        </tr>
<?php endfor; endif; ?>
      </tbody>
    </table>
    <p>
      <font color="" size="1">
        <b>Credit_AP</b> = Auto Threshold Payment, <b>Credit_MP</b> = Manual Payment, <b>Donation</b> = Donation, <b>Fee</b> = Pool Fees (if applicable)
      </font>
    </p>
  </center>
</div>
</blockquote><?php }} ?>
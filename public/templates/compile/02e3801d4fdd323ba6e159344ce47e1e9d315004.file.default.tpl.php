<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 09:05:49
         compiled from ".\templates\zelles\statistics\blocks\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4158522933211e9ef6-01221542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e3801d4fdd323ba6e159344ce47e1e9d315004' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\blocks\\default.tpl',
      1 => 1378457851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4158522933211e9ef6-01221542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52293321c61b28_54404663',
  'variables' => 
  array (
    'BLOCKSFOUND' => 0,
    'GLOBAL' => 0,
    'BLOCKLIMIT' => 0,
    'totalshares' => 0,
    'count' => 0,
    'totalexpectedshares' => 0,
    'estshares' => 0,
    'totalpercentage' => 0,
    'percentage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52293321c61b28_54404663')) {function content_52293321c61b28_54404663($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include './include/smarty/libs/plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_math')) include './include/smarty/libs/plugins\\function.math.php';
?><b>Block Shares</b>
<blockquote>
<table width="70%" class="stats" rel="line">
  <caption>Block Shares</caption> 
  <thead>
    <tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total']);
?>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</th>
<?php endfor; endif; ?>
    </th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Expected</th>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total']);
?>
      <td><?php echo round(pow(2,32-$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['targetdiff'])*$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['difficulty']);?>
</td>
<?php endfor; endif; ?>
    </tr>
    <tr>
      <th scope="row">Actual</th>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total']);
?>
      <td><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'];?>
</td>
<?php endfor; endif; ?>
   </tr>
  </tbody>
</table>
<center><br>
<p style="padding-left:30px; padding-redight:30px; font-size:10px;">
The graph above illustrates N shares to find a block vs. E Shares expected to find a block based on
target and network difficulty and assuming a zero variance scenario.
</p></center>
</blockquote>

<b>Last <?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
 Blocks Found</b> 
<blockquote>
  <table width="100%" class="sortable" style="font-size:13px;">
    <thead>
      <tr style="background-color:#B6DAFF;">
        <th class="center">Block</th>
        <th class="center">Validity</th>
        <th>Finder</th>
        <th class="center">Time</th>
        <th class="right">Difficulty</th>
        <th class="right">Amount</th>
        <th class="right">Expected Shares</th>
        <th class="right">Actual Shares</th>
        <th class="right">Percentage</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalexpectedshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalpercentage'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total']);
?>
      <?php $_smarty_tpl->tpl_vars["totalshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalshares']->value+$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
      <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
        <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']){?>
        <td class="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['blockhash'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</a></td>
        <?php }else{ ?>
        <td class="center"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</td>
        <?php }?>
        <td class="center">
        <?php if ($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']){?>
          <font color="green">Confirmed</font>
        <?php }elseif($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations']==-1){?>
          <font color="red">Orphan</font>
        <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']-$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations'];?>
 left<?php }?></td>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1){?>anonymous<?php }else{ ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['finder'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td class="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['time'],"%d/%m %H:%M:%S");?>
</td>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['difficulty'],"2");?>
</td>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['amount'],"2");?>
</td>
        <td class="right">
          <?php echo smarty_function_math(array('assign'=>"estshares",'equation'=>"(pow(2,32 - targetdiff) * blockdiff)",'targetdiff'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['targetdiff'],'blockdiff'=>$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['difficulty']),$_smarty_tpl);?>

      	  <?php $_smarty_tpl->tpl_vars["totalexpectedshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalexpectedshares']->value+$_smarty_tpl->tpl_vars['estshares']->value, null, 0);?>
          <?php echo number_format($_smarty_tpl->tpl_vars['estshares']->value);?>

        </td>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares']);?>
</td>
        <td class="right">
          <?php echo smarty_function_math(array('assign'=>"percentage",'equation'=>"shares / estshares * 100",'shares'=>$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'],'estshares'=>$_smarty_tpl->tpl_vars['estshares']->value),$_smarty_tpl);?>

	  <?php $_smarty_tpl->tpl_vars["totalpercentage"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalpercentage']->value+$_smarty_tpl->tpl_vars['percentage']->value, null, 0);?>
          <font color="<?php if (($_smarty_tpl->tpl_vars['percentage']->value<=100)){?>green<?php }else{ ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage']->value,"2");?>
</font>
        </td>
      </tr>
<?php endfor; endif; ?>
    <tr>
      <td colspan="6" class="right"><b>Totals</b></td>
      <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['totalexpectedshares']->value);?>
</td>
      <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['totalshares']->value);?>
</td>
      <td class="right"><font color="<?php if ((($_smarty_tpl->tpl_vars['totalpercentage']->value/$_smarty_tpl->tpl_vars['count']->value)<=100)){?>green<?php }else{ ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['totalpercentage']->value/$_smarty_tpl->tpl_vars['count']->value),"2");?>
</font>
    </tr>
    </tbody>
  </table>
</center>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps'){?>
<ul>
  <li>Note: <font color="orange">Round Earnings are not credited until <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations'];?>
 confirms.</font></li>
</ul>
<?php }?>
</blockquote><?php }} ?>
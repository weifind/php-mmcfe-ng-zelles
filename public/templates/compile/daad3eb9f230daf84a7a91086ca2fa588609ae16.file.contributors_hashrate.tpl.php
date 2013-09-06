<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 09:02:36
         compiled from ".\templates\zelles\statistics\pool\contributors_hashrate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296325229330e705901-86381955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daad3eb9f230daf84a7a91086ca2fa588609ae16' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\pool\\contributors_hashrate.tpl',
      1 => 1378458003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296325229330e705901-86381955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5229330ed0dd86_33837047',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CONTRIBHASHES' => 0,
    'DIFFICULTY' => 0,
    'REWARD' => 0,
    'rank' => 0,
    'estday' => 0,
    'listed' => 0,
    'myestday' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229330ed0dd86_33837047')) {function content_5229330ed0dd86_33837047($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include './include/smarty/libs/plugins\\function.math.php';
if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins\\function.cycle.php';
?><b>Top Hashrate Contributers</b>
  <table width="100%" border="0" style="font-size:13px;">
    <thead>
      <tr style="background-color:#B6DAFF;">
        <th align="left">Rank</th>
        <th align="left" scope="col">User Name</th>
        <th class="right" scope="col">KH/s</th>
        <th class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
/Day</th>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']){?><th class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency'];?>
/Day</th><?php }?>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['name'] = 'contrib';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total']);
?>
      <?php echo smarty_function_math(array('assign'=>"estday",'equation'=>"round(reward / ( diff * pow(2,32) / ( hashrate * 1000 ) / 3600 / 24), 3)",'diff'=>$_smarty_tpl->tpl_vars['DIFFICULTY']->value,'reward'=>$_smarty_tpl->tpl_vars['REWARD']->value,'hashrate'=>$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']),$_smarty_tpl);?>

      <tr<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username']==$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account']){?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?> style="background-color:#99EB99;"<?php }else{ ?> class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"<?php }?>>
        <td><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1){?>anonymous<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']);?>
</td>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['estday']->value,"3");?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']){?><td class="right"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['estday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"2");?>
</td><?php }?>
      </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)){?>
      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate']>0){?><?php echo smarty_function_math(array('assign'=>"myestday",'equation'=>"round(reward / ( diff * pow(2,32) / ( hashrate * 1000 ) / 3600 / 24), 3)",'diff'=>$_smarty_tpl->tpl_vars['DIFFICULTY']->value,'reward'=>$_smarty_tpl->tpl_vars['REWARD']->value,'hashrate'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate']),$_smarty_tpl);?>
<?php }?>
      <tr style="background-color:#99EB99;">
        <td>n/a</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate'];?>
</td>
        <td class="right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['myestday']->value,"3"))===null||$tmp==='' ? "n/a" : $tmp);?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']){?><td class="right"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['myestday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"2");?>
</td><?php }?>
      </tr>
<?php }?>
    </tbody>
  </table><?php }} ?>
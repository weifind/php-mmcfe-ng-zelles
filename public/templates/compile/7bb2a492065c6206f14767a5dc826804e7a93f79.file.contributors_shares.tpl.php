<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 09:02:37
         compiled from ".\templates\zelles\statistics\pool\contributors_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44195229330e1c0242-26068131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb2a492065c6206f14767a5dc826804e7a93f79' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\pool\\contributors_shares.tpl',
      1 => 1378458003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44195229330e1c0242-26068131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5229330e5b7cf5_92621256',
  'variables' => 
  array (
    'CONTRIBSHARES' => 0,
    'GLOBAL' => 0,
    'rank' => 0,
    'listed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229330e5b7cf5_92621256')) {function content_5229330e5b7cf5_92621256($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins\\function.cycle.php';
?><b>Top Share Contributers</b>
  <table width="100%" border="0" style="font-size:13px;">
    <thead>
      <tr style="background-color:#B6DAFF;">
        <th align="left">Rank</th>
        <th scope="col">User Name</th>
        <th class="right" scope="col">Shares</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['name'] = 'shares';
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total']);
?>
      <tr<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username']==$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account']){?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?> style="background-color:#99EB99;"<?php }else{ ?> class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"<?php }?>>
        <td><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1){?>anonymous<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['shares']);?>
</td>
      </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)){?>
      <tr style="background-color:#99EB99;">
        <td>n/a</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
</td>
      </tr>
<?php }?>
    </tbody>
  </table><?php }} ?>
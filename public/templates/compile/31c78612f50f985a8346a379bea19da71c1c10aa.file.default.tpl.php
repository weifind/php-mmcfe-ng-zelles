<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:38:10
         compiled from ".\templates\zelles\account\notifications\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18729522985f7ab9846-98623594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c78612f50f985a8346a379bea19da71c1c10aa' => 
    array (
      0 => '.\\templates\\zelles\\account\\notifications\\default.tpl',
      1 => 1378453081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18729522985f7ab9846-98623594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522985f83254e8_37089997',
  'variables' => 
  array (
    'SETTINGS' => 1,
    'NOTIFICATIONS' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522985f83254e8_37089997')) {function content_522985f83254e8_37089997($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins\\function.cycle.php';
?><b>Notification Settings</b>
<blockquote>
<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="POST">
<input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
<input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
<input type="hidden" name="do" value="save">
<table>
  <tr>
    <th class="left">Type</th>
    <th class="center">Active</th>
  </tr>
  <tr>
    <td class="left">IDLE Worker</td>
    <td class="center">
      <input type="hidden" name="data[idle_worker]" value="0" />
      <input type="checkbox" name="data[idle_worker]" id="data[idle_worker]" value="1"<?php if ($_smarty_tpl->tpl_vars['SETTINGS']->value['idle_worker']){?>checked<?php }?> />
      <label for="data[idle_worker]"></label>
    </td>
  </tr>
  <tr>
    <td class="left">New Blocks</td>
    <td class="center">
      <input type="hidden" name="data[new_block]" value="0" />
      <input type="checkbox" name="data[new_block]" id="data[new_block]" value="1"<?php if ($_smarty_tpl->tpl_vars['SETTINGS']->value['new_block']){?>checked<?php }?> />
      <label for="data[new_block]"></label>
    </td>
  </tr>
  <tr>
    <td class="left">Auto Payout</td>
    <td class="center">
      <input type="hidden" name="data[auto_payout]" value="0" />
      <input type="checkbox" name="data[auto_payout]" id="data[auto_payout]" value="1"<?php if ($_smarty_tpl->tpl_vars['SETTINGS']->value['auto_payout']){?>checked<?php }?> />
      <label for="data[auto_payout]"></label>
    </td>
  </tr>
  <tr>
    <td class="left">Manual Payout</td>
    <td class="center">
      <input type="hidden" name="data[manual_payout]" value="0" />
      <input type="checkbox" name="data[manual_payout]" id="data[manual_payout]" value="1"<?php if ($_smarty_tpl->tpl_vars['SETTINGS']->value['manual_payout']){?>checked<?php }?> />
      <label for="data[manual_payout]"></label>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="center">
      <input type="submit" class="submit small" value="Update">
    </td>
  </tr>
</table>
</form>
</blockquote>

<b>Notification History</b>
<blockquote>
    <?php echo $_smarty_tpl->getSubTemplate ("global/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <table width="100%" class="pagesort">
      <thead style="font-size:13px;">
        <tr>
          <th class="center" style="cursor: pointer;">ID</th>
          <th class="center" style="cursor: pointer;">Time</th>
          <th class="center" style="cursor: pointer;">Type</th>
          <th class="center" style="cursor: pointer;">Active</th>
        </tr>
      </thead>
      <tbody style="font-size:12px;">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['name'] = 'notification';
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NOTIFICATIONS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total']);
?>
        <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
          <td class="center"><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['id'];?>
</td>
          <td class="center"><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['time'];?>
</td>
          <td class="center">
            <?php if ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='new_block'){?>New Block
            <?php }elseif($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='auto_payout'){?>Auto Payout
            <?php }elseif($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='idle_worker'){?>IDLE Worker
            <?php }elseif($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='manual_payout'){?>Manual Payout
            <?php }?>
          </td>
          <td class="center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['active']){?>success<?php }else{ ?>error<?php }?>.gif" />
          </td>
        </tr>
<?php endfor; endif; ?>
      </tbody>
    </table>
</blockquote><?php }} ?>
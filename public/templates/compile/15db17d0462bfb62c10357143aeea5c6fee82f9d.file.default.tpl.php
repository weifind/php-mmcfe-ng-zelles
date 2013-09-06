<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:40:49
         compiled from ".\templates\zelles\account\invitations\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21678522986938aa776-63092212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15db17d0462bfb62c10357143aeea5c6fee82f9d' => 
    array (
      0 => '.\\templates\\zelles\\account\\invitations\\default.tpl',
      1 => 1378453242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21678522986938aa776-63092212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52298693d53292_72500487',
  'variables' => 
  array (
    'INVITATIONS' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52298693d53292_72500487')) {function content_52298693d53292_72500487($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include './include/smarty/libs/plugins\\modifier.date_format.php';
?><b>Invitations</b>
<blockquote>
<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="POST">
<input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
<input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
<input type="hidden" name="do" value="sendInvitation">
<table>
  <tr>
    <td>E-Mail</td>
    <td><input type="text" name="data[email]" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['data']['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="30" style="width: 300px;"></td>
  </tr>
  <tr>
    <td>Message</td>
    <td><textarea name="data[message]" style="width: 300px;"><?php echo (($tmp = @htmlspecialchars($_REQUEST['data']['message'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Please accept my invitation to this awesome pool." : $tmp);?>
</textarea></td>
  </tr>
  <tr>
    <td colspan="2" class="center">
      <input type="submit" class="submit small" value="Send">
    </td>
  </tr>
</table>
</form>
</blockquote>

<b>Past Invitations</b>
<blockquote>
    <table width="100%">
      <thead style="font-size:13px;">
        <tr>
          <th>E-Mail</th>
          <th class="center">Sent</th>
          <th class="center">Activated</th>
        </tr>
      </thead>
      <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['invite'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['name'] = 'invite';
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['INVITATIONS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total']);
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['email'];?>
</td>
          <td class="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['time'],"%d/%m/%Y %H:%M:%S");?>
</td>
          <td class="center"><img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['is_activated']){?>success<?php }else{ ?>error<?php }?>.gif" /></td>
        </tr>
<?php endfor; endif; ?>
      <tbody>
    </table>
</blockquote><?php }} ?>
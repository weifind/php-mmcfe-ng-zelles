<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:27:32
         compiled from ".\templates\zelles\admin\user\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1118952293386d451e7-60390917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1173b44eb9ec65782cbf57496573b3841d950304' => 
    array (
      0 => '.\\templates\\zelles\\admin\\user\\default.tpl',
      1 => 1378456029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118952293386d451e7-60390917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52293387722a37_36576649',
  'variables' => 
  array (
    'USERS' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52293387722a37_36576649')) {function content_52293387722a37_36576649($_smarty_tpl) {?><script language="javascript">
    function storeFee(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['PHP_SELF'];?>
",
       data: "page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&do=fee&account_id=" + id,
     });
    }
    function storeLock(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['PHP_SELF'];?>
",
       data: "page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&do=lock&account_id=" + id,
     });
    }
    function storeAdmin(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['PHP_SELF'];?>
",
       data: "page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&do=admin&account_id=" + id,
     });
    }
</script>

<b>Query User Database</b>
<blockquote>
<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="POST" id='query'>
  <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
  <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
  <input type="text" class="pin" name="query" value="<?php echo (($tmp = @$_REQUEST['query'])===null||$tmp==='' ? "%" : $tmp);?>
">
  <input type="submit" class="submit small" value="Query">
</form>
</blockquote>

<b>User Information</b>
<blockquote>
<center>
<?php echo $_smarty_tpl->getSubTemplate ("global/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</center>
<table width="100%" class="pagesort">
  <thead>
    <tr>
      <th class="center">ID</th>
      <th>Username</th>
      <th>E-Mail</th>
      <th class="right">Shares&nbsp;&nbsp;</th>
      <th class="right">Hashrate&nbsp;&nbsp;</th>
      <th class="right">Est. Donation&nbsp;&nbsp;</th>
      <th class="right">Est. Payout&nbsp;&nbsp;&nbsp;</th>
      <th class="right">Balance&nbsp;&nbsp;&nbsp;</th>
      <th class="center">Admin</th>
      <th class="center">Locked</th>
      <th class="center">No Fees</th>
    </tr>
  </thead>
  <tbody>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['USERS']->value)===null||$tmp==='' ? '' : $tmp)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
    <tr>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
</td>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td class="right"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['shares'];?>
</td>
      <td class="right"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hashrate'];?>
</td>
      <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['payout']['est_donation'],"8");?>
</td>
      <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['payout']['est_payout'],"8");?>
</td>
      <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['balance'],"8");?>
</td>
      <td class="center">
        <input type="hidden" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeAdmin(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_admin']){?>checked<?php }?> />
        <label for="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
      <td class="center">
        <input type="hidden" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeLock(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_locked']){?>checked<?php }?> />
        <label for="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
      <td class="center">
        <input type="hidden" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeFee(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['no_fees']){?>checked<?php }?> />
        <label for="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
    </tr>
<?php endfor; else: ?>
  <tr>
    <td colspan="10"></td>
  </tr>
<?php endif; ?>

  </tbody>
  <tfoot>
    <tr>
      <th class="center">ID</th>
      <th>Username</th>
      <th>E-Mail</th>
      <th class="right">Shares&nbsp;&nbsp;</th>
      <th class="right">Hashrate&nbsp;&nbsp;</th>
      <th class="right">Est. Donation&nbsp;&nbsp;</th>
      <th class="right">Est. Payout&nbsp;&nbsp;&nbsp;</th>
      <th class="right">Balance&nbsp;&nbsp;&nbsp;</th>
      <th class="center">Admin</th>
      <th class="center">Locked</th>
      <th class="center">No Fees</th>
    </tr>
  </tfoot>
</table>
</blockquote><?php }} ?>
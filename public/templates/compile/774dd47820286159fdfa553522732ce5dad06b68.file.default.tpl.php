<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:28:22
         compiled from ".\templates\zelles\account\workers\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783252298267d48ef2-20457152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '774dd47820286159fdfa553522732ce5dad06b68' => 
    array (
      0 => '.\\templates\\zelles\\account\\workers\\default.tpl',
      1 => 1378452493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783252298267d48ef2-20457152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522982689ca8b3_91582574',
  'variables' => 
  array (
    'GLOBAL' => 1,
    'WORKERS' => 1,
    'username' => 1,
    'PATH' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522982689ca8b3_91582574')) {function content_522982689ca8b3_91582574($_smarty_tpl) {?><b>My Workers</b>
<blockquote>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
      <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
      <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
      <input type="hidden" name="do" value="update">
      <table border="0" cellpadding="3" cellspacing="3">
         <tbody>
            <tr>
              <td>Worker Name</td>
              <td>Password</td>
              <td class="center">Active</td>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']!=1){?><td class="center">Monitor</td><?php }?>
              <td class="right">Khash/s</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['worker'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['name'] = 'worker';
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['WORKERS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total']);
?>
               <?php $_smarty_tpl->tpl_vars["username"] = new Smarty_variable(explode(htmlspecialchars(".", ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['username'],2), true, 0);?>
               <tr>
                 <td<?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']>0){?> style="color: orange"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value[0], ENT_QUOTES, 'UTF-8', true);?>
.<input name="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][username]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value[1], ENT_QUOTES, 'UTF-8', true);?>
" size="10" required/></td>
                 <td><input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][password]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['password'], ENT_QUOTES, 'UTF-8', true);?>
" size="10" required></td>
                 <td class="center"><img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']>0){?>success<?php }else{ ?>error<?php }?>.gif" /></td>
                 <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']!=1){?>
                    <td class="center">
                      <input type="checkbox" name="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][monitor]" value="1" id="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][monitor]" <?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['monitor']){?>checked<?php }?> />
                      <label for="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][monitor]"></label>
                    </td>
                 <?php }?>
                 <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']);?>
</td>
                 <td align="right"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=delete&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
"><button type="button">Delete</button></a></td>
               </tr>
            <?php endfor; endif; ?>
            
         </tbody>
      </table>
      <input type="submit" value="Update Workers">
   </form>
</blockquote>

<b>Add a New Worker</b>
<blockquote>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
      <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
      <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
      <input type="hidden" name="do" value="add">
      <?php echo $_SESSION['USERDATA']['username'];?>
.<input type="text" name="username" value="user" size="10" maxlength="20" required> · <input type="text" name="password" value="password" size="10" maxlength="20" required>&nbsp;<input type="submit" value="Add New Worker">
   </form>
<blockquote><?php }} ?>
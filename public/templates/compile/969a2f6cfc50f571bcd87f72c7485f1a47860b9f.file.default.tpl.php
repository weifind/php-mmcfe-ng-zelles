<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 09:07:04
         compiled from ".\templates\zelles\register\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14845522932a762a517-12060569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969a2f6cfc50f571bcd87f72c7485f1a47860b9f' => 
    array (
      0 => '.\\templates\\zelles\\register\\default.tpl',
      1 => 1378456898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14845522932a762a517-12060569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522932a796d306_42645691',
  'variables' => 
  array (
    'RECAPTCHA' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522932a796d306_42645691')) {function content_522932a796d306_42645691($_smarty_tpl) {?><b>Join our pool</b>
<blockquote>
<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php if ((($tmp = @$_REQUEST['token'])===null||$tmp==='' ? '' : $tmp)){?>
  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
  <input type="hidden" name="action" value="register">
  <table width="90%" border="0">
    <tbody>
      <tr><td>Username:</td><td><input type="text" class="text tiny" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" maxlength="20" required></td></tr>
      <tr><td>Password:</td><td><input type="password" class="text tiny" name="password1" value="" size="15" maxlength="20" required></td></tr>
      <tr><td>Repeat Password:</td><td><input type="password" class="text tiny" name="password2" value="" size="15" maxlength="20" required></td></tr>
      <tr><td>Email:</td><td><input type="text" name="email1" class="text small" value="<?php echo (($tmp = @htmlspecialchars($_POST['email1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required></td></tr>
      <tr><td>Email Repeat:</td><td><input type="text" class="text small" name="email2" value="<?php echo (($tmp = @htmlspecialchars($_POST['email2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required></td></tr>
      <tr><td>PIN:</td><td><input type="password" class="text pin" name="pin" value="" size="4" maxlength="4"><font size="1"> (4 digit number. <b>Remember this pin!</b>)</font></td></tr>
      <tr><td colspan="2"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</td></tr>
      <tr><td class="center"><input type="submit" class="submit small" value="Register"></td><td></td></tr>
    </tbody>
  </table>
</form>
</blockquote><?php }} ?>
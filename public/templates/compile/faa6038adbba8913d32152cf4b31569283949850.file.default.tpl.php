<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 19:31:03
         compiled from ".\templates\zelles\password\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162522a2d77e4afb3-48636119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faa6038adbba8913d32152cf4b31569283949850' => 
    array (
      0 => '.\\templates\\zelles\\password\\default.tpl',
      1 => 1378456782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162522a2d77e4afb3-48636119',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522a2d78049631_39474061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522a2d78049631_39474061')) {function content_522a2d78049631_39474061($_smarty_tpl) {?><b>Reset Password</b>
<blockquote>
   <form action="" method="POST">
      <input type="hidden" name="page" value="password">
      <input type="hidden" name="action" value="reset">
      <p>If you have an email set for your account, enter your username to get your password reset</p>
      <p><input type="text" value="<?php echo (($tmp = @$_POST['username'])===null||$tmp==='' ? '' : $tmp);?>
" name="username" required><input class="submit small" type="submit" value="Reset"></p>
   </form>
</blockquote><?php }} ?>
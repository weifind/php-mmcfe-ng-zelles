<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 20:15:37
         compiled from ".\templates\zelles\global\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199552292bbf125ec7-05730129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3057193b31a46742b56643870c522893921f13f' => 
    array (
      0 => '.\\templates\\zelles\\global\\login.tpl',
      1 => 1378498530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199552292bbf125ec7-05730129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292bbf1d76e9_11523131',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292bbf1d76e9_11523131')) {function content_52292bbf1d76e9_11523131($_smarty_tpl) {?><div style="padding: 10px;">
   <b>Login</b>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>
?page=login" method="post" id="loginForm">
      <p align="center"><input type="text" name="username" value="" id="userForm" maxlength="20" required></p>
      <p align="center"><input type="password" name="password" value="" id="passForm" maxlength="20" required></p>
      <p align="right"><input type="submit" class="button" value="Login"></p>
   </form>
   <p align="center"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=password"><font size="1">Forgot your password?</font></a></p>
</div><?php }} ?>
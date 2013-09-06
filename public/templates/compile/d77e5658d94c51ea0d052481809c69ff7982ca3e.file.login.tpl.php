<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:09:58
         compiled from ".\templates\mmcFE\global\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193052292b669996c2-70913531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd77e5658d94c51ea0d052481809c69ff7982ca3e' => 
    array (
      0 => '.\\templates\\mmcFE\\global\\login.tpl',
      1 => 1378429319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193052292b669996c2-70913531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292b66a2eb79_99198617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292b66a2eb79_99198617')) {function content_52292b66a2eb79_99198617($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global/block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_HEADER'=>"Login",'BLOCK_STYLE'=>"clear:none; margin-left:13px;  margin-top:15px;"), 0);?>
        
	<form action="<?php echo $_SERVER['PHP_SELF'];?>
?page=login" method="post" id="loginForm">
          <p><input type="text" name="username" value="" id="userForm" maxlength="20" required></p>
          <p><input type="password" name="password" value="" id="passForm" maxlength="20" required></p>
          <center><p><input type="submit" class="submit small" value="Login"></p></center>
        </form>
        <center><p><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=password"><font size="1">Forgot your password?</font></a></p></center>
<?php echo $_smarty_tpl->getSubTemplate ("global/block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
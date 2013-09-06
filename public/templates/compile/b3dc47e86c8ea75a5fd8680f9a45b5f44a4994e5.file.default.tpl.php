<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 09:11:08
         compiled from ".\templates\zelles\statistics\graphs\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1259852297ee70111c5-45677725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3dc47e86c8ea75a5fd8680f9a45b5f44a4994e5' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\graphs\\default.tpl',
      1 => 1378458113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1259852297ee70111c5-45677725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52297ee724b2b3_11046164',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297ee724b2b3_11046164')) {function content_52297ee724b2b3_11046164($_smarty_tpl) {?><b>24h Hashrate Statistics</b>
<blockquote>
   <?php echo $_smarty_tpl->getSubTemplate (((string)$_REQUEST['page'])."/".((string)$_REQUEST['action'])."/mine.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate (((string)$_REQUEST['page'])."/".((string)$_REQUEST['action'])."/pool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate (((string)$_REQUEST['page'])."/".((string)$_REQUEST['action'])."/both.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</blockquote><?php }} ?>
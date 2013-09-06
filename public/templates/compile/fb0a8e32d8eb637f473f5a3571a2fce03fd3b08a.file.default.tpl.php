<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:09:58
         compiled from ".\templates\mmcFE\home\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299352292b66dfc5c0-42237615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb0a8e32d8eb637f473f5a3571a2fce03fd3b08a' => 
    array (
      0 => '.\\templates\\mmcFE\\home\\default.tpl',
      1 => 1378429319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299352292b66dfc5c0-42237615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NEWS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292b66f2f4b1_65186405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292b66f2f4b1_65186405')) {function content_52292b66f2f4b1_65186405($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include './include/smarty/libs/plugins\\modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NEWS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
  <?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['time'],"%b %e, %Y at %H:%M");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("global/block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_HEADER'=>((string)$_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['header']).", <font size=\"1px\">posted ".$_tmp1." by <b>".((string)$_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['author'])."</b></font>"), 0);?>

  <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['content'];?>

  <?php echo $_smarty_tpl->getSubTemplate ("global/block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php endfor; endif; ?>
<?php }} ?>
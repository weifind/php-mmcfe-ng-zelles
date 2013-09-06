<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:36:15
         compiled from ".\templates\zelles\about\donors\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8508522993ffc31ce1-26045389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25b89bb9230f51db584768d7031a4ebdd61941fa' => 
    array (
      0 => '.\\templates\\zelles\\about\\donors\\default.tpl',
      1 => 1378456449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8508522993ffc31ce1-26045389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'DONORS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522993ffe903c6_37334877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522993ffe903c6_37334877')) {function content_522993ffe903c6_37334877($_smarty_tpl) {?><b>Pool Donors</b>
<blockquote>
<?php echo $_smarty_tpl->getSubTemplate ("global/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table width="500px" class="pagesort">
  <thead>
    <tr>
      <th>Name</th>
      <th class="center">%</th>
      <th class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Total</th>
    </tr>
  </thead>
  <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['donor'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['name'] = 'donor';
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DONORS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total']);
?>
    <tr>
      <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1){?>anonymous<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['username'];?>
<?php }?></td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['donate_percent'];?>
</td>
      <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['donation'],"2");?>
</td>
    </tr>
<?php endfor; else: ?>
    <tr>
      <td class="center" colspan="3">No confirmed donations yet, please be patient!</td>
    </tr>
<?php endif; ?>
  </tbody>
</table>
</blockquote><?php }} ?>
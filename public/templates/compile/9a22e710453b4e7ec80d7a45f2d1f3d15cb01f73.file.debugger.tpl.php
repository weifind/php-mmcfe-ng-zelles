<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:09:59
         compiled from ".\templates\mmcFE\system\debugger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42352292b6718aaf4-54477571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a22e710453b4e7ec80d7a45f2d1f3d15cb01f73' => 
    array (
      0 => '.\\templates\\mmcFE\\system\\debugger.tpl',
      1 => 1378429321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42352292b6718aaf4-54477571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DebuggerInfo' => 0,
    'backtrace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292b67354524_53639132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292b67354524_53639132')) {function content_52292b67354524_53639132($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins\\function.cycle.php';
?>
<?php if ($_smarty_tpl->tpl_vars['DebuggerInfo']->value){?>
    <!-- This will be loaded if we have debug information available -->
    <a href="#" id="toggle" class="toggle">Debugger Console</a>
    <div id="panel">
        <div id="DebuggerConsole">
            <table width="100%">
                <thead>
                    <tr>
                        <th width="15"><b>Level</b></th>
                        <th width="25"><b>Time</b></th>
                        <th width="*"><b>Message</b></th>
                        <th width="*"><b>Backtrace</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['debug'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['debug']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['name'] = 'debug';
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DebuggerInfo']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['debug']['total']);
?>
                        <tr class="<?php echo smarty_function_cycle(array('values'=>"even,odd"),$_smarty_tpl);?>
">
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['DebuggerInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['debug']['index']]['level'];?>
</td>
                            <td align="right"><?php echo $_smarty_tpl->tpl_vars['DebuggerInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['debug']['index']]['time'];?>
</td>
                            <td align="left"><?php echo $_smarty_tpl->tpl_vars['DebuggerInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['debug']['index']]['message'];?>
</td>
                            <td align="left">
                                <table border="0">
                                <?php  $_smarty_tpl->tpl_vars['backtrace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['backtrace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DebuggerInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['debug']['index']]['backtrace']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['backtrace']->key => $_smarty_tpl->tpl_vars['backtrace']->value){
$_smarty_tpl->tpl_vars['backtrace']->_loop = true;
?>
                                    <tr>
                                        <td style="display:inline-block; width:25px;"><?php echo $_smarty_tpl->tpl_vars['backtrace']->value['line'];?>
</td>
                                        <td style="display:inline-block; width:200px"><?php echo $_smarty_tpl->tpl_vars['backtrace']->value['file'];?>
</td>
                                        <td style="display:inline-block;"><?php echo $_smarty_tpl->tpl_vars['backtrace']->value['function'];?>
</td>
                                    </tr>
                                <?php } ?>
                                </table>
                            </td>
                        </tr>
                    <?php endfor; endif; ?>
                </tbody>
            </table>

        </div>
    </div>
<?php }?>
<?php }} ?>
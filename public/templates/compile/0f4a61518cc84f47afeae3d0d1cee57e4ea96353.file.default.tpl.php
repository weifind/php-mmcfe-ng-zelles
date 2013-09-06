<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:16:04
         compiled from ".\templates\zelles\admin\settings\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324155229334a09e8e2-66853967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f4a61518cc84f47afeae3d0d1cee57e4ea96353' => 
    array (
      0 => '.\\templates\\zelles\\admin\\settings\\default.tpl',
      1 => 1378455353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324155229334a09e8e2-66853967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5229334a6e7203_29159721',
  'variables' => 
  array (
    'SETTINGS' => 0,
    'TAB' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229334a6e7203_29159721')) {function content_5229334a6e7203_29159721($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './include/smarty/libs/plugins\\function.html_options.php';
?><b>Admin Settings</b>
<blockquote>
   <?php  $_smarty_tpl->tpl_vars['TAB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['SETTINGS']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB']->key => $_smarty_tpl->tpl_vars['TAB']->value){
$_smarty_tpl->tpl_vars['TAB']->_loop = true;
?>
      <div id="<?php echo $_smarty_tpl->tpl_vars['TAB']->value;?>
" style="padding-left: 15px;">
      <form method="POST">
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
" />
        <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
" />
        <input type="hidden" name="do" value="save" />
        <table>
          <thead>
            <th class="left">Setting</th>
            <th class="center">Help</th>
            <th>Value</th>
          </thead>
          <tbody>
             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['setting'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['name'] = 'setting';
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total']);
?>
                <tr>
                  <td class="left"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['display'];?>
</td>
                  <td class="center"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['tooltip'])===null||$tmp==='' ? '' : $tmp)){?><span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['tooltip'];?>
.'></span><?php }?></td>
                  <td>
                    <?php if ($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='select'){?>
                      <?php echo smarty_function_html_options(array('name'=>"data[".((string)$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'])."]",'options'=>$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['options'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp)),$_smarty_tpl);?>

                    <?php }elseif($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='text'){?>
                      <input type="text" size="<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['size'];?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'];?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp);?>
" />
                    <?php }else{ ?>
                      Unknown option type: <?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type'];?>

                    <?php }?>
                  </td>
                </tr>
             <?php endfor; endif; ?>
            <tr><td class="center" colspan="3"><input type="submit" value="Save" class="submit small" /></td></tr>
          </tbody>
        </table>
      </form>
      </div>
   <?php } ?>
</blockquote><?php }} ?>
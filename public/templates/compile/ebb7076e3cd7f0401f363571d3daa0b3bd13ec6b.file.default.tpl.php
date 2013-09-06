<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:28:10
         compiled from ".\templates\zelles\admin\monitoring\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277685229921ab2c305-29687331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebb7076e3cd7f0401f363571d3daa0b3bd13ec6b' => 
    array (
      0 => '.\\templates\\zelles\\admin\\monitoring\\default.tpl',
      1 => 1378456077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277685229921ab2c305-29687331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CRONSTATUS' => 0,
    'cron' => 0,
    'data' => 0,
    'event' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5229921b1c9c58_74871062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229921b1c9c58_74871062')) {function content_5229921b1c9c58_74871062($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include './include/smarty/libs/plugins\\modifier.date_format.php';
?><b>Monitoring</b>
<blockquote>
    <table width="88%">
      <thead>
        <th>Cronjob</th>
        <th>Exit Code</th>
        <th>Active</th>
        <th>Runtime</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Message</th>
      </thead>
      <tbody>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['cron'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CRONSTATUS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['cron']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['cron']->value;?>
</td>
  <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['event']->value['type']=='okerror'){?>
              <?php if ($_smarty_tpl->tpl_vars['event']->value['value']==0){?>
                <font color="green">OK</font>
              <?php }else{ ?>
                <font color="red">ERROR</font>
              <?php }?>
            <?php }elseif($_smarty_tpl->tpl_vars['event']->value['type']=='message'){?>
              <i><?php echo $_smarty_tpl->tpl_vars['event']->value['value'];?>
</i>
            <?php }elseif($_smarty_tpl->tpl_vars['event']->value['type']=='yesno'){?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['event']->value['value']==1){?>success<?php }else{ ?>error<?php }?>.gif" />
            <?php }elseif($_smarty_tpl->tpl_vars['event']->value['type']=='time'){?>
              <?php if ($_smarty_tpl->tpl_vars['event']->value['value']>60){?>
                <font color="orange">
              <?php }elseif($_smarty_tpl->tpl_vars['event']->value['value']>120){?>
                <font color="red">
              <?php }else{ ?>
                <font color="green">
              <?php }?>
                <?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['event']->value['value'])===null||$tmp==='' ? "0" : $tmp),"2");?>
 seconds
              </font>
            <?php }elseif($_smarty_tpl->tpl_vars['event']->value['type']=='date'){?>
              <?php if ((time()-180)>$_smarty_tpl->tpl_vars['event']->value['value']){?>
                <font color="red">
              <?php }elseif((time()-120)>$_smarty_tpl->tpl_vars['event']->value['value']){?>
                <font color="orange">
              <?php }else{ ?>
                <font color="green">
              <?php }?>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['value'],"%m/%d %H:%M:%S");?>

              </font>
            <?php }else{ ?>
              <?php echo (($tmp = @$_smarty_tpl->tpl_vars['event']->value['value'])===null||$tmp==='' ? '' : $tmp);?>

            <?php }?>
          </td>
  <?php } ?>
        </tr>
<?php } ?>
      </tbody>
    </table>
</blockquote><?php }} ?>
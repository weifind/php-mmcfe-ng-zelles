<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:36:34
         compiled from ".\templates\zelles\statistics\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5657522931a2c4b640-53091034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edbf5373af969e55e5939da1d9fe724692413695' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\default.tpl',
      1 => 1378429320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5657522931a2c4b640-53091034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CURRENTBLOCK' => 0,
    'DIFFICULTY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522931a2ecbb13_36296245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522931a2ecbb13_36296245')) {function content_522931a2ecbb13_36296245($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global/block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_HEADER'=>"Pool Statistics"), 0);?>

<table class="" width="50%" style="font-size:14px;">
  <tbody>
  <tr>
    <td class="leftheader">Pool Hash Rate</td>
    <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate']/1000;?>
 Mhash/s</td>
  </tr>
  <tr>
    <td class="leftheader">Current Total Miners</td>
    <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
  </tr>
  <tr>
    <td class="leftheader">Current Block</td>
    <td><a href="http://explorer.litecoin.net/search?q=<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
</a></td>
  </tr>
  <tr>
    <td class="leftheader">Current Difficulty</td>
    <td><a href="http://allchains.info/" target="_new"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</a></td>
  </tr>
  </tbody>
</table>
<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['website']['api']['disabled']){?><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=api&action=public" target="_api">HERE</a></li><?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("global/block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
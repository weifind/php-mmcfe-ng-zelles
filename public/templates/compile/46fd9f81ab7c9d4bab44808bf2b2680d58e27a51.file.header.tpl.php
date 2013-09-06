<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:09:57
         compiled from ".\templates\mmcFE\global\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1012652292b6593efb0-69315429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46fd9f81ab7c9d4bab44808bf2b2680d58e27a51' => 
    array (
      0 => '.\\templates\\mmcFE\\global\\header.tpl',
      1 => 1378429319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1012652292b6593efb0-69315429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292b65b83b14_67109378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292b65b83b14_67109378')) {function content_52292b65b83b14_67109378($_smarty_tpl) {?>          <div id="siteinfo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "The Pool" : $tmp);?>
<br/>
            <span class="slogan"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['slogan'])===null||$tmp==='' ? "Resistance is Futile" : $tmp);?>
</span>
          </div>
          <div id="ministats">
            <table border="0">
              <tr>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']){?><td><li><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
/<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency'];?>
: <?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['price'])===null||$tmp==='' ? "0" : $tmp),"4");?>
&nbsp;&nbsp;&nbsp;&nbsp;</li></td><?php }?>
                <td><li>Network Hashrate: <?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate']/1000/1000))===null||$tmp==='' ? "0" : $tmp),"3");?>
 MH/s&nbsp;&nbsp;&nbsp;&nbsp;</li></td>
                <td><li>Pool Hashrate: <?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate']/1000),"3");?>
 MH/s&nbsp;&nbsp;&nbsp;&nbsp;</li></td>
                <td><li>Pool Sharerate: <?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['sharerate'],"2");?>
 Shares/s&nbsp;&nbsp;&nbsp;&nbsp;</li></td>
                <td><li>Pool Workers: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['workers'])===null||$tmp==='' ? "0" : $tmp);?>
&nbsp;&nbsp;&nbsp;&nbsp;</li></td>
              </tr>
            </table>
          </div>
<?php }} ?>
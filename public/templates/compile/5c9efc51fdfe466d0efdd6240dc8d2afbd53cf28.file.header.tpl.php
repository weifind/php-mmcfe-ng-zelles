<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 06:28:53
         compiled from ".\templates\zelles\global\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:811152292bbe1867e2-39587849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c9efc51fdfe466d0efdd6240dc8d2afbd53cf28' => 
    array (
      0 => '.\\templates\\zelles\\global\\header.tpl',
      1 => 1378448925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811152292bbe1867e2-39587849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292bbe3e8117_40574592',
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292bbe3e8117_40574592')) {function content_52292bbe3e8117_40574592($_smarty_tpl) {?><table class="header">
   <tr>
      <td>
         <span class="headertitle"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "The Mining Pool" : $tmp);?>
</span><br>
         <span class="headerslogan"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['slogan'])===null||$tmp==='' ? "Patience is a Virtue" : $tmp);?>
</span>
      </td>
      <td align="right">
         <table class="headercolor">
            <tr>
               <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']){?>
                  <td valign="top" style="padding-right: 15px;">
                     <li><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
/<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency'];?>
: <?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['price'])===null||$tmp==='' ? "0" : $tmp),"4");?>
</li>
                  </td>
               <?php }?>
               <td valign="top" style="padding-right: 15px;">
                  <li>Pool Workers: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['workers'])===null||$tmp==='' ? "0" : $tmp);?>
</li>
                  <li>Pool Sharerate: <?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['sharerate'],"2");?>
 Shares/s</li>
               </td>
               <td valign="top">
                  <li>Network Hashrate: <?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate']/1000/1000))===null||$tmp==='' ? "0" : $tmp),"3");?>
 MH/s</li>
                  <li>Pool Hashrate: <?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate']/1000),"3");?>
 MH/s</li>
               </td>
            </tr>
         </table>
      </td>
   </tr>
</table><?php }} ?>
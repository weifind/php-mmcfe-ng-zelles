<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 19:47:45
         compiled from ".\templates\zelles\global\sidebar_prop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11773522932f77fce94-74133073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd212f465ab0af2abaa37a7f7ff410dfb08faea0b' => 
    array (
      0 => '.\\templates\\zelles\\global\\sidebar_prop.tpl',
      1 => 1378496857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11773522932f77fce94-74133073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522932f7d34cf6_82329666',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522932f7d34cf6_82329666')) {function content_522932f7d34cf6_82329666($_smarty_tpl) {?><center>
   <table classs="statsbar">
      <tr>
         <td colspan="2"><b><u>Your Stats</u></b></td>
      </tr><tr>
         <td><b>Hashrate</b></td>
         <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate']);?>
 KH/s</td>
      </tr><tr>
         <td colspan="2"><b><u>Unpaid Shares</u></b> <span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='Submitted shares between the last 120 confirms block until now.'></span></td>
      </tr><tr>
         <td><b>Your Valid<b></td>
         <td class="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
</i><font size='1px'></font></b></td>
      </tr><tr>
         <td><b>Pool Valid</td>
         <td class="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']);?>
</i> <font size='1px'></font></b></td>
      </tr><tr>
         <td colspan="2"><b><u>Round Shares</u></b> <span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='Submitted shares since last found block (ie. round shares)'></span></td>
      </tr><tr>
         <td><b>Pool Valid</b></td>
         <td class="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']);?>
</i></td>
      </tr><tr>
         <td><b>Pool Invalid</b></td>
         <td class="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']);?>
</i><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0){?><font size='1px'> (<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%)</font><?php }?></td>
      </tr><tr>
         <td><b>Your Invalid</b></td>
         <td class="right"><i><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']);?>
</i><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0){?><font size='1px'> (<?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%)</font><?php }?></td>
      </tr><tr>
         <td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Round Estimate</u></b></td>
      </tr><tr>
         <td><b>Block</b></td>
         <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['est_block'],"8");?>
</td>
      </tr><tr>
         <td><b>Fees</b></td>
         <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['est_fee'],"8");?>
</td>
      </tr><tr>
         <td><b>Donation</b></td>
         <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['est_donation'],"8");?>
</td>
      </tr><tr>
         <td><b>Payout</b></td>
         <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['est_payout'],"8");?>
</td>
      </tr><tr>
         <td colspan="2">&nbsp;</td>
      </tr><tr>
         <td colspan="2"><b><u><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Account Balance</u></b></td>
      </tr><tr>
         <td>Confirmed</td>
         <td class="right"><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
      </tr><tr>
         <td>Unconfirmed</td>
         <td class="right"><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['unconfirmed'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
      </tr>
   </table>
</center><?php }} ?>
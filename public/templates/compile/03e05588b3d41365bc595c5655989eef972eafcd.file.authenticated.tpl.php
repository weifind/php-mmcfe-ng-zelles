<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 09:12:59
         compiled from ".\templates\zelles\statistics\pool\authenticated.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304505229330d79fbf3-14860369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03e05588b3d41365bc595c5655989eef972eafcd' => 
    array (
      0 => '.\\templates\\zelles\\statistics\\pool\\authenticated.tpl',
      1 => 1378458768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304505229330d79fbf3-14860369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5229330def1530_90130735',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CURRENTBLOCK' => 0,
    'CURRENTBLOCKHASH' => 0,
    'LASTBLOCKHASH' => 0,
    'LASTBLOCK' => 0,
    'DIFFICULTY' => 0,
    'ESTTIME' => 0,
    'TIMESINCELAST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229330def1530_90130735')) {function content_5229330def1530_90130735($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include './include/smarty/libs/plugins\\modifier.seconds_to_words.php';
?><b>Pool Statistics</b><br>
<table style="width: 100%;">
   <tr>
      <td valign="top">
         <?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </td>
      <td valign="top">
         <?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHORT'=>true), 0);?>

      </td>
   </tr><tr>
      <td valign="top">
         <?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </td>
      <td valign="top">

   <b>Server Stats</b>
   <blockquote>
   <table width="100%" style="font-size:13px;">
      <tbody>
      <tr>
      <td class="leftheader">Pool Hash Rate</td>
      <td><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate']/1000),"3");?>
 Mhash/s</td>
    </tr>
    <tr>
      <td class="leftheader">Pool Efficiency</td>
      <td><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0){?><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%<?php }else{ ?>0%<?php }?></td>
    </tr>
    <tr>
      <td class="leftheader">Current Active Workers</td>
      <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url']){?>
    <tr>
      <td class="leftheader">Next Network Block</td>
      <td><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp;<font size="1"> (Current: <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCKHASH']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</a></font></td>
    </tr>
    <?php }else{ ?>
    <tr>
      <td class="leftheader">Next Network Block</td>
      <td><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1;?>
 &nbsp;&nbsp; (Current: <?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
)</td>
    </tr>
    <?php }?>
    <tr>
      <td class="leftheader">Last Block Found</td>
      <td><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['LASTBLOCKHASH']->value;?>
" target="_new"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCK']->value)===null||$tmp==='' ? "0" : $tmp);?>
</a><?php }else{ ?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCK']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php }?></td>
    </tr>
    <tr>
      <td class="leftheader">Current Difficulty</td>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']){?>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><font size="2"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</font></a></td>
      <?php }else{ ?>
      <td><font size="2"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</font></td>
      <?php }?>
    </tr>
    <tr>
      <td class="leftheader">Est. Avg. Time per Round</td>
      <td><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['ESTTIME']->value);?>
</td>
    </tr>
    <tr>
      <td class="leftheader">Est. Shares this Round</td>
      <td><?php echo number_format((pow(2,32-$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['targetdiff'])*$_smarty_tpl->tpl_vars['DIFFICULTY']->value),"0");?>
 <font size="1">(done: <?php echo number_format((100/(pow(2,32-$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['targetdiff'])*$_smarty_tpl->tpl_vars['DIFFICULTY']->value)*$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']),"2");?>
 %)</td>
    </tr>
    <tr>
      <td class="leftheader">Time Since Last Block</td>
      <td><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['TIMESINCELAST']->value);?>
</td>
      </tr>
      </tbody>
   </table>
   <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']){?><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=api&action=getpoolstatus&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
">HERE</a></li><?php }?>
   </blockquote>
      </td>
   </tr>
</table><?php }} ?>
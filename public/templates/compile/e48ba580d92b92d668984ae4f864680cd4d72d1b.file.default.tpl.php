<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:55:17
         compiled from ".\templates\zelles\admin\news\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8117522988a3624ec1-09210004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e48ba580d92b92d668984ae4f864680cd4d72d1b' => 
    array (
      0 => '.\\templates\\zelles\\admin\\news\\default.tpl',
      1 => 1378454110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8117522988a3624ec1-09210004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522988a3da0fc3_78159560',
  'variables' => 
  array (
    'NEWS' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522988a3da0fc3_78159560')) {function content_522988a3da0fc3_78159560($_smarty_tpl) {?><b>News Posts</b>
<blockquote>
   <b>Add News Post</b>
   <blockquote>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>
">
         <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
         <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
         <input type="hidden" name="do" value="add">
         <table width="80%">
            <tr>
               <th>Header</th>
               <td><input size="30" type="text" name="data[header]" required /></td>
            </tr><tr>
               <th>Content</th>
               <td><textarea name="data[content]" required></textarea></td>
            </tr><tr>
               <td class="center" colspan="2"><input type="submit" value="Add" class="submit small"></td>
            </tr>
         </table>
      </form>
   </blockquote>
   
   <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
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
      <blockquote>
         <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['header'];?>
 posted <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['time'];?>
 by <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['author'];?>
<br>
         <a href='<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=news_edit&id=<?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
'>Edit</a> - 
         <a href='<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo $_REQUEST['page'];?>
&action=<?php echo $_REQUEST['action'];?>
&do=delete&id=<?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
'>Delete</a>
         <?php if ($_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['active']==0){?><font size="2px">This post is <font color="red"><b>inactive</b></font><br /><br /><?php }?>
         <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['content'];?>

         <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>
">
            <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
            <input type="hidden" name="action" value="news_edit">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
">
         </form>
      </blockquote>
   <?php endfor; endif; ?>
   
</blockquote><?php }} ?>
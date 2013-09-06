<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:01:33
         compiled from ".\templates\zelles\admin\news_edit\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3116352298b75f2f3a2-88415919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf9f191edfb5997a4be910df4aa385665742c54' => 
    array (
      0 => '.\\templates\\zelles\\admin\\news_edit\\default.tpl',
      1 => 1378454471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3116352298b75f2f3a2-88415919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52298b762b5d73_80622789',
  'variables' => 
  array (
    'NEWS' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52298b762b5d73_80622789')) {function content_52298b762b5d73_80622789($_smarty_tpl) {?>
<b>Edit news entry #<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>
</b>
<blockquote>
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>
">
  <input type="hidden" name="page" value="<?php echo $_REQUEST['page'];?>
">
  <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>
">
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>
">
  <input type="hidden" name="do" value="save">
  <table width="80%">
    <tr>
      <th>
        Active
      </th>
      <td>
        <input type="checkbox" name="active" value="1" id="active" <?php if ($_smarty_tpl->tpl_vars['NEWS']->value['active']){?>checked<?php }?> />
        <label for="active"></label>
      </td>
    </tr>
    <tr>
      <th>
        Header
      </th>
      <td><input name="header" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['header'];?>
" required /></td>
    </tr>
    <tr>
      <th>
        Content
      </th>
      <td><textarea name="content" type="text" required><?php echo $_smarty_tpl->tpl_vars['NEWS']->value['content'];?>
</textarea></td>
    </tr>
  </table>
  <input type="submit" value="Save" class="submit small" />
   </form>
</blockquote><?php }} ?>
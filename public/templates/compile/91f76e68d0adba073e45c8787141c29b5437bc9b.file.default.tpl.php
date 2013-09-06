<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:18:54
         compiled from ".\templates\zelles\account\edit\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31448522933c2807123-99013918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91f76e68d0adba073e45c8787141c29b5437bc9b' => 
    array (
      0 => '.\\templates\\zelles\\account\\edit\\default.tpl',
      1 => 1378451924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31448522933c2807123-99013918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522933c3151927_34241142',
  'variables' => 
  array (
    'GLOBAL' => 1,
    'PATH' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522933c3151927_34241142')) {function content_522933c3151927_34241142($_smarty_tpl) {?>
<b>Account Details</b>
<blockquote>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
      <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
      <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
      <input type="hidden" name="do" value="updateAccount">
      <table>
         <tbody><tr><td>Username: </td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
         <tr><td>User Id: </td><td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
</td></tr>
         <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['website']['api']['disabled']){?><tr><td>API Key: </td><td><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=api&action=getuserstatus&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
</a></td></tr><?php }?>
         <tr><td>E-Mail: </td><td><input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['email'], ENT_QUOTES, 'UTF-8', true);?>
" size="20"></td></tr>
         <tr><td>Payment Address: </td><td><input type="text" name="paymentAddress" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['paymentAddress'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="40"></td></tr>
         <tr><td>Donation %: </td><td><input type="text" name="donatePercent" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['donatePercent'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="4"><font size="1"> [donation amount in percent (example: 0.5)]</font></td></tr>
         <tr><td>Automatic Payout Threshold: </td><td valign="top"><input type="text" name="payoutThreshold" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['payoutThreshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['ap_threshold'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="5" maxlength="5"> <font size="1">[<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['min'];?>
-<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
. Set to '0' for no auto payout]</font></td></tr>
         <tr><td>Anonymous Account <span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='Will hide your username on the website for others. Only admins can still get your user information.'></span>:</td><td>
            <input type="hidden" name="is_anonymous" value="0" />
            <input type="checkbox" name="is_anonymous" value="1" id="is_anonymous" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_anonymous']){?>checked<?php }?> />
            <label for="is_anonymous"></label>
         </td></tr>
         <tr><td>4 digit PIN: </td><td><input type="password" name="authPin" size="4" maxlength="4"><font size="1"> [The 4 digit PIN you chose when registering]</font></td></tr>
         </tbody>
      </table>
      <input type="submit" class="submit long" value="Update Settings">
   </form>
</blockquote>

<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['disable_mp']){?>
   <b>Cash Out</b>
   <blockquote>
      <ul><li><font color="">Please note: a <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 transaction will apply when processing "On-Demand" manual payments</font></li></ul>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
         <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
         <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
         <input type="hidden" name="do" value="cashOut">
         <table>
            <tbody><tr><td>Account Balance: &nbsp;&nbsp;&nbsp;</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
</td></tr>
               <tr><td>Payout to: </td><td><h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'], ENT_QUOTES, 'UTF-8', true);?>
</h6></td></tr>
               <tr><td>4 digit PIN: </td><td><input type="password" name="authPin" size="4" maxlength="4"></td></tr>
            </tbody>
         </table>
         <input type="submit" class="submit mid" value="Cash Out">
      </form>
   </blockquote>
<?php }?>

<b>Change Password</b>
<blockquote>
   <ul><li><font color="">Note: You will be redirected to login on successful completion of a password change</font></li></ul>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post"><input type="hidden" name="act" value="updatePassword">
      <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
      <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
      <input type="hidden" name="do" value="updatePassword">
      <table>
         <tbody><tr><td>Current Password: </td><td><input type="password" name="currentPassword"></td></tr>
         <tr><td>New Password: </td><td><input type="password" name="newPassword"></td></tr>
         <tr><td>New Password Repeat: </td><td><input type="password" name="newPassword2"></td></tr>
         <tr><td>4 digit PIN: </td><td><input type="password" name="authPin" size="4" maxlength="4"></td></tr>
         </tbody>
      </table>
      <input type="submit" class="submit long" value="Change Password">
   </form>
</blockquote><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 01:11:26
         compiled from ".\templates\zelles\global\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2336552292bbe5ff023-78633855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896760559e267069b3e0b8639dde1ffcdd932a4f' => 
    array (
      0 => '.\\templates\\zelles\\global\\navigation.tpl',
      1 => 1378429319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2336552292bbe5ff023-78633855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292bbed0a295_14027214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292bbed0a295_14027214')) {function content_52292bbed0a295_14027214($_smarty_tpl) {?>          <ul id="nav">
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
">Home</a></li>
            <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=edit">My Account</a>
              <ul>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=edit">Edit Account</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers">My Workers</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=transactions">Transactions</a></li>
                <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']){?><li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=notifications">Notifications</a></li><?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations']){?><li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=invitations">Invitations</a></li><?php }?>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=qrcode">QR Codes</a></li>
              </ul>
            </li>
            <?php }?>
            <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1){?>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin">Admin Panel</a>
              <ul>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=monitoring">Monitoring</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=user">User Info</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=wallet">Wallet Info</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=transactions">Transactions</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=settings">Settings</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=news">News</a></li>
              </ul>
            </li>
            <?php }?>
            <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)){?>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool">Statistics</a>
              <ul>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool">Pool Stats</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blocks">Block Stats</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=graphs">Hashrate Graphs</a></li>
              </ul>
            </li>
            <?php }else{ ?>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics">Statistics</a>
              <ul>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics']){?>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool">Pool Stats</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']){?>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blocks">Block Stats</a></li>
            <?php }?>
              </ul>
            <?php }?>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=gettingstarted">Getting Started</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=support">Support</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=pool">About</a>
              <ul>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=pool">This Pool</a></li>
                <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']){?><li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=api">API Reference</a></li><?php }?>
                <li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=donors">Pool Donors</a></li>
              </ul>
            </li>
            <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)==1){?><li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=logout">Logout</a></li><?php }else{ ?><li><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=register">Register</a></li><?php }?>
          </ul>
<?php }} ?>
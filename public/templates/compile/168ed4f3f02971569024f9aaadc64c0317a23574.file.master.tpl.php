<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 22:30:31
         compiled from ".\templates\zelles\master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1934252292bbd96ad16-71962806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '168ed4f3f02971569024f9aaadc64c0317a23574' => 
    array (
      0 => '.\\templates\\zelles\\master.tpl',
      1 => 1378506482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934252292bbd96ad16-71962806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52292bbdf2db02_63177639',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52292bbdf2db02_63177639')) {function content_52292bbdf2db02_63177639($_smarty_tpl) {?><!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
      <title><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['title'];?>
</title>
      <meta http-equiv="X-UA-Compatible" content="IE=7" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="shortcut icon" href="favicon.ico" />
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery-1.9.1.min.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.browser.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.tablesorter.min.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.tablesorter.pager.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.visualize.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.tooltip.visualize.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/custom.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/tools.js"></script>
      <!--[if IE]><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/excanvas.js"></script><![endif]-->
      <style type="text/css" media="all">
         @import url("<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/style.css");
         @import url("<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/jquery.wysiwyg.css");
         @import url("<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/facebox.css");
         @import url("<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/visualize.css");
         @import url("<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/date_input.css");
      </style>
   </head>
<body>
   <table class="zelbody">
      <tr>
         <td valign="top" colspan="3" class="zelheader">

            <?php echo $_smarty_tpl->getSubTemplate ("global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


         </td>
      </tr><tr>
         <td valign="top" class="zelleftmenu">

            <div class="sidebarleft">
               <?php echo $_smarty_tpl->getSubTemplate ("global/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>

         </td>
         <td valign="top" class="zelcontent">

            <div class="spacer">
               <?php echo $_smarty_tpl->getSubTemplate ("global/userinfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


               <?php echo $_smarty_tpl->getSubTemplate ("global/motd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


               <?php if (is_array((($tmp = @$_SESSION['POPUP'])===null||$tmp==='' ? '' : $tmp))){?>
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['popup'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['name'] = 'popup';
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'] = is_array($_loop=$_SESSION['POPUP']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total']);
?>
                     <div class="message <?php echo (($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['TYPE'])===null||$tmp==='' ? "success" : $tmp);?>
"><p><?php echo $_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['CONTENT'];?>
</p></div>
                  <?php endfor; endif; ?>
               <?php }?>
               <?php if (file_exists((dirname($_smarty_tpl->source->filepath)).("/".((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value)))){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?>Missing template for this page<?php }?>
            </div>

         </td>
         <td valign="top" class="zelrightmenu">

            <div class="sidebarright">
               <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)){?>
                  <?php $_smarty_tpl->tpl_vars['payout_system'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
                  <?php echo $_smarty_tpl->getSubTemplate ("global/sidebar_".((string)$_smarty_tpl->tpl_vars['payout_system']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

               <?php }else{ ?>
                  <?php echo $_smarty_tpl->getSubTemplate ("global/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

               <?php }?>
            </div>

         </td>
      </tr>
   </table>

   <div align="center" id="footer">
      <?php echo $_smarty_tpl->getSubTemplate ("global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   </div>

   <div id="debug">
      <?php echo $_smarty_tpl->getSubTemplate ("system/debugger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>

   <div class="zelles-chat">
      <div class="zelles-chat-title" onclick="zellesChatOpen();">
         <div class="zelles-chat-title-content">Hide the chatroom.</div>
      </div>
      <form id="zellesspeaker" onsubmit="return zellesChat();">
         <input type="hidden" name="ajax" value="speaker">
         <table style="width: 100%;">
            <tr>
               <td>
                  <div id="zelleschatroom">
                  </div>
               </td>
            </tr><tr>
               <td><input type="text" name="speaker" id="speaker" style="width: 100%;" autofocus></td>
            </tr>
         </table>
      </form>
   </div>
   <div class="zelles-bar" onclick="zellesChatOpen();">
      <div class="zelles-bar-content">Chat with other miners!</div>
   </div>
</body>
</html><?php }} ?>
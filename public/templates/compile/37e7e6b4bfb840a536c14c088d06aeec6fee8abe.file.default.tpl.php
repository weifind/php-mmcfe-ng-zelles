<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 07:42:52
         compiled from ".\templates\zelles\account\qrcode\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26043522933b17fe6a4-44402073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37e7e6b4bfb840a536c14c088d06aeec6fee8abe' => 
    array (
      0 => '.\\templates\\zelles\\account\\qrcode\\default.tpl',
      1 => 1378453361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26043522933b17fe6a4-44402073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522933b1a63a79_27995894',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522933b1a63a79_27995894')) {function content_522933b1a63a79_27995894($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['website']['api']['disabled']){?>
   <b>API String</b>
   <blockquote>
      <p>This code will allow you to import the full API string into your mobile application.</p>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.qrcode.min.js"></script>
      <script type="text/javascript">
        
        //Wrap it within $(document).ready() to invoke the function after DOM loads.
        $(document).ready(function(){
          $('#qrcodeholder').qrcode({
            text    : "|http<?php if ($_SERVER['HTTPS']=='1'){?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['PHP_SELF'];?>
?page=api|<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
|<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
|",
            render    : "canvas",  // 'canvas' or 'table'. Default value is 'canvas'
            background : "#ffffff",
            foreground : "#000000",
            width : 250,
            height: 250
          });
        });
        
      </script>
      <div id="qrcodeholder"></div>
   </blockquote>
<?php }?>
<?php }} ?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
      <title>{$GLOBAL.website.title}</title>
      <meta http-equiv="X-UA-Compatible" content="IE=7" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="shortcut icon" href="favicon.ico" />
      <script src="{$PATH}/js/jquery-1.9.1.min.js"></script>
      <script src="{$PATH}/js/jquery.browser.js"></script>
      <script src="{$PATH}/js/jquery.tablesorter.min.js"></script>
      <script src="{$PATH}/js/jquery.tablesorter.pager.js"></script>
      <script src="{$PATH}/js/jquery.visualize.js"></script>
      <script src="{$PATH}/js/jquery.tooltip.visualize.js"></script>
      <script src="{$PATH}/js/custom.js"></script>
      <script src="{$PATH}/js/tools.js"></script>
      <!--[if IE]><script type="text/javascript" src="{$PATH}/js/excanvas.js"></script><![endif]-->
      <style type="text/css" media="all">
         @import url("{$PATH}/css/style.css");
         @import url("{$PATH}/css/jquery.wysiwyg.css");
         @import url("{$PATH}/css/facebox.css");
         @import url("{$PATH}/css/visualize.css");
         @import url("{$PATH}/css/date_input.css");
      </style>
   </head>
<body>
   <table class="zelbody">
      <tr>
         <td valign="top" colspan="3" class="zelheader">

            {include file="global/header.tpl"}

         </td>
      </tr><tr>
         <td valign="top" class="zelleftmenu">

            <div class="sidebarleft">
               {include file="global/navigation.tpl"}
            </div>

         </td>
         <td valign="top" class="zelcontent">

            <div class="spacer">
               {include file="global/userinfo.tpl"}

               {include file="global/motd.tpl"}

               {if is_array($smarty.session.POPUP|default)}
                  {section popup $smarty.session.POPUP}
                     <div class="message {$smarty.session.POPUP[popup].TYPE|default:"success"}"><p>{$smarty.session.POPUP[popup].CONTENT}</p></div>
                  {/section}
               {/if}
               {if file_exists($smarty.current_dir|cat:"/$PAGE/$ACTION/$CONTENT")}{include file="$PAGE/$ACTION/$CONTENT"}{else}Missing template for this page{/if}
            </div>

         </td>
         <td valign="top" class="zelrightmenu">

            <div class="sidebarright">
               {if $smarty.session.AUTHENTICATED|default}
                  {assign var=payout_system value=$GLOBAL.config.payout_system}
                  {include file="global/sidebar_$payout_system.tpl"}
               {else}
                  {include file="global/login.tpl"}
               {/if}
            </div>

         </td>
      </tr>
   </table>

   <div align="center" id="footer">
      {include file="global/footer.tpl"}
   </div>

   <div id="debug">
      {nocache}{include file="system/debugger.tpl"}{/nocache}
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
</html>
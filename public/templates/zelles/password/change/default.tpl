<b>Change Password</b>
<blockquote>
   <form action="{$smarty.server.PHP_SELF}" method="post">
      <input type="hidden" name="token" value="{$smarty.request.token|escape}">
      <input type="hidden" name="page" value="{$smarty.request.page|escape}">
      <input type="hidden" name="action" value="{$smarty.request.action|escape}">
      <input type="hidden" name="do" value="resetPassword">
      <table>
        <tr><td>New Password: </td><td><input type="password" name="newPassword"></td></tr>
        <tr><td>New Password Repeat: </td><td><input type="password" name="newPassword2"></td></tr>
      </tbody></table>
      <input type="submit" class="submit long" value="Change Password">
   </form>
</blockquote>
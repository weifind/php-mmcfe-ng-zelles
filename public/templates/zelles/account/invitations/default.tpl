<b>Invitations</b>
<blockquote>
<form action="{$smarty.server.PHP_SELF}" method="POST">
<input type="hidden" name="page" value="{$smarty.request.page}">
<input type="hidden" name="action" value="{$smarty.request.action}">
<input type="hidden" name="do" value="sendInvitation">
<table>
  <tr>
    <td>E-Mail</td>
    <td><input type="text" name="data[email]" value="{$smarty.request.data.email|escape|default:""}" size="30" style="width: 300px;"></td>
  </tr>
  <tr>
    <td>Message</td>
    <td><textarea name="data[message]" style="width: 300px;">{$smarty.request.data.message|escape|default:"Please accept my invitation to this awesome pool."}</textarea></td>
  </tr>
  <tr>
    <td colspan="2" class="center">
      <input type="submit" class="submit small" value="Send">
    </td>
  </tr>
</table>
</form>
</blockquote>

<b>Past Invitations</b>
<blockquote>
    <table width="100%">
      <thead style="font-size:13px;">
        <tr>
          <th>E-Mail</th>
          <th class="center">Sent</th>
          <th class="center">Activated</th>
        </tr>
      </thead>
      <tbody>
{section name=invite loop=$INVITATIONS}
        <tr>
          <td>{$INVITATIONS[invite].email}</td>
          <td class="center">{$INVITATIONS[invite].time|date_format:"%d/%m/%Y %H:%M:%S"}</td>
          <td class="center"><img src="{$PATH}/images/{if $INVITATIONS[invite].is_activated}success{else}error{/if}.gif" /></td>
        </tr>
{/section}
      <tbody>
    </table>
</blockquote>
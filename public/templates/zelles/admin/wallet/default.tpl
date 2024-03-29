<b>Wallet Information</b>
<blockquote>
<table width="350px">
  <tr>
    <th>Wallet Balance</th>
    <td class="right">{$BALANCE|number_format:"8"}</td>
  </tr>
  <tr>
    <th>Locked for users</th>
    <td class="right">{$LOCKED|number_format:"8"}</td>
  </tr>
  <tr>
    <th>Unconfirmed</th>
    <td class="right">{$UNCONFIRMED|number_format:"8"}</td>
  </tr>
  <tr>
    <th>Liquid Assets</th>
    <td class="right">{($BALANCE - $LOCKED)|number_format:"8"}</td>
  </tr>
{if $NEWMINT >= 0}
  <tr>
    <th>PoS New Mint</th>
    <td class="right">{$NEWMINT|number_format:"8"}</td>
  </tr>
{/if}
</table>
</blockquote>
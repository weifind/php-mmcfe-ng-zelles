<b>Last {$BLOCKLIMIT} Blocks Found</b>
  <table width="100%" style="font-size:13px;">
    <thead>
      <tr style="background-color:#B6DAFF;">
        <th class="center">Block</th>
        <th>Finder</th>
        <th class="center">Time</th>
        <th class="right">Actual Shares</th>
      </tr>
    </thead>
    <tbody>
{assign var=rank value=1}
{section block $BLOCKSFOUND}
      <tr class="{cycle values="odd,even"}">
        {if ! $GLOBAL.website.blockexplorer.disabled}
        <td class="center"><a href="{$GLOBAL.website.blockexplorer.url}{$BLOCKSFOUND[block].blockhash}" target="_new">{$BLOCKSFOUND[block].height}</a></td>
        {else}
        <td class="center">{$BLOCKSFOUND[block].height}</td>
        {/if}
        <td>{if $BLOCKSFOUND[block].is_anonymous|default:"0" == 1}anonymous{else}{$BLOCKSFOUND[block].finder|default:"unknown"|escape}{/if}</td>
        <td class="center">{$BLOCKSFOUND[block].time|date_format:"%d/%m %H:%M:%S"}</td>
        <td class="right">{$BLOCKSFOUND[block].shares|number_format}</td>
      </tr>
{/section}
    </tbody>
  </table>
</center>
{if $GLOBAL.config.payout_system != 'pps'}
<ul>
  <li>Note: <font color="orange">Round Earnings are not credited until {$GLOBAL.confirmations} confirms.</font></li>
</ul>
{/if}
